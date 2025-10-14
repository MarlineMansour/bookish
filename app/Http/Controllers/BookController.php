<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Services\BookService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BookController extends Controller
{
    protected $bookService;

    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;

    }
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

    public function ShowBooks(){
      $books = $this->bookService->listBooks();
       return view('Admin.books.index',compact('books'));
    }

    public function create(){
     return view('Admin.books.create');
    }
    public function store(Request $request){
        $books = $request->toArray();
        $this->bookService->CreateBook( $books);
        return redirect()->route('create_book');
    }
    public function edit($id){
        return
    }
    public function update(Request $request){
        $updated_book = $request->except('_token');
        $this->bookService->updateBook($updated_book['id'],$updated_book);
    }
}
