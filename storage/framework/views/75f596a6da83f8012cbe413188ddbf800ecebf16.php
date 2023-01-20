<?php if($message = Session::get('delete success')): ?>

<div class="alert alert-success alert-block">

    <?php echo e($message); ?>

</div>
<?php endif; ?>



<?php if($message = Session::get('register success')): ?>

<div class="alert alert-success alert-block">

    <?php echo e($message); ?>

</div>
<?php endif; ?><?php /**PATH C:\Users\Betânia\History-Checkout\resources\views/auth/includes/messages.blade.php ENDPATH**/ ?>