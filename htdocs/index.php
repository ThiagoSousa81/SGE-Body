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
            

            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#demo"
                style="cursor:pointer">

                <span class="navbar-toggler-icon"></span>

            </button>

        </div>

    </nav>


    <main class="linha">

        <div id="demo" class="collapse menu">

            <h3><?php echo base64_decode($User[1]); ?></h3>

            <hr>

            <a href="https://sge-body.ebs.great-site.net/dashboards.php"><button type="button"
                    class="btn btn-dark">Dashboards</button></a>

            <a href="https://sge-body.ebs.great-site.net/preco.php"><button type="button"
                    class="btn btn-dark">Precificação</button></a>

            <a href="https://sge-body.ebs.great-site.net/confg.php"><button type="button"
                    class="btn btn-dark">Configurações</button></a>

        </div>

        <div class="cont">