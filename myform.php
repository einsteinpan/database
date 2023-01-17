
<?php


$wuziling = $_COOKIE['mycookie'];
$wuziling1 = $_COOKIE['mycookie1'];
$wuziling2 = $_COOKIE['mycookie2'];
$wuziling3 = $_COOKIE['mycookie3'];
$wuziling4 = $_COOKIE['mycookie4'];
$wuziling5 = $_COOKIE['mycookie5'];
$who = $_COOKIE['who'];

  $mysql_server_name='localhost'; //改成自己的mysql資料庫伺服器
  $mysql_username='root'; //改成自己的mysql資料庫使用者名稱
  $mysql_password=''; //改成自己的mysql資料庫密碼
  $mysql_database='dormitoriesdb'; //改成自己的mysql資料庫名


  $sid=$_POST["sid"];
  $name=$_POST["name"];
  $VDate=$_POST["VDate"];
  $content=$_POST["content"];


  
 
try {
    $conn = new PDO("mysql:host=$mysql_server_name;dbname=$mysql_database", $mysql_username, $mysql_password);
    // 设置 PDO 错误模式，用于抛出异常
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO violationrecord (content,VDate,SID)
    VALUES ('$content', '$VDate', '$sid')";
    // 使用 exec() ，没有结果返回 
    $conn->exec($sql);
    echo "註冊成功!3秒後將自動跳轉頁面<br>";
            echo "<a href='Wmainface.php'>未成功跳轉頁面請點擊此</a>";
            header("refresh:32;url=Wmainface.php");
            exit;

}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}
 
$conn = null;
?>

