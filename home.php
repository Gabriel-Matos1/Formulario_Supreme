<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <title>Bootstrap Example</title>
    <link rel="stylesheet" type="text/css" href="estilo_home.css">
    <link rel="stylesheet" type="text/css" href="home_menu.css">

</head>
<body>
<div class="menu-toggle" id="menuToggle">&#9776;</div>
    <nav class="menu" id="menu">
        <ul>
            <li><a href="#">Página Inicial</a></li>
            <li><a href="#">Seu perfil</a></li>
            <li><a href="#">Transações</a></li>
            <li><a href="#">Contatos</a></li>
            <li><a href="#">Ajuda</a></li>
            <li><a href="deslog.php">LogOut</a></li>
        </ul>
        <input type="button" id="sair" class="sair" value="X">
    </nav>
    <div class="content" id="content">

        <div class="conteiner_perfil">
            <div class="nav">
                <div class="cabecario_perfil">
                    <img src="luffy.jpg" class="foto_perfil">   
                    <p class="nome">Monkey D. Luffy</p>
                </div>
                <div class="segunda_parte_conteiner">


                    <div class="caixa1">
                        <div class="descricao"> 
                            <h1 class="titulo">Sobre mim:</h1>
                            <p>Eu sou o homem que vai se tornar o rei dos piratas!<p>
                            <h1>Ocupação:</h1>
                            <p>Capitão dos Piratas do Chapéu de Palha<p>
                            <h1>Comida preferida:</h1>
                            <p>Carne<p>
                        </div> 
                </div>

                    <div class="caixa1">
                        <div class="salario">
                            <h1 class="titulo">Últimas transações:</h1>
                            <div class="caixa"> 
                                    <div class="contatos">
                                        <p><img src="nami.png" class="foto_contatos"><span class="nome_contato">Nami - 09/10/23</span></p>   
                                        <p><span class="destacar">Débito recebido:</span> 05.00 berries</p>
                                        <p><span class="destacar">Descrição:</span> valor da mesada. Não gastem tudo de uma vez, bocós!</p>
                                    </div> 
                                <div class="caixa"> 
                                    <div class="contatos">
                                        <p><img src="nami.png" class="foto_contatos"><span class="nome_contato">Nami - 08/10/23</p>   
                                        <p><span class="destacar">Débito recebido:</span> 05.00 berries</p>
                                        <p><span class="destacar">Descrição:</span> valor da mesada. Não gastem tudo de uma vez, bocós!</p>
                                    </div> 
                                </div>
                                <p class="vermais"><a href="#"><span>Ver Mais</span></a></p>
                            </div>
                        </div>
                    </div>

                    <div class="caixa1">
                        <div class="aba_contatos">
                                    <h1>Contatos</h1>
                                    <a href="#"><img src="nami.png" class="foto_contatos"><span class="nome_contato">Nami </span>
                                    <p class="sub">Navegadora do bando dos Chapéus de Palha</p>  
                                    <a href="#"><p><img src="zoro.jpeg" class="foto_contatos"><span class="nome_contato">Roronoa Zoro</span></p></a>            
                                    <p  class="sub">Mestre Espadachin</p>
                                    <a href="#"><p><img src="robin.jpeg" class="foto_contatos"><span class="nome_contato">Nico Robin</span></p></a>
                                    <p  class="sub">Arqueóloga</p>           
                        </div> 
                        <p class="vermais"><a  href="#">Ver Mais</a></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="home.js"></script>
</body>
</html>