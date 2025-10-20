<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;

    }

    public function index()
    {
       $data['categories']= $this->categoryService->ShowCategories();

        return view('Admin.categories.index',compact('data'));
    }

    public function create()
    {
        return view('Admin.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'fileToUpload' => 'image|mimes:jpg,jpeg,png,webp,gif|max:2048',
        ]);

        $category_data=$request->toArray();
        $file = $request->file('fileToUpload');
//        dd($request->all() , $file);
        $originalName = $file->getClientOriginalName();
        $safeName=htmlspecialchars(basename($originalName));
        $filePath = $file->move('assets/pictures',$safeName);

        $this->categoryService->CreateCategory([
            'name' =>$category_data['name'],
            'code' =>$category_data['code'],
            'image'=> $safeName,
            ]);
        return redirect()->route('ListCategories');
    }

    public function edit(Request $request)
    {
        $old_category= Category::query()->where('id',$request->id)->first();
        $category_id = $old_category->id;
        $category_name=$old_category->name;
        $category_code=$old_category->code;
//        $category_image =$old_category->image;
////       dd($category_image);
        return view('Admin.categories.update',compact('category_id','category_name','category_code'));
    }

   public function update(Request $request)
   {
       $request->validate([
           'fileToUpload' => 'image|mimes:jpg,jpeg,png,webp,gif|max:2048',
       ]);

       $category_data=$request->except('_token');
       $file = $request->file('fileToUpload');
       $originalName = $file->getClientOriginalName();
       $safeName=htmlspecialchars(basename($originalName));
       $filePath = $file->move('assets/pictures',$safeName);
       $category_data->image = $safeName;
       $this->categoryService->updateCategory($category_data['id'],$category_data);
       return redirect()->route('ListCategories');
   }

   public function delete(Request $request)
   {
       return $this->categoryService->deleteCategory($request->id);
   }




}
