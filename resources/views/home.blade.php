
@extends('layouts.master')
@section('tittle','Bookish world')

@section('content')

<div class="container-fluid p-0">
    <h2 class="slogan"><i>Unlock the magic of Reading </i></h2>
</div>


<div class="row my-5">
    @foreach($categories as $category)
    <div class="col-md-3 card border-0 text-center">
        <a href="{{route('books_by_category',$category->id)}}">
            <img src="assets/pictures/{{$category->image}}" class="rounded-circle" width="100" />
        </a>
        <div class="card-body">
            <h5>{{$category->name}}</h5>
        </div>
    </div>
    @endforeach
</div>

@endsection



