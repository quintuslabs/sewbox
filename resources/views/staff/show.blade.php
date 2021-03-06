@extends('layouts.app')

@section('title')
    Staff Details
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
	                                                        <h3 class="text-white m-b-5">{{ $staff->staff_name}}</h3>
	                                                        <h4 class="text-muted">{{ $staff->staff_address }}</h4>
	                                                    </div>                                          
	                                                </div>
	                                            </div> <!-- end card-box -->
	                                        </div> <!-- end col -->

	                                        <div class="col-md-8 col-lg-9">
	                                            <div class="row m-t-40">
	                                                <div class="col-md-4 col-sm-6 text-center">
	                                                    <div class="p-t-10">
	                                                        <h3 class="text-warning">{{ $staff->staff_phone }}</h3>
	                                                        <h4 class="text-muted m-t-10">PHONE</h4>
	                                                    </div>
	                                                </div><!-- end col-->

	                                                <div class="col-md-4 col-sm-6 text-center">
	                                                    <div class="p-t-10">
	                                                        <h3 class="text-warning">{{ $staff->staff_email }}</h3>
	                                                        <h4 class="text-muted m-t-10">EMAIL</h4>
	                                                    </div>
	                                                </div><!-- end col-->

	                                                <div class="col-md-4 col-sm-6 text-center">
	                                                    <div class="p-t-10">
	                                                        <h3 class="text-warning">{{ $staff->staff_sex }}</h3>
	                                                        <h4 class="text-muted m-t-10">SEX</h4>
	                                                    </div>
	                                                </div><!-- end col-->

	                                            </div> <!-- end row -->
	                                        </div> 
	                                    </div>
                                    </div>
                                </div>
                            </div>                        
                            <div class="col-sm-12">
                                <div class="portlet">
                                    <div class="portlet-heading portlet-default">
                                    <h2 class="portlet-title text-dark">
                                        Staff <small>Documents</small>
                                    </h2>
                                    </div>
                                    <div id="bg-default" class="panel-collapse collapse in">
                                            <div class="portlet-body">
                                                <div class="row">
                                                   <div class="col-sm-4">
                                                       <img src="{{ asset($staff->pan_card) }}" alt="Pan Card Not Uploaded" height="100%" width="100%"/>
                                                   </div>
                                                   <div class="col-sm-4">
                                                        <img src="{{ asset($staff->adhar_card)}}" alt="Adhar Card Not Uploaded" height="100%" width="100%"/>
                                                   </div>

                                                   <div class="col-sm-4">
                                                        <img src="{{ asset($staff->electric_bill)}}" alt="Electric Bill Card Not Uploaded" height="100%" width="100%"/>
                                                   </div>
                                                   
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>                        

                            <div class="col-sm-12">
                                <div class="portlet">
                                    <div class="portlet-heading portlet-default">
                                        <h3 class="portlet-title text-dark">
                                            Salary <small>Records</small>
                                        </h3>
                                        <div class="portlet-widgets">                                            
                                            <a data-toggle="collapse" data-parent="#accordion1" href="#bg-default"><i class="ion-minus-round"></i></a>
                                            <span class="divider"></span>
                                            <a href="#" class="zoom"><i class="ion-arrow-resize"></i></a>
                                            <span class="divider"></span>
                                            <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>    
                                    <div id="bg-default" class="panel-collapse collapse in">
                                        <div class="portlet-body">
                                      
                                            <div class="table-responsive">
                                                <table id="datatable" class="table table-striped table-colored table-info">
                                                    <thead>
                                                        <tr>
                                                            <th>Salary Date</th>
                                                            <th>Salary Amount</th>
                                                            <th>Salary Month</th>
                                                            <th>Salary Paid</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>                

                                                    @foreach($staff_salary as $salary)  

                                                        <tr>                                                         
                                                            <td>{{$salary->salary_date}}</td>
                                                            <td>{{$salary->salary_amount}}</td>
                                                            <td>{{$salary->salary_month}}</td>                
                                                            <td>{{$salary->salary_paid}}</td>
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
		                <!-- /row -->

         
@endsection

