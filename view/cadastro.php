<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cad.css">
    <link rel="stylesheet" href="../util/bootstrap/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../util/fontawesome/fontawesome-free-6.1.1-web/css/all.min.css"> 
    <title>Cadastro</title>
</head>
    <body>
        <div class="cadastro">
            
              <div class="formulario">          
                <form  method="$_GET" action="http://localhost/repositorios/Nice_Cash_PTC_SiteProject/view/registro_engine.php">
                  <div class="estrutura">
                   <label for="nome">Nome de Usuário</label>
                   <input type="text" class="form-control" id="nome" name="nome" aria-describedby="emailHelp" placeholder="Digite seu Nome de Usuário">
                
                   
                   <label for="email">E-mail</label>
                   <input type="text" class="form-control" id="email" name="email" placeholder="Digite um E-mail válido">
                 
                 
                  <label for="senha">Senha</label>
                  <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite uma senha (sem simbolos apenas letras maiúsculas, minúsculas e  números)">
                
               
                  <label for="senha">Repita a senha</label>
                  <input type="password" class="form-control" id="confsenha" name="confsenha" placeholder="Senha">
                
                  <button type="submit" class="btn btn-primary">$ registrar $</button>
                </div>
                 <h5>Já tem login?<a class="logar" href="#">Entre para $ Ganhar $</a></h5>
                
              </form>
          
         
       
        
        <script src="../util/bootstrap/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
        <script src="../util/fontawesome/fontawesome-free-6.1.1-web/js/all.min.js"></script>
    </body>
</html>