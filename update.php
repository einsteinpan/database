<!doctype html>
<html>
<?php
$account = $_GET['id'];
$mysql_server_name='localhost'; //�令�ۤv��mysql��Ʈw���A��
$mysql_username='root'; //�令�ۤv��mysql��Ʈw�ϥΪ̦W��
$mysql_password=''; //�令�ۤv��mysql��Ʈw�K�X
$mysql_database='dormitoriesdb'; //�令�ۤv��mysql��Ʈw�W
$link=mysqli_connect($mysql_server_name,$mysql_username,$mysql_password,$mysql_database) or die("error connecting") ; //�s�u��Ʈw
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