@extends('layouts.app')

@section('title')
    Add Expense
@endsection

@section('content')


                        <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h3 class="page-title">Add Expense <small> Add New Expense Data.</small></h3>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Dashboard</a>
                                        </li>
                                        <li class="active">
                                            Add Expense
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
                                            Expense FORM <small>Requierd</small>
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
						                            {!! Form::open(['route'=>'expenses.store', 'class'=>'form-horizontal m-b-30', 'name'=>'expenses', 'onsubmit'=>"return validateExpenses()"]) !!}
						                                <div class="form-group">
						                                    <label class="col-md-12">Branch Name</label>
						                                    <div class="col-md-12">
						                                         {!! Form::select('branch_id', $branch, null, ['id'=>'branch_id', 'class'=>'form-control select2','required']) !!}
						                                    </div>
						                                </div>
									                    <div class="form-group">
						                                    <label class="col-md-12">Expense Type</label>
						                                    <div class="col-md-12">
						                                         {!! Form::select('expense_type_id', $expense_type, null, ['id'=>'expense_type_id', 'class'=>'form-control select2','required']) !!}
						                                    </div>
						                                </div>
									                  
						                                <div class="form-group">
						                                    <label class="col-md-12">Date</label>
						                                    <div class="col-md-12">
						                                         {!! Form::date('date', '', ['class'=>'form-control', 'id'=>'date']) !!}
						                                    </div>
						                                </div>
						                                
							                             <div class="form-group">
						                                	<div class="col-md-12">
						                                		<div class="form-group">
						                                    		<label class="col-md-12">Amount</label>
						                                    		<div class="col-md-12">
						                                				{!! Form::number('amount', '', ['class'=>'form-control','placeholder'=>'Enter Total Amount', 'id'=>'amount']) !!}
						                                			</div>
						                                		</div>	
						                                	</div>
						                                </div>
						                                 <div class="form-group">
						                                	<div class="col-md-12">
						                                		<div class="form-group">
						                                    		<label class="col-md-12">Comment</label>
						                                    		<div class="col-md-12">
						                                				{!! Form::textarea('comment', '', ['rows'=>'3','class'=>'form-control','placeholder'=>'Enter COmment','id'=>'comment']) !!}
						                                			</div>	
						                                		</div>
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
			        </div>
			    </div>            
                <!-- /row -->
            </div>

         
@endsection

