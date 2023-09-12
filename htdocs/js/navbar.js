<?php 
echo '

function NavBar(props) {
    return ( 
        <div class="p-4">
            <h4 class="text-light">{props.nome}</h4>
            <hr class="text-white-50"></hr>
            <ul class="list-unstyled">
                <li><a href="/" class="text-white btn btn-secondary fill padding-to-button">VENDAS</a></li>
                <li><a href="/clients.php" class="text-white btn btn-secondary fill padding-to-button">CLIENTES</a></li>
                <li><a href="/agenda.php" class="text-white btn btn-secondary fill padding-to-button">AGENDA</a></li>
                <li><a href="/funcionarios.php" class="text-white btn btn-secondary fill padding-to-button">FUNCIONÁRIOS</a></li>
                <li><a href="/config.php" class="text-white btn btn-secondary fill padding-to-button">CONFIGURAÇÕES</a></li>               
            </ul>
            <p><br/><br/><br/><br/></p>              
        </div>
    );
}


'?>