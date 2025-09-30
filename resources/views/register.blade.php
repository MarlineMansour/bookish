<!DOCTYPE html>
<html lang="en">
<head>

    <title>Register</title>
    <link rel="stylesheet" href="css/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/css/all.css">
    <link rel="stylesheet" href="css/css/all.min.css">
    <link rel="stylesheet" href="resources/css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
          integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />

</head>
<body>
<section class="h-100 bg-dark">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card card-registration my-4">
                    <div class="row g-0">
                        <div class="col-xl-5 d-none d-xl-block">
                            <img src="https://images.pexels.com/photos/2553425/pexels-photo-2553425.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                 alt="Sample photo" class="img-fluid"
                                 style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                        </div>
                        <div class="col-xl-7">
                            <div class="card-body p-md-5 text-black">
                                <h3 class="mb-5 text-uppercase">Personal Info</h3>

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div data-mdb-input-init class="form-outline">
                                            <label class="form-label" for="fname">First name</label>
                                            <input type="text" id="fname" class="form-control form-control-lg" />

                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div data-mdb-input-init class="form-outline">
                                            <label class="form-label" for="Lname">Last name</label>
                                            <input type="text" id="Lname" class="form-control form-control-lg" />

                                        </div>
                                    </div>
                                </div>
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <label class="form-label" for="email">Email Address</label>
                                    <input type="text" id="email" class="form-control form-control-lg" />
                                </div>

                                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                                    <h6 class="mb-0 me-4">Gender: </h6>

                                    <div class="form-check form-check-inline mb-0 me-4">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                                               value="option1" />
                                        <label class="form-check-label" for="femaleGender">Female</label>
                                    </div>

                                    <div class="form-check form-check-inline mb-0 me-4">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                                               value="option2" />
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
</body>
