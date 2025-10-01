@extends('layouts.master')
@section('tittle'){{'Books'}}@endsection

@section('content')

<div id="cart-show" class="card d-none float-end">
    <div  class="d-flex justify-content-between align-items-center">
        <h3 class="my-0">Cart</h3>
        <button type="button" id="close" class="btn-close" aria-label="Close"></button>
    </div>

    <div  id="cart-top">
        <span class="cart-count">0</span>
        <span>items</span>
    </div>
    <div>
        <div class="d-flex justify-content-between align-items-center">
            <h6>Total</h6>
            <span>0.00</span>
        </div>
    </div>
    <a class="btn btn-outline-dark d-grid"  href="checkout.php" role="button">
        proceed to checkout
    </a>


</div>
<div id="books" >
    <div class="row m-3 justify-content-center" >
        @foreach($books as $book)
        <div class="card card-bg-color col-md-2 m-2  align-items-center text-center" data-id="{{$book->category->code}}{{$book->id}}" >
            <img src="{{$book->image}}" class="card-img-top" width="40vh">
            <div class="card-body">
                <h4>{{$book->title}}</h4>
                <p>{{$book->description}}</p>
                <span class="price">
                        <span class="woocommerce-Price-amount amount">
                            <bdi>
                                <span class="woocommerce-Price-currencySymbol">EGP</span>
                             {{$book->price}}
                            </bdi>
                        </span>
                    </span>
                <button class=" my-2 bookBtn">Add to cart</button>
                <div class="item-counts d-none">
                    <a class="minuss" >
                        <i class="fa-solid fa-minus"></i>
                    </a>
                    <span class="book-counts item">0</span>
                    <a class="pluss" >
                        <i class="fa-solid fa-plus">
                        </i>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

