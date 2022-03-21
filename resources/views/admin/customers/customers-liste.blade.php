@extends('admin.layouts.app')

<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<h1 class="mt-5 blank_title">
					<div class="row align-items-center">
						<div class="col">
							<div class="mt-5">
								<h4 class="card-title float-left mt-2">Subscribers</h4> <a href="add-customer.html" class="btn btn-primary float-right veiwbutton">Add Customers</a> </div>
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
												<th>Booking ID</th>
												<th>Name</th>
												<th>gouvernorat</th>
												<th>Cities</th>
												<th>Date of birth</th>
												<th>Time</th>
												<th>Arrival Date</th>
												<th>Depature Date</th>
												<th>Email ID</th>
												<th>Ph.Number</th>
												<th>Status</th>
												<th class="text-right">Actions</th>
											</tr>
										</thead>
										<tbody>
                                            @foreach($customers as $customer)
											<tr>
												<td>{{$customer->id}}</td>
												<td>
													<h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{ asset('forntend/assets/img/profiles/avatar-03.jpg')}}" alt="User Image"></a>
                                                    <a href="profile.html">{{$customer->name}} <span>#0001</span></a>
                                                    </h2>
                                                </td>
												<td>{{$customer->gouvernorat}}</td>
												<td>{{$customer->region}}</td>
												<td>21-03-2020</td>
												<td>11.00 AM</td>
												<td>22-03-2020</td>
												<td>23-03-2020</td>
												<td><a href="/cdn-cgi/l/email-protection" 
                                                class="__cf_email__" data-cfemail="1662797b7b6f74736478777a56736e777b667a733875797b">{{$customer->email}}</a></td>
												<td>{{$customer->phone_number}}</td>
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
									{{ $customers->appends(Request::except('page'))->links()}}
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