<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo</title>
</head>
<body>
    
</body>
<?php

$n1 = $_GET['n1'];
$i = 0;
$meses = array(1 => "Janeiro", 2 => "Fevereiro", 3 => "Março", 4 => "Abril", 5 => "Maio", 6 => "Junho", 7 => "Julho", 8 => "Agosto", 9 => "Setembro", 10 => "Outubro", 11 => "Novembro", 12 => "Dezembro");

if ($n1 > 12 || $n1 < 1) {
    echo "<h3>Número fora do range</h3>";
}

else{
    echo $meses[$n1];
}
?>
</html>