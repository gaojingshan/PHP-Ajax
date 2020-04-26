<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <h1>好高兴啊，我买了一个华为P<?php echo 38 + 2 ?></h1>
    <h1>好高兴啊，我买了一个华为P<span id="myspan"></span></h1>
    <script>
        var myspan=document.getElementById('myspan');
        myspan.innerHTML=38+2;
    </script> -->

    <!-- <?php for ($i = 0; $i <= 10; $i++) {
            ?>
        <h1>我怎么这么好看</h1>
    <?php
            } ?> -->

    <!-- <select>
        <?php for ($i = 1920; $i <= 2020; $i++) {
        ?>
            <option><?php echo $i; ?></option>
        <?php
        } ?>
    </select> -->

    <table border="1">
        <?php for ($i = 1; $i <= 9; $i++) {
        ?>
            <tr>
                <?php for ($j = 1; $j <= $i; $j++) {
                ?>
                    <td><?php echo $i . '乘以' . $j . '等于' . ($i * $j) ?></td>
                <?php
                } ?>
            </tr>
        <?php
        } ?>
    </table>
</body>

</html>