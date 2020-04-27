<?php
    // 接口是后台写的，前端用不到写接口
    // 知道接口是怎么来的。
    
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
    // 总结果数组
    $arr = array();
    // 遍历数据库查询的结果，往总结果数组中放
    while($row = mysql_fetch_array($result)) {
        array_push($arr, array("id" => $row["id"], "title" => $row["title"], "content" => $row["content"] ));
    }

    echo json_encode($arr);
?>