@extends('users.layouts.app')

<div class="page-wrapper">
			<div class="content container-fluid">
				
                 <div class="page-header"><div class="content mt-5">
				<div class="row">
					<div class="col-sm-12">
						<h4 class="page-title">Posts View</h4> </div>
				</div>
				<div class="row mt-3">
					<div class="col-md-8">
						<div class="blog-view">
                        @foreach($posts as $post)	<article class="blog blog-single-post">
								<h3 class="blog-title">{!! $post->title !!}</h3>
								<div class="blog-image">
									<a href="blog-details.html"><img alt="" src="{{ asset('/storage/muscles/muscles/'. $post->image_post) }}" class="img-fluid mt-4"></a>
								</div>
								<div class="blog-content mt-4">
									<p> {!!$post->body!!}.</p>
								</div>
							</article>
                            @endforeach
							
						</div>
					</div>
					
				</div>
			</div>