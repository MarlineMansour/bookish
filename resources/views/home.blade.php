<!DOCTYPE html>
<html>
<head>
    <title>Bookish World</title>
    <link rel="stylesheet" href="css/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/css/all.css" />
    <link rel="stylesheet" href="css/css/all.min.css" />
    <link rel="stylesheet" href="style.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
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
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutUs.php">About</a>
                </li>
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
    <div class="d-flex align-items-end gap-4">
        <a id="add" class="cart" href="#">
            <i class="fa-solid fa-cart-shopping"></i>
            <span class="badge total-items-in-cart">0</span>
        </a>
        <a id="login" href="login.php">
            <i class="fa-regular fa-user"></i>
        </a>
    </div>
</nav>

<div class="container-fluid p-0">
    <h2 class="slogan"><i>Unlock the magic of Reading </i></h2>
</div>


<div class="row my-5">
    @foreach($categories as $category)
    <div class="col-md-3 card border-0 text-center">
        <a href="">
            <img src="{{$category->image}}" class="rounded-circle" width="100" />
        </a>
        <div class="card-body">
            <h5>{{$category->name}}</h5>
        </div>
    </div>
    @endforeach
</div>

<footer class="row justify-content-md-center p-4">
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
            <li><a href="#">Home</a></li>
            <li><a href="aboutUs.php">About</a></li>
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
