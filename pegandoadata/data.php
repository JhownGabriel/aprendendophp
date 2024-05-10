<?php
    $datetime = date("Y-m-d");
    $datadenascimento = $_POST['obterdia'];

    echo '<p>data atual:</p>'.$datetime.'<br>';
    echo '<p>Sua data de nascimento:</p>'. $datadenascimento;

    $diferenca = $datetime->diff($datadenascimento);

    $totalDias = $diferenca->format('%a');

    echo '<p>Totoal de dias:</p>'.$totalDias;

?>