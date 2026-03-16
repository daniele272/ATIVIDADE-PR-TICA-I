<?php


// pede o nome do aluno
echo "Digite o nome do aluno: ";
$nome = trim(fgets(STDIN));

// cria um array vazio para armazenar as notas
$notas = [];

// laço para pedir as 3 notas
for ($i = 1; $i <= 3; $i++) {

    echo "Digite a nota $i: ";
    $nota = floatval(trim(fgets(STDIN)));

    // guarda a nota dentro do array
    $notas[] = $nota;
}

// calcula a média das notas
$media = array_sum($notas) / count($notas);

// mostra a média
echo "Media do aluno $nome: $media\n";

// verifica a situação do aluno
if ($media >= 7) {
    echo "Resultado: Aprovado\n";
} elseif ($media >= 5 && $media < 7) {
    echo "Resultado: Recuperacao\n";
} else {
    echo "Resultado: Reprovado\n";
}

?>