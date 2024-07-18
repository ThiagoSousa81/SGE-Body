<?php
require "protection.php";
include "index.php";

$cls = new database();

$link = $cls->GetLinkMySQLI();

$query = mysqli_query($link, "SELECT * FROM USER WHERE ID_USER = " . $_SESSION['ID_USER']);
$User = mysqli_fetch_array($query);
?>

<h3>Configurações</h3>
<div class="row">
    <div class="col-sm-5 bg-dark text-white rounded p-2 m-1">
        <form action="">
            <h4>Dados gerais da conta: </h4>
            <?php
            if (isset($_POST['nome']) && isset($_POST['email'])) {
                $nome = mysqli_real_escape_string($link, $_POST['nome']);
                $email = mysqli_real_escape_string($link, $_POST['email']);
                if (!empty($nome) && !empty($email)) {
                    $result = mysqli_query($link, "SELECT * FROM USER WHERE EMAIL_USER = " . $email);
                    if ($result->num_rows == 0) {
                        //atualizar os dados
                        $query = mysqli_query($link, "UPDATE USER SET NOME_USER = '" . base64_encode($nome) . "', EMAIL_USER = '$email' WHERE ID_USER = " . $_SESSION['ID_USER']);
                        if ($query) {
                            ?>
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                <strong>SGE-Body: </strong> Dados alterados com sucesso!
                            </div>
                            <?php
                        } else {
                            ?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                <strong>SGE-Body: </strong> Erro ao atualizar os dados!
                            </div>
                            <?php
                        }
                    } else {
                        echo "<div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='btn-close' data-bs-dismiss='alert'></button><strong>SGE-Body: </strong> E-mail já cadastrado!</div>";
                    }
                } else {
                    ?>
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        <strong>SGE-Body: </strong> Preencha todos os campos!
                    </div>
                    <?php
                }
            }
            ?>
            <div class="mb-3 mt-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="nome" value="<?php echo base64_decode($User[1]); ?>"
                    placeholder="" name="nome">
            </div>
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="" value="<?php echo $User[2] ?>"
                    name="email">
            </div>
            <div class="mb-3 mt-3">
                <label for="nivel" class="form-label">Nível:</label>
                <select class="form-select" id="nivel" name="nivel" aria-label="Admin" disabled>
                    <option selected value="Admin">Admin</option>
                    <option value="Gerente">Gerente</option>
                    <option value="Usuario">Usuario</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success w-100"><b>ATUALIZAR</b></button>
        </form>
    </div>
    <div class="col-sm-5 bg-dark text-white rounded p-2 m-1">
        <form action="">
            <h4>Alterar senha</h4>
            <div class="mb-3 mt-3">
                <label for="pwd" class="form-label">Senha atual:</label>
                <input type="password" class="form-control" id="pwd" placeholder="" name="pwd">
            </div>
            <div class="mb-3 mt-3">
                <label for="npwd" class="form-label">Nova senha:</label>
                <input type="password" class="form-control" id="npwd" placeholder="" name="npwd">
            </div>
            <div class="mb-3 mt-3">
                <label for="cpwd" class="form-label">Confirmar nova senha:</label>
                <input type="password" class="form-control" id="cpwd" placeholder="" name="cpwd">
            </div>
            <button type="submit" class="btn btn-success w-100"><b>ATUALIZAR</b></button>
        </form>
    </div>
    <div class="col-sm-10 bg-dark text-white rounded p-2 m-2">
        <h4>Link de instalação do PWA</h4>
        <div class="mb-3 mt-3">
            <h5>Android</h5>
            <a href="https://sge-body.ebs.great-site.net/pwa/android/Loja%20Body.apk" target="_blank" class="text-white">https://sge-body.ebs.great-site.net/pwa/android/Loja%20Body.apk</a> <br>
            <img src="https://sge-body.ebs.great-site.net/pwa/android/frame.png" class="p-4 img-responsive" alt="QR-Code Generator">
            <h5>IOS</h5>
            <p>Ainda não é possível publicar aqui!!!</p>
        </div>
    </div>
</div>


</div>

<?php
include "footer.php";
?>