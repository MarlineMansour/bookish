<!DOCTYPE html>
<html>
@include('includes.header')
@section('title','Register')
<body>
<section class="h-100 bg-dark">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card card-registration my-4">
                    <div class="row g-0">
                        <div class="col-xl-5 d-none d-xl-block">
                            <img src="{{asset('assets/pictures/register.webp')}}" class="img-fluid" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                        </div>
                        <div class="col-xl-7">
                            <div class="card-body p-md-5 text-black">
                                <h3 class="mb-5 text-uppercase">Personal Info</h3>

{{--                                <div class="row">--}}
{{--                                    <div class="col-md-6 mb-4">--}}
{{--                                        <div data-mdb-input-init class="form-outline">--}}
{{--                                            <label class="form-label" for="fname">First name</label>--}}
{{--                                            <input type="text" id="fname" class="form-control form-control-lg" />--}}

{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-6 mb-4">--}}
{{--                                        <div data-mdb-input-init class="form-outline">--}}
{{--                                            <label class="form-label" for="Lname">Last name</label>--}}
{{--                                            <input type="text" id="Lname" class="form-control form-control-lg" />--}}

{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <label class="form-label" for="name">Name</label>
                                    <input type="text" id="name" class="form-control form-control-lg" />
                                </div>
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <label class="form-label" for="email">Email Address</label>
                                    <input type="text" id="email" class="form-control form-control-lg" />
                                </div>

                                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                                    <h6 class="mb-0 me-4">Gender: </h6>

                                    <div class="form-check form-check-inline mb-0 me-4">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                                               value="female" />
                                        <label class="form-check-label" for="femaleGender">Female</label>
                                    </div>

                                    <div class="form-check form-check-inline mb-0 me-4">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                                               value="male" />
                                        <label class="form-check-label" for="maleGender">Male</label>
                                    </div>
                                </div>
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <label class="form-label" for="pass">Password</label>
                                    <input type="text" id="pass" class="form-control form-control-lg" />

                                </div>

                                <div data-mdb-input-init class="form-outline mb-4">
                                    <label class="form-label" for="Cpass">Confirm Password</label>
                                    <input type="text" id="Cpass" class="form-control form-control-lg" />

                                </div>
                                <div class="d-flex justify-content-end pt-3">
                                    <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn  btn-lg ms-2" style="background-color: #0b8f96; color: white">Submit</button>
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
</body>
</html>
