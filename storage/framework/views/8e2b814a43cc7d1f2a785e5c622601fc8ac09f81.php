<?php $__env->startSection('content'); ?>

<div class="full-width">
    <div class="container main-page">
      <div class="bread-crumb"><a href="">Home</a> / <span class="curr"> Cart </span>
      </div>
        <div class="col-md-9">
          <?php if($saved_cart_items): ?>
          <div class="table-responsive">
          <table id="demo-datatables-1" class="table table-striped table-nowrap dataTable" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>Product Name</th>
                <th>Photo</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
                <th>Option</th>
              </tr>
            </thead>
            <tbody>
              <?php $sum = 0;?>
                <?php $__currentLoopData = $saved_cart_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $new = App\Items::where('id',$key)->paginate()->first();
                 ?>
                <?php if($new): ?>
                <tr>
                  <td><a href="<?php echo e(url('product-detail/'.$new->id)); ?>"><?php echo e($new->product_name); ?></a></td>
                  <td class="td-img"><img src="<?php echo e(url('images/products/'.$new->photo)); ?>"></td>
                  <td>₦<?php echo e($new->price); ?></td>
                  <td><?php echo e($item['quantity']); ?>

                    <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#editmyModal<?php echo e($new->id); ?>"><i class="fa fa-pencil"></i></button>
                    <!-- Edit Modal -->
                    <div id="editmyModal<?php echo e($new->id); ?>" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Add More Quantity</h4>
                          </div>
                          <div class="modal-body">
                            
                            <form role="form" method="POST" action="<?php echo e(url('update-cart')); ?>">
                              <?php echo e(csrf_field()); ?>

                              <div class="form-group">
                                <label>Quantity</label>
                                <input type="text" class="form-control" name="quantity" value="<?php echo e($item['quantity']); ?>" required>
                                <input type="hidden" class="form-control" name="id" value="<?php echo e($new->id); ?>" required>
                              </div>
                              <button type="submit" class="btn btn-sm btn-primary">Add Quantity</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>₦<?php echo e($new->price*$item['quantity']); ?></td>
                  <td>
                    <a href="<?php echo e(url('cart/remove/'.$key)); ?>"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button></a>
                    
                  </td>
                </tr>
                <?php $sum = $sum + $new->price*$item['quantity']; ?>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
          </div>
          <?php else: ?>
          <div class="no-item"> Sorry No item In your cart</div>
          <?php endif; ?>
          <div class="col-md-2"></div>
          <div class="col-md-7 check-out-side">
            <!-- <div class="form-group">
              <label for="pwd">Have Coupon Code? Apply Coupon Code Now:</label>
              <input type="password" class="form-control" id="pwd">
              <button class="btn btn-default" type="submit">
                Apply Coupon
              </button>
            </div> -->
            <?php if(isset($sum)): ?><h2 class="tprice">Total Price : ₦<?php echo e($sum); ?></h2><?php endif; ?>
            <p><a href="<?php echo e(url('/')); ?>"><button class="btn btn-success col-sm-4">Continue Shopping</button></a>
               <?php if(isset($sum)): ?><a href="<?php echo e(url('/check-out')); ?>"><button class="col-sm-4 btn btn-primary pull-right">Proceed to checkout</button></a><?php endif; ?>
            </p>
            
          </div>
        </div><br><br><br>
        <div class="col-md-3 right-scroll">
          <div class="panel-menu-title col-md-12">
              <span class="menu-name">Random Products</span>
            </div>
          <div id="random-pro" class="carousel slide carousel-fade" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <?php $__currentLoopData = App\Items::where('category_id',1)->orderBy('created_at','desc')->paginate(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="random-items">
                  <div class="col-xs-4 random-left">
                    <img src="<?php echo e(url('images/products/'.$item->photo)); ?>" alt="boomstore">
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
                    <img src="<?php echo e(url('images/products/'.$item->photo)); ?>" alt="boomstore">
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
                    <img src="<?php echo e(url('images/products/'.$item->photo)); ?>" alt="boomstore">
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
                    <img src="<?php echo e(url('images/products/'.$item->photo)); ?>" alt="boomstore">
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
                    <img src="<?php echo e(url('images/products/'.$item->photo)); ?>" alt="boomstore">
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
                      <img src="<?php echo e(url('images/products/'.$item->photo)); ?>" alt="boomstore">
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
                      <img src="<?php echo e(url('images/products/'.$item->photo)); ?>" alt="boomstore">
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
                      <img src="<?php echo e(url('images/products/'.$item->photo)); ?>" alt="boomstore">
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
                      <img src="<?php echo e(url('images/products/'.$item->photo)); ?>" alt="boomstore">
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
                      <img src="<?php echo e(url('images/products/'.$item->photo)); ?>" alt="boomstore">
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