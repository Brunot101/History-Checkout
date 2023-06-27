
<?php $__env->startSection('title', 'Home'); ?>
<?php $__env->startSection('menu'); ?>

<div class="loginIcons">
    
    <?php if($errors->any()): ?>
    <div class="alert alert-danger" id="dangerLogin">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <?php endif; ?>
    <?php if(session('invalido')): ?>
    <div class="alert alert-danger" id="invalidLogin">
        <?php echo e(session('invalido')); ?>

    </div>
    <?php endif; ?>
    <form action = "<?php echo e(route('auth')); ?>" method = "POST">
    <?php echo csrf_field(); ?>
    
    <input  type="email" name="email" placeholder= "Email" id="email" autocomplete = "off">
    <i class="bi bi-person-fill"></i>         
    <br>
    <br>
    
    <input type="password" name="password"  placeholder="Senha" id="password"  autocomplete = "off">
    <i class="bi bi-lock-fill"></i>
    <br>
    <br>
    <button type="submit" class="btn btn-outline-primary" id="submitlogin">Login</button>
    </form>
                                 
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>
<div class="head-content" style="text-align: center ;">
                
                <h2>Buscar Histórico</h2>
                <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


                <?php echo $__env->yieldContent('content'); ?>
            </div>
            
            
            <div class="cpfForm">
                <form action="<?php echo e(route('status')); ?>" method="POST">
                <label for="codigo" id="labelcod">Digite o CPF do aluno</label>
                <input type="text" id="cpf" placeholder="Ex: 123.456.789-00" name="cpf" >
                
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('POST'); ?>
                    
                    <button type="submit" class="btn btn-primary" id="submitCpf" >Enviar</button>

                   
                </form>
                
            </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Betânia\History-Checkout\resources\views/welcome.blade.php ENDPATH**/ ?>