<?php
namespace App\Services;
use App\Models\Book;
use function Illuminate\Routing\Controllers\except;
use Yajra\DataTables\Facades\DataTables;

class BookService
{
    public function listBooks()
    {
        $books = Book::query()->select(['id','title','quantity','price'])->orderBy('category_id')->get();
        return $books;
    }

    public function CreateBook(array $bookdata)
    {

        return  Book::create($bookdata);
    }

    public function UpdateBook($id ,array $updated_book){
            return Book::query()->where('id',$id)->update($updated_book);
    }

//    public function DeleteBook($id){
//        Book::query()->where('id',$id)->delete();
//    }




}
