@extends('admin.layouts.app')
<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">

<div class="content container-fluid">
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<h3 class="page-title mt-5">Add Exercice</h3> </div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
                    <form method="POST" action="{{ route('exercice_store') }}"method="POST"enctype="multipart/form-data">
{{ csrf_field() }}
							<div class="row formtype">
								<div class="col-md-4">
									<div class="form-group">
										<label>Exercice Name</label>
										<input class="form-control" name="name_exercice" type="text" value="BKG-0001"> </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Muscle group</label>
										<select class="form-control" name="DRR" id="DRR">
											<option>Select</option>
											@foreach(App\Muscle_group::all() as $group)


<option value="{{$group->id_muscle_group  }}">{{$group->name_muscle_group}}</option>
@endforeach 
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Muscle</label>
										
<select name="regions" id="regions" class="form-control"required="">
                                             <option>--Muscle--</option>
                                           </select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>level</label>
										<select class="form-control" id="level" name="level">
											<option>Select</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
										</select>
									</div>
								</div>
                                <div class="col-md-4">
									<div class="form-group">
										<label>Exercice Type </label>
										<div class="cal-icon">
                                        <select name="regions" id="regions" class="form-control"required="">
                                             <option>--Exercice Type--</option>
                                             <option>Strength</option>
                                             <option>Endurance</option>
                                             <option>Balance</option>
                                             <option>Flexibility</option>
                                           </select> </div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>gym room </label>
										<div class="cal-icon">
											<input type="text"  name="id_gym_room "class="form-control "disabled> </div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>time exercice</label>
										<div class="time-icon">
											<input type="text" class="form-control" id="time_exercice" name="time_exercice"> </div>
									</div>
								</div>
								
								
								<div class="col-md-4">
									<div class="form-group">
										<label>Muscule  Upload</label>
										<div class="custom-file mb-3">
											<input type="file" class="custom-file-input" id="image" name="image">
											<label class="custom-file-label" for="customFile">Choose file</label>
										</div>
									</div>
								</div>
                                <div class="col-md-4">
									<div class="form-group">
										<label>device  Upload</label>
										<div class="custom-file mb-3">
											<input type="file" class="custom-file-input" id="device" name="device">
											<label class="custom-file-label" for="customFile">Choose file</label>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>DEscription</label>
										<textarea name="Contenue" rows="5" cols="40" class="form-control tinymce-editor"></textarea>
									</div>
								</div>
							</div>
                            <div class="form-group mb-0">
									<button class="btn btn-primary btn-block" type="submit">Create</button>
								</div>
                          
						</form>
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
            <script type="text/javascript">


$('#DRR').on('change',function(e){


  console.log(e);
var cat_id =e.target.value;

$.get('/musclelist?cat_id=' + cat_id,function(data){
                                                  console.log(data);
$('#regions').empty();
 $('#regions').append('<option value=""></option>');
$.each(data,function(index,subcatObj){
 console.log(subcatObj);
$('#regions').append('<option value="'+subcatObj+'">'+subcatObj+'</option>');


})

})


});

</script>
