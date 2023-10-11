<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("config.php");

    if (empty($_POST['email']) || empty($_POST['senha'])) {
        echo "<script>window.alert('Preencha todos os campos, por favor!')</script>";
    } else {
        $email = mysqli_real_escape_string($conn, trim($_POST['email']));
        $senha = mysqli_real_escape_string($conn, trim($_POST['senha']));

        $sql = "SELECT senha FROM usuario WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $row = mysqli_fetch_assoc($result); // Obtém a senha do resultado da consulta

           
            if ($senha == $row['senha']) {
                // Autenticação bem-sucedida, redirecionar para a página home.php
                echo '<script>';
                echo 'alert("acesso permitido!");';
                echo 'window.location.href = "home.php";'; // Redireciona para a página de cadastro
                echo '</script>';
                exit;
            } else {
                echo "<script>window.alert('Usuário ou senha incorretos!')</script>";
                header("Location: login.php");
            }
        } else {
            echo "<script>window.alert('Erro na consulta SQL!')</script>";
        }
    }
}
?>
