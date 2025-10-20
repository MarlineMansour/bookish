
@extends('layouts.master')
@section('title','Books')
@section('content')
    <div id="search_items" >
        @if($search_items->count()>0)
    <div class="row m-3 justify-content-center" >
        @foreach($search_items as $search_item)
            <div class="card card-bg-color col-md-2 m-2  align-items-center text-center" data-id="{{$search_item->id}}"   >
                <img src="{{asset('assets/pictures/'.$search_item->image)}}" class="card-img-top" width="40vh">
                <div class="card-body">
                    <h4>{{$search_item->title}}</h4>
                    <p>{{$search_item->description}}</p>
                    <span class="price">
                        <span class="woocommerce-Price-amount amount">
                            <bdi>
                                {{$search_item->price}}
                                <span class="woocommerce-Price-currencySymbol">EGP</span>
                            </bdi>
                        </span>
                    </span>
                    <button class=" my-2 bookBtn">Add to cart</button>
                    <div class="item-counts d-none">
                        <button class="minuss border-0 bg-white" >
                            <i class="fa-solid fa-minus"></i>
                        </button>
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
    @else
        <p>No Books available</p>
        @endif
        </div>
    @endsection
@section('script')
    <script src="{{asset('assets/js/book.js')}}"></script>
    <script>
        $('body').on('click','.pluss', function (){
            console.log($(this));
            let clicked = $(this);

            // let dataElement = clicked.closest('[data-id]');

            let  dataElement="";
            let Book_id ="";
            let otherElement="";
            if(clicked.prop('tagName') =='BUTTON'){
                dataElement = clicked.closest('[data-id]');
                Book_id = dataElement.attr('data-id');
                otherElement = $('[data-id='+Book_id+']').not(dataElement).parent().find('.item');

                // console.log(clicked.prop('tagName'));
            }else{
                // console.log(clicked.prop('tagName'));
                dataElement= clicked.parent().parent().parent().prev();
                Book_id = dataElement.attr('data-id');
                otherElement = $('[data-id='+Book_id+']').not(dataElement).find('.item');
            }

            let count_span=clicked.prev();
            let Quantity = count_span.html();
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
                        otherElement.html(newQuantity);
                        let y= $(".cart-count").html();
                        let z=parseInt(y);
                        $(".cart-count").html( z+1);
                        sessionStorage.setItem('cart-count',$('.cart-count').html());
                        updateCountsInSessionStorage(Book_id,newQuantity);
                    }else{
                        alert('No more books available');
                    }

                }


            });


        });
    </script>
@endsection
