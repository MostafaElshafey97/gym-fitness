<!DOCTYPE html>
<html lang="en">
<head>
	@include('GymRoom.layouts.head')
</head>

<body>
	<div class="main-wrapper">
	@include('GymRoom.layouts.header')
    @include('GymRoom.layouts.sidebar')
	
	</div>
	<script src="{{ asset('Gym-room/assets/js/jquery-3.5.1.min.js')}}"></script>
	<script src="{{ asset('Gym-room/assets/js/popper.min.js')}}"></script>
	<script src="{{ asset('Gym-room/assets/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('Gym-room/assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{ asset('Gym-room/assets/js/script.js')}}"></script>
</body>

</html>