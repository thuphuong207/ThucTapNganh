@extends('news.layouts.layout')

@section('content')
<!-- Breadcrumb -->
<div class="container">
	<div class="headline bg0 flex-wr-sb-c p-rl-20 p-tb-8">
		<div class="f2-s-1 p-r-30 m-tb-6">
			<a href=" " class="breadcrumb-item f1-s-3 cl9">
				Trang chủ  
			</a>
			<a href=" " class="breadcrumb-item f1-s-3 cl9">
				Đăng ký
			</a>
			<span class="breadcrumb-item f1-s-3 cl9">
				Đăng nhập
			</span>
		</div>
	</div>
</div>
 <!-- register -->
 <div class="register p-t-20 p-b-30">
    <div class="container">
        <h3 class="title-line animated wow zoomIn" data-wow-delay=".5s"> ĐĂNG KÝ </h3>
        <p class="est animated wow zoomIn" data-wow-delay=".5s"> Nhập đầy đủ thông tin ( thông tin cá nhân , thông tin đăng nhập ) và nhấn nút Đăng Ký bên dưới !</p>
        <div class="login-form-grids">
            <h5 class="animated wow slideInUp" data-wow-delay=".5s"> Thông tin cá nhân </h5>
            <form class="animated wow slideInUp" data-wow-delay=".5s" action="register" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="text" placeholder="Họ..." required=" " >
                <input type="text" placeholder="Tên..." required=" " >
            </form action="register" method="post">
            <div class="register-check-box animated wow slideInUp" data-wow-delay=".5s">
                <div class="check">
                    <label class="checkbox"><input type="checkbox" name="checkbox"><i> </i> Đăng ký nhận tin tức! </label>
                </div>
            </div>
            <h6 class="animated wow slideInUp" data-wow-delay=".5s"> Thông tin đăng nhập </h6>
            <form class="animated wow slideInUp" data-wow-delay=".5s" action="register" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="email" placeholder="Email" required=" " >
                <input type="password" placeholder="Mật khẩu " required=" " >
                <input type="password" placeholder="Xác nhận mật khẩu " required=" " >
                <div class="register-check-box">
                    <div class="check">
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>Tôi chấp nhận các điều khoản và điều kiện !</label>
                    </div>
                </div>
                <input type="submit" value="Đăng ký">
            </form>
        </div>
        <div class="register-home animated wow slideInUp" data-wow-delay=".5s">
            <a href="index.html">Quay về trang chủ </a>
        </div>
    </div>
</div>
<!-- //register -->



@endsection