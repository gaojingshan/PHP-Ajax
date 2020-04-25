<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // 下面的程序可以不用背诵，因为我们毕竟是搞前端的
        // 老师也是抄https://www.runoob.com/php/php-mysql-connect.html
        
        // 连接数据库，下面是数据库地址、用户名、密码
        $servername = "localhost";
        $username = "root";
        $password = "123456";

        // 读取地址栏中的POST请求参数
        $name = $_POST["name"];
        $sex = $_POST["sex"];
        $content = $_POST["content"];
        
        // 创建连接
        $conn = mysql_connect($servername, $username, $password);
        // 选择数据库
        mysql_select_db("test");
        // 设置字符集为中文
        mysql_query('SET NAMES UTF8');
        // 下面是一个SQL语句，SQL语句就是数据库的操作语句
        $sql = "INSERT INTO liuyan (name, sex, content) VALUES ('" . $name. "','" . $sex . "','". $content . "')";
        // 执行SQL语句
        $result = mysql_query($sql);
    ?>
    <h1>我们已经妥收您的留言，谢谢！</h1>
</body>
</html>