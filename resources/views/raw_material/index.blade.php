@extends('layouts.app')

@section('title')
    Raw Material 
@endsection

@section('content')
                  <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h3 class="page-title">Raw Material <small> All Raw Material Data.</small></h3> 
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Dashboard</a>
                                        </li>
                                        <li class="active">
                                            Raw Material
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
                                            Raw Material <small>Records</small>
                                        </h3>
                                          <button type="button" class="btn btn-default Raw Material-btn" data-toggle="modal"  data-target="#rawmaterialModal">Add Raw Material
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
				                                            <th>Raw Material</th>			  
                                                    <th class="text-center">Actions</th>
				                                        </tr>
				                                    </thead>
				                                    <tbody>                

				                                    @foreach($rawmaterials as $key => $rawmaterial)  

				                                        <tr>
				                                            <td>{{$rawmaterial->id}}</td>
				                                            <td>{{$rawmaterial->material_name}}</td>
				                                          
                                                             <td class="text-center">   

                                                                <a href="#" class="btn btn-sm btn-warning" data-toggle="modal" data-id="{{$rawmaterial->id}}" data-material_name="{{$rawmaterial->material_name}}" data-target="#edit_raw_material"><i class="fa fa-edit"></i></a>
                                                                
                                                                {{ Form::open(['route' => ['rawmaterials.destroy', $rawmaterial->id], 'method' => 'delete', 'style'=>'display:inline-block']) }}
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
                           <div class="modal fade" id="rawmaterialModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                               <div class="modal-dialog" role="document">
                                  {!! Form::open(['route'=>'rawmaterials.store', 'class'=>'form-horizontal m-b-30']) !!}
                                     <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add Raw Material</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label=" Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                           <div class="modal-body">
                                            
                                                        <div class="form-group">
                                                            <label class="col-md-12">Raw Material*</label>
                                                            <div class="col-md-12">
                                                                 {!! Form::text('material_name', '', ['class'=>'form-control', 'placeholder'=>'Enter Raw Material','required']) !!}
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

                           <!--  Edit Raw Material modal -->
                            <div class="modal fade" id="edit_raw_material" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                               <div class="modal-dialog" role="document">
                                   {!! Form::model($rawmaterials, ['route'=>['rawmaterials.update', 'update'], 'method'=>'PATCH', 'class'=>'form-horizontal m-b-30']) !!}
                                     <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Raw Material</h5>
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
                                                            <label class="col-md-12">Raw Material*</label>
                                                            <div class="col-md-12">
                                                                 {!! Form::text('material_name', '', ['class'=>'form-control','id'=>'material_name', 'placeholder'=>'Enter Raw Material ','required']) !!}
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

