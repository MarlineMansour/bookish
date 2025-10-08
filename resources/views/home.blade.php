
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
@section('script')
    <script>
        let cart_items = JSON.parse(sessionStorage.getItem('cart_items')) || [];
        function addElementsToCart( cartItem , unique_id , cover , title , description , price , counts)
        {
            cartItem.innerHTML = `
                                     <div class="row g-0">
                                        <div class="col-md-4 new" data-id=${unique_id}>
                                        <img src=${cover} class="img-fluid rounded-start" >
                                        </div>
                                           <div class="col-md-8">
                                             <div class="card-body">
                                             <h4>${title}</h4>
                                             <p class="card-text">${description}</p>
                                             <span><small class="text-muted">${price}</small></span>
                                             <div style="border: solid #0b8f96; background-color:white; width:50%; text-align: center;">
                                                <a class="minuss" style ="color:black;" >
                                                  <i class="fa-solid fa-minus"></i>
                                                </a>
                                                <span class="book-item-counts item">${counts}</span>
                                                <a class="pluss"style ="color:black;">
                                                  <i class="fa-solid fa-plus"></i>
                                                </a>
                                              </div>
                                            </div>
                                        </div>
                                       </div>`;

            cartItem.classList.add("card","mb-3");
            document.getElementById('cart-top').appendChild(cartItem);
        }

        $(document).ready(function(){
            $('#add').click(function(){
                $('#cart-show').removeClass('d-none');
                $('#cart-show').addClass('col-3');
            });

            $('#close').click(function(){
                $('#cart-show').addClass("d-none");
            });
            var cart_count ;
            if(!sessionStorage.getItem('cart-count'))
            {
                sessionStorage.setItem('cart-count',0);
            }
            cart_count = sessionStorage.getItem('cart-count');
            $('.cart-count').html(cart_count);

            // $('.pluss').click(function (){
            // localStorage.setItem('cart-count',$('.cart-count').html());
            //   // 'cart-count' = $('.cart-count').html();
            // });
            // cart-count increses when we click add to cart
            // $('.bookBtn').click(function () {
            //     sessionStorage.setItem('cart-count',$('.cart-count').html())
            // });
            // $('.minuss').click(function () {
            //     localStorage.setItem('cart-count',$('.cart-count').html())
            // });

            cart_items.forEach( element =>  {
                const cartItem = document.createElement('div');
                addElementsToCart(cartItem , element.id ,element.cover, element.title,element.description , element.price,element.counts)

                });


            });
    </script>

@endsection


