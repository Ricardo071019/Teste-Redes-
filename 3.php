<?php
$diaSemana = rand(1,7);
switch ($diaSemana) {
    case '0':
        print('Domingo');
        break;
    case '1':
    print('Segnda-Feira');
    break;

    case '2':
        print('Terça-Feira');
        break;

    case '3':
        print('Quarta-Feira');
        break;

    case '4':
        print('Quinta-Feira');
        break;

    case '5':
        print('Sexta-Feira');
        break;

    case '6':
            print('Sábado');
            break;

    default:
        echo 'Erro ao validar o dia da semana';
        break;
}
?>