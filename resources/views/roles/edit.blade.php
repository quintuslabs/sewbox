
@extends('layouts.app')

@section('title')
     Edit Rple 
@endsection

@section('content')
                  <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h3 class="page-title">Edit Role <small> Edit Role Data.</small></h3> 
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Dashboard</a>
                                        </li>
                                        <li class="active">
                                            Edit Role
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
                                            Edit Role FORM <small>Requierd</small>
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
                                                     {{ Form::model($role, array('route' => array('roles.update', $role->id), 'method' => 'PUT')) }}
                                                         <div class="form-group">
                                                            <label class="col-md-12">Name</label>
                                                            <div class="col-md-12">
                                                                  {{ Form::text('name', null, array('class' => 'form-control')) }}
                                                            </div>
                                                        </div>
                                                         <div class="form-group">
                                                            <label class="col-md-12">Assign Permissions</label>
                                                            <div class="col-md-12">
                                                                @foreach ($permissions as $permission)

                                                                  {{Form::checkbox('permissions[]',  $permission->id, $role->permissions ) }}
                                                                  {{Form::label($permission->name, ucfirst($permission->name)) }}<br>

                                                               @endforeach
                                                            </div>
                                                        </div>
                                                        
                                                        {{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

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





