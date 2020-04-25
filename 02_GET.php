<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- GET请求 -->
    <?php
    $arr = array(
        array('name' => '勒布朗', 'image' => 'lebulang.jpg', 'type' => 'nba', 'height' => 2.06),
        array('name' => '詹姆斯', 'image' => 'zhanmusi.png', 'type' => 'nba', 'height' => 2.03),
        array('name' => '艾弗森', 'image' => 'aifoseng.png', 'type' => 'nba', 'height' => 1.83),
        array('name' => '罗纳尔多', 'image' => 'cluo.jpg', 'type' => 'fifa', 'height' => 1.85)
    );
    ?>
    <h1>我喜欢的球员</h1>
    <table border="1">
        <tr>
            <th>头像</th>
            <th>姓名</th>
            <th>类型</th>
            <th>身高</th>
        </tr>
        <?php
        for ($i = 0; $i < count($arr); $i++) {
        ?>
            <tr>
                <td><?php echo $arr[$i]['image'] ?></td>
                <td><?php echo $arr[$i]['name'] ?></td>
                <td><?php echo $arr[$i]['type'] ?></td>
                <td><?php echo $arr[$i]['height'] ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>