@extends('layouts.app')

@section('title')
    Master Branch Details
@endsection

@section('content')
                        <!-- /row -->
                        <div class="row">
                            <div class="col-sm-12 m-t-20">
                                <div style="background:url({{ asset('images/bg1.jpg') }}) no-repeat center center /cover;">
                                	<div class="card-box bg-primary-dark-op" >
	                                    <div class="row">
	                                        <div class="col-lg-3 col-md-4">
	                                            <div class="text-center">
	                                                <div class="member-card">
	                                                    <div class="thumb-xl member-thumb m-b-10 center-block">
	                                                        <img src="{{ asset('images/user.png') }}" class="img-circle img-thumbnail" alt="profile-image">
	                                                        <i class="mdi mdi-star-circle member-star text-success" title="verified user"></i>
	                                                    </div>

	                                                    <div class="">
	                                                        <h3 class="text-white m-b-5">{{ $masterbranch->branch_name}}</h3>
	                                                        <h4 class="text-muted">{{ $masterbranch->branch_address }}</h4>
	                                                    </div>                                          
	                                                </div>
	                                            </div> <!-- end card-box -->
	                                        </div> <!-- end col -->

	                                        <div class="col-md-8 col-lg-9">
	                                            <div class="row m-t-40">
	                                                <div class="col-md-4 col-sm-6 text-center">
	                                                    <div class="p-t-10">
	                                                        <h3 class="text-warning">{{ $masterbranch->branch_phone }}</h3>
	                                                        <h4 class="text-muted m-t-10">PHONE</h4>
	                                                    </div>
	                                                </div><!-- end col-->

	                                                <div class="col-md-4 col-sm-6 text-center">
	                                                    <div class="p-t-10">
	                                                        <h3 class="text-warning">{{ $masterbranch->branch_email }}</h3>
	                                                        <h4 class="text-muted m-t-10">EMAIL</h4>
	                                                    </div>
	                                                </div><!-- end col-->

	                                            </div> <!-- end row -->
	                                        </div> 
	                                    </div>
                                    </div>
                                </div>
                            </div>                        
					    </div>            
		                <!-- /row -->

         
@endsection


