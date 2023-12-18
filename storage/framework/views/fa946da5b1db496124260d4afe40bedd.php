<div class="modal fade" id="update<?php echo e($id); ?>">
    <div class="modal-dialog">
        <form method="POST" action="<?php echo e(route('admin.users.update', ['user' => $id])); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('patch'); ?>
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">UPDATE</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input name="name" type="text" class="form-control" value="<?php echo e($user->name); ?>"
                            required />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input name="email" type="email" class="form-control" value="<?php echo e($user->email); ?>"
                            required />
                    </div>

                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<?php /**PATH C:\Users\Administrator\Desktop\projects\laravel_project\touring\tour\resources\views/admin/users/update.blade.php ENDPATH**/ ?>