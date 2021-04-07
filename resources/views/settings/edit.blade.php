@extends('layouts.app')

@section('title')
    Edit Setting
@endsection

@section('content')


           				<div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h3 class="page-title">Edit Setting <small> Edit Existing Setting Data.</small></h3> 
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Dashboard</a>
                                        </li>
                                        <li class="active">
                                            Edit Setting
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
                                            Setting Form <small>Requierd</small>
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
						                            {!! Form::model($setting, ['route'=>['settings.update', $setting->id], 'method'=>'PATCH', 'class'=>'form-horizontal m-b-30', 'files' => true]) !!}
						                                           <div class="form-group">
									                                    <label class="col-md-12">Title</label>
									                                    <div class="col-md-12">
									                                         {!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Enter Title','required']) !!}
									                                    </div>
									                                </div>

                                                                        <div class="form-group">
                                                                            <label class="col-md-12">Upload Logo</label>
                                                                           <div class="file_button_container">
                                                                            <input type="file"  name="logo" accept="image/*"/>
                                                                            </div>
                                                                        </div>
                                                                         <div class="form-group">
                                                                             <label class="col-md-12">Upload MiniLogo</label>
                                                                            <div class="file_button_container">
                                                                            <input type="file"  name="mini_logo" accept="image/*"/>
                                                                            </div>
                                                                         </div>
                                                                        <div class="form-group">
                                                                             <label class="col-md-12">Upload FavIcon</label>
                                                                            <div class="file_button_container">
                                                                            <input type="file"  name="fav_icon" accept="image/ico"/>
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

