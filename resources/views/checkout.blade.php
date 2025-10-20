@extends('layouts.master')

@section('title','Checkout')




@section('content')
<section class="h-100 h-custom" >
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card">
                    <div class="card-body p-4">
                        <form class="mt-4" action="{{route('order')}}" method="post">
                            @csrf
                        <div class="row">


                            <div class="col-lg-7">
                                <h5 class="mb-3"><a href="{{route('home')}}" class="text-body"><i
                                            class="fas fa-long-arrow-alt-left me-2"></i>Continue shopping</a></h5>
                                <hr>

                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <div>
                                        <p class="mb-1">Checkout</p>

                                    </div>

                                </div>
{{--                                 @foreach($cart_items as $cart_item)--}}
                                <div id="shopping_items">

{{--                                @endforeach--}}
                                </div>

                            </div>

                            <div class="col-lg-5">
                                <div class="card rounded-3">
                                    <div class="card-body" style="background-color: rgb(247, 238, 238);">
                                        <div class="d-flex justify-content-between align-items-center mb-4">
                                            <h5 class="mb-0">Shipping Info </h5>
                                            <img src="{{asset('assets/pictures/reader.jpg')}}"
                                                 class="img-fluid " style="width: 50px;" alt="Avatar">
                                        </div>

                                            <div data-mdb-input-init class="form-outline form-white mb-4">
                                                <label class="form-label" for="address">Address</label>
                                                <input type="text" id="address" class="form-control form-control-lg" siez="17" required
                                             name="address"   />
                                            </div>

                                            <div class="row mb-4">
                                                <div class="col-md-6">
                                                    <div data-mdb-input-init class="form-outline form-white">
                                                        <label class="form-label" for="city">City</label>
                                                        <input type="text" id="city" class="form-control form-control-lg" required
                                                            name="city"/>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div data-mdb-input-init class="form-outline form-white">
                                                        <label class="form-label" for="zone">Zone</label>
                                                        <input type="text" id="zone" class="form-control form-control-lg" required
                                                               size="1" minlength="3" maxlength="3" name="zone"/>

                                                    </div>
                                                </div>
                                            </div>
{{--                                        <select name="city" id="">--}}
{{--                                            <option value="1">Cairo</option>--}}
{{--                                            <option value="2">x</option>--}}
{{--                                            <option value="3">y</option>--}}
{{--                                        </select>--}}

                                            <div data-mdb-input-init class="form-outline form-white mb-4">
                                                <label class="form-label" for="phone">Phone</label>
                                                <input type="text" id="phone" class="form-control form-control-lg" placeholder="ex:01234567892"
                                                       required name="phone"/>
                                            </div>
                                            <p>Choose your payment method</p>

                                            <label for="cash">
                                                <input type="radio" id="cash" name="payment_method" value="0">Cash
                                            </label><br>

                                            <label for="Credit">
                                                <input type="radio" id="Credit" name="payment_method" value="1">Credit
                                            </label>
                                            <br>
                                            <div class="d-none">
                                                <div data-mdb-input-init class="form-outline form-white mb-4">
                                                    <label class="form-label" for="cardNumber">Card Number</label>
                                                    <input name="cardNumber" type="text" id="cardNumber" class="form-control form-control-lg"
                                                           placeholder="1234 5678 9012 3457" minlength="19" maxlength="19"/>

                                                </div>
                                                <div class="row mb-4">
                                                    <div class="col-md-6">
                                                        <div data-mdb-input-init class="form-outline form-white">
                                                            <label class="form-label" for="secret">Secret Number</label>
                                                            <input name="secret" type="text" id="secret" class="form-control form-control-lg"
                                                                   size="3" minlength="3" maxlength="3" />

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div data-mdb-input-init class="form-outline form-white">
                                                            <label class="form-label" for="exp">Expiration date</label>
                                                            <input name="exp" type="date" id="exp" class="form-control form-control-lg"
                                                                   size="1" />

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <button  type="submit"  class="btn btn-block btn-lg my-2"  style="background-color: #0b8f96; color:white; ">
                                            place order
                                        </button>

                                    </div>
                                </div>

                            </div>

                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('script')
    <script src="{{asset('assets/js/checkout.js')}}"></script>
@endsection
