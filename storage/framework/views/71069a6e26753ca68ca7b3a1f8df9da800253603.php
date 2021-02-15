<?php $__env->startSection('content'); ?>
  <!-- main -->
  <div class="col">
    <!-- main header -->
    <div class="bg-light lter b-b wrapper-md">
      <div class="row"><br><br>
        <div class="col-sm-6 col-xs-12">
          <h1 class="m-n font-thin h3 text-black">Income</h1>
          
        </div>
      </div>
    </div>
    <!-- / main header -->
    <div class="wrapper-md" ng-controller="FlotChartDemoCtrl">
      <!-- stats -->
      <div class="row">
        <div class="col-md-12">
          <?php if($income->count() > 0): ?>
          <div class="table-responsive">
          <table id="demo-datatables-1" class="table table-striped table-nowrap dataTable" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>Customer Name</th>
                <th>Checkout ID</th>
                <th>Price</th>
                <th>Quantity</th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $income; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e(App\User::find($item->user_id)->name); ?></td>
                <td><?php echo e($item->checkout_id); ?></td>
                <td>₦<?php echo e($item->price); ?></td>
                <td><?php echo e($item->quantity); ?></td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
          </div>
          <?php echo $income->render(); ?>

          <?php else: ?>
          <div class="no-item"> Sorry No item</div>
          <?php endif; ?>
        </div>
      </div>
      <!-- / stats -->
    </div>
  </div>
  <!-- / main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>