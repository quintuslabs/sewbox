
@extends('layouts.app')

@section('title')
     Edit Permission 
@endsection

@section('content')
                  <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h3 class="page-title">Edit Permission <small> Edit Permission Data.</small></h3> 
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Dashboard</a>
                                        </li>
                                        <li class="active">
                                            Edit Permission
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
                                            Edit Permission FORM <small>Requierd</small>
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
                                                <div class="col-md-6 col-md-offset-3"> 
                                                    {{ Form::model($permission, array('route' => array('permissions.update', $permission->id), 'method' => 'PUT', 'class'=>'form-horizontal m-b-30')) }}
                                                         <div class="form-group">
                                                            <label class="col-md-12">Name</label>
                                                            <div class="col-md-12">
                                                                  {{ Form::text('name', null, array('class' => 'form-control')) }}
                                                            </div>
                                                        </div>
                                                        
                                                         <div class="col-md-6"> 
                                                          {{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}
                                                        </div>
                                                         {{ Form::close() }}

                                                </div>
                                            </div>
                                        </div>  
                                    </div>        
                                </div>
                            </div>
                        </div>            
                        <!-- /row -->
@endsection

