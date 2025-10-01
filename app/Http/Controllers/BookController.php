<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index($category_id)
    {

//        $category = Category::query()->findOrFail($category_id);
        $books = Book::query()->with('category:id,name,code')->where('category_id', $category_id)->get();

//        dd($books);

        return view('book.view', compact('books'));
    }
}
