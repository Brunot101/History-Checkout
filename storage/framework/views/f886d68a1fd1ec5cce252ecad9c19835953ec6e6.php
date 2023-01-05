
<?php $__env->startSection('title', 'login'); ?>
<?php $__env->startSection('menu'); ?>

<div class="loginIcons">
                
    <nav class="navbar" id="nav" role="navigation">
        <ul class="nav sidebar-nav">
            
            <li>
                <a href = "<?php echo e(route('login.perfil')); ?>">Perfil</a>
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
                <a href="index.html">Sair</a>
            </li>
                
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>
<div id = "perfil">
                
                <h2>Perfil</h2>
                <hr>
                <p style="text-align:center"><img src="images/semperfil.png" id="imagemperfil" ></p>
            </div>
            <form>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputNome">Nome</label>
                    <input type="text" class="form-control" id="inputNome" >
                  </div>
                  <div class="form-group col-md-6">
                    <label for="nascimento">Data de nascimento</label>
                    <input type="date" class="form-control" id="nascimento" >
                  </div>
                  <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" >
                  </div>
                  
                </div>
                
                <div class="form-row">
                    
                    <div class="form-group col-md-6">
                      <label for="senha">Senha</label>
                      <input type="password" class="form-control" id="senha" >
                    </div>
                    
                    
                </div>
                <div class="form-row">
                  
                </div>
                
                <button type="submit" class="btn btn-primary" id="editbutton">Salvar</button>
              </form>
            
            </div>


<?php $__env->stopSection(); ?>
            
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\bfggd\history-checkout\resources\views/perfil.blade.php ENDPATH**/ ?>