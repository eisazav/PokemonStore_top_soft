
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ingresa</div>
                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('orders.save')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <label for="status">Status</label>
                        <input type="text" class="form-control mb-2" name="status" value="<?php echo e(old('status')); ?>" />
                        <label for="dateOrder">Order date</label>
                        <input type="date" class="form-control mb-2" name="dateOrder" value="<?php echo e(old('dateOrder')); ?>" />
                        <label for="dateDelivery">Delivery date</label>
                        <input type="date" class="form-control mb-2" name="dateDelivery" value="<?php echo e(old('dateDelivery')); ?>" />
                        <label for="paymentMethod">Payment Method</label>
                        <input type="text" class="form-control mb-2" name="paymentMethod" value="<?php echo e(old('paymentMethod')); ?>" />
                        <input type="submit"  value="Create" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\57316\AppData\Local\Programs\XAMPP\htdocs\PokemonStore_top_soft\pokemonstore\resources\views/orders/create.blade.php ENDPATH**/ ?>