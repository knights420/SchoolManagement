@extends('layouts.login_app')

@section('content')
<div class="container-fluid page-body-wrapper full-page-wrapper">
	<div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
		<div class="row w-100">
			<div class="col-lg-4 mx-auto">
				<div class="auto-form-wrapper">
					<form method="POST" action="{{ route('login') }}">
						@csrf
						<div class="form-group">
							<label class="label">Email</label>
							<div class="input-group @error('email') is-invalid @enderror">
								<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
								<div class="input-group-append">
									<span class="input-group-text">
										<i class="mdi mdi-check-circle-outline"></i>
									</span>
								</div>
							</div>
							@error('email')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
						<div class="form-group">
							<label class="label">Password</label>
							<div class="input-group @error('password') is-invalid @enderror">
								<input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
								<div class="input-group-append">
									<span class="input-group-text">
										<i class="mdi mdi-check-circle-outline"></i>
									</span>
								</div>
							</div>
							@error('password')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
						<div class="form-group">
							<button class="btn btn-primary submit-btn btn-block">Login</button>
						</div>
						<div class="form-group d-flex justify-content-between">
							<div class="form-check form-check-flat mt-0">
								<label class="form-check-label">Keep me signed in 
									<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
								</label>
							</div>
							@if (Route::has('password.request'))
								<a class="text-small forgot-password text-black" href="{{ route('password.request') }}">
									Forgot Password
								</a>
							@endif
						</div>
						<div class="text-block text-center my-3">
							<span class="text-small font-weight-semibold">Not a member ?</span>
							<a class="text-black text-small" href="{{ route('register') }}">Create new account</a>
						</div>
					</form>
				</div>
				<ul class="auth-footer">
					<li>
						<a href="#">Conditions</a>
					</li>
					<li>
						<a href="#">Help</a>
					</li>
					<li>
						<a href="#">Terms</a>
					</li>
				</ul>
				<p class="footer-text text-center">© 2020 TeaCoders. All rights reserved.</p>
				<p class="footer-text text-center text-center"><a href="https://teacoders.in" target="_blank">Teacoders</a> Laravel Developement Company</p>
			</div>
		</div>
	</div>
	<!-- content-wrapper ends -->
</div>
<!-- page-body-wrapper ends -->
@endsection