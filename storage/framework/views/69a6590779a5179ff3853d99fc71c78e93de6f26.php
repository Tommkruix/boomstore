<?php $__env->startSection('content'); ?>

<div class="full-width">
      <!-- Women's Clothings -->
      <div class="container other-side women">
        <div class="menu-area"> <?php echo e($tags->where('id',$id)->first()->name); ?>

        </div>
        <div class="col-md-2">
          <div class="left-sidebar">
            <div class="left-sidebar-tit">
              <span class="menu-name"><?php echo e($tags->where('id',$id)->first()->name); ?></span>
            </div>
            <div class="left-sidebar-body">
              <ul>
                <?php $__currentLoopData = $tags->where('category_id',$tags->where('id',$id)->first()->category_id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><a href="<?php echo e(url('product/tag/'.$tag->id)); ?>"> <?php echo e($tag->name); ?></a></li>
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
                <?php $__currentLoopData = $getc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-3">
                  <div class="product">
                    <img src="<?php echo e(url('images/products/'.$g->photo)); ?>" alt="siliconstore">
                    <div class="item-sub">
                      <h3><a href="<?php echo e(url('product-detail/'.$g->id)); ?>"><?php echo e($g->product_name); ?></a></h3>
                      <p><?php echo str_limit($g->description, $limit = 30, $end = '....... '); ?></p>
                      <p><a href=""><?php echo e($tags->where('id',$id)->first()->name); ?></a><span class="pull-right">₦<?php echo e($g->price); ?> </span></p>
                      <div>
                        <a href="<?php echo e(url('add_cart/'.$g->id)); ?>"><button class="addtocart">ADD TO CART</button></a>
                      </div> 
                    </div>
                  </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
          </div>
        </div>
        </div>
    </div>





</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>