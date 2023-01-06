<header>
    <!-- 1 - Topbar  -->
    <div class="topbar">
        <div class="container">
         <!-- Left top bar -->
            <div class="left-topbar">
                <a href="#" class="transition-all-03 topbar-item">
                    <span>
                        Viet Nam , VN 
                    </span>
                </a>

                <a href="#" class="transition-all-03 topbar-item">
                    <span>
                        {{ date('Y-m-d H:i:s') }}
                    </span>
                </a>
            </div>

        <!-- Right top bar -->
       
            <div class="right-topbar">
                <a href="aboutus.html" class="transition-all-03 topbar-item">
                    Về chúng tôi
                </a>
                <a href="register.html" class="transition-all-03 topbar-item">
                    Đăng ký
                </a>
                <a href="{{ url('login-page')}}" class="transition-all-03 topbar-item">
                    Đăng nhập
                </a>
            </div>
        </div>
    </div>

    <!-- 2 - Logo + Search  -->
    <div class="wrap-logo">
        <div class="container">
            <div class="row">
                <!-- Logo desktop -->
                <div class="col-md-3 logo">
                    <a href=" "><img src="images/icons/logo-01.png" alt="LOGO"></a>
                </div>
                <div class="col-md-4 banner-header"></div>
                <!-- Search -->
                <div class="col-md-5 search-header">
                    <form action="search" method="get" accept-charset="utf-8" class="s-full">
                        <input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45" type="text" name="search" placeholder="Search">
                        <button class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03" type="submit">
                            <i class="zmdi zmdi-search"></i>
                        </button>
                </form>
                </div>
            </div>
        </div>
    </div>

    <!-- 3 - Menu  -->
    <div class="header-menu">
        <div id="my-menu">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="logo-stick" href=" ">
                        <img src="images/icons/logo-01.png" alt="LOGO">
                    </a>

                    <!-- Nút chỉnh menu chế độ Lập trình mobile với mobile!  -->
                    <button class="navbar-toggler float-right" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Menu chính  -->
                    @include('news.partials_page.menu')
                </nav>
            </div>
        </div>
    </div>
</header>