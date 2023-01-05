<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('tittle'); ?></title>
    <link href="<?php echo e(asset('styles/style.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
    
    <div class="grid-container">
        
        <div id="topo" font-color>
            <h1 >History Checkout</h1>
        </div>
        
        
        <div class="shadow-none p-3 mb-5 bg-light rounded" id="topo2"></div>
        
        <div id="menu"> 
            
            <?php echo $__env->yieldContent('menu'); ?>
        </div>
        <div id="conteudo">
            <?php echo $__env->yieldContent('conteudo'); ?>
        </div>
        
        <div id="footer">
            <footer>Bruno Luiz &copy;2022</footer>
        </div>
    </div>
    
      
</body>

</html><?php /**PATH C:\Users\bfggd\here\History-Checkout\resources\views/layouts/main.blade.php ENDPATH**/ ?>