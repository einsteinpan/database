<?php
	$link=mysqli_connect("localhost","root","");
	header("Content-type:text/html;charset=utf-8");

	$account=$_POST["account"];
	$email=$_POST["email"];
	$show_method=$_POST["show_method"];

	$link=create_connection();

	$sql="SELECT Sname,password from student,account where account='$account'AND Email='$email AND SID =ID;";
	$result=execute_sql($link,"member",$sql);

	if(mysql_num_rows($result)==0) {
		echo "<script type='text/javascript'>
		alert('你所查詢的資料不存在');
		history.back();
		</script>";
	}
	else {
		$row=mysqli_fetch_object($result);
		$name=$row->name;
		$password=$row->password;
		$message="
				<!doctype html>
				<html>
				<head>
				<title></title>
				<meta http-equiv='Content-Type'content='text/html;charset=utf-8>
				</head>
				<body>
				$name 你的帳號資料如下:<br><br>
			    帳號:$account<br>
				密碼:$password<br><br>
				<a href='http://localhost/ch17/index.html'>按此登入本站</a>
				</body>
				</html>";
		
		if($show_method=="網頁顯示"){
			echo $message;
		}
		else{
			$subject="=?utf-8?B?".base64_encode("帳號通知");
			$headers="MIME-Version:1.0\r\nContent-type:text/html;charset=utf-8\r\n";
			mail($email,$subject,$message,$headers);
			echo "$name 你的帳戶資料已寄至$email<br><br>
				<a href='index.html'>按此登入本站</a>";
		}
	}
	
	mysqli_free_result($result);
	mysqli_close($link);
?>
