<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>@yield('title')</title>
    @section('css')
    <link rel="stylesheet" href="{{asset('storage/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('storage/css/sidebarManager.css')}}">
    <link rel="stylesheet" href="{{asset('storage/css/homeManager.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    @show
</head>

<body>
    <div class="page-wrapper chiller-theme toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a href="#">Menu</a>
                    <div id="close-sidebar">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <div class="sidebar-header">
{{--                    <div class="user-pic">--}}
{{--                        <img class="img-responsive img-rounded" src="{{asset('/img/user.jpg')}}" alt="User picture">--}}
{{--                    </div>--}}
                    <div class="user-info">
                        <span class="user-name">{{ Auth::user()->username }}
                        </span>
                        <span class="user-role">{{ Auth::user()->role }}</span>
                        <span class="user-status">
                            <i class="fa fa-circle"></i>
                            <span>Online</span>
                        </span>
                    </div>
                </div>
                <!-- sidebar-header  -->
                <form action="/searchItemSl" method="GET">
                    <div class="sidebar-search">
                        <div>
                            <div class="input-group">
                                <input type="text" class="form-control search-menu" placeholder="Search..."
                                    name="search">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- sidebar-search  -->
                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span>General</span>
                        </li>
                        <li>
                            <a href="{{Route('homeManager')}}">
                                <i class="fa fa-tachometer-alt"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fas fa-seedling"></i>
                                <span>Item</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="/tambahProduk">Tambah Produk
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fas fa-buffer"></i>
                                <span>Lihat Kategori</span>
                            </a>

                            <div class="sidebar-submenu">
                                <ul>
                                    @foreach($Category as $Categories)
                                    <li>
                                        <a class="dropdown-item" href="/viewProductSeller/{{$Categories -> id}}">{{$Categories -> category_name}}</a>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>

                        </li>
                        <li>
                            <a href="/changePasswordSeller">
                                <i class="fas fa-key"></i>
                                <span>Change Password</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{Route('logoutseller')}}">
                                <i class="fas fa-power-off"></i>
                                <span>Log Out</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>

        </nav>
        <!-- sidebar-wrapper  -->
        <main class="page-content">
            <div class="container-fluid">
                <div class="header-page">
                    <div class="logo">
                        <h4><i class="fas text-success mr-2"></i>Petanindo </h4>
                    </div>
                    <h3 style="font-family: 'Courier New', Courier, monospace">
                        @section('judulHeader')
                        @show
                    </h3>
                    <div class="tanggal">
                        <p id="datetime"></p>
                    </div>
                </div>
                <hr>

                @yield('content')

                <footer>

                </footer>
            </div>
        </main>
        <!-- page-content" -->

    </div>

    <!-- page-wrapper -->
    @section('js')
    <script src="{{asset('storage/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('storage/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('storage/js/sidebarManager.js')}}"></script>
    <script src="{{asset('storage/js/homeManager.js')}}"></script>
    @show
</body>

</html>
