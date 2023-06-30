
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Order Details</title>
      <!-- Bootstrap-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
 
      <!-- Font awesome -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
</head>
<body>
  
    

<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
    <h1 class="text-center">Users Order Details</h1>
<br>


<div class="container">
    <div class="row">
        <div class="col-md-12" style="display:flex">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Product Id</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Item Image</th>
                        <th scope="col">Price</th>
                        <th scope="col">Payment Method</th>
                        <th scope="col">Payment Status</th>
                        <th scope="col">Address</th>

                    </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $totalOrders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orders): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th scope="row"><?php echo e($orders->id); ?></th> 
                               <td><?php echo e($orders->username); ?></td>
                               <td>
                                <a href="products/<?php echo e($orders->id); ?>">
                                    <img src="<?php echo e($orders->picture); ?>" 
                                    style="object-fit: contain;width:100px;min-width:10vh;height:70px;"
                                    class="trending-image" alt="">
                                </a>
                               </td>   
                                <td><?php echo e($orders->price); ?></td>
                                <td><?php echo e($orders->payment_method); ?></td>
                                <td><?php echo e($orders->payment_status); ?></td>
                                <td><?php echo e($orders->address); ?></td>



                               
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
        </div>
    </div>
</div>


</div>

<?php $__env->stopSection(); ?>


<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\product_comment_full_system\resources\views/admin/totalorders.blade.php ENDPATH**/ ?>