<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // https://www.runoob.com/php/php-mysql-connect.html

    // 连接数据库，下面是数据库地址、用户名、密码
    $servername = "localhost";
    $username = "root";
    $password = "123456";

    // 创建连接
    $conn = mysql_connect($servername, $username, $password);
    // 选择数据库
    mysql_select_db("test");
    // 设置字符集为中文
    mysql_query('SET NAMES UTF8');
    // 下面是一个SQL语句，SQL语句就是数据库的操作语句
    $sql = "SELECT * FROM news";
    // 执行SQL语句
    $result = mysql_query($sql);
    ?>
    <h1>欢迎光临杉姐新闻网</h1>
    <ul>
        <?php
        while ($row = mysql_fetch_array($result)) {
        ?>
            <li>
                <a href="show.php?id=<?php echo $row['id']; ?>">
                    <?php echo $row['title']; ?>
                </a>
            </li>
        <?php
        }
        ?>
    </ul>
</body>

</html>