<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo</title>
</head>
<body>
    
</body>
<?php

$l1 = $_GET['l1'];
$l2 = $_GET['l2'];
$l3 = $_GET['l3'];

if ($l1 == $l2 && $l2 == $l3) {
    echo "<h3>Triangulo Equilátero</h3>";
}

else if ($l1 != $l2 && $l2 != $l3 && $l1 != $l3) {
    echo "<h3>Triangulo Escaleno</h3>";
}
else{
    echo "<h3>Triangulo Isósceles</h3>";
}
?>
</html>