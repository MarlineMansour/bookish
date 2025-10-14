<?php
namespace App\Services;
use App\Models\Book;



class BookService
{
    public function listBooks()
    {
        $books = Book::query()->select(['id','title','quantity','price','category_id'])->orderBy('category_id')->get();
        return $books;
    }

    public function CreateBook(array $bookdata)
    {
        return  Book::create([
            'title'=>$bookdata['title'],
            'description'=>$bookdata['description'],
            'quantity'=>$bookdata['quantity'],
            'price'=>$bookdata['price']

        ]);
    }

public function updateBook($id ,array $updateddata){
        return Book::query()->where('id',$id)->update($updateddata);
}


//    public function deleteCategory($id)
//    {
//        $Category=Category::query()->where('id',$id)->with('BookCategory')->first();
////           dd(count($Category->BookCategory));
//        if(count($Category->BookCategory)>0){
//            return [
//                'success'=>'no',
//                'message'=>'sorry, can not delete this category ,delete its books first'
//            ];
//        }
//        else{
//            $Category ->delete();
//            return [
//                'success'=>'yes',
//                'message'=>'deleted successfully'
//            ];
////               return alert("deleted successfully");
//        }
//
//    }



}
