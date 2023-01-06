@extends('news.layouts.layout')

@section('content')
<!-- Breadcrumb -->
<div class="container">
	<div class="headline bg0 flex-wr-sb-c p-rl-20 p-tb-8">
		<div class="f2-s-1 p-r-30 m-tb-6">
			<a href=" " class="breadcrumb-item f1-s-3 cl9">
				Trang chủ  
			</a>
			<span class="breadcrumb-item f1-s-3 cl9">
				Đăng nhập
			</span>
		</div>
	</div>
</div>

<!-- login -->
<div class="login p-t-20 p-b-30">
	<div class="container">
		<h3 class="title-line animated wow zoomIn" data-wow-delay=".5s"> ĐĂNG NHẬP </h3>
		<p class="est animated wow zoomIn" data-wow-delay=".5s"> 
			Nhập đầy đủ thông tin email và password để đăng nhập. 
		</p>

		<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
			<!-- Form 1  -->
			<form  id="login-magnew" action="{{ route('login-post')}}" method="post" role="form" accept-charset="utf-8">
				{{ csrf_field()}}

				<input type="email" id="email" class="form-control" required=" " placeholder="Email Address"  name="email" value="{{ old('email')}}">
				<p id="result-email"> </p>

				<input id="password" type="password" placeholder="Password" required=" " name="password" disabled>
				<p id="result-pass"> </p>
				
				<div class="forgot">
                    <a href="#">Quên mật khẩu ?</a>
                </div>

				<div class="register-check-box animated wow slideInUp" data-wow-delay=".5s">
					<div class="check">
						<label class="checkbox"><input type="checkbox" name="remember_token"><i> </i> Remember Me </label>
					</div>
				</div>

				<!-- Button Submit  -->
				<input id="btn-submit" type="submit" value="Đăng Nhập" disabled>
			</form>
		</div>
	</div>
</div>

   
<!-- //login -->
@endsection
