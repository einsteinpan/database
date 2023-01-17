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

<?php
$v = $_COOKIE['mycookie'];
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








        <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top d-flex align-items-center">

            <div class="d-flex align-items-center justify-content-between">
                <a href="index1.php" class="logo d-flex align-items-center">
                    <img src="member.jpg" alt="index1.php">
                    <span class="d-none d-lg-block">高大宿舍管理系統</span>
                </a>
                <i class="bi bi-list toggle-sidebar-btn"></i>
            </div>
            <!-- End Logo -->
          
            <nav class="header-nav ms-auto">
                <ul class="d-flex align-items-center">

                   
                    <!-- End Search Icon-->

                    <li class="nav-item dropdown">

                        <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                            <i class="bi bi-bell"></i>
                            <span class="badge bg-primary badge-number">4</span>
                        </a>
                        <!-- End Notification Icon -->

                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                            <li class="dropdown-header">
                                You have 4 new notifications
                                <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li class="notification-item">
                                <i class="bi bi-exclamation-circle text-warning"></i>
                                <div>
                                    <h4>Lorem Ipsum</h4>
                                    <p>Quae dolorem earum veritatis oditseno</p>
                                    <p>30 min. ago</p>
                                </div>
                            </li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li class="notification-item">
                                <i class="bi bi-x-circle text-danger"></i>
                                <div>
                                    <h4>Atque rerum nesciunt</h4>
                                    <p>Quae dolorem earum veritatis oditseno</p>
                                    <p>1 hr. ago</p>
                                </div>
                            </li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li class="notification-item">
                                <i class="bi bi-check-circle text-success"></i>
                                <div>
                                    <h4>Sit rerum fuga</h4>
                                    <p>Quae dolorem earum veritatis oditseno</p>
                                    <p>2 hrs. ago</p>
                                </div>
                            </li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li class="notification-item">
                                <i class="bi bi-info-circle text-primary"></i>
                                <div>
                                    <h4>Dicta reprehenderit</h4>
                                    <p>Quae dolorem earum veritatis oditseno</p>
                                    <p>4 hrs. ago</p>
                                </div>
                            </li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li class="dropdown-footer">
                                <a href="#">Show all notifications</a>
                            </li>

                        </ul>
                        <!-- End Notification Dropdown Items -->

                    </li>
                    <!-- End Notification Nav -->

                    <li class="nav-item dropdown">

                        <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                            <i class="bi bi-chat-left-text"></i>
                            <span class="badge bg-success badge-number">3</span>
                        </a>
                        <!-- End Messages Icon -->

                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                            <li class="dropdown-header">
                                You have 3 new messages
                                <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li class="message-item">
                                <a href="#">
                                    <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                                    <div>
                                        <h4>Maria Hudson</h4>
                                        <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                        <p>4 hrs. ago</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li class="message-item">
                                <a href="#">
                                    <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                                    <div>
                                        <h4>Anna Nelson</h4>
                                        <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                        <p>6 hrs. ago</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li class="message-item">
                                <a href="#">
                                    <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                                    <div>
                                        <h4>David Muldon</h4>
                                        <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                        <p>8 hrs. ago</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li class="dropdown-footer">
                                <a href="#">Show all messages</a>
                            </li>

                        </ul>
                        <!-- End Messages Dropdown Items -->

                    </li>
                    <!-- End Messages Nav -->

                    <li class="nav-item dropdown pe-3">

                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                            <span class="d-none d-md-block dropdown-toggle ps-2"><?php   echo $v;?></span>
                        </a>
                        <!-- End Profile Iamge Icon -->

                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                            <li class="dropdown-header">
                                <h6>身分</h6>
                                <span><?php   echo $s;?></span>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                                    <i class="bi bi-person"></i>
                                    <span>個人資料</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                                    <i class="bi bi-gear"></i>
                                    <span>帳號設定</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="index.html">
                                    <i class="bi bi-box-arrow-right"></i>
                                    <span>登出</span>
                                </a>
                            </li>

                        </ul>
                        <!-- End Profile Dropdown Items -->
                    </li>
                    <!-- End Profile Nav -->

                </ul>
            </nav>
            <!-- End Icons Navigation -->

        </header>
        <!-- End Header -->

        <!-- ======= Sidebar ======= -->
        <aside id="sidebar" class="sidebar">

            <ul class="sidebar-nav" id="sidebar-nav">

			<li class="nav-item">
                    <a class="nav-link " href="Wmainface.php">
                        <i class="bi bi-grid"></i>
                        <span>宿舍公告</span>
                    </a>
                </li>
                <!-- End Dashboard Nav -->

                <!-- <li class="nav-item">
                    <a class="nav-link collapsed" href="application.php">
                        <i class="bi bi-card-list"></i>
                        <span>宿舍申請</span>
                    </a>
                </li> -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="violationreset.php">
                        <i class="bi bi-file-earmark"></i>
                        <span>違規登記</span>
                    </a>
                </li>

                <!-- End Icons Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="users-profile.php">
                        <i class="bi bi-person"></i>
                        <span>個人資料</span>
                    </a>
                </li>
                <!-- End Profile Page Nav -->

				<li class="nav-item">
                    <a class="nav-link collapsed" href="selfedit.php">
                        <i class="bi bi-person"></i>
                        <span>個人資料設定</span>
                    </a>
                </li>

				<li class="nav-item">
                    <a class="nav-link collapsed" href="record.php">
                        <i class="bi bi-person"></i>
                        <span>個人違規</span>
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link collapsed" href="yy.php">
                        <i class="bi bi-envelope"></i>
                        <span>住宿資料</span>
                    </a>
                </li>

				
				<!-- <li class="nav-item">
                    <a class="nav-link collapsed" href="see.php">
                        <i class="bi bi-card-list"></i>
                        <span>住宿申請</span>
                    </a>
                </li> -->
				<li class="nav-item">
                    <a class="nav-link collapsed" href="equipmentselect.php">
                        <i class="bi bi-box-arrow-in-right"></i>
                        <span>房間設備</span>
                    </a>
                </li>
                <!-- End Contact Page Nav -->

                <!-- End Register Page Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="index.html">
                        <i class="bi bi-box-arrow-in-right"></i>
                        <span>登出</span>
                    </a>
                </li>
                <!-- End Login Page Nav -->


            </ul>

        </aside>
        <!-- End Sidebar-->

        <main id="main" class="main">

            <div class="pagetitle">
                <h1>宿舍公告</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="Wmainface.php">高大宿舍管理系統</a></li>
                        <li class="breadcrumb-item active">宿舍公告</li>
                    </ol>
                </nav>
            </div>
            <!-- End Page Title -->

            <section class="section dashboard">
                <div class="row ">

                    <!-- Left side columns -->
                    <div class="col-lg-12">
                        <div class="row justify-content-around">

                            <!-- Top Selling -->
                            <div class="col-6">
                                <div class="card top-selling overflow-auto">

               
                                <div class="card mb-3">


<div class="card-body">

    <div class="pt-4 pb-2">
        <h5 class="card-title text-center pb-0 fs-4">帳號驗證</h5>
    </div>

	<form class="row g-3 needs-validation" action="check2.php" method="post"name="myForm">

<div class="col-12">
	<label for="yourUsername" class="form-label">帳號</label>
	<div class="input-group has-validation">

		<input name="account" type="text" class="form-control" id="yourUsername" required>
		<div class="invalid-feedback">Please enter your username.</div>
	</div>
</div>

<div class="col-12">
	<label for="yourPassword" class="form-label">密碼</label>
	<input type="password" name="password" class="form-control" id="yourPassword" required>
	<div class="invalid-feedback">Please enter your password!</div>
</div>

<div class="col-12">
	<button class="btn btn-primary w-100" type="submit" value="登入" onClick="check_data()">登入</button>
</div>
</form>

</div>
</div>
                                        

                          
                                    </div>


                                </div>

                                
                            </div>
                            <!-- End Top Selling -->

                         

                                
                            </div>

                        </div>
                    </div>


                


                </div>
            </section>

        </main>
        <!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">
            <div class="copyright">
            © 2022 高雄大學 National University of Kaohsiung<br>811高雄市楠梓區 高雄大學路700號 工學院 313<br>電話: (07)591-9518 傳真號碼: 886-7-5919083 電子信箱: cs@nuk.edu.tw
            <br>高大總機: 886-7-5919000<br>高大校園緊急聯絡電話: 886-7-5917885 高大警衛室: 886-7-5919009
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                <a href="https://getbootstrap.com">參考範本</a>
            </div>
        </footer>
        <!-- End Footer -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/chart.js/chart.umd.js"></script>
        <script src="assets/vendor/echarts/echarts.min.js"></script>
        <script src="assets/vendor/quill/quill.min.js"></script>
        <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
        <script src="assets/vendor/tinymce/tinymce.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>

	</body>

</html>