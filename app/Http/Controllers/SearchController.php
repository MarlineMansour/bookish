<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request){
        $search_term = $request->input("search_words");
        $search_items = Book::query()->where('title','like','%'.$search_term .'%')->get();
        return view('search',compact('search_items'));
    }
}
