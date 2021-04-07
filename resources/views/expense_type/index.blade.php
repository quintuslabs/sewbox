@extends('layouts.app')

@section('title')
    Expense Type 
@endsection

@section('content')
                  <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h3 class="page-title">Expense Type <small> All Expense Type Data.</small></h3> 
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Dashboard</a>
                                        </li>
                                        <li class="active">
                                            Expense Type
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
                                            Expense Type <small>Records</small>
                                        </h3>
                                          <button type="button" class="btn btn-default Expense Type-btn" data-toggle="modal"  data-target="#expensetypeModal">Add Expense Type
                                        </button>
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
                                                <table id="datatable" class="table table-striped">
				                                    <thead>
				                                        <tr>
				                                            <th>ID</th>
				                                            <th>Expense Type</th>			  
                                                            <th class="text-center">Actions</th>
				                                        </tr>
				                                    </thead>
				                                    <tbody>                

				                                    @foreach($expensetypes as $key => $expensetype)  

				                                        <tr>
				                                            <td>{{$expensetype->id}}</td>
				                                            <td>{{$expensetype->expense_type}}</td>
				                                          
                                                             <td class="text-center">   

                                                                <a href="#" class="btn btn-sm btn-warning" data-toggle="modal" data-id="{{$expensetype->id}}" data-expense_type="{{$expensetype->expense_type}}" data-target="#edit_expense_type"><i class="fa fa-edit"></i></a>
                                                                {{ Form::open(['route' => ['expensetypes.destroy', $expensetype->id], 'method' => 'delete', 'style'=>'display:inline-block']) }}
                                                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this?')" ><i class="fa fa-trash-o"></i></button>
                                                                {{ Form::close() }}
                                                            </td>                                      
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


                                 <!-- Modal -->
                           <div class="modal fade" id="expensetypeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                               <div class="modal-dialog" role="document">
                                  {!! Form::open(['route'=>'expensetypes.store', 'class'=>'form-horizontal m-b-30']) !!}
                                     <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add Expense Type</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label=" Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                           <div class="modal-body">
                                            
                                                        <div class="form-group">
                                                            <label class="col-md-12">Expense Type*</label>
                                                            <div class="col-md-12">
                                                                 {!! Form::text('expense_type', '', ['class'=>'form-control', 'placeholder'=>'Enter Expense Type','required', 'onkeypress'=>'return (event.charCode > 64 && 
                                                                 event.charCode < 91) || (event.charCode > 96 && event.charCode < 123 || (event.charCode == 32) )']) !!}
                                                            </div>
                                                        </div>
                                                      
                                               
                                            </div>
                                           <div class="modal-footer">
                                                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                {!! Form::submit('Submit', ['class'=>'btn btn-danger waves-light']) !!}
                                            </div>
                                   </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>

                           <!--  Edit Expense Type modal -->
                            <div class="modal fade" id="edit_expense_type" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                               <div class="modal-dialog" role="document">
                                   {!! Form::model($expensetypes, ['route'=>['expensetypes.update', 'update'], 'method'=>'PATCH', 'class'=>'form-horizontal m-b-30']) !!}
                                     <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Expense Type</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label=" Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                           <div class="modal-body">
                                            
                                                        <div class="form-group">
                                                        
                                                            <div class="col-md-12">
                                                                 <input type="hidden" name="id" id="id">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-12">Expense Type*</label>
                                                            <div class="col-md-12">
                                                                 {!! Form::text('expense_type', '', ['class'=>'form-control','id'=>'expense_type', 'placeholder'=>'Enter Expense Type ','required', 'onkeypress'=>'return (event.charCode > 64 && 
                                                                 event.charCode < 91) || (event.charCode > 96 && event.charCode < 123 || (event.charCode == 32) )']) !!}
                                                            </div>
                                                        </div>
                                                      
                                               
                                            </div>
                                           <div class="modal-footer">
                                                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                {!! Form::submit('Submit', ['class'=>'btn btn-danger waves-light']) !!}
                                            </div>
                                   </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>

@endsection

