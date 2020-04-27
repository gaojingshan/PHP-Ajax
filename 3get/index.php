<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        $a = $_GET['a'];
        $b = $_GET['b'];
        $c = $_GET['c'];
        echo '我接收了三个参数，a是'.$a.',b是'.$b.',c是'.$c;
    ?>
</body>
</html>