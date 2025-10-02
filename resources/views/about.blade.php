
@extends('layouts.master')

@section('title','About Us')
@section('style')
<style>
    .card:hover {
        box-shadow: 8px 8px 8px  #c0d8d9;
        transition:1s;
    }
</style>
@endsection

@section('content')
<div>
    <div class="row p-4  mb-5" >
        <div class="col-md-6 text-center" style="align-content:center;">
            <h2>About Us</h2>
            <h3>Bookish World is an egyption online bookstore specializing in selling original books from all over the world.</h3>
        </div>
        <div class="col-md-6">
            <img src="{{asset('assets/pictures/book-about.jpg')}}"  style="border-radius:30px;">
        </div>
    </div>
    <div >
        <div class="container-fluid text-center mb-2">
            <h2>Bookish World Provides</h2>
        </div>
    </div>
    <div class="row p-2 ">
        <div class="col-md-4 card border-0 align-items-center text-center">
            <img src="{{asset('assets/pictures/e-book.png')}}" width="50px">
            <div class="card-body">
                <h3>E-books</h3>
                <p> we provide all books in an e-book version which help people to easily read their favourite books everywhere </p>
            </div>
        </div>
        <div class="col-md-4 card border-0 align-items-center text-center" >
            <img src="{{asset('assets/pictures/bookService.jpg')}}" width="50px">
            <div class="card-body">
                <h3>Books</h3>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste vero, nisi ab provident eveniet amet. </p>
            </div>
        </div>
        <div class="col-md-4 card  border-0 align-items-center text-center">
            <img src="{{asset('assets/pictures/createBook.png')}}" width="50px">
            <div class="card-body">
                <h3>Create your book</h3>
                <p> we help you to create your own book, puplish your book </p>
            </div>
        </div>
    </div>
</div>
@endsection
