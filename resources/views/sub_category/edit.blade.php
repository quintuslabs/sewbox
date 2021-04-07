@extends('layouts.app')

@section('title')
    Edit Branch
@endsection

@section('content')


           				<div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h3 class="page-title">Edit SubCategory <small> Edit Existing SubCategory Data.</small></h3> 
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Dashboard</a>
                                        </li>
                                        <li class="active">
                                            Edit SubCategory
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
                                            SubCategory Form <small>Requierd</small>
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
						                            {!! Form::model($sub_category, ['route'=>['subcategories.update', $sub_category->id], 'method'=>'PATCH', 'class'=>'form-horizontal m-b-30']) !!}
						                                <div class="form-group">
						                                    <label class="col-md-12">Category</label>
                                                           <div class="col-md-12">
                                                               <select class="form-control" name="category_id" required>  
                                                                  @foreach($categories as $category)
                                                                     @if($category->id == $sub_category->category_id)
                                                                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                                                          
                                                                          @else
                                                                           <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                                          @endif
                                                                      
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="pull-right"><a href="" data-toggle="modal"  data-target="#categoryModal"> Add Category</a></div>
						                                      <div class="form-group">
									                                 <label class="col-md-12">Name*</label>
									                                    <div class="col-md-12">
									                                         {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Enter SubCategory Name','required']) !!}
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

                                  <!-- Modal -->
                           <div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                               <div class="modal-dialog" role="document">
                                  {!! Form::open(['route'=>'subcategories.create_category', 'class'=>'form-horizontal m-b-30']) !!}
                                     <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label=" Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                           <div class="modal-body">
                                            
                                                        <div class="form-group">
                                                            <label class="col-md-12">Name*</label>
                                                            <div class="col-md-12">
                                                                 {!! Form::text('name', '', ['class'=>'form-control', 'placeholder'=>'Enter Category Name','required']) !!}
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

