@extends('news.layouts.single_layout')
@section('content')
<!-- Breadcrumb -->
    <div class="container">
        <div class="headline bg0 flex-wr-sb-c p-rl-20 p-tb-8">
            <div class="f2-s-1 p-r-30 m-tb-6">
                <a href=" " class="breadcrumb-item f1-s-3 cl9">
                    Trang chủ  
                </a>

                <span class="breadcrumb-item f1-s-3 cl9">
                    Về chúng tôi
                </span>
            </div>
        </div>
    </div>

    <!-- Page heading -->
    <div class="container p-t-4 p-b-35">
        <h2 class="f1-l-1 cl2">
            Về chúng tôi
        </h2>
    </div>

    <!-- Content -->
    <section class="bg0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12 p-b-30">
                    <div class="p-r-10 p-r-0-sr991">
                        <p class="f1-s-11 cl6 p-b-25">
                             MAGNEWS - Trang tin tức công nghệ , xoay quanh những chủ đề về công nghệ , lập trình , sự kiện , thủ thuật ... giúp nâng cao hiểu biết và cập nhật thông tin công nghệ cho người dùng một cách nhanh chóng và tiện lợi nhất .
                        </p>
                        <p class="f1-s-11 cl6 p-b-25">
                            Công ty cổ phần MAGNEWS . <br>
                            Trang thông tin điện tử. <br>
                            Chịu trách nhiệm nội dung: Lê Thị Thu Phương <br>
                            ĐT: +84-243-5586999; <br>
                            Email: lienhe@tinmoi.vn <br>
                            Địa chỉ trụ sở: Số 2 Nguyễn Đình Chiểu, Vĩnh Thọ, Nha Trang, Khánh Hòa <br>
                            Địa chỉ giao dịch: P101 giảng đường G6 , số 2 Nguyễn Đình Chiểu, Vĩnh Thọ, Nha Trang, Khánh Hòa <br>
                            Liên hệ quảng cáo: 0867815609 - Email: maithi@gmail.com <br>
                        </p>  
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('news.partials_page.footer_post')

@endsection