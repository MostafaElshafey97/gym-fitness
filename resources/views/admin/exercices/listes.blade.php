@extends('admin.layouts.app')
<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<div class="mt-5">
								<h4 class="card-title float-left mt-2">Exercices</h4> 
								<a href="{{route('create_exercice')}}" class="btn btn-primary float-right veiwbutton">Add Exercices</a> </div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="card card-table">
							<div class="card-body booking_card">
								<div class="table-responsive">
									<table class="datatable table table-stripped table table-hover table-center mb-0">
										<thead>
											<tr>
												<th> ID</th>
												<th>name_exercice</th>
												<th>level</th>
												<th>device</th>
												<th>muscle_group</th>
												<th>name_muscle</th>
												<th>image</th>
												<th>id_gym_room </th>
												<th>time_exercice</th>
												
												<th class="text-right">Actions</th>
											</tr>
										</thead>
										<tbody>
                                            @foreach($exercices as $customer)
											<tr>
												<td>{{$customer->id}}</td>
												<td>
													<h2 class="table-avatar">
                                                   
                                                    <a href="profile.html">{{$customer->name_exercice}} <span>#0001</span></a>
                                                    </h2>
                                                </td>
												<td>{{$customer->level}}</td>
												<td> <img class="" src="{{ asset('storage/exercices/hamstring.png')}}"
                                                        alt="User Image"></td>
												<td>{{$customer->type_exercice}}</td>
												<td> {{$customer->muscle_id}}
													</td>
												<td><img class="" src="{{ asset('/storage/muscles/muscles/'.$customer->image) }}
												" 
                                                        alt="User Image"></td>
												<td>??????</td>
												<td>{{$customer->time_exercice}}</a></td>
												
											
												<td>
													<div class="actions">@if($customer->is_activated == NULL ) 
                                                    <a href="#" class="btn btn-sm bg-success-light mr-2">Inactive</a> 
                                                        @else 
                                                        <a href="#" class="btn btn-sm bg-success-light mr-2">Activate</a> 
                                                        @endif
                                                    </div>
												</td>
												<td class="text-right">
													<div class="dropdown dropdown-action"> <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
														<div class="dropdown-menu dropdown-menu-right">  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a> </div>
													</div>
												</td>
											</tr>
                                            @endforeach
										
											
											
											
										
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="delete_asset" class="modal fade delete-modal" role="dialog">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-body text-center"> <img src="assets/img/sent.png" alt="" width="50" height="46">
							<h3 class="delete_class">Are you sure want to delete this Asset?</h3>
							<div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
								<button type="submit" class="btn btn-danger">Delete</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>