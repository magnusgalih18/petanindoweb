<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('storage/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>@yield('title')</title>

    <style>
        html{
            scroll-behavior: smooth;
        }
        .jumbotron {
            background-image: url(img/megan-markham-zebbovVjMvM-unsplash.jpg);
            background-size: cover;
            height: 650px;
            text-align: center;
        }

        .jumbotron .display-4 {
            margin-top: 200px;
            color: white;
        }

        .jumbotron p {
            color: white;
            font-size: 25px;
        }

        .jumbotron hr {
            /* border-color: #F05F40; */
            border-color: cadetblue;
            width: 70px;
            border-width: 4px;
        }

        .jumbotron .btn {
            background-color: cadetblue;
            border: none;
            border-radius: 25px;
            padding-right: 25px;
            padding-left: 25px;
            margin-top: 40px;
        }

        .carousel-item {
            height: 650px;
        }

        /* .carousel-item img {
            margin-top: -60px;
        } */

        .carousel-item .display-4 {
            margin-top: -400px;
            color: white;
        }

        .carousel-item hr {
            /* border-color: #F05F40; */
            border-color: cadetblue;
            width: 70px;
            border-width: 4px;
        }

        .carousel-item .btn {
            background-color: cadetblue;
            border: none;
            border-radius: 25px;
            padding-right: 25px;
            padding-left: 25px;
            margin-top: 40px;
        }

        .list-item{
            list-style: none;
            margin: 3px 5px;
        }
        .img-hover-zoom {
            height: 230px;
        }
        .img-hover-zoom img {
            transition: transform .5s ease;
        }
        .img-hover-zoom:hover img {
            transform: scale(1.5);
        }
        .auth {
            margin-top: 33px;
            width: 30rem;
            padding-bottom: 30px;
            box-shadow: 0 3px 20px rgba(0,0,0,0.3);
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background: #23ab95">
    <div class="container">
        <a class="navbar-brand text-white" href="{{url('/')}}">Petanindo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mr-4">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach($Category as $Categories)
                            <a class="dropdown-item" href="/viewProduct/{{$Categories -> id}}">{{$Categories -> category_name}}</a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-white" href="/tentangKami">Tentang Kami <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" method="GET" action="/searchItem">
                @csrf
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
                <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
            </form>
            <ul class="navbar-nav ml-2">
                @guest
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="/login">Login <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="/register">Register <span class="sr-only">(current)</span></a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white"  id="drProfile" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{strtoupper(Auth::user()->username)}}</a>
                        <div class="dropdown-menu" aria-labelledby="drProfile">
                            <a class="dropdown-item" href="/cart">MyCart <span class="badge badge-info"></span> </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/transactionHistory">Riwayat Transaksi</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/changePassword">Change Password</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{Route('logout')}}">Logout</a>
                        </div>
                    </li>
                @endguest
            </ul>
            <div id="date" class="text-white ml-2"></div>
            <script>
                var d = new Date();
                var n = d.toDateString();
                document.getElementById("date").innerHTML = n;
            </script>
        </div>
    </div>
</nav>
<div style="min-height: 90vh">
    @yield('container')
    @yield('content')
</div>

<footer class="text-white" style="background: #23ab95">
    <div class="footer-copyright text-center py-3" style="margin-top: 10px;">
        <h6 class="d-inline">© 2020 Copyright |</h6>
        <h6 class="d-inline">Petanindo</h6>
    </div>
</footer>
<script src="{{asset('storage/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('storage/js/bootstrap.min.js')}}"></script>
</body>
</html>
