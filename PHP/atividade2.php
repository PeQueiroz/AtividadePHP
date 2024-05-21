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

if ($n1 % 5 == 0 && $n1 % 2 == 0) {
    echo "<h3>É divisivel por 10, 5 e 2</h3>";
}

else if ($n1 % 5 == 0) {
    echo "<h3>É divisivel por 5</h3>";
}
else if ($n1 % 2 == 0) {
    echo "<h3>É divisivel por 2</h3>";
}
?>
</html>