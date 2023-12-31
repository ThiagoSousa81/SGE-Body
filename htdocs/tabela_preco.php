<h3>Produtos Cadastrados</h3>
<?php $link = $cls->GetLinkMySQLI();


$sql = "SELECT * FROM PRODUCT ORDER BY `ID_PRODUCT` DESC";
$result = $link->query($sql);

function formatReal($valor) {
    return number_format(floatval($valor), 2, ',', '');
    //return str_replace(".",",", $valor);
}

?>
<hr>

<div class="container">

    <div class="table-responsive">

        <table id="dtgProdutos" class="table table-bordered table-dark table-striped">

            <thead>

                <tr>

                    <th>Opções</th>

                    <!--<th>Código</th>-->

                    <th>Nome do Produto</th>

                    <th>Preço de Venda</th>

                    <th>Custo Bruto (CMV)</th>

                    <th>Frete R$</th>

                    <th>Taxa de Cartão % / R$</th>

                    <th>Imposto % / R$</th>

                    <th>Comissão % / R$</th>

                    <th>Total de Custos R$</th>

                    <th>Margem de Lucro Atual R$ / %</th>

                    <th>Margem de Lucro Desejada %</th>

                    <th>Valor de Venda Necessário R$</th>

                    <th>Margem Mínima %</th>

                    <th>CPA com Margem Mínima R$</th>

                    <th>ROAS %</th>

                </tr>

            </thead>

            <tbody>

                <tr>

                    <?php
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            
                            ?>
                            <td><button type="button" class="btn btn-warning"><span class="bi bi-pencil"
                                        aria-hidden="true"></span></button>

                                <a href="/delete_preco.php?id=<?php echo $row["ID_PRODUCT"]?>"><button type="button" class="btn btn-danger"><span class="bi bi-trash"
                                        aria-hidden="true"></span></button></a>

                            </td>

                            <?php

                            //echo "<td>" . $row["ID_PRODUCT"] . "</td>";

                            echo "<td>" . base64_decode($row["NOME_PRODUCT"]) . "</td>";
                            echo "<td>R$ " . formatReal($row["PV_PRODUCT"]) . "</td>";
                            echo "<td>R$ " . formatReal($row["CMV_PRODUCT"]) . "</td>";
                            echo "<td>R$ " . formatReal($row["FRETE_PRODUCT"]) . "</td>";
                            echo "<td>" . $row["PORCENT_TAXA_CARTAO_PRODUCT"] . " % / R$ " . formatReal($row["TAXA_CARTAO_PRODUCT"]) . "</td>";
                            echo "<td>" . $row["PORCENT_IMPOSTO_PRODUCT"] . " % / R$ " . formatReal($row["IMPOSTO_PRODUCT"]) . "</td>";
                            echo "<td>" . $row["PORCENT_COMISSAO_PRODUCT"] . " % / R$ " . formatReal($row["COMISSAO_PRODUCT"]) . "</td>";
                            echo "<td>R$ " . formatReal($row["TOTAL_CUSTO_PRODUCT"]) . "</td>";
                            echo "<td>R$ " . formatReal($row["MARGEM_LUCRO_PRODUCT"]) . " / " . $row["PERCENT_MARGEM_LUCRO_PRODUCT"] . "%</td>";
                            echo "<td>" . $row["PERCENT_MARGEM_LUCRO_DES_PRODUCT"] . " %</td>";
                            echo "<td>R$ " . formatReal($row["VALOR_VENDA_PRODUCT"]) . "</td>";
                            echo "<td>" . $row["PERCENT_CPA_PRODUCT"] . "%</td>";
                            echo "<td>R$ " . formatReal($row["CPA_PRODUCT"]) . "</td>";
                            echo "<td>" . $row["ROAS_PRODUCT"] . "%</td>";



                            echo '</tr>';





                        }
                    }

                    $link->close();

                    ?>



            </tbody>

        </table>

    </div>

</div>