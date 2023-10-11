<?php

include 'config.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirm_senha = $_POST['confirm_senha'];

    $sql = "SELECT COUNT(*) FROM usuario WHERE email = '$email'";
    $result = mysqli_query($conn, $sql); 
    
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $total = $row['COUNT(*)'];
    
        if ($total > 0) { 
            echo '<script>';
            echo 'alert("Email já cadastrado!");';
            echo 'window.location.href = "cadastro.php";'; 
            echo '</script>';
}else{
    if($senha==$confirm_senha){

        $query = "insert into usuario(nome, email, senha)values('$nome', '$email', '$senha')";
        $result = $conn->query($query);
        print "<script>window.alert('Usuário cadastrado com sucesso!')</script>";
        echo '<script>';
        echo 'window.location.href = "login.php";'; 
        echo '</script>';
    
    }else{
        print "<script>window.alert('As senhas não batem!')</script>";
    }    

}
}
}

?>