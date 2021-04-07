@extends('layouts.app')

@section('title', '| Users')
 <link href="{{ asset('css/profile.css') }}" rel="stylesheet">

@section('content')
      
	    <div class="row">
		    <div class="col-xs-12">
		        <div class="page-title-box">
		            <h3 class="page-title">Profile <small> My Profile.</small></h3> 
		            <ol class="breadcrumb p-0 m-0">
		                <li>
		                    <a href="#">Dashboard</a>
		                </li>
		                <li class="active">
		                    Profile
		                </li>
		            </ol>
		            <div class="clearfix"></div>
		        </div>
		    </div>
		</div>
         <div class="row">
            <div class="col-md-offset-4 col-sm-8">
		    	<div class="container h-100">
					<div class="row h-100 justify-content-center align-items-center">
						<div class="card">
							<div class="card-header">
								<div class="profile_pic">

									<img src="{{asset('images/user.png')}}">
								</div>
							</div>
							<div class="card-body">
								<div class="d-lfex justify-content-center flex-column">
									<div class="name_container">
										<div class="name">{{$user->name}}</div>
									</div>
									<div class="address">{{$user->email}}</div>
								</div>
								
								<div class="info_container">
									<div class="info">
										<p>followers</p>
										<p>2.89M</p>								
									</div>
									<div class="info">
										<p>followings</p>
										<p>456</p>							
									</div>
									<div class="info">
										<p>posts</p>
										<p>3.56K</p>						
									</div>			
								</div>
							</div>
							<div class="card-footer">
								<div class="view_profile">
									Edit profile
								</div>
								<div class="message">
									<a href="{{ url('password') }}"><i class="ti-user m-r-5"></i> Change Password</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


@endsection  