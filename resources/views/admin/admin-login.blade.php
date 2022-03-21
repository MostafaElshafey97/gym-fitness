<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Gym</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
	<link rel="stylesheet" href="{{ asset('forntend/assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ asset('forntend/assets/plugins/fontawesome/css/all.min.css')}}">
	<link rel="stylesheet" href="{{ asset('forntend/assets/plugins/fontawesome/css/fontawesome.min.css')}}">
	<link rel="stylesheet" href="{{ asset('forntend/assets/css/feathericon.min.css')}}">
	<link rel="stylesheet" href="{{ asset('forntend/assets/plugins/morris/morris.css')}}">
	<link rel="stylesheet" href="{{ asset('forntend/assets/css/style.css')}}"> 
    <link rel="stylesheet" type="text/css" href="{{ asset('forntend/assets/css/bootstrap-datetimepicker.min.css')}}"></head>

<body>
<div class="container">
<div class="main-wrapper login-body">
		<div class="login-wrapper">
			<div class="container">
				<div class="loginbox">
					<div class="login-left"><img class="img-fluid" src="{{ asset('admin/images/logo_admin.png')}}" alt="Logo">  </div>
					<div class="login-right">
						<div class="login-right-wrap">
							<h1>Login</h1>
							<p class="account-subtitle">Access to Admin</p>
                            <form method="POST" action="/ad-login">
							{{csrf_field()}}

@if (count($errors) > 0)
@foreach($errors->all() as $error)
<p class="alert alert-danger">{{ $error}}</p>
@endforeach
@endif

@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>
{{ $message }}
</p>
</div>
@endif
@if ($message = Session::get('warning'))
<div class="alert alert-warning">
<p>
{{ $message }}
</p>
</div>
@endif
								<div class="form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

@error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror </div>
								<div class="form-group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

@error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror</div>
<div class="form-group">
									<button class="btn btn-primary btn-block" type="submit">Login</button>
								</div>
							</form>
							
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    
<script src="{{ asset('forntend/assets/js/jquery-3.5.1.min.js')}}"></script>
	<script src="{{ asset('forntend/assets/js/popper.min.js')}}"></script>
	<script src="{{ asset('forntend/assets/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('forntend/assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{ asset('forntend/assets/js/script.js')}}"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>

<script src="{{ asset('forntend/assets/js/bootstrap-datetimepicker.min.js')}}"></script>

<script src="{{ asset('forntend/assets/js/script.js')}}"></script>