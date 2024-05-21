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
$n2 = $_GET['n2'];
$n3 = $_GET['n3'];

if ($n1 === $n2 && $n2 === $n3) {
    echo "<h3>Os números são iguais</h3>";
}

else if($n1 > $n2 && $n1 > $n3) {
    if ($n2 > $n3){
    echo $n1," ", $n2," ", $n3;
    }
    else{
        echo $n1," ", $n3," ", $n2;
    }
}

else if($n2 > $n1 && $n2 > $n3){
    if ($n1 > $n3){
    echo $n2," ", $n1," ", $n3;
    }
    else{
        echo $n2, " ", $n3," ", $n1;
    }
}
else{
    if ($n1 > $n2){
        echo $n3," " ,$n1," " ,$n2;
        }
        else{
            echo $n3," ", $n2," ", $n1;
        }
}
?>
</html>