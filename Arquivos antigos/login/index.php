<!DOCTYPE html>
<?php
require_once '../php/class.php';
$cls = new database;
?>
<html lang="pt-br">

<head>
  <title>SGE - Login</title>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="/src/logo.webp">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css?_cacheOverride=1691177712738"
    rel="stylesheet">
  <link rel="stylesheet" href="/css/style.css">
  <style>
    .logo {
      width: 200px;
    }
  </style>

</head>

<body>
  <header>
    <img class="logo" src="/src/logo.webp" alt="Logo">
  </header>
  <section class="s1">
    <h3>Faça login para continuar</h3>
    <?php
    if (isset($_POST['email']) || isset($_POST['password'])) {
      $user = addslashes($_POST['email']);
      $pass = addslashes($_POST['password']);
      $pass = sha1($pass);

      if (!empty($user) && !empty($pass)) {
        $cls->conectar('if0_34449232_clinfomed', 'sql301.infinityfree.com', 'if0_34449232', 'vYP7KAmHCI');
        if ($cls->msg == "") {
          if ($cls->GetUserByEmail($user) == true) {
            if ($cls->login($user, $pass)) {
              header("Location: ../");
            } else {
              ?>

              <div class="alert alert-danger" style="margin-top: 5px"><strong>Login ou senha incorretos!</strong></div>


              <?php
            }
          } else {
            echo '<div class="alert alert-danger" style="margin-top: 5px"><strong>Você não tem permissão de acesar o sistema!<br>Entre em <a href="https://thiagosousa81.wordpress.com/#contato"><b>contato</b></a> com o administrador.</strong></div>';
          }
        } else {
          //echo "Erro ao conectar!!!".$cls->msg;
          ?>
          <div class="alert alert-danger" style="margin-top: 5px"><strong>Erro na conexão com banco de dados!</strong></div>
          <?php
          echo $cls->msg;
        }
      } else {
        echo ('<div class="alert alert-danger" style="margin-top: 5px"><strong>Preencha todos os campos!</strong></div>');
      }
    }

    ?>
    <form method="POST">
      <div class="input-group" style="
                                                margin-block: 5px;
                                                ">

        <input id="email" type="text" class="form-control" name="email" placeholder="E-mail">
      </div>
      <div class="input-group" style="
                                                margin-block: 5px;
                                                ">

        <input id="password" type="password" class="form-control" name="password" placeholder="Senha">
      </div>
      <div class=" input-group-btn">
        <input id="button" type="submit" class="form-control btn btn-danger"
          style="font-weight: bold; margin-block-end: 5px;" name="button" value="ENTRAR">
      </div>
      <!--<p style="
                  font-size: 11pt;
                  ">Não tem uma conta? <a href="/singup/" style="color: white"><b>Cadastre-se agora!</b></a></p>-->
    </form>

  </section>
  <footer class="rodape">
    <p class="text-center">Desenvolvido por <a href="http://thiagosousa81.wordpress.com"><b>Thiago Sousa</b></a> <br> <a
        href="http://ebs-systems.epizy.com/"><b>EBS Security Systems</b></a></p>
  </footer>
</body>

</html>