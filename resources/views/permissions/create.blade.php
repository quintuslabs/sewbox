
@extends('layouts.app')

@section('title')
     Add Permission 
@endsection

@section('content')
                  <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h3 class="page-title">Add Permission <small> Add New Permission Data.</small></h3> 
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Dashboard</a>
                                        </li>
                                        <li class="active">
                                            Add Permission
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
                                            Add Permission FORM <small>Requierd</small>
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
                                                    {!! Form::open(array('url' => 'permissions')) !!}
                                                        <div class="form-group">
                                                            <label class="col-md-12">Name</label>
                                                            <div class="col-md-12">
                                                                  {{ Form::text('name', '', array('class' => 'form-control')) }}
                                                            </div>
                                                        </div>
                                                               
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    @if(!$roles->isEmpty())
                                                                        <h4>Assign Permission to Roles</h4>

                                                                        @foreach ($roles as $role) 
                                                                            {{ Form::checkbox('roles[]',  $role->id ) }}
                                                                            {{ Form::label($role->name, ucfirst($role->name)) }}<br>

                                                                        @endforeach
                                                                    @endif
                                                                </div>
                                                            </div>
                                                           
                                                        
                                                        {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

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
