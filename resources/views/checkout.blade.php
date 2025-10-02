@extends('layouts.master')

@section('title','Checkout')




@section('content')
<section class="h-100 h-custom" >
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card">
                    <div class="card-body p-4">

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

                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex flex-row align-items-center">
                                                <div>
                                                    <img
                                                        src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img2.webp"
                                                        class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                                                </div>
                                                <div class="ms-3">
                                                    <h5>Samsung galaxy Note 10 </h5>
                                                    <p class="small mb-0">256GB, Navy Blue</p>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row align-items-center">
                                                <div style="width: 50px;">
                                                    <h5 class="fw-normal mb-0">2</h5>
                                                </div>
                                                <div style="width: 80px;">
                                                    <h5 class="mb-0">$900</h5>
                                                </div>
                                                <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex flex-row align-items-center">
                                                <div>
                                                    <img
                                                        src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img3.webp"
                                                        class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                                                </div>
                                                <div class="ms-3">
                                                    <h5>Canon EOS M50</h5>
                                                    <p class="small mb-0">Onyx Black</p>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row align-items-center">
                                                <div style="width: 50px;">
                                                    <h5 class="fw-normal mb-0">1</h5>
                                                </div>
                                                <div style="width: 80px;">
                                                    <h5 class="mb-0">$1199</h5>
                                                </div>
                                                <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-3 mb-lg-0">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex flex-row align-items-center">
                                                <div>
                                                    <img
                                                        src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img4.webp"
                                                        class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                                                </div>
                                                <div class="ms-3">
                                                    <h5>MacBook Pro</h5>
                                                    <p class="small mb-0">1TB, Graphite</p>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row align-items-center">
                                                <div style="width: 50px;">
                                                    <h5 class="fw-normal mb-0">1</h5>
                                                </div>
                                                <div style="width: 80px;">
                                                    <h5 class="mb-0">$1799</h5>
                                                </div>
                                                <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                                            </div>
                                        </div>
                                    </div>
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

                                        <form class="mt-4">
                                            <div data-mdb-input-init class="form-outline form-white mb-4">
                                                <label class="form-label" for="address">Address</label>
                                                <input type="text" id="address" class="form-control form-control-lg" siez="17"
                                                />
                                            </div>

                                            <div class="row mb-4">
                                                <div class="col-md-6">
                                                    <div data-mdb-input-init class="form-outline form-white">
                                                        <label class="form-label" for="city">City</label>
                                                        <input type="text" id="city" class="form-control form-control-lg"
                                                               size="7" id="exp" minlength="7" maxlength="7" />

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div data-mdb-input-init class="form-outline form-white">
                                                        <label class="form-label" for="zone">Zone</label>
                                                        <input type="text" id="zone" class="form-control form-control-lg"
                                                               size="1" minlength="3" maxlength="3" />

                                                    </div>
                                                </div>
                                            </div>
                                            <div data-mdb-input-init class="form-outline form-white mb-4">
                                                <label class="form-label" for="phone">Phone</label>
                                                <input type="text" id="phone" class="form-control form-control-lg" placeholder="ex:01234567892"
                                                />
                                            </div>
                                            <p>Choose your payment method</p>

                                            <label for="cash">
                                                <input type="radio" id="cash" name="payment">Cash
                                            </label><br>

                                            <label for="Credit">
                                                <input type="radio" id="Credit" name="payment" >Credit
                                            </label>
                                            <br>
                                            <div class="d-none">
                                                <div data-mdb-input-init class="form-outline form-white mb-4">
                                                    <label class="form-label" for="cardNumber">Card Number</label>
                                                    <input type="text" id="cardNumber" class="form-control form-control-lg"
                                                           placeholder="1234 5678 9012 3457" minlength="19" maxlength="19" />

                                                </div>
                                            </div>
                                        </form>

                                        <hr class="my-4">

                                        <div class="d-flex justify-content-between mb-4">
                                            <p class="mb-2">Total</p>
                                            <p class="mb-2">$4818.00</p>
                                        </div>

                                        <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-block btn-lg"  style="background-color: #0b8f96; color: white;">
                                            <div class="d-flex justify-content-between">
                                                <span>Place Order  <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
                                            </div>
                                        </button>

                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


