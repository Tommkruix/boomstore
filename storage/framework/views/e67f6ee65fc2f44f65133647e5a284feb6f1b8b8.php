<?php $__env->startSection('content'); ?>
  <!-- main -->
  <div class="col">
    <!-- main header -->
    <div class="bg-light lter b-b wrapper-md">
      <div class="row">
        <div class="col-sm-6 col-xs-12">
          <h1 class="m-n font-thin h3 text-black">Upload Bulk Product</h1>
        </div>
      </div>
    </div>
    <!-- / main header -->
    <div class="wrapper-md" ng-controller="FlotChartDemoCtrl">
      <!-- stats -->
      <div class="row">
        <div class="col-md-12">
          <div class="col-md-6">
            <form role="form" method="POST" action="<?php echo e(url('admin/store-bulk-product')); ?>" enctype="multipart/form-data">
              <?php echo e(csrf_field()); ?>

              <div class="form-group">
                <label>Excel File</label>
                <input name="file" type="file" required>
              </div>
              <div class="form-group">
                <label>Select Category</label>
                <select class="form-control" name="category" required>
                  <option>Choose Category</option>
                  <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($ca->id); ?>"><?php echo e($ca->name); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>
              <!-- <div class="form-group">
                <label>Select Tag</label>
                <select class="form-control" name="tag" required>
                  <option>Choose Tag</option>
                  <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($tag->id); ?>"><?php echo e($tag->name); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div> -->
              <button type="submit" class="btn btn-sm btn-primary">Upload Product</button>
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