<?php
Class database  
{
    private $usuario = 'xxx';
    private $senha = 'xxxx';
    private $database = 'xxxx';
    private $host = 'xxxxx';
    
    public function GetLinkMySQLI()
    {
        $mysqli = new mysqli($this->host, $this->usuario, $this->senha, $this->database);
        return $mysqli;
    }
    
    

    public function login($user, $password){
        try {
            $pdo = new PDO("mysql:dbname=" . $this->database . ";host=" . $this->host, $this->usuario, $this->senha);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erro na conexão com o banco de dados: " . $e->getMessage());
        }

        $sql = $pdo->prepare("SELECT ID_USER, EMAIL_USER, HASH_USER FROM USER WHERE EMAIL_USER = :u");
        $sql->bindValue(":u", $user);
        $sql->execute();

        $result = $sql->fetch(PDO::FETCH_ASSOC);

        if ($result && ($password == $result['HASH_USER'])) {
            session_set_cookie_params(1800);
            session_start();
            $_SESSION['ID_USER'] = $result['ID_USER'];
            return true;
        }
        else {
            return false;
        }            
    }

    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
    }

    public function isLoggedIn()
    {
        session_start();
        return isset($_SESSION['ID_USER']);
    }

    
}

?>