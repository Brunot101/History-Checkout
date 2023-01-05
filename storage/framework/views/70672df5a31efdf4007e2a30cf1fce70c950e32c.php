
<?php $__env->startSection('title', 'solicitados'); ?>
<?php $__env->startSection('menu'); ?>
  
  
          
            <div class="loginIcons">
                
                <nav class="navbar" id="nav" role="navigation">
                    <ul class="nav sidebar-nav">
                        
                        <li>
                            <a href="/login/perfil">Perfil</a>
                        </li>
                        <li>
                            <a href="/login/cadastrar">Cadastrar Histórico</a>
                        </li>
                        <li>
                            <a href="/login/solicitados">Históricos Solicitados</a>
                        </li>
                        <li>
                          <a href="/login">Verificar Histórico</a>
                        </li>
                        <li>
                          <a href="/logout">Sair</a>
                        </li>
                            
                </div>
            
        
<?php $__env->stopSection(); ?>
<?php $__env->startSection('conteudo'); ?>
        <div id="conteudo">


          



          <div class="head-solicitados" style="text-align: center; padding-bottom: 30px;">

            <h2>Históricos Solicitados</h2>
          </div>
            <table class="table table-hover" id="table1">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    
                    <th scope="col">Nome</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Pai</th>
                    <th scope="col">Status</th>
                    <th scope="col"> Editar</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $historicos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $historico): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <th scope="row"></th>
                    
                    <td><?php echo e($historico->aluno); ?></td>
                    <td><?php echo e($historico->cpf); ?></td>
                    <td><?php echo e($historico->pai); ?></td>
                    <td><?php echo e($historico->status); ?></td>
                    <td><!-- Button trigger modal -->
                      <form action="<?php echo e(route('historico.deletar',$historico->id)); ?>" method="post">
                        <?php echo method_field('DELETE'); ?>
                        <?php echo csrf_field(); ?>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-<?php echo e($historico->id); ?>"  >
                          <i class="bi bi-pencil"></i>
                        </button>
                        <button type="submit" class="btn btn-primary"  >
                          <i class="bi bi-x-square"></i>
                        </button>

                      </form>
                      <?php echo $__env->make('auth.edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                      
                    </td>
                    
                      
                     
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                  
                </tbody>
              </table>
               
        </div>
        <body>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
          
        </body>
        
    
<?php $__env->stopSection(); ?>  

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\bfggd\history-checkout\resources\views/auth/solicitados.blade.php ENDPATH**/ ?>