@extends('layouts.app')

@section('title')
    Add Alteration
@endsection

@section('content')


           				<div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h3 class="page-title">Add Alteration <small> Add New Alteration Data.</small></h3> 
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Dashboard</a>
                                        </li>
                                        <li class="active">
                                            Add Alteration
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
                                            Alteration Form <small>Requierd</small>
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
						                            {!! Form::open(['route'=>'alterations.store', 'class'=>'form-horizontal m-b-30']) !!}
						                                <div class="form-group">
						                                    <label class="col-md-12">Branch</label>
                                                           <div class="col-md-12">
                                                              
                                                                 {!! Form::select('branch_id', $branch, null, ['id'=>'branch_id', 'class'=>'form-control select2','required']) !!}
                                                            </div>
                                                        </div>
						                                <div class="form-group">
						                                    <label class="col-md-12">Customer</label>
                                                           <div class="col-md-12">
                                                              
                                                                 {!! Form::select('customer_id', $customer, null, ['id'=>'customer_id', 'class'=>'form-control select2','required']) !!}
                                                            </div>
                                                        </div>
						                                <div class="form-group">
						                                    <label class="col-md-12">Order</label>
                                                           <div class="col-md-12">
                                                              
                                                                 {!! Form::select('order_id', $order, null, ['id'=>'order_id', 'class'=>'form-control select2','required']) !!}
                                                            </div>
                                                        </div>
						                                <div class="form-group">
						                                    <label class="col-md-12">Comment</label>
						                                    <div class="col-md-12">
						                                         {!! Form::textarea('comment', '', ['rows'=>'2', 'class'=>'form-control', 'placeholder'=>'Enter Comment Details','required']) !!}
						                                    </div>
						                                </div>
						                                <div class="form-group">
						                                    <label class="col-md-12">Delivery Date</label>
						                                    <div class="col-md-12">
						                                         {!! Form::date('delivery_date', '', ['class'=>'form-control','required']) !!}
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

