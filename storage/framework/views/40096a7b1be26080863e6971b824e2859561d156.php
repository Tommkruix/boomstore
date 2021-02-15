<?php $__env->startSection('content'); ?>
  <!-- main -->
  <div class="col">
    <!-- main header -->
    <div class="bg-light lter b-b wrapper-md">
      <div class="row">
        <div class="col-sm-6 col-xs-12">
          <h1 class="m-n font-thin h3 text-black">Dashboard</h1>
        </div>
      </div>
    </div>
    <!-- / main header -->
    <div class="wrapper-md" ng-controller="FlotChartDemoCtrl">
      <!-- stats -->
      <div class="row">
        <div class="col-md-5">
          <div class="row row-sm text-center">
            <div class="col-xs-6">
              <div class="panel padder-v item">
                <div class="h1 text-info font-thin h1"><?php echo e(App\Items::all()->count()); ?></div>
                <span class="text-muted text-xs">Products</span>
              </div>
            </div>
            <div class="col-xs-6">
              <a href class="block panel padder-v bg-success item">
                <span class="text-white font-thin h1 block"><?php echo e(App\Category::all()->count()); ?></span>
                <span class="text-muted text-xs">Categories</span>
              </a>
            </div>
            <div class="col-xs-6">
              <a href class="block panel padder-v bg-info item">
                <span class="text-white font-thin h1 block"><?php echo e(App\user::all()->count()); ?></span>
                <span class="text-muted text-xs">Users</span>
              </a>
            </div>
            <div class="col-xs-6">
              <a href class="block panel padder-v bg-primary item">
                <span class="text-white font-thin h1 block"><?php echo e(App\Tag::all()->count()); ?></span>
                <span class="text-muted text-xs">Tags</span>
              </a>
            </div>
            <div class="col-xs-12 m-b-md">
              <div class="r bg-light dker item hbox no-border">
                <div class="col w-xs v-middle hidden-md">
                  <div ng-init="d3_3=[60,40]" ui-jq="sparkline" ui-options="[60,40], {type:'pie', height:40, sliceColors:['#fad733','#fff']}" class="sparkline inline"></div>
                </div>
                <div class="col dk padder-v r-r">
                  <?php $ac = App\Account::all();
                      $s = 0;
                      foreach ($ac as $key => $value) {
                        $s = $s + $value->price;
                      }?>
                  <div class="text-primary-dk font-thin h1"><span>₦<?php echo e($s); ?></span></div>
                  <span class="text-muted text-xs">Total sales so far</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-7">            
          <div class="list-group list-group-lg list-group-sp">
            <h4 class="font-thin m-t-none m-b text-muted">Newest Products</h4>
            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a herf class="list-group-item clearfix">
              <span class="pull-left thumb-sm avatar m-r">
                <img src="<?php echo e(url('images/products/'.$item->photo)); ?>" alt="...">
                <i class="on b-white right"></i>
              </span>
              <span class="clear">
                <span><?php echo e(str_limit($item->product_name, $limit = 30,$end = '...')); ?></span>
                <small class="text-muted clear text-ellipsis"><?php echo e(str_limit($item->description, $limit = 30, $end = '....... ')); ?></small>
              </span>
            </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
      </div>
      <!-- / stats -->
    </div>
  </div>
  <!-- / main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>