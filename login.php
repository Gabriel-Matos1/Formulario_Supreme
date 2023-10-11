
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <p class="Title"> SUPREMO</p>
    <div class="conteiner">
        <div class="titulo">    
            <p class="titulo2"> FAÇA LOGIN</p>
        </div>
        <div class="formulario">
           
        
        
        <form action="inserir.php" method="post">
                <p class="email">Email</p>
                <input type="email" class="campo" name="email" required>
                <p class="text">Senha</p>
                <input type="password" id="senha" class="campo" name="senha" required>
                <p class="visualizar">
                    <input type="checkbox" id="mostrarSenha"> Mostrar Senha
                </p>
                <p>
        
                <input type="submit" class="btn" value="Entrar">

                    <p class="text">Não tem login? Então clique <a class="a" href="cadastro.php">aqui e crie um!</a></p> 
                </p>
            </form>
        </div>
    </div>
    <script src="test.js" type="text/javascript"></script>
</body>
</html>