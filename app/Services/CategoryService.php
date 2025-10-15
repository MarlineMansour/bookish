<?php
namespace App\Services;
use App\Models\Category;



class CategoryService
{
    public function ShowCategories()
    {
        $categories = Category::paginate(2);

        return $categories;
    }
    public function CreateCategory(array $categorydata)
    {
      return  Category::create($categorydata);
    }

    public function updateCategory($id ,array $updateddata)
    {
      $newData=  Category::query()->where('id',$id)->update($updateddata);

        return $newData;

    }
     public function deleteCategory($id)
     {
         $Category=Category::query()->where('id',$id)->with('BookCategory')->first();
//           dd(count($Category->BookCategory));
           if(count($Category->BookCategory)>0){
               return [
                   'success'=>'no',
                   'message'=>'sorry, can not delete this category ,delete its books first'
               ];
           }
           else{
               $Category ->delete();
               return [
                   'success'=>'yes',
                   'message'=>'deleted successfully'
               ];
//               return alert("deleted successfully");
           }

     }



}
