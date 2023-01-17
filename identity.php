<?php

class TableRows extends RecursiveIteratorIterator {
  function __construct($it) { 
      parent::__construct($it, self::LEAVES_ONLY); 
  }

  function current() {
      return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
  }  
} 
  $account = ['w123'];
  
  $mysql_server_name='localhost'; //改成自己的mysql資料庫伺服器
  $mysql_username='root'; //改成自己的mysql資料庫使用者名稱
  $mysql_password=''; //改成自己的mysql資料庫密碼
  $mysql_database='dormitoriesdb'; //改成自己的mysql資料庫名
  $conn=mysqli_connect($mysql_server_name,$mysql_username,$mysql_password,$mysql_database) or die("error connecting") ; //連線資料庫
  $sql = "SELECT `identity`,`Wname` FROM `identity` INNER JOIN `warden` ON `warden`.`Idnum`=`identity`.`Idnumber` WHERE	`WID`='$account';";
  $result = mysqli_query($conn,$sql); //查詢

   
  if ($result) {
  // mysqli_num_rows方法可以回傳我們結果總共有幾筆資料
    if (mysqli_num_rows($result)>0) {
      // 取得大於0代表有資料
      // while迴圈會根據資料數量，決定跑的次數
      // mysqli_fetch_assoc方法可取得一筆值
      while ($row = mysqli_fetch_array($result)) {
        echo'<tr>';
        // 每跑一次迴圈就抓一筆值，最後放進data陣列中
        echo'<td><font size ="3" face"標楷體"color = white>'.$row[0].'</td>';
        echo'<td><font size ="3" face"標楷體"color = white>'.$row[1].'</td>';
        echo'</tr>';
      }
    }
    // 釋放資料庫查到的記憶體
    mysqli_free_result($result);
    mysqli_close($conn);
  }
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dormitoriesdb";
 
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("select identity from account inner join identity on identity.Idnumber=account.Idnum where `account`= '$account';"); 
    $stmt->execute();
 
    // 设置结果集为关联数组
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>