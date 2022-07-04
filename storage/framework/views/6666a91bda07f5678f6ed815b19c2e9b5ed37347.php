<?php $__env->startSection('title'); ?>
    Store
<?php $__env->stopSection(); ?>
<?php $__env->startSection('titlePage'); ?>
    Show Categore Page
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
                            Categore Name
                        </th>
                        <th style="width: 30%">
                            Categore dec
                        </th>

                    </tr>
                    </thead>
                    <?php $__currentLoopData = $Categore; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Categore): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tbody>
                        <tr>
                            <td>
                                <?php echo e($Categore->id); ?>

                            </td>
                            <td>
                                <?php echo e($Categore->name); ?>

                            </td>
                            <td>
                                <?php echo e($Categore->dec); ?>

                            </td>

                            <td class="project-actions text-right">

                                <a class="btn btn-info btn-sm" href="<?php echo e(route('categore.edit',[$Categore->id])); ?>">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <form class=""  method="post" action="<?php echo e(route('categore.destroy',[$Categore->id])); ?>">
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
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Mu7and\Desktop\store\store\resources\views/admin/categore/index.blade.php ENDPATH**/ ?>