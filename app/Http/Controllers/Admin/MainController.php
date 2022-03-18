<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use App\Models\Book;

class MainController extends Controller
{

    private function apiResponse ($status,$message,$data=null){

        return $response=[
            'status'=> $status,
            'message'=> $message,
            'data'=> $data,
        ];

    }
 
  
    public function books(Request $request)
    {
        $data = $request->all();

        $allbooks = [];
        $filteredBySearch = [];
        $filteredByCategory = [];

        if ($data) {
            if ($request->has('searchPhrase')) {
                $this->validate($request, [
                    'searchPhrase' => 'filled'
                ]);

                $filteredBySearch = Book::where('name', 'LIKE', "%{$data['searchPhrase']}%")
                    ->orWhere('description', 'LIKE', "%{$data['searchPhrase']}%")
                    ->get()->toArray();
            }

            if ($request->has('categoryid')) {
                $this->validate($request, [
                    'categoryid' => 'filled'
                ]);

                $filteredByCategory = Book::where('category_id', $data['categoryid'])->get()->toArray();
            }
        } else {
            $allbooks = Book::all();
        }

        // $filteredPosts = array_merge($filteredBySearch, $filteredByCategory, $allPosts);

        return $this->apiResponse(1, 'success', $allbooks);
    }

    public function singlebook(Request $request)
    {
        $validator=validator()->make($request->all(),['book_id'=>'required|exists:books,id']);
        if($validator->fails())
        {
            return $this->apiResponse(0,$validator->errors()->first());
        }
        $book = Book::find($request->book_id);
        return $this->apiResponse(1, 'success', $book);
    }
    public function getDownload($id)
    {
        
        $book = Book::where('id', $id)->firstOrFail();
        $path = public_path(). '/storage/uploads/zip/'. $book->zip;
        return response()->download($path, $book->original_filename, ['Content-Type' => $book]);
    }


}

