<?php

$diasdasemana= array(
    1=>'Segunda-Feira',
    2=>'Terça-Feira',
    3=>'Quarta-Feira',
    4=>'Quinta-Feira',
    5=>'Sexta-Feira',
    6=>'Sabado',
    7=>'Domingo'
);

$meses= array(
    1 =>'Janeiro',
    2 =>'Fevereiro',
    3 =>'Março',
    4 =>'Abril',
    5 =>'Maio',
    6 =>'Junho',
    7 =>'Julho',
    8 =>'Agosto',
    9 =>'Setembro',
    10=>'Outubro',
    11=>'Novembro',
    12=>'Dezembro'

);

echo "Dia da Semana: ".$diasdasemana[$_POST['DiadaSemana']];
echo "<br>";
echo " Mês: ".$meses[$_POST['Mês']];

         
?>

