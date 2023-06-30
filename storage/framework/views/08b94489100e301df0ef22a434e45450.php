

<?php $__env->startSection('content'); ?>

<!-- Content Wrapper.Contains page content -->

<div class="content-wrapper">

 <!-- Main content -->
 <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
      
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">All Users</h3>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
              <!-- Add user button -->
                <a href="<?php echo e(URL::to('admin/add-user')); ?>" class='btn btn-primary text-white mb-3'>Add User</a>
              
              <table id="example1" class="table table-hover table-bordered ">
                <thead class="table-dark">
                <tr>
                  <th>SL</th>
                  <th>Name</th>
                  <th> Email</th>
                  <th>Role</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                  <tr>
                    <td><?php echo e($row->id); ?></td>
                    <td><?php echo e($row->username); ?></td>
                    <td><?php echo e($row->email); ?></td>
                    <td><?php echo e($row->role); ?></td>
                    <td>
                      <a href="<?php echo e(URL::to('admin/edit-user/'.$row->id)); ?>" class="btn btn-sm btn-info">Edit</a>
                      <a href="<?php echo e(URL::to('admin/delete-user/'.$row->id)); ?>" class="btn btn-sm btn-danger">Delete</a>
                   
                    </td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
             
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\product_comment_full_system\resources\views/admin/user/index.blade.php ENDPATH**/ ?>