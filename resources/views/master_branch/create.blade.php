@extends('layouts.app')

@section('title')
    Add MasterBranch
@endsection

@section('content')

        
           				<div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h3 class="page-title">Add Branch <small> Add New Branch Data.</small></h3> 
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Dashboard</a>
                                        </li>
                                        <li class="active">
                                            Add Branch
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
                                            Branch Form <small>Requierd</small>
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
				                        		<div class="col-md-offset-3 col-md-6" id="error"></div> 										
				                        		<div class="col-md-6 col-md-offset-3">

						                            {!! Form::open(['route'=>'masterbranches.store', 'class'=>'form-horizontal m-b-30', 'name'=>'masterbranch', 'onsubmit'=>"return validateMasterBranch()"]) !!}
						                                <div class="form-group">
						                                    <label class="col-md-12">Name*</label>
						                                    <div class="col-md-12">
						                                         {!! Form::text('branch_name', '', ['class'=>'form-control', 'placeholder'=>'Enter Branch Name','id'=>'branch_name', 'onkeypress'=>'return (event.charCode > 64 && 
                                                                 event.charCode < 91) || (event.charCode > 96 && event.charCode < 123 || (event.charCode == 32) )']) !!}
						                                    </div>
						                                </div>
						                                <div class="form-group">
						                                    <label class="col-md-12">Phone Number*</label>
						                                    <div class="col-md-12">
						                                         {!! Form::text('branch_phone', '', ['class'=>'form-control', 'placeholder'=>'Enter Branch Phone','onkeypress'=>'return isNumberKey(event)', 'maxlength'=>'10', 'id'=>'branch_phone']) !!}
						                                    </div>
						                                </div>
						                                 <div class="form-group">
						                                    <label class="col-md-12">Alternate Phone</label>
						                                    <div class="col-md-12">
						                                         {!! Form::text('branch_alt_phone', '', ['class'=>'form-control', 'placeholder'=>'Enter Alternate Phone','onkeypress'=>'return isNumberKey(event)', 'maxlength'=>'10']) !!}
						                                    </div>
						                                </div>

						                                <div class="form-group">
						                                    <label class="col-md-12">Email*</label>
						                                    <div class="col-md-12">
						                                         {!! Form::text('branch_email', '', ['type'=>'email', 'class'=>'form-control', 'placeholder'=>'Enter Branch Email', 'id'=>'branch_email']) !!}
						                                    </div>
						                                </div>
						                               
							                            <div class="form-group">
						                                    <label class="col-md-12">Address*</label>
						                                    <div class="col-md-12">
						                                         {!! Form::textarea('branch_address', '', ['rows'=>'2', 'class'=>'form-control', 'placeholder'=>'Enter Branch Address','id'=>'branch_address']) !!}
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