<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function mysterBooks(){
        $user = User::first();
//        $book = DB::table('books')->first();
        $book=Book::first();
      dd($book->category_id);

        user::create([
            'name'=>'karie',
            'email'=>'hi.com',
            'gender'=>0
        ]);
        $name = 'marline';
        $id=5;
        $k_arr['name']=$user->name;
        $k_arr['id']=5;
//        return view('home.home',['name'=>$name , 'id'=>$id]);
//        return view('home.home',compact('name','id'));
        return view('home.home',$k_arr);

    }
}
