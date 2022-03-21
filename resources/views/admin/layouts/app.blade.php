<!DOCTYPE html>
<html lang="en">
<head>
	@include('admin.layouts.head')
</head>

<body>
	<div class="main-wrapper">
	@include('admin.layouts.header')
    @include('admin.layouts.sidebar')
	
	</div>
	<script src="{{ asset('forntend/assets/js/jquery-3.5.1.min.js')}}"></script>
	<script src="{{ asset('forntend/assets/js/popper.min.js')}}"></script>
	<script src="{{ asset('forntend/assets/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('forntend/assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{ asset('forntend/assets/js/script.js')}}"></script>
</body>

</html>