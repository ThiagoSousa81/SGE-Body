<!DOCTYPE html>
<?php
require_once 'php/class.php';
include('protect.php');

$cls = new database;

if(!isset($_SESSION)) {
  session_start();
}

if(isset($_SESSION['ID_FUNCIONARIO'])) {
  
  //$mysqli = $cls->GetLinkMySQLI();
  $link = $cls->GetLinkMySQLI();
  if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
  }

  $query = mysqli_query($link, "SELECT * FROM FUNCIONARIOS WHERE ID_FUNCIONARIO = ".$_SESSION['ID_FUNCIONARIO']);
  $User = mysqli_fetch_array($query);

?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGE Body - Painel</title>
    <link rel="shortcut icon" href="/src/logo.webp">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css?_cacheOverride=1691177712738"
        rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body class="bg-secondary">
  <style>
    .fill{
      width: 100%;
    }
    .padding-to-button{
      margin-block: 5px;
    }
  </style>


<header id="header"></header>

<div class="d-flex">

  <nav id="sidebar" class="bg-dark"></nav>

  <div id="content" class="p-4">
    <h2>Dashboards</h2>
    <p>Em breve...</p>
    <h1><br><br><br></h1>
  </div>
</div>
<footer id="footer"></footer>
<script>
  const sidebar = document.getElementById('sidebar');
  const content = document.getElementById('content');
  const sidebarToggle = document.getElementById('sidebar-toggle');

  sidebarToggle.addEventListener('click', () => {
    sidebar.classList.toggle('active');
    content.classList.toggle('active');
  });
</script>

    
    <!--Scripts externos: Bootstrapp 5-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

     <!--Scripts externos: React DOM-->
     <script src="https://cdn.jsdelivr.net/npm/react@17.0.2/umd/react.development.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/react-dom@17.0.2/umd/react-dom.development.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/6.26.0/babel.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-plugin-transform-react-jsx/6.24.1/transform-react-jsx.min.js"></script>
      
     <!--Meus Componentes-->
     <script type="text/babel" src="/js/headr.js" data-plugins="transform-react-jsx"></script>
     <script type="text/babel" src="/js/navbar.php" data-plugins="transform-react-jsx"></script>
     <script type="text/babel" src="/js/footer.php" data-plugins="transform-react-jsx"></script>

     <script type="text/babel" data-plugins="transform-react-jsx">
            
        ReactDOM.render(<Header />, document.getElementById('header'));
        ReactDOM.render(<NavBar nome="<?php echo (base64_decode($User[1]));?>"/>, document.getElementById('sidebar'));
        ReactDOM.render(<Footer />, document.getElementById('footer'));
        //ReactDOM.render(<Section1 />, document.getElementById('first-message'));
        
        //
        
        
      </script>

</body>

</html>


<?php
}

?>