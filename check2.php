<!doctype html>
<html>

<?php
	$link=mysqli_connect("localhost","root","");
	if (!$link) {
		 die ("無法開啟Mysql資料庫連結");
	}
	else {
		$account=$_POST["account"];
		$password=$_POST["password"];

		mysqli_select_db($link, "dormitoriesdb");
		$sql="select *from account where account='$account'AND password='$password';";
		mysqli_query($link, 'SET CHARACTER SET utf8');
		mysqli_query($link,  "SET collation_connection = 'utf8_general_ci'");
		$result=mysqli_query($link,$sql);

		if(mysqli_num_rows($result)==0){
			mysqli_free_result($result);
			echo "<script type='text/javascript'>";
			echo "alert('帳號密碼有誤，請重新輸入');";
			echo "history.back();";
			echo"</script>";
		}
		else{
			$id=mysqli_fetch_assoc($result);
			mysqli_free_result($result);
			mysqli_close($link);
		}
	}
?>
<body onload="parent.location='violation.php?account=<?=$account=$_POST["account"]?>'"></body>
</html>
