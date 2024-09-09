<?php 

$dadosJson = file_get_contents('dados.json');
$dados = json_decode($dadosJson);

$totalDias = 0;
$diaZero = 0;
$soma = 0;

foreach($dados as $dia){
    if($dia->dia == 1){
        $diaMenor = $dia->dia;
        $menor = $dia->valor;

        $diaMaior = $dia->dia;
        $maior = $dia->valor;
    } else {
        if($dia->valor < $menor && $dia->valor != 0){
            $diaMenor = $dia->dia;
            $menor = $dia->valor;
        } elseif($dia->valor > $maior){
            $diaMaior = $dia->dia;
            $maior = $dia->valor;
        }
    }

    $totalDias++;

    if($dia->valor == 0){
        $diaZero++;
    } else {
        $soma = $soma + $dia->valor;
    }
}

$totalDias = $totalDias - $diaZero;

$media = $soma/$totalDias;

echo '<p> Menor valor de faturamento: '.$menor.', no dia'.$diaMenor.'</p>';
echo '<p> Maior valor de faturamento: '.$maior.', no dia'.$diaMaior.'</p>';
echo '<p> Média de faturamento: '.$media.'</p>';

?>