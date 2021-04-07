@extends('layouts.app')

@section('title')
    Dashboard 
@endsection

@section('content')

<div class="row">
        <div class="col-xs-12">
            <div class="page-title-box">
                <h3 class="page-title">Gallery<small> All Gallery Images</small></h3> 
                <ol class="breadcrumb p-0 m-0">
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="active">
                        Gallery
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
                        Master Branch <small>Records</small><span>
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Image</button></span>

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
                        @if(empty($images->count()))
                            <p>No record found.</p>
                        @else
                        <div class="table-responsive">
                                <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
         
                                            <thead>
                                                <tr>
                                                    <th>SN</th>
                                                    <th>Image</th>
                                                    <th>Status</th>
                                                    <th>Date/Time Added</th>
                                                    <th>Operations</th>
                                                </tr>
                                            </thead>
         
                                            <tbody>
                                                @foreach ($images as $image)
                                                <tr>
                                                    <td>{{ (($images->currentPage() - 1 ) * $images->perPage() ) + $loop->iteration }}</td>
                                                    <td><img class="img-responsive thumbnail_img" src="{{  asset($image->thumbnail) }}" /></td>
                                                    <td>
                                                        @if($image->status == 1)
                                                            <span class="enable">Active</span>
                                                        @else
                                                            <span class="disable">Inactive</span>
                                                        @endif
                                                    </td>
                                                    <td>{{ $image->updated_at->format('F d, Y') }}</td>
                                                    <td>
                                                       
                                                        <form action="{{ route('gallery.destroy', $image->id) }}" method="post"
                                                            onsubmit="return confirm('Are you sure you want to delete this record?');">
                                                            <input type="hidden" name="_method" value="DELETE" />
                                                            {{ csrf_field() }}
                                                            <button type="submit" name="Delete" class="btn btn-sm btn-danger action_btn">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        @if($images->total() != 0)
                                            <div>Showing
                                                {{ ($images->currentpage()-1) * $images->perpage()+1}} to
                                                {{(($images->currentpage()-1) * $images->perpage())+$images->count()}} of
                                                {{$images->total()}} records
                                            </div>
                                            {{ $images->links() }}
                                        @else
                                            No records found.
                                        @endif
                                    </div>
                                @endif
                        </div>    
                    </div>
                </div>
            </div>
        </div>                   
    </div>




 <!-- Modal -->

 
    <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <form method="POST" action="{{ route('gallery.store') }}" enctype="multipart/form-data"  class="inline">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Upload Image</h4>
                </div>
                <div class="modal-body">
                        <p><small>Note: Total size of uploading files shold not be greater than 8 MB.</small></p>
                        <input type="text" name="title" placeholder="Image description (Optional)" class="form-control"/>
                        <select name="status" class="form-control" style="display:none;"><br/>
                            <option value="1">Publish</option>
                            <option value="0">Save in draft</option>
                        </select>
                        <input type="file" name="image[]"  accept="image/png, image/jpeg, image/jpg, image/gif"  class="form-control" multiple/>
                       
                        {{ csrf_field() }}
                </div>
                <div class="modal-footer">
                
                  <button type="submit" class="btn btn-success" style="margin-bottom: 0px;">Upload</button>
                </div>
              </div>              
              </form>
            </div>
          </div>
          
  

 







            {{-- <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Listing Images</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form method="POST" action="{{ route('gallery.store') }}" enctype="multipart/form-data"  class="form-inline">
                            <p><small>Note: Total size of uploading files shold not be greater than 8 MB.</small></p>
                            <div class="form-group">
                                <label for="">Image</label>
                                <input type="file" name="image[]"  accept="image/png, image/jpeg, image/jpg, image/gif"  class="form-control" multiple/>
                                <input type="text" name="title" placeholder="Image description (Optional)" class="form-control"/>
                                <select name="status" class="form-control">
                                    <option value="1">Publish</option>
                                    <option value="0">Save in draft</option>
                                </select>
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-success" style="margin-bottom: 0px;">Upload</button>
                            </div>
                        </form>
                        <div class="ln_solid"></div>
 
                        @if(empty($images->count()))
                            <p>No record found.</p>
                        @else
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
 
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Date/Time Added</th>
                                            <th>Operations</th>
                                        </tr>
                                    </thead>
 
                                    <tbody>
                                        @foreach ($images as $image)
                                        <tr>
                                            <td>{{ (($images->currentPage() - 1 ) * $images->perPage() ) + $loop->iteration }}</td>
                                            <td><img class="img-responsive thumbnail_img" src="{{  asset($image->thumbnail) }}" /></td>
                                            <td>
                                                @if($image->status == 1)
                                                    <span class="enable">Active</span>
                                                @else
                                                    <span class="disable">Inactive</span>
                                                @endif
                                            </td>
                                            <td>{{ $image->updated_at->format('F d, Y') }}</td>
                                            <td>
                                               
                                                <form action="{{ route('gallery.destroy', $image->id) }}" method="post"
                                                    onsubmit="return confirm('Are you sure you want to delete this record?');">
                                                    <input type="hidden" name="_method" value="DELETE" />
                                                    {{ csrf_field() }}
                                                    <button type="submit" name="Delete" class="btn btn-sm btn-danger action_btn">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @if($images->total() != 0)
                                    <div>Showing
                                        {{ ($images->currentpage()-1) * $images->perpage()+1}} to
                                        {{(($images->currentpage()-1) * $images->perpage())+$images->count()}} of
                                        {{$images->total()}} records
                                    </div>
                                    {{ $images->links() }}
                                @else
                                    No records found.
                                @endif
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            --}}
           
 @endsection