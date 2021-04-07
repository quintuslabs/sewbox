@extends('layouts.app')

@section('title')
    Purchase Order
@endsection

@section('content')


            			<div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h3 class="page-title">Purchase Order <small> All Purchase Order Data.</small></h3> 
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
                                            Purchase Order <small>Records</small>
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
                                                <table id="datatable" class="table table-striped">
				                                    <thead>
				                                        <tr>
				                                            <th>ID</th>
                                                            <th>Branch</th>
				                                            <th>Raw Material</th>
				                                            <th>Vendor</th>
				                                            <th>PO Date</th>
				                                            <th>PO No</th>
				                                            <th>Quantity</th>
				                                            <th>Amount</th>
				                                            <th class="text-center">Actions</th>
				                                        </tr>
				                                    </thead>
				                                    <tbody>                

				                                    @foreach($purchase_orders as $purchase_order)  

				                                        <tr>
				                                            <td>{{$purchase_order->id}}</td>  
                                                            <td>{{$purchase_order->branch->branch_name}}</td>
				                                            <td>{{$purchase_order->raw_material->material_name}}</td>
				                                            <td>{{$purchase_order->vendor->name}}</td>
				                                            <td>{{$purchase_order->po_date}}</td>
				                                            <td>{{$purchase_order->po_no}}</td>
				                                            <td>{{$purchase_order->quantity}}</td>
				                                            <td>{{$purchase_order->amount}}</td>
				                                            <td class="text-center">
                                                            	
                                                            	<a href="{{ route('purchaseorders.edit', $purchase_order->id) }}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                                                {{ Form::open(['route' => ['purchaseorders.destroy', $purchase_order->id], 'method' => 'delete', 'style'=>'display:inline-block']) }}
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

@endsection