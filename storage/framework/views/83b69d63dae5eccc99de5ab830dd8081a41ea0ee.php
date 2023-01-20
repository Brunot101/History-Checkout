



<?php $__env->startSection("conteudo"); ?>


<form action="<?php echo e(route('cadastrar.criar')); ?>" method="post">
<?php echo csrf_field(); ?>
<i class="bi bi-person-fill"></i>
<input  type="text" name="name" placeholder= "Nome">         
    <br>
    <br>
<i class="bi bi-person-fill"></i>
<input  type="email" name="email" placeholder= "Email">         
    <br>
    <br>
    <i class="bi bi-lock-fill"></i>
    <input type="password" name="password"  placeholder="Senha">
    <br>
    <br>
    <button type="submit" id="submitlogin">Enviar</button>
    </form>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Betânia\History-Checkout\resources\views/auth/cadastrar1.blade.php ENDPATH**/ ?>