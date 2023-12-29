<?php

require_once 'database.php';

$cls = new database;

include("header.php");
include("protect.php");

$link = $cls->GetLinkMySQLI();
$query = mysqli_query($link, "SELECT * FROM USER WHERE ID_USER = ".$_SESSION['ID_USER']);
$User = mysqli_fetch_array($query);
?>



<body>



    <nav class="navbar naxvbar-expand-sm bg-dark navbar-dark">

        <div class="container-fluid">

            <a class="navbar-brand" href="/"><img class="logo" src="src/logo.webp" alt="Logo"></a>

            <?php
            if ($cls->isLoggedIn()){
                echo '<a href="/exit.php"><button type="button" class="btn btn-danger">Sair</button></a>';
            }
            else{
                echo '<a href="/login.php"><button type="button" class="btn btn-success">Login</button></a>';
            }
            ?>
            

            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo"
                style="cursor:pointer">

                <span class="navbar-toggler-icon"></span>

            </button>

        </div>

    </nav>


    <main class="linha">

        <div id="demo" class="offcanvas bg-dark offcanvas-start">
            <div class="offcanvas-header text-white">
                <h3 class="offcanvas-title"><?php echo base64_decode($User[1]); ?></h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
    
                
                <div class="btn-group-vertical menu">
                    <a href="https://sge-body.ebs.great-site.net/dashboards.php"><button type="button"
                        class="btn btn-secondary">Dashboards</button></a>
    
                    <a href="https://sge-body.ebs.great-site.net/preco.php"><button type="button"
                            class="btn btn-secondary">Precificação</button></a>
        
                    <a href="https://sge-body.ebs.great-site.net/confg.php"><button type="button"
                            class="btn btn-secondary">Configurações</button></a>
                </div>
                
            </div>
        </div>

        <div class="cont">