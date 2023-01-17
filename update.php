<!doctype html>
<html>
<?php
$account = $_GET['id'];
$mysql_server_name='localhost'; //改成自己的mysql資料庫伺服器
$mysql_username='root'; //改成自己的mysql資料庫使用者名稱
$mysql_password=''; //改成自己的mysql資料庫密碼
$mysql_database='dormitoriesdb'; //改成自己的mysql資料庫名
$link=mysqli_connect($mysql_server_name,$mysql_username,$mysql_password,$mysql_database) or die("error connecting") ; //連線資料庫
    $username = $_POST['username'];
	$phone = $_POST['phonenumber'];
	$email = $_POST['Email'];
	$gender = $_POST['gender'];
	$password = $_POST['password'];
    $sql="update student,account set SName= '"."$username',Email= '"."$email',gender= '"."$gender',Phonenumber= '"."$phone',password= '"."$password' where ID = '$account' and account='$account';";
    $result= mysqli_query($link,$sql);

    if($result){
			echo "alert('successed');";
		}	
?>
<body onload="parent.location='mainface.php?account=<?=$account?>'"></body>
</html>