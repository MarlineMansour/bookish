<?php
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function CreateCategory(Request $request){
        Category::create([
            'name'=> $request->name,
            'image'=>$request->image,
            'code'=>$request->code
        ]);

    }
}
