<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php for ($i = 1; $i <= 10; $i++) {
    ?>
        <h1>我怎么这么好看！</h1>
    <?php
    } ?>

    <p>循环99张小图</p>
    <?php
    for ($i = 0; $i < 99; $i++) {
    ?>
        <img src="images/<?php echo $i ?>.jpg" alt="">
    <?php
    }
    ?>
</body>

</html>