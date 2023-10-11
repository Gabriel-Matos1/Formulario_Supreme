<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <p class="Title">SUPREMO</p>
    <div class="conteiner">
        <div class="titulo">    
            <p class="titulo2">Crie uma conta!</p>
        </div>
        <div class="formulario">
            <form action="confirmar.php" method="post">
                <p class="text2">Nome</p>
                <input type="text" class="campo2" name="nome" required>
                <p class="text2">Email</p>
                <input type="email" class="campo2" name="email" required>
                <p class="text2">Senha</p>
                <input type="password" class="campo2" name="senha" required>
                <p class="text2">Confirme Sua Senha</p>
                <input type="password" class="campo2" name="confirm_senha" required>
                
                <p>
                <input type="submit" class="btn" value="Cadastrar">
                <p class="text2">Já tem uma conta? Então clique <a class="a" href="login.php">aqui e faça login!</a></p> 
            </form>
        </div>
    </div>
</body>
</html>
