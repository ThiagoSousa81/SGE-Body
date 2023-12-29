<?php
require "protection.php";
include "index.php";
?>

<h3>Precificação</h3>



            <!-- Nav tabs -->

            <div style="
    overflow: overlay;
"><ul class="nav nav-tabs" role="tablist" style="width: max-content">

                <li class="nav-item" role="presentation">

                    <a class="nav-link active" data-bs-toggle="tab" href="#home" aria-selected="true" role="tab">Precificação</a>

                </li>

                <li class="nav-item" role="presentation">

                    <a id="tab2" class="nav-link" data-bs-toggle="tab" href="#margem" aria-selected="false" tabindex="-1" role="tab">Margem de Lucro</a>

                </li>

                <li class="nav-item" role="presentation">

                    <a id="tab3" class="nav-link" data-bs-toggle="tab" href="#cpaeroas" aria-selected="false" tabindex="-1" role="tab">CPA e ROAS</a>

                </li>

            </ul></div>



            <!-- Tab panes -->

            <form class="" method="post" action="save_preco.php">

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

                                    <input type="text" format="currency" class="form-control" id="txtCartaoP"
                                        placeholder="ex: 70%" name="cartaoP" style="width: 100%; " />

                                </div>

                                <div class="input-group-text padd ">

                                    <label for="nome" class="form-label">Taxa de cartão: R$&nbsp;</label>

                                    <input type="text" format="currency" precision="2" class="form-control" value="0,00"
                                        id="txtCartaoR" name="cartaoR" style="width: 100%; " readonly />

                                </div>

                            </div>



                            <div class="/*d-flex justify-content-around*/">

                                <div class="input-group-text padd">

                                    <label for="nome" class="form-label">*Imposto: %&nbsp;</label>

                                    <input type="text" format="currency" class="form-control" id="txtImpostoP"
                                        placeholder="ex: 7%" name="impostoP" style="width: 100%; " />

                                </div>

                                <div class="input-group-text padd">

                                    <label for="nome" class="form-label">Imposto: R$&nbsp;</label>

                                    <input type="text" format="currency" precision="2" class="form-control" value="0,00"
                                        id="txtImpostoR" name="impostoR" style="width: 100%; " readonly />

                                </div>

                            </div>



                            <div class="/*d-flex justify-content-around*/">

                                <div class="input-group-text padd">

                                    <label for="nome" class="form-label">*Comissão: %&nbsp;</label>

                                    <input type="text" format="currency" class="form-control" id="txtComissaoP"
                                        placeholder="ex: 50%" name="comissaoP" style="width: 100%; " />

                                </div>

                                <div class="input-group-text padd">

                                    <label for="nome" class="form-label">Comissão: R$&nbsp;</label>

                                    <input type="text" format="currency" precision="2" class="form-control" value="0,00"
                                        id="txtComissaoR" name="comissaoR" style="width: 100%; " readonly />

                                </div>

                            </div>



                            <div class="input-group-text padd">

                                <label for="nome" class="form-label">Total: R$&nbsp;</label>

                                <input type="text" format="currency" precision="2" class="form-control input-total" id="txtTotal"
                                    name="total" value="0,00" style="width: 100%;" readonly />

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

                                <input type="text" format="currency" class="form-control" id="txtMLDP" name="mldp"
                                    style="width: 100%; " />

                            </div>

                            <div class="input-group-text padd ">

                                <label class="form-label">Margem de Lucro Desejada: R$&nbsp;</label>

                                <input type="text" format="currency" precision="2" class="form-control" id="txtMLDR"
                                    name="mldr" style="width: 100%; " readonly />

                            </div>

                        </div>





                       <!--  <div class="input-group-text">

                            <label class="form-label">*Fator de Correção: %&nbsp;</label>

                            <input type="text" format="currency" class="form-control" id="txtFC" placeholder="ex: 70%"
                                value="70" name="fc" style="width: 100%; " />

                        </div> -->



                        <div class="input-group-text padd">

                            <label class="form-label">Valor de Venda Necessário: R$&nbsp;</label>

                            <input type="text" format="currency" precision="2" class="form-control input-total" id="txtVVN"
                                name="vvn" style="width: 100%; " value="0,00" readonly />

                        </div>



                       <!--  <div class="input-group-text padd">

                            <label class="form-label">*Margem Mínima %&nbsp;</label>

                            <input type="text" format="currency" class="form-control" id="txtMNP" name="mnp"
                                style="width: 100%; " />

                        </div>



                        <div class="input-group-text padd">

                            <label class="form-label">Margem Mínima R$&nbsp;</label>

                            <input type="text" format="currency" precision="2" class="form-control" id="txtMNR"
                                name="mnr" style="width: 100%; " readonly />

                        </div> -->

                    </div>



                    <div id="cpaeroas" class="container tab-pane fade"><br>

                        <div class="input-group-text padd">

                            <label class="form-label">*Porcentagem de CPA %&nbsp;</label>

                            <input type="text" format="currency" class="form-control" id="txtCPAP" name="cpap"
                                style="width: 100%; " />

                        </div>


                        <div class="input-group-text">

                            <label class="form-label">CPA: R$&nbsp;</label>

                            <input type="" format="currency" precision="2" class="form-control" id="txtCPA" name="cpa"
                                style="width: 100%; " readonly />

                        </div>



                        <div class="input-group-text padd">

                            <label class="form-label">ROAS Mínimo: %&nbsp;</label>

                            <input type="" format="currency" class="form-control" id="txtROAS" name="roas"
                                style="width: 100%; " readonly />

                        </div>



                        <button type="submit" class="btn btn-success" style="width: 100%;">SALVAR TUDO <i
                                class="bi bi-floppy"></i><span class="bi bi-floppy-fill"
                                aria-hidden="true"></span></button>



                    </div>

            </form>



            <?php
            include "tabela_preco.php"
            ?>



        </div>

<?php 
include "footer.php";
?>