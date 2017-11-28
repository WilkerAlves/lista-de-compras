var produtos = document.querySelectorAll(".produto");
var total = 0;
for(var i=0; i < produtos.length; i++){
    var produto = produtos[i];
    var tdValorTotal = produto.querySelector(".produto-valor-total");
    var valorTotal = parseFloat(tdValorTotal.textContent); 
    total += valorTotal;
}

var totalDaCompra = document.querySelector(".totalDaCompra");
totalDaCompra.textContent= total.toFixed(2);