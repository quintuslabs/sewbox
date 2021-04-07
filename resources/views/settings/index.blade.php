@extends('layouts.app')

@section('title')
    Setting Details
@endsection

@section('content')

                         <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h3 class="page-title">Settings <small> Dashbboard Settings</small></h3> 
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Dashboard</a>
                                        </li>
                                        <li class="active">
                                            settings
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /row -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card-box widget-box-one">                                                                                                                                          @role('Administer')                        
                                                                <a href="{{ route('settings.edit', $setting[0]->id) }}" class="btn btn-sm btn-warning pull-right"><i class="fa fa-edit"></i></a>
                                                               
                                                            @endrole
                                                      <div class="p-t-10">	                                                        
	                                                        <h4 class="text-muted m-t-10">Title</h4>
	                                                        <h3 class="text-warning">{{ $setting[0]->title }}</h3>
	                                                    </div>
                                             	       <div class="p-t-10">	                                                      
	                                                        <h4 class="text-muted m-t-10">Logo</h4>
	                                                    </div>
	                                                    <div class="thumb-xl member-thumb">
	                                                        <img src="{{ asset($setting[0]->logo) }}" class="img-thumbnail" alt="lo-image" height="90px" width="90px">
	                                                     
	                                                    </div>                                                       
	                                           

	                                                     <div class="p-t-10">
	                                                     	  <h4 class="text-muted m-t-10">Mini Logo</h4>
	                                                        <img src="{{ asset($setting[0]->mini_logo) }}" class="img-thumbnail" alt="minilogo-image" height="70px" width="70px">
	                                                      
	                                                    </div>
	                                                    <div class="p-t-10">
	                                                    	<h4 class="text-muted m-t-10">Fav Icon</h4>
	                                                        <img src="{{ asset($setting[0]->fav_icon) }}" class="img-thumbnail" alt="fav-image" height="50px" width="50px">
	                                                    </div>
                                        </div>
                                    </div>
                                </div>

		                <!-- /row -->

         
@endsection

