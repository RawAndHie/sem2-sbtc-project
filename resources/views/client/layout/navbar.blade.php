<style>
     .dropbtn {
        display: inline-block;
        color: black;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    li.dropdown {
        display: inline-block;
    }
    .dropdown-content {
          display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    .dropdown-content a:hover {background-color: #f1f1f1;}

    .dropdown:hover .dropdown-content {
        display: block;
    }
</style>
<header>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-1 col-md-3 col-6">
                <div class="logo-header">
                    <a href="/">
                        <img src="{{asset('images/logo.png')}}" alt="" height="140" style="max-width: 130%"  >
                    </a>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 d-none d-md-block">
                <div class="search-header">
                    <form action="">
                        <input type="text" placeholder="Nhập từ khóa cần tìm kiếm...">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-6 text-right">
                <div class="btn-action">
                    <ul>
                        @if(Session::has('username'))
                            <li class="dropdown">
                                <div class="">
                                    <a href="" class="dropbtn">{{Session::get('username')}} <i class="fa fa-caret-down"></i></a>
                                </div>
                                <div class="dropdown-content">
                                    <a href="/personal">Trang cá nhân</a>
                                    <a href="/account-settings">Bảo mật</a>
                                    <a href="/logout">Đăng xuất</a>
                                </div>
                            </li>
                        @else
                            <li class="btn-login">
                                <a href="/login">
                                    Đăng nhập
                                </a>
                            </li>
                            <li class="btn-login">
                                <a href="/register">
                                    Đăng ký
                                </a>
                            </li>
                        @endif
                        <li class="btn-post">
                            <a href="{{URL::asset('/post/upload')}}">
                                <i class="fas fa-plus-square"></i> Đăng tin
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-main">
        <div class="container">
            <div class="container">
                <ul>
                    <li class="">
                        <a class="nav-link" href="/"><i class="fas fa-home"></i>Trang chủ</a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="#"><i class="fas fa-desktop"></i> Điện tử, công nghệ</a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="#"><i class="fas fa-chair"></i> Gia dụng, nội thất</a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="#"><i class="fas fa-book"></i> Sách,tiểu thuyết</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
