
<?php $__env->startSection('title', 'Visitors'); ?>
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

                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card-header">
                        <form action="<?php echo e(route('admin.visitors.filter')); ?>" method="get">
                            <div class="row">
                                <div class="col-md-3">
                                    <label>From:</label>
                                    <input type="date" class="form-control" name="from" required />
                                </div>
                                <div class="col-md-3">
                                    <label>To:</label>
                                    <input type="date" class="form-control" name="to" required />
                                </div>
                                <div class="col-md-3">
                                    <br />

                                    <button type="submit" class="btn btn-primary" href="#">
                                        Filter
                                    </button>
                                    <a href="<?php echo e(route('admin.visitors')); ?>" class="btn btn-danger" href="#">
                                        reset
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card">

                        <div class="card-body">
                            <table id="datatable" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Place Name</th>
                                        <th>Number of Visitors</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $__currentLoopData = $places; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $place): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($place->name); ?></td>
                                            <td>
                                                <?php if(isset($filter)): ?>
                                                    <?php echo e(views($place)->period(\CyrildeWit\EloquentViewable\Support\Period::create($startDate, $endDate))->count()); ?>

                                                <?php else: ?>
                                                    <?php echo e(views($place)->count()); ?>

                                                <?php endif; ?>
                                            </td>
                                        </tr>
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

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Administrator\Desktop\projects\laravel_project\touring\tour\resources\views/admin/visitors/index.blade.php ENDPATH**/ ?>