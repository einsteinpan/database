<?php

  $mysql_server_name='localhost'; //改成自己的mysql資料庫伺服器
  $mysql_username='root'; //改成自己的mysql資料庫使用者名稱
  $mysql_password=''; //改成自己的mysql資料庫密碼
  $mysql_database='dormitoriesdb'; //改成自己的mysql資料庫名
 
try {
    $conn = new PDO("mysql:host=$mysql_server_name;dbname=$mysql_database", $mysql_username, $mysql_password);
    // 设置 PDO 错误模式，用于抛出异常
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO account (account, password, SID, Idnum)
    VALUES ('23', '123', '123', '1')";
    // 使用 exec() ，没有结果返回 
    $conn->exec($sql);
    echo "新记录插入成功";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}
 
$conn = null;
?>