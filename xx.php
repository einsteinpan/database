<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>高雄大學宿舍管理系統</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


		<!-- 網頁最上方的標題 -->
		<header id="header">
		<p align="right">
		<?php
			$account = $_GET['account'];
			$mysql_server_name='localhost'; //改成自己的mysql資料庫伺服器
			$mysql_username='root'; //改成自己的mysql資料庫使用者名稱
			$mysql_password=''; //改成自己的mysql資料庫密碼
			$mysql_database='dormitoriesdb'; //改成自己的mysql資料庫名
			$conn=mysqli_connect($mysql_server_name,$mysql_username,$mysql_password,$mysql_database) or die("error connecting") ; //連線資料庫
			$sql = "SELECT `identity`,`SName` FROM `identity` INNER JOIN `student` ON `student`.`Idnum`=`identity`.`Idnumber` WHERE	`ID`='$account';";
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
			else {
			    echo "{$sql} 語法執行失敗，錯誤訊息: " . mysqli_error($link);
			}	
		?>
		</p>
			<p align="center">高雄大學宿舍管理系統</p>			
		</header>
		
		
		<!-- 網頁左方的工具列或訊息 -->
		<aside id="aside">
			<a href="mainface.php?account=<?=$account?>">系統公告</a><br><br>
			<a href="application.php?account=<?=$account?>">宿舍申請</a><br><br>
			<a href="record.php?account=<?=$account?>">違規記錄</a><br><br>
			<a href="select.php?account=<?=$account?>">個人資料</a><br><br>
			<a href="selfedit.php?account=<?=$account?>">編輯個人資料</a><br><br>
			<a href="equipmentselect.php?account=<?=$account?>">房間設備</a><br><br>
			<a href="board.php?account=<?=$account?>">留言板</a><br><br>
			<a href="logout.php">登出</a><br><br>
		</aside>
		
		<!-- 網頁主要區塊 -->
		<section id="section">
			<p>系統公告</p>	
			<table cellpadding='5' border='1'>
				<tr>
					<th>日期</th>
    				<th width="550">訊息</th>
				</tr>
				<tr>
					<td>2022-12-10</td>
					<td>資料庫建立</td>
				</tr>
				<tr>
					<td>2022-12-15</td>&nbsp;
					<td>網站功能完善</td>&nbsp;
				</tr>
				<tr>
					<td>2022-12-20</td>&nbsp;
					<td>網站介面更新</td>&nbsp;
  				</tr>
			</table></br>
			<table cellpadding='5' border='1'>
			<tr><th width = "645"><font color="FF0000">第一次登入請先修改預設密碼！</font></th></tr>
			</table>

		</section>
		
		<!-- 網頁下方的工具列或訊息 -->
		<footer id="footer">
			<h1>
				© 2022 高雄大學 National University of Kaohsiung<br>
				811高雄市楠梓區 高雄大學路700號<br>
				電話:&nbsp;(07)591-9518  傳真號碼:&nbsp;886-7-5919083  電子信箱:&nbsp;cs@nuk.edu.tw<br>
				高大總機:&nbsp;886-7-5919000<br>
				高大校園緊急聯絡電話:&nbsp;886-7-5917885 高大警衛室:&nbsp;886-7-5919009<br>
			</h1>
		</footer>
		
	</body>
</html>





