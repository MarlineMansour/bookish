@include('includes.header')
@section('title','Order')
<body>
<section class="h-100 bg-dark">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100 ">
            <div class="col">
                <div class="card my-4">
                    <div class="row g-0">

                        <div>
                            <div class="card-body p-md-5 text-black">
                                <div class="text-center">
                                    <i class="fa-solid fa-circle-check" style="color: green; font-size: xx-large; "></i>
                                    <h3 class="mb-5 text-uppercase ">Order placed successfully</h3>

                                </div>

                                <div class="form-outline mb-4">
                                    <label>Order ID</label>
                                    <p>{{$order_id}}</p>
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="email">Total Items</label>
                                    <p>{{$order_total_quantity}}</p>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="pass">Total Price</label>
                                    <p>{{$order_total_price}}</p>

                                </div>

                                <div class="d-flex justify-content-center pt-3">
                                    <a href="{{route('home')}}" type="button" id="ok" class="btn btn-lg ms-2 "
                                       style="background-color: #0b8f96; color: white">OK</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('includes.script')
<script>
    $(document).ready(function () {
        $('#ok').on('click', function () {
            sessionStorage.removeItem('cart_items');
            sessionStorage.setItem('cart-count', 0);
        });
    });
</script>

</body>
