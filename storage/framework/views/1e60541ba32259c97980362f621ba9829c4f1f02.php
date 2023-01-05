<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Floriano Peixoto</title>
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
            
            <form id="form1" >
                
                <div class="loginIcons">
                    
                    <i class="bi bi-person-fill"></i>
                    <input  type="text" placeholder= "Login">
                    
                    <br>
                    <br>
                    <i class="bi bi-lock-fill"></i>
                    <input type="password" placeholder="Senha">
                    <br>
                    <br>
                    <button type="submit" id="submitlogin"><a href="login.html">Enviar</a> </button>
                    
                    
                    
                </div>
            </form>
        </div>
        <div id="conteudo">
            <div class="head-content" style="text-align: center ;">
                <h2>Buscar Histórico</h2>
            </div>
            
            <div class="cpfForm">

                <label for="codigo" id="labelcod">Digite o CPF do aluno</label>
                <input type="text" id="cpf" placeholder="Ex: 123.456.789-00">
                
                <button type="submit" id="submitCpf" onclick="window.location.href='status.html'" >Enviar</button>
                
            </div>
        </div>
        
        <div id="footer">Powered by Bruno Luiz</div>
    </div>
    
      
</body>

</html><?php /**PATH C:\Users\bfggd\history-checkout\resources\views/index.blade.php ENDPATH**/ ?>