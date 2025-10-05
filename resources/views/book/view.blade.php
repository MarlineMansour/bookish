@extends('layouts.master')
@section('tittle','Books')

@section('content')


<div id="books" >
    <div class="row m-3 justify-content-center" >
        @foreach($books as $book)
        <div class="card card-bg-color col-md-2 m-2  align-items-center text-center" data-id="{{$book->category->code}}{{$book->id}}" id="{{$book->id}}"  >
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
                    <button class="pluss border-0 bg-white"  >
                        <i class="fa-solid fa-plus">
                        </i>
                    </button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
@section('script')
    <script src="{{asset('assets/js/book.js')}}"></script>
    <script>
        $('body').on('.pluss','click', function (){
            console.log($(this));
            let Data_id = $(this).parent("div").parent("div").parent("div").attr('data_id');
            let Book_id =Data_id.charAt(1)
            // console.log($(this),Book_id);
            let count_span=$(this).parent().find('.item');
            let Quantity = count_span.html();
            // console.log(Quantity);
            let newQuantity = parseInt(Quantity) + 1;

            $.ajax({
                url: "{{route('checkQuantity')}}",
                data:{
                    _token : '{{csrf_token()}}',
                    book_id : Book_id,
                    quantity:Quantity

                },
{{--                headers:{token:'{{csrf_token()}}'},--}}
                method: "POST",
                success: function ( response )  {
                    console.log(response);
                    if(response.flag){
                        console.log(newQuantity);
                        count_span.html(newQuantity);
                    }else{
                        alert(response.message);
                    }

                }


            });


        });
    </script>
@endsection



