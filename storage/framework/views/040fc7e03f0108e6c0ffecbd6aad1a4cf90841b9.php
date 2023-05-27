
<?php $__env->startSection('title', 'login'); ?>
<?php $__env->startSection('menu'); ?>


<div class="loginIcons">
                
    <nav class="navbar" id="nav" role="navigation">
        <ul class="nav sidebar-nav">
            
            
            <li>
                <a href = "/login/perfil">Perfil
                <i class="bi bi-person"></i>
                </a>
            </li>
            <li>
                <a href="/login/cadastrar">Cadastrar Histórico
                <i class="bi bi-folder-plus"></i>
                </a>
            </li>
            <li>
                <a href="/login/solicitados">Históricos Solicitados
                <i class="bi bi-file-earmark-check" ></i>
                </a>
            </li>
            <li>
                
                <a href="/login">Verificar Histórico
                <i class="bi bi-search"></i>
                </a>
                
            </li>
            <li>
                <a href="/logout">Sair
                <i class="bi bi-box-arrow-left"></i>
                </a>
            </li>
                
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
    <input type="text" id="cpf" placeholder="Ex: 123.456.789-00" name="cpf">
    
        <?php echo csrf_field(); ?>
        <?php echo method_field('POST'); ?>
        <button type="submit" class="btn btn-primary" id="submitCpf" >Enviar</button>
    </form>
    
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Betânia\History-Checkout\resources\views/auth/login.blade.php ENDPATH**/ ?>