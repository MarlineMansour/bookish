<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Services\BookService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;
use function Illuminate\Process\successful;
use function Illuminate\Validation\message;

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
       $categories = Category::query()->select(['id','name'])->get();
     return view('Admin.books.create',compact('categories'));
    }

    public function store(Request $request){
        $request->validate([
            'fileToUpload' => 'image|mimes:jpg,jpeg,png,webp,gif|max:2048',
        ]);
        $books = $request->except('_token');

        $safeName = null;
        if ($request->file('fileToUpload') != null){
            $file = $request->file('fileToUpload');
            $originalName = $file->getClientOriginalName();
            $safeName=htmlspecialchars(basename($originalName));
            $filePath = $file->move('assets/pictures',$safeName);
        }

        $this->bookService->CreateBook( [
            'title'=>$books['title'],
            'description'=>$books['description'],
            'quantity'=>$books['quantity'],
            'price'=>$books['price'],
            'category_id'=>$books['category_id'],
            'image'=>$safeName
        ]);
        return redirect()->route('ListBooks');
    }

    public function edit(Request $request){
       $book= Book::query()->with('category')->where('id',$request->id)->select(['id','title','description','quantity','price','category_id'])->first();
//       $book_id = $book->id;
//       $book_title =$book->title;
//       $book_desc=$book->description;
//       $book_quantity=$book->quantity;
//       $book_price=$book->price;
//       $book_category_name =$book->category->name;
        $categories = Category::query()->select(['id','name'])->get();
        return view('Admin.books.update', compact('book', 'categories'));
    }

    public function update(Request $request){
        $updated_book = $request->except('_token');
        $this->bookService->UpdateBook($updated_book['id'],$updated_book);
        return redirect()->route('ListBooks');
    }

    public function delete(Request $request){
      Book::query()->where('id',$request->id)->delete();
        return [
            'success'=>"yes",
            'message'=>' Book is deleted successfully'
        ];

    }

    public function getBooks(Request $request)
    {
        if ($request->ajax()) {

            $books = Book::with('category')->select(['id', 'title', 'quantity', 'price','category_id']);
//            dd($books);
            return DataTables::of($books)
                ->addIndexColumn()
                ->editColumn('title', function ($books) {
                    return $books->title;
                })
                ->editColumn('quantity', function ($books) {
                    return $books->quantity;
                })
                ->editColumn('price', function ($books) {
                    return $books->price;
                })
                ->editColumn('category_id', function ($books) {
                    return $books->category->name ?? '-';
                })
                ->editColumn('actions', function ($books) {
                    return  '<button data-bs-toggle="modal" data-bs-target="#Modal2"   data_id="' .$books->id .'" class="update">
                            <i class="fa-solid fa-pen"></i>
                        </button>
                        <button class="delete" data_id="'.$books->id.'">
                            <i class="fa-solid fa-trash"></i>
                        </button>';
                })
                ->rawColumns(['actions'])
                ->make(true);
        }
    }
}
