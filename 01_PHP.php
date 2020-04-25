<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin:0;
            padding:0
        }
    </style>
</head>
<body>
    <!-- php中看不到书写程序的过程，js可以 -->
    <p>输出语句</p>
    <p>今天星期<?php echo 2 + 4; ?></p>
    <br>
    <br>
    <!-- ****************************************************************** -->
    
    <p>下拉菜单</p>
    生日：
    <select>
        <?php for($i = 1920 ; $i <= 2020 ; $i++){
            ?>
        <option><?php echo $i ?></option>
        <?php } ?>
    </select>
    <br>
    <br>
    <!-- ****************************************************************** -->
    
    <p>九九乘法表</p>
    <table border="1">
        <?php
            for($i = 1 ; $i <= 9 ; $i++){
        ?>
        <tr><?php for($j = 1 ; $j <= $i ; $j++){
        ?>
            <td><?php echo $i . '乘以'. $j .'等于'. $i * $j?></td>
            <?php
        } ?></tr>
        <?php 
            }
            ?>
    </table>
    <br>
    <br>
    <!-- ****************************************************************** -->
    
    
    
    <!-- ****************************************************************** -->
</body>
</html>