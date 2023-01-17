
<?php
  $mysql_server_name='localhost'; //改成自己的mysql資料庫伺服器
  $mysql_username='root'; //改成自己的mysql資料庫使用者名稱
  $mysql_password=''; //改成自己的mysql資料庫密碼
  $mysql_database='dormitoriesdb'; //改成自己的mysql資料庫名

  $account=$_POST["account"];
  $password=$_POST["password"];
  $SID=$_POST["SID"];
  $Idnum=$_POST["Idnum"];
 
try {
    $conn = new PDO("mysql:host=$mysql_server_name;dbname=$mysql_database", $mysql_username, $mysql_password);
    // 设置 PDO 错误模式，用于抛出异常
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO account (account, password, SID, Idnum)
    VALUES ('$account', '$password', '$SID', '$Idnum')";
    // 使用 exec() ，没有结果返回 
    $conn->exec($sql);
    echo "註冊成功!3秒後將自動跳轉頁面<br>";
            echo "<a href='index.html'>未成功跳轉頁面請點擊此</a>";
            header("refresh:32;url=index.html");
            exit;

}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}
 
$conn = null;
?>

