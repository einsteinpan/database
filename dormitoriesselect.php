<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="mainface.css" type="text/css" />
		<title>Dormitory Management System</title>
		<script type="text/javascript">
			function check_data(){
				alert("查詢成功!");
			}
		</script>
		
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
			else {
			    echo "{$sql} 語法執行失敗，錯誤訊息: " . mysqli_error($link);
			}	
		?>
		</p>
			<p align="center">高雄大學宿舍管理系統</p>			
		</header>
		
		
		<!-- 網頁左方的工具列或訊息 -->
		<aside id="aside">
			<a href="Wmainface.php?account=<?=$account?>">系統公告</a><br><br>
			<a href="dormitoriesselect.php?account=<?=$account?>">住宿資料</a><br><br>
			<a href="violationreset.php?account=<?=$account?>">違規記錄</a><br><br>
			<a href="Wselect.php?account=<?=$account?>">個人資料</a><br><br>
			<a href="selfedit.php?account=<?=$account?>">編輯個人資料</a><br><br>
			<a href="boardselect.php?account=<?=$account?>">查看留言板</a><br><br>
			<a href="logout.php">登出</a><br><br>
		</aside>
		<!-- 網頁主要區塊 -->
		<section id="section">
			<p>宿舍房間資料</p>
			<table align=center cellpadding='5' border='1'>
			<form id ="L" method = "post">
			<tr>
			<td><select name="bname">
					<option value="1">學一宿舍</option>
					<option value="2">學二宿舍</option>
					<option value="0">綜合宿舍</option>
				</select></td>
			<td><select name="roomnum">
					<option value="1301">1301</option>
					<option value="1302">1302</option>
					<option value="2301">2301</option>
					<option value="2302">2302</option>
					<option value="0301">301</option>
					<option value="0302">302</option>
				</select></td>
			<td><input type="submit" value= "查詢" onClick="return check_data()" ></td></tr>
			</form>
			<?php
			$mysql_server_name='localhost'; //改成自己的mysql資料庫伺服器
			$mysql_username='root'; //改成自己的mysql資料庫使用者名稱
			$mysql_password=''; //改成自己的mysql資料庫密碼
			$mysql_database='dormitoriesdb'; //改成自己的mysql資料庫名
			$conn=mysqli_connect($mysql_server_name,$mysql_username,$mysql_password,$mysql_database) or die("error connecting") ; //連線資料庫
			$sql = "SELECT * FROM `student`;";
			$result = mysqli_query($conn,$sql); //查詢
			
			while($row = mysqli_fetch_array($result))
			{
				$roomnum=$row['roomnum'];
				$bname=$row['bname'];
			}

			if(isset($_POST['bname'])) {
				echo'<tr><td><font size ="4" face"標楷體"color = white>姓名</td>';
				echo'<td><font size ="4" face"標楷體"color = white>電子郵件</td>';
				echo'<td><font size ="4" face"標楷體"color = white>連絡電話</td></tr>';
				//echo "bname: ".htmlspecialchars($_POST['bname']);
				//echo "roomnum: ".htmlspecialchars($_POST['roomnum']);
				$bname = $_POST['bname'];
				$roomnum = $_POST['roomnum'];
				$sql="SELECT `SName`,`Email`,`phonenumber` FROM `student` WHERE `roomnum`=$roomnum";
				$result = mysqli_query($conn,$sql); //查詢
				if ($result) {
				// mysqli_num_rows方法可以回傳我們結果總共有幾筆資料
					if (mysqli_num_rows($result)>0) {
					// 取得大於0代表有資料
					// while迴圈會根據資料數量，決定跑的次數
					// mysqli_fetch_assoc方法可取得一筆值
					while ($row = mysqli_fetch_array($result)) {
						echo'<tr>';
						echo'<td><font size ="4" face"標楷體"color = white>'.$row[0].'</td>';
						echo'<td><font size ="4" face"標楷體"color = white>'.$row[1].'</td>';
						echo'<td><font size ="4" face"標楷體"color = white>'.$row[2].'</td>';
						echo'</tr>';
							}
						}
						// 釋放資料庫查到的記憶體
						mysqli_free_result($result);
					}
			}
			mysqli_close($conn)
			?>

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
