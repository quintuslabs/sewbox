
@extends('layouts.app')

@section('title', '| Role')

@section('content')
  
                <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h3 class="page-title">Role <small> All Role Data.</small></h3> 
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Dashboard</a>
                                        </li>
                                        <li class="active">
                                            Role
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
                                            Role <small>Records</small>
                                        </h3>
                                        <a href="{{ URL::to('roles/create') }}" class="btn btn-success">Add Role</a>

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
                                                             <th>Role</th>
                                                             <th>Permissions</th>        
                                                            <th class="text-center">Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>                

                                                     @foreach ($roles as $role)
                                                        <tr>
                                                            <td>{{ $role->id }}</td>
                                                            <td>{{ $role->name }}</td>

                                                            <td>{{ str_replace(array('[',']','"'),'', $role->permissions()->pluck('name')) }}</td>
                                                                                                         
                                                            <td class="text-center">  
                                                                <a href="{{ URL::to('roles/'.$role->id.'/edit') }}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                                                {{ Form::open(['route' => ['roles.destroy', $role->id], 'method' => 'delete', 'style'=>'display:inline-block']) }}
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
