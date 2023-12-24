<?php
Class database 
{
    protected $usuario = 'xxxx';
    protected $senha = 'xxxx';
    protected $database = 'xxxxxx';
    protected $host = 'xxxxx';
    
    public function GetLinkMySQLI()
    {
        $mysqli = new mysqli($host, $usuario, $senha, $database);
        return $mysqli;
    }
    
    public function login($user, $password)
    { // O PDO prepare é utilizado para evitar injeção de código
        global $pdo;  
        
        try {
            $pdo = new PDO("mysql:dbname=".$database.";host=".$host,$usuario,$senha);
        }
        catch (PDOException $e) {
            $msg = $e->getMessage();
        }
        
        $sql = $pdo->prepare("SELECT ID_USER FROM USER WHERE EMAIL_USER = :u AND HASH_USER = :h");  
        $sql->bindValue(":u", $user);
        $sql->bindValue(":h", $password);  
        //$sql = $pdo->prepare("SELECT id_user FROM usuarios WHERE nome_user = '".$user."' AND hash_user = '".$password."'");  
        $sql->execute();
        if($sql->rowCount() > 0)
        {
            $dados = $sql->fetch();
            session_set_cookie_params(1800); //Define o tempo limite da sessão 30 min
            session_start();
            $_SESSION['ID_USER'] = $dados['ID_USER'];                
            return true;
        }
        else
        {
            return false;
        }
    }

    
}

?>