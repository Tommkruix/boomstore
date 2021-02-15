<?php $__env->startSection('content'); ?>
  <!-- main -->
  <div class="col">
    <!-- main header -->
    <div class="bg-light lter b-b wrapper-md">
      <div class="row">
        <?php if(Session::has('data')): ?>   
        <div class="container">
          <div class="alert alert-success fade in" id='gritter-notice-wrapper' data-dismiss="alert" aria-label="close">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <?php echo e(Session::get('data')); ?>

          </div>
        </div>
        <?php endif; ?>
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
                  
                  <form role="form" method="POST" action="<?php echo e(url('admin/add_user')); ?>">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group">
                      <label>User Name</label>
                      <input type="text" class="form-control" name="name">
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
          <?php if($items->count() > 0): ?>
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
              <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($item->name); ?></td>
                <td><?php echo e($item->email); ?></td>
                <td><?php echo e($item->role); ?></td>
                <!-- <td>
                  <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deletemyModal<?php echo e($item->id); ?>"><i class="fa fa-trash-o "></i></button>
                  
                  <div id="deletemyModal<?php echo e($item->id); ?>" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Delete User</h4>
                        </div>
                        <div class="modal-body">
                            <a href="<?php echo e(url('admin/user/remove/'.$item->id )); ?>"><button type="submit" class="btn btn-sm btn-danger">Delete</button></a>
                            <button  class="btn btn-default" data-dismiss="modal" type="submit" class="btn btn-sm btn-primary">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#editmyModal<?php echo e($item->id); ?>"><i class="fa fa-pencil"></i></button>
                  
                  <div id="editmyModal<?php echo e($item->id); ?>" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                      
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Edit User</h4>
                        </div>
                        <div class="modal-body">
                          
                          <form role="form" method="POST" action="<?php echo e(url('admin/update_user')); ?>">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group">
                              <label>User Name</label>
                              <input type="text" class="form-control" name="name" value="<?php echo e($item->name); ?>">
                              <input type="hidden" class="form-control" name="id" value="<?php echo e($item->id); ?>">
                            </div>
                            <button type="submit" class="btn btn-sm btn-primary">Edit User</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </td> -->
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
          <?php echo $items->render(); ?>

          <?php else: ?>
          <div class="no-item"> Sorry No user</div>
          <?php endif; ?>
        </div>
      </div>
      <!-- / stats -->
    </div>
  </div>
  <!-- / main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>