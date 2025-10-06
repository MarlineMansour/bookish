<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BookController extends Controller
{
    public function index($category_id)
    {

//        $category = Category::query()->findOrFail($category_id);
        $books = Book::query()->with('category:id,name,code')->where('category_id', $category_id)->get();

//        dd($books);

        return view('book.view', compact('books'));
    }
public function CheckQuantity(Request $request){
//        dd($request);
    $book_id = $request->input('book_id');
    $data = Book::query()->where('id', $book_id)->first();
    $quantity = $request->input('quantity');
         if($quantity>=$data->quantity){
             return   response()->json(['flag' => false]);
         }
         else{
           return  response()->json(['flag' => true]);
         }


}

}
