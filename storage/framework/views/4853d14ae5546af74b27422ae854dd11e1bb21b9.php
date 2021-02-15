<?php $__env->startSection('content'); ?>
  <!-- main -->
  <div class="col">
    <!-- main header -->
    <div class="bg-light lter b-b wrapper-md">
      <div class="row">
        <div class="col-sm-6 col-xs-12">
          <h1 class="m-n font-thin h3 text-black">Products</h1>
          
        </div>
          <p><a href="<?php echo e(url('admin/new-product')); ?>"><button class="btn btn-success pull-right">Add Product</button></a></p>
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
                <th>Product Name</th>
                <th>Photo</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Category</th>
                <th>Description</th>
                <th>Option</th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($item->product_name); ?></td>
                <td class="td-img"><img src="<?php echo e(url('images/products/'.$item->photo)); ?>"></td>
                <td>₦<?php echo e($item->price); ?></td>
                <td><?php echo e($item->quantity); ?></td>
                <td><?php echo e($item->category_id); ?></td>
                <td><?php echo e($item->description); ?></td>
                <td>
                  <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deletemyModal<?php echo e($item->id); ?>"><i class="fa fa-trash-o "></i></button>
                  <!-- Delete Modal -->
                  <div id="deletemyModal<?php echo e($item->id); ?>" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Delete Tag</h4>
                        </div>
                        <div class="modal-body">
                            <a href="<?php echo e(url('admin/product/remove/'.$item->id )); ?>"><button type="submit" class="btn btn-sm btn-danger">Delete</button></a>
                            <button  class="btn btn-default" data-dismiss="modal" type="submit" class="btn btn-sm btn-primary">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#editmyModal<?php echo e($item->id); ?>"><i class="fa fa-pencil"></i></button>
                  <!-- Edit Modal -->
                  <div id="editmyModal<?php echo e($item->id); ?>" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Edit Product</h4>
                        </div>
                        <div class="modal-body">
                          
                          <form role="form" method="POST" action="<?php echo e(url('admin/update_product')); ?>" enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group">
                              <label>Product Name</label>
                              <input type="text" class="form-control" name="product_name" value="<?php echo e($item->product_name); ?>" required>
                              <input type="hidden" class="form-control" name="id" value="<?php echo e($item->id); ?>">
                            </div>
                            <div class="form-group">
                              <label>Product Price (₦)</label>
                              <input type="text" class="form-control" name="price" value="<?php echo e($item->price); ?>" required>
                            </div>
                            <div class="form-group">
                              <label>Select Category</label>
                              <select class="form-control" name="category" required>
                                <option>Choose Category</option>
                                <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($ca->id); ?>" selected="<?php if($ca->id == $item->category_id): ?> selected <?php endif; ?>"><?php echo e($ca->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>
                            </div>
                            <div class="form-group">
                              <label>Select Tag</label>
                              <select class="form-control" name="tag" required>
                                <option>Choose Tag</option>
                                <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($tag->id); ?>" selected="<?php if($tag->id == $item->tag_id): ?> selected <?php endif; ?>"><?php echo e($tag->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>
                            </div>
                            <div class="form-group">
                              <label>Product Image</label>
                              <input name="image" type="file" required>
                            </div>
                            <div class="form-group">
                              <label>Description</label>
                              <textarea class="form-control" name="description" required><?php echo e($item->description); ?></textarea>
                            </div>
                            <div class="form-group">
                              <label>Available Quantity</label>
                              <input type="text" class="form-control" name="quantity" value="<?php echo e($item->quantity); ?>" required>
                            </div>
                            <button type="submit" class="btn btn-sm btn-primary">Edit Product</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
          <?php echo $items->render(); ?>

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