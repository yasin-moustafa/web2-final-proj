<?php $__env->startSection('title'); ?>
    Store
<?php $__env->stopSection(); ?>
<?php $__env->startSection('titlePage'); ?>
    Show Products Page
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Projects</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                    <tr>
                        <th style="width: 1%">
                            #
                        </th>
                        <th style="width: 20%">
                            Products Name
                        </th>
                        <th style="width: 30%">
                             Products Image
                        </th>
                        <th>
                            Description
                        </th>
                        <th style="width: 8%" class="text-center">
                            Price
                        </th>
                        <th style="width: 20%">
                        </th>
                    </tr>
                    </thead>
                    <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tbody>
                    <tr>
                        <td>
                            <?php echo e($product->id); ?>

                        </td>
                        <td>
                            <?php echo e($product->name); ?>

                        </td>
                        <td>
                            <img src="<?php echo e(asset('storage/'.$product->image)); ?>" alt="product image" style="width: 80px ;height: 60px ; border-radius: 1px">
                        </td>
                        <td class="project_progress">
                            <?php echo e($product->dec); ?>

                        </td>
                        <td class="project-state">
                            <?php echo e($product->price); ?>

                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="<?php echo e(route('product.show',[$product->id])); ?>">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </a>
                            <a class="btn btn-info btn-sm" href="<?php echo e(route('product.edit',[$product->id])); ?>">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <form class=""  method="post" action="<?php echo e(route('product.destroy',[$product->id])); ?>">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('delete'); ?>
                                <button type="submit" class="btn btn-sm btn-danger inline "><i class="fas fa-pencil-alt">
                                    </i>
                                    Delete</button>

                            </form>

                        </td>

                    </tr>

                    </tbody>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <form method="get" action="<?php echo e(route('product.index')); ?>">
                        <label for="item" style="padding: 5px;color: green">Number item</label>
                        <select name="item" id="item" style="border:2px green solid;border-radius: 4px ; padding: 5px" >
                            <option value="1">1</option>
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="all">all</option>
                        </select>

                        <input type="submit" name="number item page" >
                    </form>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Mu7and\Desktop\store\store\resources\views/admin/product/index.blade.php ENDPATH**/ ?>