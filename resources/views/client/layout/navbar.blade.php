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
                        <li class="btn-post">
                            <a href="{{URL::asset('/post')}}">
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
