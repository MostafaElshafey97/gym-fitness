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
	<div class="main-wrapper login-body">
		<div class="login-wrapper">
			<div class="container">
				<div class="loginbox">
					<div class="login-left"> <img class="img-fluid" src="{{ asset('forntend/assets/img/20-22.png')}}" alt="Logo"> </div>
					<div class="login-right">
						<div class="login-right-wrap">
							<h1 class="mb-3">Register</h1>
							 <form method="POST" action="{{ route('register') }}">
                        @csrf
								<div class="form-group">
									<input class="form-control" name="name" type="text" placeholder="Name"> 
									  @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror</div>
									
								<div class="form-group">
									<input class="form-control" type="text" name="email"placeholder="Email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror									</div>
                                <div class="form-group">
									<input class="form-control" name="phone_number"type="text" placeholder="Phone Number">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror	
                            								</div>
                                                        
<div class="form-group">
<label>Gender</label>
<select class="form-control" id="sel2" name="sellist1">
<option>Male</option>
<option>Female</option>
</select>

</div>
<div class="form-group">
<label>Date of birth</label>
<div class="cal-icon">
<input type="date"name="date_of_birth" class="form-control datetimepicker">
</div>
</div>
								<div class="form-group">
									<input class="form-control" type="text"namme="password" placeholder="Password"> 
									  @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror</div>
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Confirm Password"> </div>
								<div class="form-group mb-0">
									<button class="btn btn-primary btn-block" type="submit">Register</button>
								</div>
							</form>
							<div class="login-or"> <span class="or-line"></span> <span class="span-or">or</span> </div>
					
							<div class="social-login"> <span>Register with</span> 
							<a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="{{ url('/redirect') }}" class="google"><i class="fab fa-google"></i></a> </div>
							<div class="text-center dont-have">Already have an account? <a href="login.html">Login</a> </div>
							<div class="text-center dont-have">Register your Gym-Company? <a href="{{route('register_company')}}">Get Listed</a> </div>
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
<script>
		$(function () {
			$('#datetimepicker3').datetimepicker({
				format: 'LT'

			});
		});
        
	</script>
</body>

</html>