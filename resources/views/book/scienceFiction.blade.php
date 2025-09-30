<!DOCTYPE html>
<html lang="en">
<head>
    <title>Science Fiction Books</title>
    <link rel="stylesheet" href="css/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/css/all.css" />
    <link rel="stylesheet" href="css/css/all.min.css" />
    <link rel="stylesheet" href="style.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <script src="resources/js/book.js"> </script>
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
    <a class="btn btn-outline-dark d-grid"  href="checkout.php" role="button">
        proceed to checkout
    </a>
</div>
<div id="books" >
    <div class="row m-3 justify-content-center" >
        @foreach($ScienceFictionBooks as $ScienceFictionBook)
        <div class="card card-bg-color col-md-2 m-2  align-items-center text-center" data-id="{{$ScienceFictionBook->category->code}}{{$ScienceFictionBook->id}}" >
            <img src="{{$ScienceFictionBook->image}}" class="card-img-top" width="40vh">
            <div class="card-body">
                <h4>{{$ScienceFictionBook->title}}</h4>
                <p>{{$ScienceFictionBook->description}}</p>
                <span class="price">
                        <span class="woocommerce-Price-amount amount">
                            <bdi>
                                <span class="woocommerce-Price-currencySymbol">EGP</span>
                             {{$ScienceFictionBook->price}}
                            </bdi>
                        </span>
                    </span>
                <button class=" my-2 bookBtn">Add to cart</button>
                <div class="item-counts d-none">
                    <a class="minuss" >
                        <i class="fa-solid fa-minus"></i>
                    </a>
                    <span class="book-counts item">0</span>
                    <a class="pluss" >
                        <i class="fa-solid fa-plus">
                        </i>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
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
