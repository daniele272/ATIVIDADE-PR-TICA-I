<?php

// cardápio em forma de array associativo
$cardapio = [
    1 => ["produto" => "X-Burguer", "preco" => 18.00],
    2 => ["produto" => "X-Salada", "preco" => 20.00],
    3 => ["produto" => "Batata Frita", "preco" => 15.00],
    4 => ["produto" => "Refrigerante", "preco" => 8.00],
    5 => ["produto" => "Suco Natural", "preco" => 10.00]
];

// pede o nome do cliente
echo "Digite o nome do cliente: ";
$cliente = trim(fgets(STDIN));

// mostra o cardápio
echo "\n=== CARDAPIO ===\n";
foreach ($cardapio as $codigo => $item) {
    echo "$codigo - {$item['produto']} - R$ {$item['preco']}\n";
}

// pede o código do produto
echo "\nDigite o codigo do produto: ";
$codigo = intval(trim(fgets(STDIN)));

// valida se o código existe
if (!isset($cardapio[$codigo])) {
    echo "Codigo de produto invalido!\n";
    exit;
}

// pede quantidade
echo "Digite a quantidade: ";
$quantidade = intval(trim(fgets(STDIN)));

if ($quantidade <= 0) {
    echo "Quantidade invalida!\n";
    exit;
}

// pega informações do produto
$produto = $cardapio[$codigo]['produto'];
$preco = $cardapio[$codigo]['preco'];

// calcula o total
$total = $preco * $quantidade;

echo "Total a pagar: R$ $total\n";

// pede o valor pago
echo "Digite o valor pago pelo cliente: ";
$valorPago = floatval(trim(fgets(STDIN)));

// valida pagamento
if ($valorPago < $total) {
    echo "Valor pago insuficiente!\n";
    exit;
}

// calcula troco
$troco = $valorPago - $total;

// mostra resumo
echo "\n=== RESUMO DO PEDIDO ===\n";
echo "Cliente: $cliente\n";
echo "Produto: $produto\n";
echo "Quantidade: $quantidade\n";
echo "Total: R$ $total\n";
echo "Valor pago: R$ $valorPago\n";
echo "Troco: R$ $troco\n";

?>