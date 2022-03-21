@extends('GymRoom.layouts.app')

<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<h1 class="mt-5 blank_title"> Welcome: {{Auth::guard('web')->user()->name}}</h1>
				 </div>
			</div>
			</div>