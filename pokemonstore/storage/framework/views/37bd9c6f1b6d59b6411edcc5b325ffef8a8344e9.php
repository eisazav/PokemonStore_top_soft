
<?php $__env->startSection('content'); ?>
<div class="text-center">
  <h1><?php echo e(__('welcome')); ?></h1>
</div>
  <?php $__currentLoopData = $viewData["orders"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="col-md-4 col-lg-3 mb-3">
    <div class="card">
      <div class="card-body text-center">
        <p>
            <?php echo e($order->getId()); ?>

        </p>
        <a href="<?php echo e(route('orders.show', ['id'=> $order->getId()])); ?>"
          class="mt-2 btn bg-primary text-white"> status:<?php echo e($order->getStatus()); ?> id:<?php echo e($order->getId()); ?></a>
      </div>
    </div>
  </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\57316\AppData\Local\Programs\XAMPP\htdocs\PokemonStore_top_soft\pokemonstore\resources\views/home/home.blade.php ENDPATH**/ ?>