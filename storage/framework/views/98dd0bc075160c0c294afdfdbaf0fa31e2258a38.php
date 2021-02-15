<?php $__env->startSection('content'); ?>
  <!-- main -->
  <div class="col">
    <!-- main header -->
    <div class="bg-light lter b-b wrapper-md">
      <div class="row"><br><br>
        <div class="col-sm-6 col-xs-12">
          <h1 class="m-n font-thin h3 text-black">Payment Setting</h1>
        </div>
      </div>
    </div>
    <!-- / main header -->
    <div class="wrapper-md" ng-controller="FlotChartDemoCtrl">
      <!-- stats -->
      <div class="row">
        <div class="col-md-12">
          <div class="col-md-6">
            <form role="form" method="POST" action="<?php echo e(url('admin/add_tag')); ?>">
              <?php echo e(csrf_field()); ?>

              <div class="form-group">
                <label>Tag Name</label>
                <input type="text" class="form-control" name="name">
              </div>
              <button type="submit" class="btn btn-sm btn-primary">Add Tag</button>
            </form>
          </div>
        </div>
      </div>
      <!-- / stats -->
    </div>
  </div>
  <!-- / main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>