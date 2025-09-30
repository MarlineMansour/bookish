<!DOCTYPE html>
<html lang="en">
<head>

    <title>Login</title>
    <link rel="stylesheet" href="css/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/css/all.css">
    <link rel="stylesheet" href="css/css/all.min.css">
    <link rel="stylesheet" href="style.css" />
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
<section class="vh-100 my-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 text-black">

                <div class="px-5 ms-xl-4">
                    <img id="logo" src="pictures/bookLogo.jpg" width="90" />
                    <span class="h1 fw-bold mb-0 "style="color: #0b8f96;">Bookish World</span>
                </div>

                <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

                    <form style="width: 23rem;">

                        <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="email">Email address</label>
                            <input type="email" id="email" class="form-control form-control-lg" />

                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="pass">Password</label>
                            <input type="password" id="pass" class="form-control form-control-lg"/>

                        </div>

                        <div class="pt-1 mb-4">
                            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-lg " style="color:black; background-color: #78e0e3;" type="button">Login</button>
                        </div>

                        <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#">Forgot password?</a></p>
                        <p>Don't have an account? <a href="register.php" class="link-info" style="color:#0b8f96;">Register here</a></p>

                    </form>

                </div>

            </div>
            <div class="col-sm-6 px-0  d-sm-block ">
                <img src="pictures/login-pic.jpg"
                     alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
            </div>
        </div>
    </div>
</section>
{{--<footer class="row justify-content-md-center p-4 mt-5">--}}
{{--    <div></div>--}}
{{--    <div class="col-md-5 ml-2">--}}
{{--        <img src="pictures/bookLogo.jpg" width="100px" />--}}
{{--        <p>--}}
{{--            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, quam!--}}
{{--        </p>--}}
{{--        <p>01002397747</p>--}}
{{--        <p>bookStore@gmail.com</p>--}}
{{--        <p>www.bookStore.com</p>--}}
{{--    </div>--}}

{{--    <div class="col-md-4">--}}
{{--        <ul id="ul2">--}}
{{--            <li>--}}
{{--                <p>Usefull Links</p>--}}
{{--            </li>--}}
{{--            <li><a href="home.php">Home</a></li>--}}
{{--            <li><a href="aboutUs.php">About</a></li>--}}
{{--           --}}
{{--        </ul>--}}
{{--    </div>--}}
{{--    <div class="col-md-3 text-center">--}}
{{--        <p>Follow us</p>--}}
{{--        <a id="f" href="#">--}}
{{--            <i class="fa-brands fa-facebook"></i>--}}
{{--        </a>--}}
{{--        <a id="i" href="#">--}}
{{--            <i class="fa-brands fa-instagram"></i>--}}
{{--        </a>--}}
{{--    </div>--}}
{{--</footer>--}}
</body>
</html>
