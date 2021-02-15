<?php $__env->startSection('content'); ?>

<div class="full-width">
    <div class="container main-page">
      <div class="bread-crumb"><a href="">Home</a> / <span class="curr"> Check Out </span>
      </div>
        <div class="col-md-9">
          <?php if($saved_cart_items): ?>
              <?php $sum = 0;
                    $qty = 0;?>
                <?php $__currentLoopData = $saved_cart_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $new = App\Items::where('id',$key)->paginate()->first();
                 ?>
                <?php if($new): ?>
                <?php 
                $sum = $sum + $new->price*$item['quantity'];
                $qty = $qty + $item['quantity']; ?>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php else: ?>
          <?php endif; ?>
              <form role="form" method="POST" action="<?php echo e(url('checkout-now')); ?>">
          <div class="col-md-12">
            <div class="col-md-8">
                <?php echo e(csrf_field()); ?>

                <div class="form-group">
                  <label>Customer Name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo e(Auth::user()->name); ?>" required>
                    <input type="hidden" class="form-control" name="id" value="<?php echo e(Auth::user()->id); ?>">
                </div>
                <div class="form-group">
                  <label>Customer Email</label>
                    <input type="text" class="form-control" name="email" value="<?php echo e(Auth::user()->email); ?>" required>
                </div>
                <div class="form-group">
                  <label>Category Address</label>
                    <input type="text" class="form-control" name="address" value="<?php echo e(Auth::user()->address); ?>" required>
                </div>
                <div class="form-group">
                  <label>Category City</label>
                    <input type="text" class="form-control" name="city" value="<?php echo e(Auth::user()->city); ?>" required>
                </div>
                <div class="form-group">
                  <label>Category State</label>
                    <input type="text" class="form-control" name="state" value="<?php echo e(Auth::user()->state); ?>" required>
                </div>
                <div class="form-group">
                  <label>Category Phone</label>
                    <input type="text" class="form-control" name="phone" value="<?php echo e(Auth::user()->phone); ?>" required>
                </div>
            </div>
          </div>
          <div class="col-md-5"></div>
          <div class="col-md-7 check-out-side">
            <input type="hidden" class="form-control" name="price" value="<?php echo e($sum); ?>" required>
            <input type="hidden" class="form-control" name="quantity" value="<?php echo e($qty); ?>" required>
            <input type="hidden" class="form-control" name="checkout_id" value="<?php echo e(rand(1111111111,9999999999).'SC'); ?>" required>
            <?php if(isset($sum)): ?><h2 class="tprice">Total Price : ₦<?php echo e($sum); ?></h2><?php endif; ?>
            <p><a href="<?php echo e(url('/')); ?>"><button class="btn btn-success">Continue Shopping</button></a>
               <?php if(isset($sum)): ?><button class="btn btn-primary pull-right" type="submit">Checkout Now</button><?php endif; ?>
            </p>
            
          </div>
              </form>
        </div>
        <div class="col-md-3 right-scroll">
          <div class="panel-menu-title">
              <span class="menu-name">Random Products</span>
            </div>
          <div id="random-pro" class="carousel slide carousel-fade" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <?php $__currentLoopData = App\Items::where('category_id',1)->orderBy('created_at','desc')->paginate(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="random-items">
                  <div class="col-xs-4 random-left">
                    <img src="<?php echo e(url('images/products/'.$item->photo)); ?>" alt="siliconstore">
                  </div>
                  <div class="col-xs-8">
                    <h3><a href="<?php echo e(url('product-detail/'.$item->id)); ?>"><?php echo e(str_limit($item->product_name, $limit = 30,$end = '...')); ?></a></h3>
                    <p><?php echo str_limit($item->description, $limit = 30, $end = '....... '); ?></p>
                    <a href="<?php echo e(url('add_cart/'.$item->id)); ?>"><button class="addtocart">ADD TO CART</button></a>
                  </div>
                </div>
                <div class="clear-fix"></div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="row sub-random">
                  <div class="col-xs-6">
                    <a href="#random-pro" role="button" data-slide="prev">
                      <button> Previous</button>
                    </a>  
                  </div>
                  <div class="col-xs-6">
                    <a href="#random-pro" role="button" data-slide="next">
                      <button> Next</button>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item">
                <?php $__currentLoopData = App\Items::where('category_id',2)->orderBy('created_at','desc')->paginate(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="random-items">
                  <div class="col-xs-4 random-left">
                    <img src="<?php echo e(url('images/products/'.$item->photo)); ?>" alt="siliconstore">
                  </div>
                  <div class="col-xs-8">
                    <h3><a href="<?php echo e(url('product-detail/'.$item->id)); ?>"><?php echo e(str_limit($item->product_name, $limit = 30,$end = '...')); ?></a></h3>
                    <p><?php echo str_limit($item->description, $limit = 30, $end = '....... '); ?></p>
                    <a href="<?php echo e(url('add_cart/'.$item->id)); ?>"><button class="addtocart">ADD TO CART</button></a>
                  </div>
                </div>
                <div class="clear-fix"></div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="row sub-random">
                  <div class="col-xs-6">
                    <a href="#random-pro" role="button" data-slide="prev">
                      <button> Previous</button>
                    </a>  
                  </div>
                  <div class="col-xs-6">
                    <a href="#random-pro" role="button" data-slide="next">
                      <button> Next</button>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item">
                <?php $__currentLoopData = App\Items::where('category_id',9)->orderBy('created_at','desc')->paginate(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="random-items">
                  <div class="col-xs-4 random-left">
                    <img src="<?php echo e(url('images/products/'.$item->photo)); ?>" alt="siliconstore">
                  </div>
                  <div class="col-xs-8">
                    <h3><a href="<?php echo e(url('product-detail/'.$item->id)); ?>"><?php echo e(str_limit($item->product_name, $limit = 30,$end = '...')); ?></a></h3>
                    <p><?php echo str_limit($item->description, $limit = 30, $end = '....... '); ?></p>
                    <a href="<?php echo e(url('add_cart/'.$item->id)); ?>"><button class="addtocart">ADD TO CART</button></a>
                  </div>
                </div>
                <div class="clear-fix"></div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="row sub-random">
                  <div class="col-xs-6">
                    <a href="#random-pro" role="button" data-slide="prev">
                      <button> Previous</button>
                    </a>  
                  </div>
                  <div class="col-xs-6">
                    <a href="#random-pro" role="button" data-slide="next">
                      <button> Next</button>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item">
                <?php $__currentLoopData = App\Items::where('category_id',10)->orderBy('created_at','desc')->paginate(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="random-items">
                  <div class="col-xs-4 random-left">
                    <img src="<?php echo e(url('images/products/'.$item->photo)); ?>" alt="siliconstore">
                  </div>
                  <div class="col-xs-8">
                    <h3><a href="<?php echo e(url('product-detail/'.$item->id)); ?>"><?php echo e(str_limit($item->product_name, $limit = 30,$end = '...')); ?></a></h3>
                    <p><?php echo str_limit($item->description, $limit = 30, $end = '....... '); ?></p>
                    <a href="<?php echo e(url('add_cart/'.$item->id)); ?>"><button class="addtocart">ADD TO CART</button></a>
                  </div>
                </div>
                <div class="clear-fix"></div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="row sub-random">
                  <div class="col-xs-6">
                    <a href="#random-pro" role="button" data-slide="prev">
                      <button> Previous</button>
                    </a>  
                  </div>
                  <div class="col-xs-6">
                    <a href="#random-pro" role="button" data-slide="next">
                      <button> Next</button>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item">
                <?php $__currentLoopData = App\Items::where('category_id',11)->orderBy('created_at','desc')->paginate(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="random-items">
                  <div class="col-xs-4 random-left">
                    <img src="<?php echo e(url('images/products/'.$item->photo)); ?>" alt="siliconstore">
                  </div>
                  <div class="col-xs-8">
                    <h3><a href="<?php echo e(url('product-detail/'.$item->id)); ?>"><?php echo e(str_limit($item->product_name, $limit = 30,$end = '...')); ?></a></h3>
                    <p><?php echo str_limit($item->description, $limit = 30, $end = '....... '); ?></p>
                    <a href="<?php echo e(url('add_cart/'.$item->id)); ?>"><button class="addtocart">ADD TO CART</button></a>
                  </div>
                </div>
                <div class="clear-fix"></div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="row sub-random">
                  <div class="col-xs-6">
                    <a href="#random-pro" role="button" data-slide="prev">
                      <button> Previous</button>
                    </a>  
                  </div>
                  <div class="col-xs-6">
                    <a href="#random-pro" role="button" data-slide="next">
                      <button> Next</button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>


      <!-- Women's Clothings -->
      <div class="container other-side women">
        <div class="menu-area"> You May Also Like
          <div class="pull-right">
            <a href="#carouseli" role="button" data-slide="prev">
               <span class="fa fa-angle-left navit"></span>
            </a>  
            <a href="#carouseli" role="button" data-slide="next">
              <span class="fa fa-angle-right navit"></span>
            </a>
          </div>
        </div>
        <div class="col-md-2">
          <div class="left-sidebar">
            <div class="left-sidebar-tit">
              <span class="menu-name">Category</span>
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
          <div id="carouseli" class="carousel slide carousel-fade" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <?php $__currentLoopData = App\Items::where('category_id',1)->orderBy('created_at','desc')->paginate(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="col-sm-3">
                    <div class="product">
                      <img src="<?php echo e(url('images/products/'.$item->photo)); ?>" alt="siliconstore">
                      <div class="item-sub">
                        <h3><a href="<?php echo e(url('product-detail/'.$item->id)); ?>"><?php echo e($item->product_name); ?></a></h3>
                        <p><?php echo str_limit($item->description, $limit = 30, $end = '....... '); ?></p>
                        <p><a href="">Women Clothings </a><span class="pull-right">₦<?php echo e($item->price); ?> </span></p>
                        <div>
                          <a href="<?php echo e(url('add_cart/'.$item->id)); ?>"><button class="addtocart">ADD TO CART</button></a>
                        </div> 
                      </div>
                    </div>
                  </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
              <div class="item">
                <?php $__currentLoopData = App\Items::where('category_id',11)->orderBy('created_at','desc')->paginate(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="col-sm-3">
                    <div class="product">
                      <img src="<?php echo e(url('images/products/'.$item->photo)); ?>" alt="siliconstore">
                      <div class="item-sub">
                        <h3><a href="<?php echo e(url('product-detail/'.$item->id)); ?>"><?php echo e($item->product_name); ?></a></h3>
                        <p><?php echo str_limit($item->description, $limit = 30, $end = '....... '); ?></p>
                        <p><a href="">Women Clothings </a><span class="pull-right">₦<?php echo e($item->price); ?> </span></p>
                        <div>
                          <a href="<?php echo e(url('add_cart/'.$item->id)); ?>"><button class="addtocart">ADD TO CART</button></a>
                        </div> 
                      </div>
                    </div>
                  </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
              <div class="item">
                <?php $__currentLoopData = App\Items::where('category_id',2)->orderBy('created_at','desc')->paginate(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="col-sm-3">
                    <div class="product">
                      <img src="<?php echo e(url('images/products/'.$item->photo)); ?>" alt="siliconstore">
                      <div class="item-sub">
                        <h3><a href="<?php echo e(url('product-detail/'.$item->id)); ?>"><?php echo e($item->product_name); ?></a></h3>
                        <p><?php echo str_limit($item->description, $limit = 30, $end = '....... '); ?></p>
                        <p><a href="">Women Clothings </a><span class="pull-right">₦<?php echo e($item->price); ?> </span></p>
                        <div>
                          <a href="<?php echo e(url('add_cart/'.$item->id)); ?>"><button class="addtocart">ADD TO CART</button></a>
                        </div> 
                      </div>
                    </div>
                  </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
              <div class="item">
                <?php $__currentLoopData = App\Items::where('category_id',9)->orderBy('created_at','desc')->paginate(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="col-sm-3">
                    <div class="product">
                      <img src="<?php echo e(url('images/products/'.$item->photo)); ?>" alt="siliconstore">
                      <div class="item-sub">
                        <h3><a href="<?php echo e(url('product-detail/'.$item->id)); ?>"><?php echo e($item->product_name); ?></a></h3>
                        <p><?php echo str_limit($item->description, $limit = 30, $end = '....... '); ?></p>
                        <p><a href="">Women Clothings </a><span class="pull-right">₦<?php echo e($item->price); ?> </span></p>
                        <div>
                          <a href="<?php echo e(url('add_cart/'.$item->id)); ?>"><button class="addtocart">ADD TO CART</button></a>
                        </div> 
                      </div>
                    </div>
                  </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
              <div class="item">
                <?php $__currentLoopData = App\Items::where('category_id',10)->orderBy('created_at','desc')->paginate(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="col-sm-3">
                    <div class="product">
                      <img src="<?php echo e(url('images/products/'.$item->photo)); ?>" alt="siliconstore">
                      <div class="item-sub">
                        <h3><a href="<?php echo e(url('product-detail/'.$item->id)); ?>"><?php echo e($item->product_name); ?></a></h3>
                        <p><?php echo str_limit($item->description, $limit = 30, $end = '....... '); ?></p>
                        <p><a href="">Women Clothings </a><span class="pull-right">₦<?php echo e($item->price); ?> </span></p>
                        <div>
                          <a href="<?php echo e(url('add_cart/'.$item->id)); ?>"><button class="addtocart">ADD TO CART</button></a>
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