<?php 
echo '

function NavBar(props) {
    return ( 
        <div class="p-4">
            <h4 class="text-light">{props.nome}</h4>
            <hr class="text-white-50"></hr>
            <ul class="list-unstyled">
                <li><a href="/" class="text-white btn btn-secondary fill padding-to-button">DASHBOARD</a></li>
                <li><a href="/preco.php" class="text-white btn btn-secondary fill padding-to-button">PRECIFICAÇÃO</a></li>                
                <li><a href="/config.html" class="text-white btn btn-secondary fill padding-to-button">CONFIGURAÇÕES</a></li>               
            </ul>
            <p><br/><br/><br/><br/></p>              
        </div>
    );
}


'?>