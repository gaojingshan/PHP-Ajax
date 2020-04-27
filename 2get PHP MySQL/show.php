<?php
// 作为了解 后端连接数据库GET请求操作
// https://www.runoob.com/php/php-mysql-connect.html

// 连接数据库，下面是数据库地址、用户名、密码
$servername = "localhost";
$username = "root";
$password = "123456";

// 读取地址栏中的GET请求参数
$id = $_GET["id"];

// 创建连接
$conn = mysql_connect($servername, $username, $password);
// 选择数据库
mysql_select_db("test");
// 设置字符集为中文
mysql_query('SET NAMES UTF8');
// 下面是一个SQL语句，SQL语句就是数据库的操作语句
$sql = "SELECT * FROM news WHERE id = " . $id;
// 执行SQL语句
$result = mysql_query($sql);
// 执行的结果要变为数组，方便使用，php中的数组实际上类似于我们JS中的对象
$resultobj = mysql_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $resultobj['title']; ?></title>
    <style>
        body {
            background: #88073d;
        }

        h1 {
            text-align: center;
            color: white;
        }

        .content {
            background: white;
            padding: 20px;
            width: 800px;
            margin: 40px auto;
            border-radius: 10px;
            box-shadow: 1px 1px 1px rgba(0, 0, 0, .5)
        }
    </style>
</head>

<body>


    <h1><?php echo $resultobj['title']; ?></h1>
    <div class="content">
        <?php echo $resultobj['content']; ?>
    </div>
</body>

</html>