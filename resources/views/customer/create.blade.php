@extends('layouts.app')

@section('title')
    Add Customer 
@endsection

@section('content')


                        <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h3 class="page-title">Add Customer <small> Add New Customer Data.</small></h3> 
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Dashboard</a>
                                        </li>
                                        <li class="active">
                                            Add Customer
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row --> 
                        <!-- /row -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="portlet">
                                    <div class="portlet-heading portlet-default">
                                        <h3 class="portlet-title text-dark">
                                            Customer Form <small>Requierd</small>
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
				                        	<div class='row'>
				                        		  <div class="col-md-offset-3 col-md-6" id="error"></div> 	
				                        		<div class="col-md-6 col-md-offset-3"> 
						                            {!! Form::open(['route'=>'customers.store', 'class'=>'form-horizontal m-b-30', 'name'=>'customer', 'onsubmit'=>"return validateCustomer()"]) !!}
						                                <div class="form-group">
						                                    <label class="col-md-12">Branch*</label>
                                                           <div class="col-md-12">
                                                               {!! Form::select('branch_id', $branch, null, ['id'=>'branch_id', 'class'=>'form-control select2','required']) !!}
                                                            </div>
                                                        </div>
						                                <div class="form-group">
						                                    <label class="col-md-12">Name*</label>
						                                    <div class="col-md-12">
						                                         {!! Form::text('customer_name', '', ['class'=>'form-control', 'placeholder'=>'Enter Customer Name','id'=>'customer_name', 'onkeypress'=>'return (event.charCode > 64 && 
                                                                 event.charCode < 91) || (event.charCode > 96 && event.charCode < 123 || (event.charCode == 32) )']) !!}
						                                    </div>
						                                </div>
						                                <div class="form-group">
						                                    <label class="col-md-12">Email*</label>
						                                    <div class="col-md-12">
						                                         {!! Form::text('customer_email', '', ['type'=>'email', 'class'=>'form-control', 'placeholder'=>'Enter Customer Email', 'id'=>'customer_email']) !!}
						                                    </div>
														</div>
														<div class="row">
															<div class="col-sm-6">
																<div class="form-group">
																		<label class="col-md-12">DOB*</label>
																		<div class="col-md-12">
																				{!! Form::date('customer_dob', '', ['type'=>'date', 'class'=>'form-control', 'placeholder'=>'Enter Customer DOB','id'=>'customer_dob']) !!}
																		</div>
																	</div>
																</div>
															<div class="col-sm-6">
																<div class="form-group">
																	<label class="col-md-12">Anniversary Date*</label>
																	<div class="col-md-12">
																			{!! Form::date('anniversary_date', '', ['type'=>'date', 'class'=>'form-control', 'placeholder'=>'Enter Customer Anniversery Date','id'=>'anniversary_date']) !!}
																	</div>
																</div>
															</div>
														</div>
						                               

						                                <div class="row">
							                                <div class="col-md-6">
						            							<div class="form-group">
								                                    <label class="col-md-12">Phone Number*</label>
								                                    <div class="col-md-12">
								                                         {!! Form::text('customer_phone', '', ['class'=>'form-control', 'placeholder'=>'Enter Customer Phone','onkeypress'=>'return isNumberKey(event)', 'maxlength'=>'10', 'id'=>'customer_phone']) !!}
								                                    </div>
								                                </div>
								                            </div>
								                            <div class="col-md-6">
								                            	<div class="form-group">
								                                    <label class="col-md-12">Sex*</label>
								                                    <div class="col-md-12">
								                                         {!! Form::select('customer_sex', array( 'Male' => 'Male', 'Female' => 'Female'), null, ['class'=>'form-control','required']) !!}
								                                    </div>
								                                </div>
								                            </div>
							                            </div> 
							                            <div class="form-group">
						                                    <label class="col-md-12">Address*</label>
						                                    <div class="col-md-12">
						                                         {!! Form::textarea('customer_address', '', ['rows'=>'2', 'class'=>'form-control', 'placeholder'=>'Enter Customer Address','id'=>'customer_address']) !!}
						                                    </div>
						                                </div>   
									                    {!! Form::submit('Submit', ['class'=>'btn btn-danger waves-light']) !!}
									                {!! Form::close() !!}
									            </div>
								            </div>
								        </div>  
							        </div>        
					            </div>
					        </div>
					    </div>            
			            <!-- /row -->

         
@endsection

