<?php include './partials/connect.php';?>
<?php
    if(!isset($_SESSION['isUserLoggedIn'])){
        echo"<script>window.location.href='logins.php?user_not_logged_in';</script>";
    }
    
    if($_SESSION['user_type']!='admin'){
    echo"<script>window.location.href='logins.php';</script>";
    }


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
     <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Admin Panel</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light" >
  <span class="navbar-text">
   
  </span>
  
 
         <div class="sub-menu-wrap" id="subMenu">
           <div class="sub-menu">
               <div class="user-info">
                   <img src="assets/img/username.jpg" alt="">
                   <h3><?=$_SESSION['user_name']?></h3> 
                   
                  
               </div>
               <hr>
               <a href="#" class="sub-menu-link">
                   <img src="assets/img/email.png" alt="">
                   <p><?=$_SESSION['email']?></p>
                   <span>></span>
               </a>
                <a href="#" class="sub-menu-link">
                   <img src="assets/img/editprofile.png" alt="">
                   <p>Edit Profile</p>
                   <span>></span>
               </a>
                <a href="admin_dashboard.php" class="sub-menu-link">
                   <img src="assets/img/dashboard.png" alt="">
                   <p>Back to Dashboard</p>
                   <span>></span>
               </a>
                <a href="logout.php" class="sub-menu-link">
                   <img src="assets/img/logout3.png" alt="">
                   <p>Logout</p>
                   <span>></span>
               </a>
           </div>
       </div>
</nav>
   
    <div class="side-menu">
        <div class="brand-name">
           
            <h1>Hello Admin</h1>
        </div>
        <ul>
            <li><img src="images/dashboard (2).png" alt="">&nbsp; <span><a href="admin_panel_dashboard.php">Dashboard</a></span> </li>
<!--            <li><img src="images/reading-book (1).png" alt="">&nbsp;<span><a href="">Users</a></span> </li>-->
            <li><img src="images/teacher2.png" alt="">&nbsp;<span><a href="admin_panel_course.php">Courses</a></span> </li>
            <li><img src="images/school.png" alt="">&nbsp;<span><a href="admin_panel_teacher.php">Teachers</a></span> </li>
            <li><img src="images/payment.png" alt="">&nbsp;<span><a href="admin_panel_course_video.php">Course Video</a></span> </li>
            <li><img src="images/help-web-button.png" alt="">&nbsp; <span><a href="admin_panel_feedback.php">Feedback</a></span></li>
            <li><img src="images/settings.png" alt="">&nbsp;<span><a href="admin_panel_contact-us.php">Contact Us</a></span> </li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><img src="images/search.png" alt=""></button>
                </div>
                <div class="user">
                    <a href="admin.php" class="btn">Visit Site</a>
<!--                    <img src="notifications.png" alt="">-->
                    <div class="img-case">
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                      
                       <?php
                        $query= "SELECT user_id FROM `user_table` ORDER BY  user_id";
                        $query_run = mysqli_query($con,$query);
                       $row = mysqli_num_rows($query_run);
                        echo '<h1>'.$row.'</h1>';
                        
                        ?>
                       
                    
                        <h3>Users</h3>
                    </div>
                    <div class="icon-case">
                        <img src="images/students.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                       
                       <?php
                        $query= "SELECT course_id FROM `course_list` ORDER BY  course_id";
                        $query_run = mysqli_query($con,$query);
                       $row = mysqli_num_rows($query_run);
                        echo '<h1>'.$row.'</h1>';
                        
                        ?>
                        
                        <h3>Courses</h3>
                    </div>
                    <div class="icon-case">
                        <img src="images/teachers.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                       <?php
                        $query= "SELECT teacher_id FROM `teacher_list` ORDER BY  teacher_id";
                        $query_run = mysqli_query($con,$query);
                       $row = mysqli_num_rows($query_run);
                        echo '<h1>'.$row.'</h1>';
                        
                        ?>
                       
                        
                        <h3>Teachers</h3>
                    </div>
                    <div class="icon-case">
                        <img src="images/schools.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                       <?php
                        $query= "SELECT id FROM `feedback` ORDER BY  id";
                        $query_run = mysqli_query($con,$query);
                       $row = mysqli_num_rows($query_run);
                        echo '<h1>'.$row.'</h1>';
                        
                        ?>
                       
                        
                        <h3>Feedback</h3>
                    </div>
                    <div class="icon-case">
                        <img src="images/income.png" alt="">
                    </div>
                </div>
            </div>
<!--
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Recent Payments</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Name</th>
                            <th>School</th>
                            <th>Amount</th>
                            <th>Option</th>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>St. James College</td>
                            <td>$120</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>St. James College</td>
                            <td>$120</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>St. James College</td>
                            <td>$120</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>St. James College</td>
                            <td>$120</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>St. James College</td>
                            <td>$120</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>St. James College</td>
                            <td>$120</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                    </table>
                </div>
                <div class="new-students">
                    <div class="title">
                        <h2>New Students</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Profile</th>
                            <th>Name</th>
                            <th>option</th>
                        </tr>
                        <tr>
                            <td><img src="images/user.png" alt=""></td>
                            <td>John Steve Doe</td>
                            <td><img src="images/info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="images/user.png" alt=""></td>
                            <td>John Steve Doe</td>
                            <td><img src="images/info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="images/user.png" alt=""></td>
                            <td>John Steve Doe</td>
                            <td><img src="images/info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="images/user.png" alt=""></td>
                            <td>John Steve Doe</td>
                            <td><img src="images/info.png" alt=""></td>
                        </tr>

                    </table>
                </div>
            </div>
-->
            
            
        </div>
    </div>
    
     <script src="js/bootstrap.min.js"></script>
    <script>
    let subMenu= document.getElementById("subMenu");
    
    function toggleMenu(){
        subMenu.classList.toggle("open-menu");
    }
    
    
</script>
</body>

</html>