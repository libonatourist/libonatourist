
<?php $__env->startSection('title', 'Places'); ?>
<?php $__env->startSection('body'); ?>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-10">
                    <h1>
                        <?php echo $__env->yieldContent('title'); ?>
                    </h1>
                </div>
                <div class="col-sm-2">
                    <a href="<?php echo e(route('admin.places.create')); ?>" type="button" class="btn btn-primary float-right">
                        <i class="fa fa-plus-circle"></i>
                        Create
                    </a>

                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-body">
                            <table id="datatable" class="table table-bordered table-hover">
                                <thead>
                                    <tr>

                                        <th>Category</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Posted by</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $page = 'place';
                                    ?>
                                    <?php $__currentLoopData = $places; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $place): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                            $id = $place->id;
                                        ?>
                                        <tr>

                                            <td><?php echo e($place->category->name); ?></td>
                                            <td><?php echo e($place->name); ?></td>
                                            <td><?php echo e($place->address); ?></td>
                                            <td><?php echo e(@$place->user->name); ?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="<?php echo e(route('admin.places.edit', ['place' => $id])); ?>"
                                                        type="button" class="btn btn-primary btn-sm">
                                                        <i class="fa fa-edit"></i> Edit
                                                    </a>
                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                        data-target="#delete<?php echo e($id); ?>">
                                                        <i class="fa fa-trash"></i> Delete
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>

                                        <?php echo $__env->make('delete_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>

    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Administrator\Desktop\projects\laravel_project\touring\tour\resources\views/admin/places/index.blade.php ENDPATH**/ ?>