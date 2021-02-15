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
          <h1 class="m-n font-thin h3 text-black">Users</h1>
          
        </div>
          <!-- <p><button class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">Add User</button></p>
          
          <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Add User</h4>
                </div>
                <div class="modal-body">
                  
                 
                  <form role="form" method="POST" action="{{ url('admin/add_user') }}">
                    {{ csrf_field() }}
                    
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class=" control-label">Name</label>

                            <div class="">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="control-label">E-Mail Address</label>

                            <div class="">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                     <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class=" control-label">Password</label>

                            <div class="">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="control-label">Confirm Password</label>

                            <div class="">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                    <button type="submit" class="btn btn-sm btn-primary">Add User</button>
                  </form>
                </div>
              </div>
            </div>
          </div> -->
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
                <th>User Name</th>
                <th>User Email</th>
                <th>User Role</th>
                <!-- <th>Option</th> -->
              </tr>
            </thead>
            <tbody>
              @foreach($items as $item)
              <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->role }}</td>
                <!-- --><td>
                  <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deletemyModal{{ $item->id }}"><i class="fa fa-trash-o "></i></button>
                  
                  <div id="deletemyModal{{ $item->id }}" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Delete User</h4>
                        </div>
                        <div class="modal-body">
                            <a href="{{ url('admin/user/remove/'.$item->id ) }}"><button type="submit" class="btn btn-sm btn-danger">Delete</button></a>
                            <button  class="btn btn-default" data-dismiss="modal" type="submit" class="btn btn-sm btn-primary">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#editmyModal{{ $item->id }}"><i class="fa fa-pencil"></i></button>
                  
                  <div id="editmyModal{{ $item->id }}" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                      
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Edit User</h4>
                        </div>
                        <div class="modal-body">
                          
                          <form role="form" method="POST" action="{{ url('admin/update_user') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                              <label>User Name</label>
                              <input type="text" class="form-control" name="name" value="{{ $item->name }}">
                              <input type="hidden" class="form-control" name="id" value="{{ $item->id }}">
                            </div>
                            <button type="submit" class="btn btn-sm btn-primary">Edit User</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </td> <!---->
              </tr>
              @endforeach
            </tbody>
          </table>
          </div>
          {!! $items->render() !!}
          @else
          <div class="no-item"> Sorry No user</div>
          @endif
        </div>
      </div>
      <!-- / stats -->
    </div>
  </div>
  <!-- / main -->
@endsection