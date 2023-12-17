<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinfomed - Pacientes</title>
    <link rel="shortcut icon" href="/src/logo.jpg">
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

      <div id="content" class="container-fluid">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active " data-bs-toggle="tab" href="#home">Cadastrar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " data-bs-toggle="tab" href="#menu1">Cadastrados</a>
          </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane container active" id="home">

            <h2>Novo produto</h2>
            <form class="row">
              <div class="mb-3 col-sm-6">
                <label for="nome" class="form-label">Nome (Kit):</label>
                <input type="text" class="form-control" id="nome" name="nome"/>
              </div>
              <div class="mb-3 col-sm-3">
                <label for="cpf" class="form-label">Custo bruto do produto/CMV</label>
                <input type="text" class="form-control" id="cmv" name="cmv"/>
              </div>
              <div class="mb-3 col-sm-3">
                <label for="dataNascimento" class="form-label">Frete</label>
                <input type="currency" class="form-control" id="frete" name="frete"/>
              </div>
              <div class="mb-3 col-sm-3">
                <label for="rg" class="form-label">RG</label>
                <input type="text" class="form-control" id="rg" name="rg" required>
              </div>
              <div class="mb-3 col-sm-3">
                <label for="idade" class="form-label">Idade</label>
                <input type="number" class="form-control" id="idade" name="idade" required>
              </div>
              <div class="mb-3 col-sm-6">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" required>
              </div>
              <!--<div class="mb-3 col-sm-3">
                <label for="medicoResponsavel" class="form-label">Médico Responsável</label>
                <select class="form-select" id="medicoResponsavel" name="medicoResponsavel" required>
                  <option value="" selected>Selecione um médico...</option>
                  <option value="1">Médico 1</option>
                  <option value="2">Médico 2</option>
                  <option value="3">Médico 3</option>
                  <!-- Adicione mais opções conforme necessário --
                </select>
              </div>-->
              <div class="mb-3">
                <label for="historicoProntuario" class="form-label">Histórico/Prontuário</label>
                <textarea class="form-control" id="historicoProntuario" name="historicoProntuario" rows="4" required></textarea>
              </div>
              <button type="submit" class="btn btn-success">SALVAR</button>
            </form>

          </div>
          <div class="tab-pane container fade" id="menu1">
            <h2>Informações do Paciente</h2>
            <table class="table">
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>CPF</th>
                  <th>Data de Nascimento</th>
                  <th>RG</th>
                  <th>Idade</th>
                  <th>Endereço</th>
                  <th>Médico Responsável</th>
                  <th>Histórico/Prontuário</th>
                </tr>
              </thead>
              <tbody>
                <!-- Aqui você pode adicionar as linhas com as informações inseridas no formulário -->
              </tbody>
            </table>
          </div>
        </div>

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
        ReactDOM.render(<NavBar />, document.getElementById('sidebar'));
        ReactDOM.render(<Footer />, document.getElementById('footer'));
        //ReactDOM.render(<Section1 />, document.getElementById('first-message'));

        //ReactDOM.render(<Footer />, document.getElementById('footer'));


    </script>

  </body>

</html>


