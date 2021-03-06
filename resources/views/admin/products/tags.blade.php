@extends('admin.layouts.app')

@section('content')
  <!-- main -->
  <div class="col">
    <!-- main header -->
    <div class="bg-light lter b-b wrapper-md">
      <div class="row"><br><br>
        @if(Session::has('data'))   
        <div class="container">
          <div class="alert alert-success fade in" id='gritter-notice-wrapper' data-dismiss="alert" aria-label="close">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ Session::get('data') }}
          </div>
        </div>
        @endif
        <div class="col-sm-6 col-xs-12">
          <h1 class="m-n font-thin h3 text-black">Products Tags</h1>
          
        </div>
          <p><button class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">Add Tag</button></p>
          <!-- Modal -->
          <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Add Tag</h4>
                </div>
                <div class="modal-body">
                  
                  <form role="form" method="POST" action="{{ url('admin/add_tag') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                      <label>Tag Name</label>
                      <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                      <label>Select Category</label>
                      <select class="form-control" name="category" required>
                        <option>Choose Category</option>
                        @foreach( $cat as $ca)
                        <option value="{{ $ca->id }}">{{ $ca->name }}</option>
                        @endforeach
                      </select>
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary">Add Tag</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
    <!-- / main header -->
    <div class="wrapper-md" ng-controller="FlotChartDemoCtrl">
      <!-- stats -->
      <div class="row">
        <div class="col-md-12">
          @if($items->count() > 0)
          <div class="table-responsive">
          <table id="demo-datatables-1" class="table table-striped table-nowrap dataTable" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>Tag Name</th>
                <th>Tag Slug</th>
                <th>Category ID</th>
                <th>Option</th>
              </tr>
            </thead>
            <tbody>
              @foreach($items as $item)
              <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->slug }}</td>
                <td>{{ $item->category_id }}</td>
                <td>
                  <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deletemyModal{{ $item->id }}"><i class="fa fa-trash-o "></i></button>
                  <!-- Delete Modal -->
                  <div id="deletemyModal{{ $item->id }}" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Delete Tag</h4>
                        </div>
                        <div class="modal-body">
                            <a href="{{ url('admin/tag/remove/'.$item->id ) }}"><button type="submit" class="btn btn-sm btn-danger">Delete</button></a>
                            <button  class="btn btn-default" data-dismiss="modal" type="submit" class="btn btn-sm btn-primary">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#editmyModal{{ $item->id }}"><i class="fa fa-pencil"></i></button>
                  <!-- Edit Modal -->
                  <div id="editmyModal{{ $item->id }}" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Edit Tag</h4>
                        </div>
                        <div class="modal-body">
                          
                          <form role="form" method="POST" action="{{ url('admin/update_tag') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                              <label>Tag Name</label>
                              <input type="text" class="form-control" name="name" value="{{ $item->name }}">
                              <input type="hidden" class="form-control" name="id" value="{{ $item->id }}">
                            </div>
                            <div class="form-group">
                              <label>Select Category</label>
                              <select class="form-control" name="category" required>
                                <option>Choose Category</option>
                                @foreach( $cat as $ca)
                                <option value="{{ $ca->id }}" selected="@if($ca->id == $item->category_id) selected @endif">{{ $ca->name }}</option>
                                @endforeach
                              </select>
                            </div>
                            <button type="submit" class="btn btn-sm btn-primary">Edit Tag</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          </div>
          {!! $items->render() !!}
          @else
          <div class="no-item"> Sorry No item tag</div>
          @endif
        </div>
      </div>
      <!-- / stats -->
    </div>
  </div>
  <!-- / main -->
@endsection