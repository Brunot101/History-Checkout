
<?php $__env->startSection('title', 'login'); ?>
<?php $__env->startSection('menu'); ?>


<div class="loginIcons">
                
    <nav class="navbar" id="nav" role="navigation">
        <ul class="nav sidebar-nav">
            
            
            <li>
                <a href = "login/perfil">Perfil</a>
            </li>
            <li>
                <a href="cadastrar.html">Cadastrar Histórico</a>
            </li>
            <li>
                <a href="solicitados.html">Históricos Solicitados</a>
            </li>
            <li>
                <a href="login.html">Verificar Histórico</a>
            </li>
            <li>
                <a href="{route({'login.logout'})}">Sair</a>
            </li>
                
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>
<div class="head-content" style="text-align: center ;">
                <h2>Buscar Histórico</h2>
            </div>
            
            <div class="cpfForm">

                <label for="codigo" id="labelcod">Digite o CPF do aluno</label>
                <input type="text" id="cpf" placeholder="Ex: 123.456.789-00">
                
                <button type="submit" id="submitCpf" onclick="window.location.href='status.html'" >Enviar</button>
                
            </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\bfggd\history-checkout\resources\views/login.blade.php ENDPATH**/ ?>