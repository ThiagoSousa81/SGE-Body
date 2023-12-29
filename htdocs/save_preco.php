<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


require_once 'database.php';

$cls = new database;


function formatarNumero($valor) {
    return number_format(floatval(str_replace(',', '.', $valor)), 2, '.', '');
}

$nome = addslashes($_POST['nome']);
$pv = formatarNumero($_POST['pv']);
$cmv = formatarNumero($_POST['cmv']);
$frete = formatarNumero($_POST['frete']);
$cartaoP = formatarNumero($_POST['cartaoP']);
$cartaoR = formatarNumero($_POST['cartaoR']);
$impostoP = formatarNumero($_POST['impostoP']);
$impostoR = formatarNumero($_POST['impostoR']);
$comissaoP = formatarNumero($_POST['comissaoP']);
$comissaoR = formatarNumero($_POST['comissaoR']);
$total = formatarNumero($_POST['total']);
$mlar = formatarNumero($_POST['mlar']);
$mlap = formatarNumero($_POST['mlap']);
$mldp = formatarNumero($_POST['mldp']);
$mldr = formatarNumero($_POST['mldr']);
$vvn = formatarNumero($_POST['vvn']);
$cpap = formatarNumero($_POST['cpap']);
$cpa = formatarNumero($_POST['cpa']);
$roas = formatarNumero($_POST['roas']);


echo "PV: $pv<br>";
echo "CMV: $cmv<br>";
echo "Frete: $frete<br>";
echo "Cartão P: $cartaoP<br>";
echo "Cartão R: $cartaoR<br>";
echo "Imposto P: $impostoP<br>";
echo "Imposto R: $impostoR<br>";
echo "Comissão P: $comissaoP<br>";
echo "Comissão R: $comissaoR<br>";
echo "Total: ".$_POST['total']."<br>";
echo "Margem Lucro Absoluta: $mlar<br>";
echo "Margem Lucro Absoluta Percentual: $mlap<br>";
echo "Margem Lucro Desejada Percentual: $mldp<br>";
echo "Margem Lucro Desejada Real: $mldr<br>";
echo "Valor Venda: $vvn<br>";
echo "Porcentagem de CPA: $cpap<br>";
echo "CPA: $cpa<br>";
echo "ROAS: $roas<br>";

$link = $cls->GetLinkMySQLI();

$stmt = $link->prepare("INSERT INTO `PRODUCT` (`ID_PRODUCT`, `NOME_PRODUCT`, `PV_PRODUCT`, `CMV_PRODUCT`, `FRETE_PRODUCT`, `PORCENT_TAXA_CARTAO_PRODUCT`, `TAXA_CARTAO_PRODUCT`, `PORCENT_IMPOSTO_PRODUCT`, `IMPOSTO_PRODUCT`, `PORCENT_COMISSAO_PRODUCT`, `COMISSAO_PRODUCT`, `TOTAL_CUSTO_PRODUCT`, `MARGEM_LUCRO_PRODUCT`, `PERCENT_MARGEM_LUCRO_PRODUCT`, `PERCENT_MARGEM_LUCRO_DES_PRODUCT`, `MARGEM_LUCRO_DES_PRODUCT`, `VALOR_VENDA_PRODUCT`, `PERCENT_CPA_PRODUCT`, `CPA_PRODUCT`, `ROAS_PRODUCT`) VALUES ('', ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param("sdddddddddddddddddd", base64_encode($nome), $pv, $cmv, $frete, $cartaoP, $cartaoR, $impostoP, $impostoR, $comissaoP, $comissaoR, $total, $mlar, $mlap, $mldp, $mldr, $vvn, $cpap, $cpa, $roas);

$stmt->execute();

$stmt->close();
$link->close();

header("Location: /preco.php");
?>
