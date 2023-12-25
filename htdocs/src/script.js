//Declarando os campos da sessão de soma

const txtPV = document.getElementById('txtPV');
const txtCMV = document.getElementById('txtCmv');
const txtFrete = document.getElementById('txtFrete');
const txtCartaoP = document.getElementById('txtCartaoP');
const txtCartaoR = document.getElementById('txtCartaoR');
const txtImpostoR = document.getElementById('txtImpostoR');
const txtComissaoR = document.getElementById('txtComissaoR');
const txtTotal = document.getElementById('txtTotal');
const txtMLAR = document.getElementById('txtMLAR');
const txtMLAP = document.getElementById('txtMLAP');
const txtMLDP = document.getElementById('txtMLDP');
const txtMLDR = document.getElementById('txtMLDR');
const txtFC = document.getElementById('txtFC');
const txtVVN = document.getElementById('txtVVN');
const txtMNP = document.getElementById('txtMNP');
const txtMNR = document.getElementById('txtMNR');
const txtCPA = document.getElementById('txtCPA');
const txtROAS = document.getElementById('txtROAS');


// Funções

function formatMoeda(valor) {
    return valor.toFixed(2).replace('.', ',');
}
function formatFloat(valor) {
    return parseFloat(valor.replace(',', '.'));
}

// Função para formatar o valor como dinheiro -- Validada
function formatarDinheiro(valor) {    
    return (valor / 100).toLocaleString('pt-BR', { minimumFractionDigits: 2 });
}  


function calcularTaxa(total, porcentagem){
    //Este método só é valido para calcular a taxa de cartão e imposto
    return (porcentagem / 100) * total;
}

function atualizaTotal (){
    txtTotal.value = formatMoeda((formatFloat(txtCMV.value) + formatFloat(txtFrete.value) + formatFloat(txtCartaoR.value) + formatFloat(txtImpostoR.value) + formatFloat(txtComissaoR.value)));
}


// Eventos


txtPV.addEventListener('input', function () {
    // Obtém o valor atual do input
    let v = this.value;
    v = v.replace(/[^0-9]/g, '');
    this.value = formatarDinheiro(parseInt(v, 10));
    atualizaTotal();
});

txtCMV.addEventListener('input', function () {
    let v = this.value;
    v = v.replace(/[^0-9]/g, '');
    this.value = formatarDinheiro(parseInt(v, 10));
    atualizaTotal();
});

txtFrete.addEventListener('input', function () {
    let v = this.value;
    v = v.replace(/[^0-9]/g, '');
    this.value = formatarDinheiro(parseInt(v, 10));
    atualizaTotal();
});
 



txtCartaoP.addEventListener('input', function() {
    var v = calcularTaxa(parseFloat(txtPV.value.replace(',', '.')), this.value);    
    txtCartaoR.value = formatMoeda(v);
});

txtImpostoP.addEventListener('input', function() {
    var v = calcularTaxa(parseFloat(txtPV.value.replace(',', '.')), this.value);    
    txtImpostoR.value = formatMoeda(v);
});

txtComissaoP.addEventListener('input', function() {
    var v = calcularTaxa(parseFloat(txtPV.value.replace(',', '.')), this.value)
    txtComissaoR.value = formatMoeda(v);
    atualizaTotal();
});

txtTotal.addEventListener('click', function () {
    atualizaTotal();    
});

document.getElementById('tab2').addEventListener('click', function() { 
    txtMLAR.value = formatMoeda(formatFloat(txtPV.value) - formatFloat(txtTotal.value));
    txtMLAP.value = (formatFloat(txtMLAR.value) / formatFloat(txtPV.value)*100).toFixed(2);
});

txtMLDP.addEventListener('input', function () {
    txtMLDR.value = formatMoeda(formatFloat(txtTotal.value) * this.value / 100);
    txtVVN.value = formatMoeda(formatFloat(txtTotal.value) * 100 / txtFC.value);
});

txtMNP.addEventListener('input', function () {
    txtMNR.value = formatMoeda(formatFloat(txtPV.value) * (this.value / 100));    
});

document.getElementById('tab3').addEventListener('click', function () {
    txtCPA.value = formatMoeda(formatFloat(txtMLAR.value) - formatFloat(txtMNR.value));
    txtROAS.value = (formatFloat(txtPV.value) / formatFloat(txtCPA.value)).toFixed(2);
})








