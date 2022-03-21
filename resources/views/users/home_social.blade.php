@extends('users.layouts.app')

<div class="page-wrapper">
			<div class="content container-fluid">
				
                 <div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<div class="mt-5">
								<h4 class="card-title float-left mt-2">Social Post</h4> 
                                <a href="{{route('add-social-post')}}"
								 class="btn btn-primary float-right veiwbutton">Add Social Post</a> </div>
						</div>
					</div>
				</div>
                 <div class="row">
                 @foreach($posts as $post)
					<div class="col-12 col-sm-8 col-md-6 col-lg-4">
						<div class="card"> <img class="card-img" 
                        src="{{ asset('/storage/muscles/muscles/'. $post->image_post) }}"
						
						 alt="">
							<div class="card-img-overlay"> <a href="{{ URL::to('/read_more/'.$post->id) }}" class="btn btn-light btn-sm">Read More</a> </div>
							<div class="card-body">
								<h4 class="card-title">{{$post->title}}</h4>
								<p class="card-text mt-3"> {!!$post->body!!}. </p> 
								
                                <a href="{{ URL::to('/read_more/'.$post->id) }}" class="btn btn-info">{{$post->share}}</a>
							 </div>
						</div>
					</div>
                    @endforeach
					
					
                   
				</div>
				</div>
			</div>
			</div>