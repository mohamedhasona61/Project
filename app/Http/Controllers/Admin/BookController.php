<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Book;
use App\Models\Category;

class BookController extends Controller
{
  
    public function index()
    {
        $books=Book::all();
        return view('admin.books.index',compact('books'));
    }

 

    public function create()
    {
        $categories =Category::all();
        return view('admin.books.create', compact('categories'));
    }

 
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'name' => 'required|unique:books,name',
            'image' => 'required|mimes:png,jpg,jpeg',
            'description' => 'required',
            'category_id' => 'required'
        ]);
      
        $image = $request->file('image')->store('public/posts');
        Book::create([
            'name' => $request->name,
            'image' => $image,
            'description' => $request->description,
            'category_id' => $request->category_id
        ]);
        
        

      
        return redirect()->route('books.index');
    }


    public function show($id)
    {
        
    }


    public function edit($id)
    {
        $book = Book::find($id);
        $categories = Category::all();
        return view('admin.books.edit', compact('book', 'categories'));
    }

 
    public function update(Request $request, $id)
    {
        
        $book = Book::find($id);

        $this->validate($request, [
            'name' => 'filled',
            'description' => 'filled',
            'category_id' => 'filled'
        ]);

        $book->update([
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category_id
        ]);

        if ($request->hasFile('image')) {
            $this->validate($request, [
                'image' => 'filled|mimes:png,jpg,jpeg',
            ]);
            Storage::delete($book->image);
            $image = $request->file('image')->store('public/posts');
            $book->update([
                'image' => $image
            ]);
        }

       
        return redirect()->route('books.index');
    }

  
    public function destroy($id)
    {
        $book = Book::find($id);
        if (Storage::delete($book->image)) {
            $book->delete();
        }
        
        return back();
    }
}
