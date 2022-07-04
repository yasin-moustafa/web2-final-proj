<?php $__env->startSection('title'); ?>
    Store
<?php $__env->stopSection(); ?>
<?php $__env->startSection('titlePage'); ?>
    Edit Products Page
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit product</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="<?php echo e(route('product.update',[$product->id])); ?>" enctype="multipart/form-data">

                            <?php echo csrf_field(); ?>

                            <!--use support put in htmll-->
                             <input type="hidden" name="_method" value="put">


                                <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Products name</label>
                                    <input name="name" value="<?php echo e($product->name); ?>" type="text" class="form-control" id="name" placeholder="Enter products name">
                                </div>
                                <div class="form-group">
                                    <label for="dec">Description</label>
                                    <textarea name="dec"  class="form-control" rows="3" placeholder="Enter description..."><?php echo e($product->dec); ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="number" name="price" value="<?php echo e($product->price); ?>" class="form-control" id="price" placeholder="Enter description">
                                </div>
                                <div class="form-group">
                                    <label for="categores_id">Select</label>
                                    <select name="categores_id" class="form-control">
                                        <option >No choice</option>
                                        <?php $__currentLoopData = \App\Models\Categore::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($product->categores_id); ?> <?php if(old($product->categores_id) == $product->id): ?> selected <?php endif; ?>"><?php echo e($product->categores_id); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Product Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" clsas="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose image</label><
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div><br>
                                        <img src="<?php echo e(asset('storage/'.$product->image)); ?>" alt="product image" style="display: block; width: 80px ;height: 60px ; border-radius: 1px">                                        </div>

                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>

                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Mu7and\Desktop\store\store\resources\views/admin/product/editProduct.blade.php ENDPATH**/ ?>