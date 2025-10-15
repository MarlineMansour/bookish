

<nav class="navbar navbar-expand-lg flex-row" style="background-color: rgb(247, 238, 238);">
    <div class="links d-flex">
        <div class="logo">
            <img id="logo" src="{{asset('assets/pictures/bookLogo.jpg')}}" width="50px" height="50px" />
        </div>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav my-2 my-lg-0 navbar-nav-scroll align-items-start" style="margin-right:22.5%; --bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">About</a>
                </li>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle drp_btn" data-bs-target=".dropdown-menu"  data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </button>
                    <ul class="dropdown-menu">
                        @foreach($categories as $category)
                        <li><a class="dropdown-item" href="{{route('books_by_category',$category->id)}}">{{$category->name}}</a></li>
{{--                        <li><a class="dropdown-item" href="{{route('books_by_category',2)}}">History</a></li>--}}
{{--                        <li><a class="dropdown-item" href="{{route('books_by_category',3)}}">Science Fiction</a></li>--}}
{{--                        <li><a class="dropdown-item" href="{{route('books_by_category',4)}}">Cooking</a></li>--}}
                        @endforeach
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
            <span class="badge total-items-in-cart cart-count">0</span>
        </a>
        <a id="login" href="{{route('ShowLogin')}}">
            <i class="fa-regular fa-user"></i>
        </a>
    </div>

    @role('admin')
    <div>
        <a class="btn btn-outline-dark" id="create_category"  href="{{route('ListCategories')}}">Category</a>
        <a class="btn btn-outline-dark" id="add_book" href="{{route('ListBooks')}}">Book</a>
    </div>
    @endrole
</nav>
<script>
    $(document).ready(function(){
        $('.drp_btn').click(function(){
            $('.dropdown-menu').toggle();
        });

    });
</script>
<style>
 .nav-link{
     color: black;
 }
    .dropdown-item:hover{
        background-color: rgb(247, 238, 238);
        color: #0b8f96;
    }

</style>
