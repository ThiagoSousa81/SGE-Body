<?php
include "header.php";

?>

<body>

    <nav class="navbar naxvbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img class="logo" src="src/logo.webp" alt="Logo"></a>
            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#mdLogin">
                Login
            </button>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#demo"
                style="cursor:pointer">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="modal" id="mdLogin">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Faça Login para continuar...</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form method="post" action="login.php">
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">E-mail:</label>
                            <input type="text" class="form-control" id="email" placeholder="email@mail.com"
                                name="email">
                        </div>
                        <div class="mb-3">
                            <label for="pwd" class="form-label">Senha:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Senha" name="pswd">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-dark" style="width: 100%">Entrar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <main class="linha">
        <div id="demo" class="collapse menu">
            <h3>Visitante</h3>
            <hr>
            <button type="button" class="btn btn-dark">Dashboards</button>
            <button type="button" class="btn btn-dark">Precificação</button>
            <button type="button" class="btn btn-dark">Configurações</button>
        </div>
        <div class="cont">
            <h3>Precificação</h3>

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#home">Precificação</a>
                </li>
                <li class="nav-item">
                    <a id="tab2" class="nav-link" data-bs-toggle="tab" href="#margem">Margem de Lucro</a>
                </li>
                <li class="nav-item">
                    <a id="tab3" class="nav-link" data-bs-toggle="tab" href="#cpaeroas">CPA e ROAS</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <form class="">
                <div class="tab-content">
                    <div id="home" class="container tab-pane active"><br>
                        <div>

                            <div class="input-group-text padd">
                                <label for="nome" class="form-label">*Nome do Produto: &nbsp;</label>
                                <input type="text" class="form-control" id="nome" placeholder="ex: Suplemento"
                                    name="nome" style="width: 100%;" />
                            </div>
                            <div class="input-group-text padd">
                                <label for="nome" class="form-label">*Preço de venda: R$&nbsp;</label>
                                <input type="text" format="currency" precision="2" class="form-control" id="txtPV"
                                    value="0,00" placeholder="ex: R$ 300,00" name="pv" style="width: 100%;" />
                            </div>
                            <div class="input-group-text padd">
                                <label for="nome" class="form-label">*Custo por produto (CMV): R$&nbsp;</label>
                                <input type="text" format="currency" precision="2" class="form-control" id="txtCmv"
                                value="0,00" placeholder="ex: R$ 270,00" name="cmv" style="width: 100%;" />
                            </div>
                            <div class="input-group-text padd">
                                <label for="nome" class="form-label">*Frete: R$&nbsp;</label>
                                <input type="text" format="currency" precision="2" class="form-control" id="txtFrete"
                                value="0,00" placeholder="ex: R$ 25,00" name="frete" style="width: 100%;" />
                            </div>

                            <div class="/*d-flex justify-content-around*/">
                                <div class="input-group-text padd">
                                    <label for="nome" class="form-label">*Taxa de cartão: %&nbsp;</label>
                                    <input type="number" format="currency" class="form-control" id="txtCartaoP"
                                     placeholder="ex: 70%" name="cartaoP" style="width: 100%; " />
                                </div>
                                <div class="input-group-text padd ">
                                    <label for="nome" class="form-label">Taxa de cartão: R$&nbsp;</label>
                                    <input type="text" format="currency" precision="2" class="form-control"
                                    value="0,00" id="txtCartaoR" name="cartaoR" style="width: 100%; " readonly />
                                </div>
                            </div>

                            <div class="/*d-flex justify-content-around*/">
                                <div class="input-group-text padd">
                                    <label for="nome" class="form-label">*Imposto: %&nbsp;</label>
                                    <input type="number" format="currency" class="form-control" id="txtImpostoP"
                                        placeholder="ex: 7%" name="impostoP" style="width: 100%; " />
                                </div>
                                <div class="input-group-text padd">
                                    <label for="nome" class="form-label">Imposto: R$&nbsp;</label>
                                    <input type="text" format="currency" precision="2" class="form-control"
                                    value="0,00" id="txtImpostoR" name="impostoR" style="width: 100%; " readonly />
                                </div>
                            </div>

                            <div class="/*d-flex justify-content-around*/">
                                <div class="input-group-text padd">
                                    <label for="nome" class="form-label">*Comissão: %&nbsp;</label>
                                    <input type="number" format="currency" class="form-control" id="txtComissaoP"
                                        placeholder="ex: 50%" name="comissaoP" style="width: 100%; " />
                                </div>
                                <div class="input-group-text padd">
                                    <label for="nome" class="form-label">Comissão: R$&nbsp;</label>
                                    <input type="text" format="currency" precision="2" class="form-control"
                                    value="0,00" id="txtComissaoR" name="comissaoR" style="width: 100%; " readonly />
                                </div>
                            </div>

                            <div class="input-group-text padd">
                                <label for="nome" class="form-label">Total: R$&nbsp;</label>
                                <input type="text" format="currency" precision="2" class="form-control" id="txtTotal"
                                    name="total" style="width: 100%;" readonly />
                            </div>



                        </div>
                    </div>

                    <div id="margem" class="container tab-pane fade"><br>
                        <div class="/*d-flex justify-content-around*/">
                            <div class="input-group-text padd">
                                <label class="form-label">Margem de Lucro Atual: R$&nbsp;</label>
                                <input type="text" format="currency" precision="2" class="form-control" id="txtMLAR"
                                    name="mlar" style="width: 100%; " readonly />
                            </div>
                            <div class="input-group-text padd">
                                <label class="form-label">Margem de Lucro Atual: %&nbsp;</label>
                                <input type="text" format="currency" class="form-control" id="txtMLAP" name="mlap"
                                    style="width: 100%; " readonly />
                            </div>                            
                        </div>

                        <div class="/*d-flex justify-content-around*/">
                            <div class="input-group-text padd ">
                                <label class="form-label">*Margem de Lucro Desejada: %&nbsp;</label>
                                <input type="number" format="currency" class="form-control" id="txtMLDP" name="mldp"
                                    style="width: 100%; " />
                            </div>
                            <div class="input-group-text padd ">
                                <label class="form-label">Margem de Lucro Desejada: R$&nbsp;</label>
                                <input type="text" format="currency" precision="2" class="form-control" id="txtMLDR"
                                    name="mldr" style="width: 100%; " readonly />
                            </div>
                        </div>


                        <div class="input-group-text">
                            <label class="form-label">*Fator de Correção: %&nbsp;</label>
                            <input type="number" format="currency" class="form-control" id="txtFC"
                                placeholder="ex: 70%" value="70" name="fc" style="width: 100%; " />
                        </div>

                        <div class="input-group-text padd">
                            <label class="form-label">Valor de Venda Necessário: R$&nbsp;</label>
                            <input type="text" format="currency" precision="2" class="form-control" id="txtVVN"
                                name="vvn" style="width: 100%; " readonly />
                        </div>

                        <div class="input-group-text padd">
                            <label class="form-label">*Margem Mínima %&nbsp;</label>
                            <input type="number" format="currency" class="form-control" id="txtMNP"
                                name="mnp" style="width: 100%; " />
                        </div>

                        <div class="input-group-text padd">
                            <label class="form-label">Margem Mínima R$&nbsp;</label>
                            <input type="text" format="currency" precision="2" class="form-control" id="txtMNR"
                                name="mnr" style="width: 100%; " readonly />
                        </div>
                    </div>

                    <div id="cpaeroas" class="container tab-pane fade"><br>
                        <div class="input-group-text">
                            <label class="form-label">CPA: R$&nbsp;</label>
                            <input type="" format="currency" precision="2" class="form-control" id="txtCPA"
                                name="cpa" style="width: 100%; " readonly />
                        </div>

                        <div class="input-group-text padd">
                            <label class="form-label">ROAS Mínimo: %&nbsp;</label>
                            <input type="" format="currency" class="form-control" id="txtROAS" name="roas"
                                style="width: 100%; " readonly />
                        </div>

                        <button type="submit" class="btn btn-success" style="width: 100%;">SALVAR TUDO <i class="bi bi-floppy"></i><span class="bi bi-floppy-fill" aria-hidden="true"></span></button>

                    </div>
            </form>

            <h3>Produtos Cadastrados</h3>
            <hr>
            <div class="container">
                <div class="table-responsive">
                    <table id="dtgProdutos" class="table table-bordered table-dark table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Opções</th>
                                <th>Nome do Produto</th>
                                <th>Preço de Venda</th>
                                <th>Custo Bruto (CMV)</th>
                                <th>Frete</th>
                                <th>Taxa de Cartão % / R$</th>
                                <th>Imposto % / R$</th>
                                <th>Comissão % / R$</th>
                                <th>Total de Custos</th>
                                <th>Margem de Lucro Atual R$ / %</th>
                                <th>Margem de Lucro Desejada % / R$</th>
                                <th>Fator de Correção</th>
                                <th>Valor de Venda Necessário R$</th>
                                <th>Margem mínima % / R$</th>
                                <th>CPA R$</th>
                                <th>ROAS %</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><button type="button" class="btn btn-warning"><span class="bi bi-pencil"
                                            aria-hidden="true"></span></button>
                                    <button type="button" class="btn btn-danger"><span class="bi bi-trash"
                                            aria-hidden="true"></span></button>
                                </td>
                                <td>Pré-Treino</td>
                                <td>R$ 110,00</td>
                                <td>R$ 55,00</td>
                                <td>R$ 0,00</td>
                                <td>7,7% / R$ 5,70</td>
                                <td>7% / R$ 7,70</td>
                                <td>5% / R$ 5,50</td>
                                <td>R$ 73,90</td>
                                <td>R$ 36,10 / 32,82%</td>
                                <td>30% / R$ 22,17</td>
                                <td>70%</td>
                                <td>R$ 105,57</td>
                                <td>20% / R$ 22,00</td>
                                <td>R$ 14,10</td>
                                <td>7,8%</td>

                            </tr>
                            <tr>
                                <td>2</td>
                                <td><button type="button" class="btn btn-warning"><span class="bi bi-pencil"
                                            aria-hidden="true"></span></button>
                                    <button type="button" class="btn btn-danger"><span class="bi bi-trash"
                                            aria-hidden="true"></span></button>
                                </td>
                                <td>Pré-Treino</td>
                                <td>R$ 110,00</td>
                                <td>R$ 55,00</td>
                                <td>R$ 0,00</td>
                                <td>7,7% / R$ 5,70</td>
                                <td>7% / R$ 7,70</td>
                                <td>5% / R$ 5,50</td>
                                <td>R$ 73,90</td>
                                <td>R$ 36,10 / 32,82%</td>
                                <td>30% / R$ 22,17</td>
                                <td>70%</td>
                                <td>R$ 105,57</td>
                                <td>20% / R$ 22,00</td>
                                <td>R$ 14,10</td>
                                <td>7,8%</td>

                            </tr>
                            <tr>
                                <td>3</td>
                                <td><button type="button" class="btn btn-warning"><span class="bi bi-pencil"
                                            aria-hidden="true"></span></button>
                                    <button type="button" class="btn btn-danger"><span class="bi bi-trash"
                                            aria-hidden="true"></span></button>
                                </td>
                                <td>Pré-Treino</td>
                                <td>R$ 110,00</td>
                                <td>R$ 55,00</td>
                                <td>R$ 0,00</td>
                                <td>7,7% / R$ 5,70</td>
                                <td>7% / R$ 7,70</td>
                                <td>5% / R$ 5,50</td>
                                <td>R$ 73,90</td>
                                <td>R$ 36,10 / 32,82%</td>
                                <td>30% / R$ 22,17</td>
                                <td>70%</td>
                                <td>R$ 105,57</td>
                                <td>20% / R$ 22,00</td>
                                <td>R$ 14,10</td>
                                <td>7,8%</td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>



        </div>


    </main>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark ">
        <div class="container-fluid">
            <span class="navbar-text">Sistema desenvolvido por <a style="text-decoration: none;"
                    href="https://ebs-systems.epizy.com">EBS
                    Systems</a></span>
        </div>
    </nav>



</body>
</html>