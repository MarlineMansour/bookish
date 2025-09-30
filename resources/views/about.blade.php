<!DOCTYPE html>
<html lang="en">
<head>
    <title>About Us</title>
    <link rel="stylesheet" href="css/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/css/all.css">
    <link rel="stylesheet" href="css/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
          integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .card:hover {
            box-shadow: 8px 8px 8px  #c0d8d9;
            transition:1s;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg  flex-row" style="background-color: rgb(247, 238, 238);">
    <div class="links d-flex">
        <div class="logo">
            <img id="logo" src="pictures/bookLogo.jpg" width="50px" height="50px" />
        </div>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav my-2 my-lg-0 navbar-nav-scroll align-items-start" style="margin-right:22.5%; --bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link " href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
            <input class="form-control me-2"  type="search" placeholder="Search" style="width:20rem;" aria-label="Search"/>
            <button class="btn btn-outline-dark" class="search" type="submit">Search</button>
        </form>
    </div>
    <div class="d-flex align-items-end gap-3">
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
<div>
    <div class="row p-4  mb-5" >
        <div class="col-md-6 text-center" style="align-content:center;">
            <h2>About Us</h2>
            <h3>Bookish World is an egyption online bookstore specializing in selling original books from all over the world.</h3>
        </div>
        <div class="col-md-6">
            <img src="pictures/book-about.jpg"  style="border-radius:30px;">
        </div>
    </div>
    <div >
        <div class="container-fluid text-center mb-2">
            <h2>Bookish World Provides</h2>
        </div>
    </div>
    <div class="row p-2 ">
        <div class="col-md-4 card border-0 align-items-center text-center">
            <img src="pictures/e-book.png" width="50px">
            <div class="card-body">
                <h3>E-books</h3>
                <p> we provide all books in an e-book version which help people to easily read their favourite books everywhere </p>
            </div>
        </div>
        <div class="col-md-4 card border-0 align-items-center text-center" >
            <img src="pictures/bookService.jpg" width="50px">
            <div class="card-body">
                <h3>Books</h3>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste vero, nisi ab provident eveniet amet. </p>
            </div>
        </div>
        <div class="col-md-4 card  border-0 align-items-center text-center">
            <img src="pictures/createBook.png" width="50px">
            <div class="card-body">
                <h3>Create your book</h3>
                <p> we help you to create your own book, puplish your book </p>
            </div>
        </div>
    </div>
</div>

<footer class="row justify-content-md-center mt-3 p-4">
    <div></div>
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
            <li><a href="#">About</a></li>
        </ul>
    </div>
    <div class="col-md-3 text-center">
        <p>Follow us</p>
        <a id="f" href="#">
            <i class="fa-brands fa-facebook"></i>
        </a>
        <a id="i" href="#">
            <i class="fa-brands fa-instagram"></i>
        </a>
    </div>
</footer>
</body>
</html>
