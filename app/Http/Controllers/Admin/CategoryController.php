<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
  
    public function index()
    {
        $categories=Category::all();
        return view('admin.categories.index',compact('categories'));
            
        
    }

  
    public function create()
    {
        return view('admin.categories.create');

    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:categories,name'
        ]);
        Category::create($request->all());
        return redirect()->route('categories.index');
    }

    

    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        
        $categories = Category::find($id);
        
        return view('admin.categories.edit', compact('categories'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'filled|unique:categories,name,' . $id,
        ]);
        Category::find($id)->update(['name' => $request->name]);

        

        return redirect()->route('categories.index');
    }

 
    public function destroy($id)
    {
        Category::find($id)->delete();
        return back();
    }
}