@extends('layouts.app')

@section('title')
    Purchase Order
@endsection

@section('content')


           				<div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h3 class="page-title">Purchase Order <small> Edit Existing Purchase Orderss Data.</small></h3> 
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Dashboard</a>
                                        </li>
                                        <li class="active">
                                            Purchase Order
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
                                            Purchase Order Form <small>Requierd</small>
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
						                            {!! Form::model($purchase_orders, ['route'=>['purchaseorders.update', $purchase_orders->id], 'method'=>'PATCH', 'class'=>'form-horizontal m-b-30','name'=>'purchaseorders', 'onsubmit'=>"return validatePurchaseorders()"]) !!}
						                                          <div class="form-group">
									                                    <label class="col-md-12">Branch Name</label> 
									                                    <div class="col-md-12">
									                                         {!! Form::select('branch_id', $branch, null, ['id'=>'branch_id', 'class'=>'form-control select2','required']) !!}
									                                    </div>
									                                </div>
									                                 <div class="form-group">
									                                    <label class="col-md-12">Raw Material</label> 
									                                    <div class="col-md-12">
									                                         {!! Form::select('raw_material_id', $raw_material, null, ['id'=>'raw_material', 'class'=>'form-control select2','required']) !!}
									                                    </div>
									                                </div>
									                                 <div class="form-group">
									                                    <label class="col-md-12">Vendor</label> 
									                                    <div class="col-md-12">
									                                         {!! Form::select('vendor_id', $vendor, null, ['id'=>'vendor', 'class'=>'form-control select2','required']) !!}
									                                    </div>
									                                </div>
									                               
									                                 <div class="form-group">
									                                    <label class="col-md-12">PO Date</label>
									                                    <div class="col-md-12">
									                                         {!! Form::date('po_date', null, ['type'=>'date', 'class'=>'form-control', 'placeholder'=>'Enter PO Date','id'=>'po_date']) !!}
									                                    </div>
									                                </div>
										                           
									            							<div class="form-group">
											                                    <label class="col-md-12">PO No</label>
											                                    <div class="col-md-12">
											                                         {!! Form::number('po_no', null,['class'=>'form-control', 'placeholder'=>'Enter PO No','id'=>'po_no'])  !!}
											                                    </div>
											                                </div>
											                          
										                           
									            							<div class="form-group">
											                                    <label class="col-md-12">Quantity</label>
											                                    <div class="col-md-12">
											                                         {!! Form::number('quantity', null,['class'=>'form-control', 'placeholder'=>'Enter Quantity', 'id'=>'quantity'])  !!}
											                                    </div>
											                                </div>
											                          
										                          
									            							<div class="form-group">
											                                    <label class="col-md-12">Amount</label>
											                                    <div class="col-md-12">
											                                         {!! Form::number('amount', null,['class'=>'form-control', 'placeholder'=>'Enter Total Amount', 'id'=>'amount'])  !!}
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

