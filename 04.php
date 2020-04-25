<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td {
            border: 1px solid #000
        }
    </style>
</head>

<body>
    <table>
        <?php for ($i = 1; $i <= 9; $i++) {
        ?>
            <tr>
                <?php
                for ($j = 1; $j <= $i; $j++) {
                ?>
                    <td><?php echo $i . '乘以' . $j . '等于' . $i * $j ?></td>
                <?php
                }
                ?>
            </tr>
        <?php
        } ?>
    </table>
</body>

</html>