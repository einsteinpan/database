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
        </header>

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
                            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $account; ?></span>
                        </a>
                        <!-- End Profile Iamge Icon -->

                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                            <li class="dropdown-header">
                                <h6><?php echo $account ?></h6>
                                <span>學生</span>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                    <i class="bi bi-person"></i>
                                    <span>個人資料</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
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
                    <a class="nav-link " href="Wmainface.html">
                        <i class="bi bi-grid"></i>
                        <span>宿舍公告</span>
                    </a>
                </li>
                <!-- End Dashboard Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="apply.html">
                        <i class="bi bi-card-list"></i>
                        <span>宿舍申請</span>
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link collapsed" href="device.html">
                        <i class="bi bi-card-list"></i>
                        <span>房間設備</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="blank.html">
                        <i class="bi bi-file-earmark"></i>
                        <span>報修申請</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="oponion.html">
                        <i class="bi bi-envelope"></i>
                        <span>意見反應</span>
                    </a>
                </li>

                <!-- End Icons Nav -->

                <li class="nav-heading">Pages</li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="users-profile.html">
                        <i class="bi bi-person"></i>
                        <span>個人資料</span>
                    </a>
                </li>
                <!-- End Profile Page Nav -->


                <li class="nav-item">
                    <a class="nav-link collapsed" href="messenge.html">
                        <i class="bi bi-envelope"></i>
                        <span>留言板</span>
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
                <div class="row">

                    <!-- Left side columns -->
                    <div class="col-lg-8">
                        <div class="row">

                            <!-- Top Selling -->
                            <div class="col-12">
                                <div class="card top-selling overflow-auto">

                                    <div class="filter">
                                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                            <li class="dropdown-header text-start">
                                                <h6>Filter</h6>
                                            </li>

                                            <li><a class="dropdown-item" href="#">Today</a></li>
                                            <li><a class="dropdown-item" href="#">This Month</a></li>
                                            <li><a class="dropdown-item" href="#">This Year</a></li>
                                        </ul>
                                    </div>

                                    <div class="card-body pb-0">
                                        <h5 class="card-title">宿舍公告<span>| 111年度上學期</span></h5>

                                        <table class="table table-borderless">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-primary fw-bold"></a>
                                                    </td>
                                                    <td><a href="#" class="text-primary fw-bold">111-1學期學生宿舍清宿通知</a></td>

                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-primary fw-bold"></a>
                                                    </td>
                                                    <td><a href="#" class="text-primary fw-bold">國立高雄大學111學年學二宿舍地下室汽車停車場車位申請公告</a></td>

                                                </tr>

                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-primary fw-bold"></a>
                                                    </td>
                                                    <td><a href="#" class="text-primary fw-bold">國立高雄大學111學年學生宿舍「冰箱申請抽籤」公告</a></td>

                                                </tr>

                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-primary fw-bold"></a>
                                                    </td>
                                                    <td><a href="#" class="text-primary fw-bold">宿舍進住因颱風影響更動公告</a></td>

                                                </tr>

                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-primary fw-bold"></a>
                                                    </td>
                                                    <td><a href="#" class="text-primary fw-bold">111學年床位候補申請公告</a></td>

                                                </tr>

                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-primary fw-bold"></a>
                                                    </td>
                                                    <td><a href="#" class="text-primary fw-bold">111學年新生床位公告</a></td>

                                                </tr>


                                            </tbody>
                                        </table>

                                    </div>


                                </div>

                                
                            </div>
                            <!-- End Top Selling -->

                            <div class="col-12">
                                <div class="card top-selling overflow-auto">

                                    <div class="filter">
                                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                            <li class="dropdown-header text-start">
                                                <h6>Filter</h6>
                                            </li>

                                            <li><a class="dropdown-item" href="#">Today</a></li>
                                            <li><a class="dropdown-item" href="#">This Month</a></li>
                                            <li><a class="dropdown-item" href="#">This Year</a></li>
                                        </ul>
                                    </div>

                                    <div class="card-body pb-0">
                                        <h5 class="card-title">宿舍辦公室位置</h5>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.853453718268!2d120.27570571484105!3d22.73368768510019!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e0f691a8531e1%3A0xb63c938217f4ad11!2z6auY6ZuE5aSn5a245a2455Sf56ys5LqM5a6_6IiN!5e0!3m2!1szh-TW!2stw!4v1672746898777!5m2!1szh-TW!2stw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        

                                    </div>


                                </div>

                                
                            </div>

                        </div>
                    </div>


                    
                    <!-- End Left side columns -->

                    <!-- Right side columns -->
                    <div class="col-lg-4">

                        <!-- Recent Activity -->
                        <div class="card">
                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                           
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">網頁動態</h5>

                                <div class="activity">

                                    <div class="activity-item d-flex">
                                        <div class="activite-label">2023-01-03</div>
                                        <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                        <div class="activity-content">
                                            網頁介面更新
                                        </div>
                                    </div>
                                    <!-- End activity item-->

                                    <div class="activity-item d-flex">
                                        <div class="activite-label">2023-01-01</div>
                                        <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                                        <div class="activity-content">
                                           伺服器上架
                                        </div>
                                    </div>
                                    <!-- End activity item-->

                                    <div class="activity-item d-flex">
                                        <div class="activite-label">2022-12-29</div>
                                        <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                                        <div class="activity-content">
                                            網頁介面更新
                                        </div>
                                    </div>
                                    <!-- End activity item-->

                                    <div class="activity-item d-flex">
                                        <div class="activite-label">2022-12-20</div>
                                        <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                                        <div class="activity-content">
                                            網頁功能更新
                                        </div>
                                    </div>
                                    <!-- End activity item-->

                                    <div class="activity-item d-flex">
                                        <div class="activite-label">2022-12-1-</div>
                                        <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                                        <div class="activity-content">
                                            資料庫建立
                                        </div>
                                    </div>
                                    <!-- End activity item-->


                                </div>

                            </div>
                        </div>
                        <!-- End Recent Activity -->


                        <div class="card">
                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            </div>
                        <div class="card-body">
                                <h5 class="card-title">常用連結<span></span></h5>

                                <div class="activity">

                                    <div class="activity-item d-flex">
                                    
                                        <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                        <div class="activity-content">
                                        <a href="#" class="fw-bold text-dark">個人資料 </a> 
                                        </div>
                                    </div>
                                    <!-- End activity item-->

                                    <div class="activity-item d-flex">
                                  
                                        <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                                        <div class="activity-content">
                                        <a href="#" class="fw-bold text-dark">報修系統</a> 
                                           
                                        </div>
                                    </div>
                                    <!-- End activity item-->

                                    <div class="activity-item d-flex">
                                    
                                        <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                                        <div class="activity-content">
                                        <a href="#" class="fw-bold text-dark">學務系統</a> 
                                            
                                        </div>
                                    </div>
                                    <!-- End activity item-->

                                    <div class="activity-item d-flex">
                                        
                                        <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                                        <div class="activity-content">
                                        <a href="#" class="fw-bold text-dark">新生服務網</a> 
                                        
                                        </div>
                                    </div>
                                    <!-- End activity item-->

                                </div>

                            </div>
                        </div>
                        <!-- End Recent Activity -->



                        <div class="card">
                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            </div>
                        <div class="card-body">
                                <h5 class="card-title">緊急聯絡方式<span></span></h5>

                                <div class="activity">

                                    <div class="activity-item d-flex">
                                    
                                        <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                        <div class="activity-content">
                                        <a href="#" class="fw-bold text-dark">校安中心： (07)5917885</a> 
                                        </div>
                                    </div>
                                    <!-- End activity item-->

                                    <div class="activity-item d-flex">
                                  
                                        <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                                        <div class="activity-content">
                                        <a href="#" class="fw-bold text-dark">學生宿舍： (07)5919596、5919597</a> 
                                           
                                        </div>
                                    </div>
                                    <!-- End activity item-->

                                    <div class="activity-item d-flex">
                                    
                                        <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                                        <div class="activity-content">
                                        <a href="#" class="fw-bold text-dark">校警室： (07)5919000</a> 
                                            
                                        </div>
                                    </div>
                                    <!-- End activity item-->

                                    <div class="activity-item d-flex">
                                        
                                        <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                                        <div class="activity-content">
                                        <a href="#" class="fw-bold text-dark">加昌派出所： (07)3655961</a> 
                                        
                                        </div>
                                    </div>
                                    <!-- End activity item-->

                                </div>

                                  

                  

                  

                    </div>
                    <!-- End Right side columns -->

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