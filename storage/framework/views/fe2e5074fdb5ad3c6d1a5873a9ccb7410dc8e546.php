<?php if($message = Session::get('404')): ?>
<div class="alert alert-danger alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong><?php echo e($message); ?></strong>
</div>
<?php endif; ?><?php /**PATH C:\Users\bfggd\history-checkout\resources\views/flash-messages.blade.php ENDPATH**/ ?>