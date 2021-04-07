@extends('layouts.app')

@section('title', '| Edit User')

@section('content')
                  <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h3 class="page-title">Edit User <small> Edit User Data.</small></h3> 
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Dashboard</a>
                                        </li>
                                        <li class="active">
                                            Edit User
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                      <div class="row">
                        <div class='col-lg-12  card-box'>
                            <h1><i class='fa fa-user-plus'></i> Edit {{$user->name}}</h1>
                            <hr>

                            {{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) }}{{-- Form model binding to automatically populate our fields with user data --}}

                            <div class="form-group">
                                {{ Form::label('name', 'Name') }}
                                {{ Form::text('name', null, array('class' => 'form-control','placeholder'=>'Enter User Name','required')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('email', 'Email') }}
                                {{ Form::email('email', null, array('class' => 'form-control','placeholder'=>'Enter Email','required')) }}
                            </div>

                            <h5><b>Give Role</b></h5>

                            <div class='form-group'>
                                @foreach ($roles as $role)
                                    {{ Form::checkbox('roles[]',  $role->id, $user->roles ) }}
                                    {{ Form::label($role->name, ucfirst($role->name)) }}<br>

                                @endforeach
                            </div>

                            <div class="form-group">
                                {{ Form::label('password', 'Password') }}<br>
                                {{ Form::password('password', array('class' => 'form-control','placeholder'=>'Enter passeord')) }}

                            </div>

                            <div class="form-group">
                                {{ Form::label('password', 'Confirm Password') }}<br>
                                {{ Form::password('password_confirmation', array('class' => 'form-control' ,'placeholder'=>'Enter Confirm passeord')) }}

                            </div>

                            {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

                            {{ Form::close() }}

                        </div>
                    </div>

@endsection