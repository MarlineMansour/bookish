<!DOCTYPE html>
<html lang="en">

<head>

    <title>Checkout</title>
    <link rel="stylesheet" href="css/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/css/all.css">
    <link rel="stylesheet" href="css/css/all.min.css">
    <link rel="stylesheet" href="resources/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">

    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


</head>

<body>
<nav class="navbar navbar-expand-lg flex-row" style="background-color: rgb(247, 238, 238);">
    <div class="links d-flex">
        <div class="logo">
            <img id="logo" src="pictures/bookLogo.jpg" width="50px" height="50px" />
        </div>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav my-2 my-lg-0 navbar-nav-scroll align-items-start" style="margin-right:22.5%; --bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutUs.php">About</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="mysteryBooks.php">Mystery</a></li>
                        <li><a class="dropdown-item" href="historyBooks.php">History</a></li>
                        <li><a class="dropdown-item" href="scienceFictionBooks.php">Science Fiction</a></li>
                        <li><a class="dropdown-item" href="cookingBooks.php">Cooking</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="searchDiv">
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" style="width:20rem;" aria-label="Search" />
            <button class="btn btn-outline-dak" class="search" type="submit">Search</button>
        </form>
    </div>
    <div class="d-flex align-items-end gap-4">
        <a id="add" class="cart"  href="#cart-show">
            <i class="fa-solid fa-cart-shopping"></i>
            <span class="badge total-items-in-cart cart-count">0</span>
        </a>
        <a id="login" href="login.php">
            <i class="fa-regular fa-user"></i>
        </a>
    </div>
</nav>
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

    <a class="btn btn-outline-dark d-grid"  href="#" role="button">
        proceed to checkout
    </a>

</div>
<section class="h-100 h-custom" >
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card">
                    <div class="card-body p-4">

                        <div class="row">

                            <div class="col-lg-7">
                                <h5 class="mb-3"><a href="home.php" class="text-body"><i
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
                                                        src="{{$image}}"
                                                        class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                                                </div>
                                                <div class="ms-3">
                                                    <h5>{{$title}}</h5>
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
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp"
                                                 class="img-fluid rounded-3" style="width: 45px;" alt="Avatar">
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
                                            <div>
                                                <div data-mdb-input-init class="form-outline form-white mb-4">
                                                    <label class="form-label" for="cardNumber">Card Number</label>
                                                    <input type="text" id="cardNumber" class="form-control form-control-lg" siez="17"
                                                           placeholder="1234 5678 9012 3457" minlength="19" maxlength="19" />

                                                </div>
                                            </div>
                                        </form>

                                        <hr class="my-4">

                                        <div class="d-flex justify-content-between">
                                            <p class="mb-2">Subtotal</p>
                                            <p class="mb-2">$4798.00</p>
                                        </div>

                                        <div class="d-flex justify-content-between">
                                            <p class="mb-2">Shipping</p>
                                            <p class="mb-2">$20.00</p>
                                        </div>

                                        <div class="d-flex justify-content-between mb-4">
                                            <p class="mb-2">Total(Incl. taxes)</p>
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
<footer class="row justify-content-md-center mt-3 p-4">
    <div class="col-md-5 ml-2">
        <img src="pictures/bookLogo.jpg" width="100px" />
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, quam!
        </p>
        <p>01002397747</p>
        <p>bookStore@gmail.com</p>
        <p>www.bookStore.com</p>
    </div>

    <div class="col-md-4">
        <ul id="ul2">
            <li>
                <p>Usefull Links</p>
            </li>
            <li><a href="home.php">Home</a></li>
            <li><a href="about.php">About</a></li>
        </ul>
    </div>
    <div class="col-md-3 text-center">
        <p>Follow us</p>
        <a id="f" >
            <i class="fa-brands fa-facebook"></i>
        </a>
        <a id="i" >
            <i class="fa-brands fa-instagram"></i>
        </a>
    </div>
</footer>
</body>
</html>
