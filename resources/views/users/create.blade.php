@extends('layouts.app')

@section('title', '| Add User')

@section('content')
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h3 class="page-title">Add User <small> Add New User Data.</small></h3> 
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Dashboard</a>
                                        </li>
                                        <li class="active">
                                            Add User
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                      <div class="row">
                        <div class='col-lg-12  card-box'>

                            <h1><i class='fa fa-user-plus'></i> Add User</h1>
                            <hr>

                            {{ Form::open(array('url' => 'users')) }}

                            <div class="form-group">
                                {{ Form::label('name', 'Name') }}
                                {{ Form::text('name', '', array('class' => 'form-control','placeholder'=>'Enter User Name','required', 'onkeypress'=>'return (event.charCode > 64 && 
                                                                 event.charCode < 91) || (event.charCode > 96 && event.charCode < 123 || (event.charCode == 32) )')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('email', 'Email') }}
                                {{ Form::email('email', '', array('class' => 'form-control' ,'placeholder'=>'Enter Email','required')) }}
                            </div>

                            <div class='form-group'>
                                @foreach ($roles as $role)
                                    {{ Form::checkbox('roles[]',  $role->id ) }}
                                    {{ Form::label($role->name, ucfirst($role->name)) }}<br>

                                @endforeach
                            </div>

                            <div class="form-group">
                                {{ Form::label('password', 'Password') }}<br>
                                {{ Form::password('password', array('class' => 'form-control' ,'placeholder'=>'Enter Password','required')) }}

                            </div>

                            <div class="form-group">
                                {{ Form::label('password', 'Confirm Password') }}<br>
                                {{ Form::password('password_confirmation', array('class' => 'form-control' ,'placeholder'=>'Enter Confirm passeord','required')) }}

                            </div>

                            {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

                            {{ Form::close() }}

                        </div>
                    </div>

@endsection