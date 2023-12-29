<?php

require_once 'database.php';

$cls = new database;



if(isset($_POST['email']) || isset($_POST['pswd']))

{

    $user = addslashes($_POST['email']);

    $pass = addslashes($_POST['pswd']);

    

    if(!empty($user) && !empty($pass))

    {

        $pass = sha1($pass);         
          
         
        if ($cls->login($user, $pass))
        {

            header("Location: preco.php");
            
        }

        else

        {

            echo "<script>alert('Usuário ou senha incorretos!');</script>";

        }

         

         /*$query = mysqli_query($conexao, "SELECT * FROM USER WHERE EMAIL_USER = '".$user."' AND HASH_USER = '".$pass."'");

         if (mysqli_num_rows($query) == 1) {

            session_set_cookie_params(1800); //Define o tempo limite da sessão 30 min

            session_start();

            $User = mysqli_fetch_array($query);

            $_SESSION['ID_USER'] = $User[0];

            header('Location: /');

         }*/

    }

    

}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <script type="text/javascript" src="chrome-extension://mdnleldcmiljblolnjhpnblkcekpdkpa/libs/customElements.js"
        class="__REQUESTLY__SCRIPT"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Body Suplementos</title>
    <link rel="shortcut icon" href="src/logo.webp">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link href="/src/login.css" rel="stylesheet">
    
</head>

<style>

</style>

<body>

    <main>
        <h2>Faça login para continuar</h2>
        <form action="login.php" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="text" class="form-control" id="email" placeholder="e-mail@mail.com" name="email">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Senha:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Senha123!@" name="pswd">
            </div>

            <button type="submit" class="btn btn-primary">LOGIN</button>
        </form>
        <p>Desenvolviddo por <a href="https://ebs-systems.epizy.com/" target="_blank">EBS Systems</a></p>
    </main>

</body>

</html>