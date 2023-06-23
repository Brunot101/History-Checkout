
<?php $__env->startSection('title', 'solicitados'); ?>
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
        <div id="conteudo">


          



          <div class="head-solicitados" style="text-align: center; padding-bottom: 30px;">

            <h2>Históricos Solicitados</h2>
            
            <?php echo $__env->make('auth.includes.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          </div>
            <div class="search">
            <form action="<?php echo e(route('queryHistory')); ?>" method="post">
            <?php echo csrf_field(); ?>
            
              <i class="bi bi-search"></i>
              <input type="text" placeholder="Pesquisar" id="inputSearch" name="aluno">
              <button  class="btn btn-primary" id="searchButton" > Pesquisar</button>
            
              
            </div>
            </form>
            <table class="table table-hover" id="table1">
                
                <thead>
                  <tr>
                    <th scope="col">
                      
                    </th>
                    <th scope="col">Nome</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Pai</th>
                    <th scope="col">Status</th>
                    <th scope="col"> Editar</th>
                    <th scope="col"> Histórico em PDF</th>
                    <th scope="col"> Baixar PDF</th>
                    
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
                      <form id = "viewDelete" >

                        

                          <button type="button"  class="btn btn-primary" data-toggle="modal" data-target="#edit-<?php echo e($historico->id); ?>"  >
                            <i class="bi bi-pencil"></i>
                          </button>
                        
                        

                          <button type="button" id = "deleteeButton" class="btn btn-primary" data-toggle="modal" data-target="#delete-<?php echo e($historico->id); ?>"  >
                            <i class="bi bi-x-square"></i>
                          </button>
                        

                      </form>
                      <?php echo $__env->make('auth.edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                      <?php echo $__env->make('auth.delete', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                      
                    </td>
                    <td>
                    
                    <!-- Botão de salvar o PDF e download -->
                    <form  action="<?php echo e(route('upload_historico',$historico->id)); ?>" method = "POST" enctype="multipart/form-data" >
                        <?php echo csrf_field(); ?>
                        <input class="form-control" type="file" id="<?php echo e($historico->id); ?>" name="pdf">
                        <div id="pdfForm">
                          <label id="formId" for="<?php echo e($historico->id); ?>">
                            <div id = "uploadDiv">
                            
                              <i class="bi bi-file-earmark-arrow-up" id = "uploadIcon"></i>
                            
                          </div>
                          </label>
                        
                          <button  id="pdfButton" class = "btn btn-primary">Salvar</button>
                          
                        </div>
                        
                      </form>
                    
                    </td>
                    <td>
                    <?php if($historico->pdf != null): ?>
                          
                          

                          
                          <a class = "download" href = "<?php echo e(route('auth.download_pdf', $historico->id)); ?>">
                          <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-filetype-pdf" viewBox="0 0 16 16">
<path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z"/>
</svg>
                          </a>

                        
                        
                        <?php endif; ?>
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Betânia\History-Checkout\resources\views/auth/solicitados.blade.php ENDPATH**/ ?>