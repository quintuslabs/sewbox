@extends('layouts.app')

@section('title')
    Edit Staff
@endsection

@section('content')


           				<div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h3 class="page-title">Edit Staff <small> Edit Existing Staff Data.</small></h3> 
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Dashboard</a>
                                        </li>
                                        <li class="active">
                                            Edit Staff
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
                                            Staff Form <small>Requierd</small>
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
								        <div class="panel-body">                            
				                        	<div class='row'>
				                        		<div class="col-md-6 col-md-offset-3"> 
						                            {!! Form::model($staff, ['route'=>['staffs.update', $staff->id], 'method'=>'PATCH', 'class'=>'form-horizontal m-b-30','files' => true]) !!}
						                             <div class="form-group">
									                                    <label class="col-md-12">Branch Name</label> 
									                                    <div class="col-md-12">
									                                         {!! Form::select('branch_id', $branch, null, ['id'=>'branch_id', 'class'=>'form-control select2','required']) !!}
									                                    </div>
									                                </div>
									                                
						                                <div class="form-group">
									                                    <label class="col-md-12">Name</label>
									                                    <div class="col-md-12">
									                                         {!! Form::text('staff_name', null, ['class'=>'form-control', 'placeholder'=>'Enter Staff Name','required']) !!}
									                                    </div>
									                                </div>
									                                <div class="form-group">
									                                    <label class="col-md-12">Phone Number</label>
									                                    <div class="col-md-12">
									                                         {!! Form::text('staff_phone', null, ['class'=>'form-control', 'placeholder'=>'Enter Staff Phone','required']) !!}
									                                    </div>
									                                </div>
									                                <div class="form-group">
									                                    <label class="col-md-12">Email</label>
									                                    <div class="col-md-12">
									                                         {!! Form::text('staff_email', null, ['type'=>'email', 'class'=>'form-control', 'placeholder'=>'Enter Staff Email','required']) !!}
									                                    </div>
									                                </div>

																	<div class="row">
																		<div class="col-sm-6">
																	       <div class="form-group">
									                                        <label class="col-md-12">DOB</label>
																			<div class="col-md-12">
																				{!! Form::date('dob', null, ['type'=>'date', 'class'=>'form-control', 'placeholder'=>'Enter Staff DOB','required']) !!}
																			</div>
									                                      </div>
																		</div>															
																		<div class="col-sm-6">
																			<div class="form-group">
																				<label class="col-md-12">Joining Date</label>
																				<div class="col-md-12">
																					{!! Form::date('doj', null, ['type'=>'date', 'class'=>'form-control', 'placeholder'=>'Enter Staff DOJ','required']) !!}
																				</div>
																			</div>
																		</div>
																	</div>
									                                
									                                <div class="row">
									                                	<div class="col-md-6">
											                            	<div class="form-group">
											                                    <label class="col-md-12">Sex</label>
											                                    <div class="col-md-12">
											                                         {!! Form::select('staff_sex', array( 'Male' => 'Male', 'Female' => 'Female'), null, ['class'=>'form-control','required']) !!}
											                                    </div>
											                                </div>
											                            </div>  
										                                <div class="col-md-6">
									            							<div class="form-group">
											                                    <label class="col-md-12">Salary</label>
											                                    <div class="col-md-12">
											                                         {!! Form::number('staff_salary', null,['class'=>'form-control', 'placeholder'=>'Enter Total Salary','required'])  !!}
											                                    </div>
											                                </div>
											                            </div>
										                            </div> 

										                            <div class="form-group">
									                                    <label class="col-md-12">Address</label>
									                                    <div class="col-md-12">
									                                         {!! Form::textarea('staff_address', null, ['rows'=>'2', 'class'=>'form-control', 'placeholder'=>'Enter Staff Address','required']) !!}
									                                    </div>
									                                </div>   
									                                <div class="form-group">
			                                                            <label class="col-md-12">Upload Pan Card</label>
			                                                           <div class="file_button_container">
			                                                            <input type="file"  name="pan_card" accept="image/png,image/jpg,image/jpeg"/>
			                                                            </div>
			                                                        </div>
							                                	     		
							                                		<div class="form-group">
			                                                            <label class="col-md-12">Upload Adhar Card</label>
			                                                           <div class="file_button_container">
			                                                            <input type="file"  name="adhar_card" accept="image/png,image/jpg,image/jpeg"/>
			                                                            </div>
			                                                        </div>
							                                	
							                                		<div class="form-group">
			                                                            <label class="col-md-12">Upload Electric Bill</label>
			                                                           <div class="file_button_container">
			                                                            <input type="file"  name="electric_bill" accept="image/png,image/jpg,image/jpeg"/>
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

