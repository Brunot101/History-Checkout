
<?php $__env->startSection('title', 'perfil'); ?>
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
<div id = "perfil">
                
                <h2>Perfil </h2>
                <hr>
                <p style="text-align:center"><img src="images/semperfil.png" id="imagemperfil" ></p>
            </div>
            <form action="<?php echo e(route('auth.atualizar')); ?>" method="post">
              <?php echo csrf_field(); ?>
              <?php echo method_field('PUT'); ?>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputNome">Nome</label>
                    <input type="text" class="form-control" id="inputNome" value= "<?php echo e(auth()->user()->name); ?>" name="name" >
                  </div>
                  <div class="form-group col-md-6">
                    <label for="nascimento">Data de nascimento</label>
                    <input type="date" class="form-control" id="nascimento" >
                  </div>
                  <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control"  value= "<?php echo e(auth()->user()->email); ?>" name="email" >
                  </div>
                  
                </div>
                
                <div class="form-row">
                    
                    <div class="form-group col-md-6">
                      <label for="senha">Senha</label>
                      <input type="password" class="form-control" id="senha" value="<?php echo e(auth()->user()->password); ?>" name="password">
                    </div>
                    
                    
                </div>
                <div class="form-row">
                  
                </div>
                
                <button type="submit" class="btn btn-primary" id="editbutton">Salvar</button>
              </form>
            
            </div>


<?php $__env->stopSection(); ?>
            
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Betânia\History-Checkout\resources\views/auth/perfil.blade.php ENDPATH**/ ?>