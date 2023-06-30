

<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
<div class="container mt-5 mb-5">

    <h2>Create Product</h2>
    <hr>

    <?php if($errors->any()): ?>
    <ul>
        <?php echo implode('',$errors->all('<li>
            <span class="text-danger">:message</span></li>')); ?>

    </ul>
    
    <?php endif; ?>
    <form action="<?php echo e(route('products.store')); ?>" enctype="multipart/form-data" method="POST">
        <?php echo csrf_field(); ?>

        <div class="mb-3">
            <label for="picture" class="form-label">Choose Picture</label>
            <input class="form-control" type="file" name="picture" id="picture">
          </div>

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Enter title">
          </div>

          <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" name="price" id="price" placeholder="Enter price">
          </div>

          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" placeholder="Enter Description"></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Create Product</button>

    </form>

</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\product_comment_full_system\resources\views/product/create.blade.php ENDPATH**/ ?>