<?php 
	$link=mysqli_connect("localhost","root","");
	if (!$link) {
		 die ("無法開啟Mysql資料庫連結");
	}
	else {
		mysqli_select_db($link, "dormitoriesdb");
		$sql="SELECT * FROM `account`;";
		$result=mysqli_query($link,$sql);
		$get = mysqli_fetch_row($result);

		$sql="DELETE FROM `student` WHERE `SID`='get[0]';";
		header("location:index.html");
	}
 ?>