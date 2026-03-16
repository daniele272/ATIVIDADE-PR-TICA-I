<?php

$alunos = []; // matriz para guardar alunos e notas

// laço para cadastrar 3 alunos
for ($i = 1; $i <= 3; $i++) {

    echo "Digite o nome do aluno $i: ";
    $nome = trim(fgets(STDIN));

    $notas = [];

    // pede as 3 notas do aluno
    for ($j = 1; $j <= 3; $j++) {
        echo "Digite a nota $j de $nome: ";
        $notas[] = floatval(trim(fgets(STDIN)));
    }

    // calcula a média
    $media = array_sum($notas) / count($notas);

    // guarda na matriz associativa
    $alunos[$nome] = $media;
}

// encontra maior e menor média
$maiorMedia = max($alunos);
$menorMedia = min($alunos);

// busca os nomes dos alunos
$alunoMaior = array_search($maiorMedia, $alunos);
$alunoMenor = array_search($menorMedia, $alunos);

echo "\nAluno com MAIOR média: $alunoMaior ($maiorMedia)\n";
echo "Aluno com MENOR média: $alunoMenor ($menorMedia)\n";

?>