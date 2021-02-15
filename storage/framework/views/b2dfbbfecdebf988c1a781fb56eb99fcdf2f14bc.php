<?php $__env->startSection('content'); ?>

<div class="full-width">
      <!-- Women's Clothings -->
      <div class="container other-side women">
        <div class="menu-area"> Search Results
        </div>
        <div class="col-md-2">
          <div class="left-sidebar">
            <div class="left-sidebar-tit">
              <span class="menu-name">All Categories</span>
            </div>
            <div class="left-sidebar-body">
              <ul>
                <?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><a href="<?php echo e(url('product/category/'.$cat->id)); ?>"> <?php echo e($cat->name); ?></a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-10 product-list">
          <div id="carouseli">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <?php 
                if(count($items) > 0){
                    foreach ($items as $key => $k) { 
                      $g = App\Items::find($k);
                    ?>
                      
                      <div class="col-sm-3">
                        <div class="product">
                          <img src="<?php echo e(url('images/products/'.$g->photo)); ?>" alt="boomstore">
                          <div class="item-sub">
                            <h3><a href="<?php echo e(url('product-detail/'.$g->id)); ?>"><?php echo e($g->product_name); ?></a></h3>
                            <p><?php echo str_limit($g->description, $limit = 30, $end = '....... '); ?></p>
                            <p><a href=""><?php echo e($cats->where('id',$id)->first()->name); ?> </a><span class="pull-right">₦<?php echo e($g->price); ?> </span></p>
                            <div>
                              <a href="<?php echo e(url('add_cart/'.$g->id)); ?>"><button class="addtocart">ADD TO CART</button></a>
                            </div> 
                          </div>
                        </div>
                      </div>
                    <?php }
                  }else
                  { ?>
                    <div class="alert alert-warning" style="margin-top:15px"> Sorry, no match found!!!</div>
                 <?php  }
                ?>
              </div>
          </div>
        </div>
        </div>
    </div>





</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>