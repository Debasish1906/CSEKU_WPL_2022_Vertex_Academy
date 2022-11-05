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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
   
    
    <?php include './partials/connect.php';?>
      <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
   
        <div class="container">
       
           
           <a class="navbar-brand text-uppercase text-muted border-danger logo  " href="index.html"><strong><em>Vertex Academy</em></strong></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
<!--
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto  custom_margin">
                    <li class="nav-item " role="presentation"><a class="nav-link" href="index.html">Home</a></li>
                    <li class="nav-item " role="presentation"><a class="nav-link" href="./features.html">Features</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="./courses.html">Courses</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="./testimonials.html">Testimonials</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="./about-us.html">About Us</a></li>
                    
                    
                </ul>
        </div>
-->
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav ml-auto  custom_margin">
                <li class="nav-item"><a href="admin.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="features.php" class="nav-link">Features</a></li>
                <li class="nav-item dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Courses</a>
                    <div class="dropdown-menu mt-3">
                        <a href="course-category.php" class="dropdown-item">Course Category</a>
                         <a href="course.php" class="dropdown-item">All Courses</a>
                        <a href="course-videos.php" class="dropdown-item">Course Videos</a>
                        <a href="course-pdf.php" class="dropdown-item">Course Pdf</a>
                        <a href="course-offered-schedule.php" class="dropdown-item">Course Schudule and Offered</a>
                       
                       
                        
                    </div>
                </li>
                  <li class="nav-item dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Teachers</a>
                    <div class="dropdown-menu mt-3">
                        <a href="teacher.php" class="dropdown-item">Teacher List</a>
                        <a href="teacher-courses-supervision.php" class="dropdown-item">Teachers Courses Supervision</a>
                    </div>
                </li>
                   <li class="nav-item dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Students</a>
                    <div class="dropdown-menu mt-3">
<!--                        <a href="" class="dropdown-item">Student List</a>-->
                        <a href="registrations.php" class="dropdown-item">Registration</a>
<!--                        <a href="" class="dropdown-item">Assignment</a>-->
                        <a href="feedback.php" class="dropdown-item">Feedback</a>
                    </div>
                </li>
                 <li class="nav-item dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Supports</a>
                    <div class="dropdown-menu mt-3">
                        <a href="about-us.php" class="dropdown-item">About Us</a>
                        <a href="contact-us.php" class="dropdown-item">Contact Us</a>
                    </div>
                </li>
                    <li class="nav-item dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Payment</a>
                    <div class="dropdown-menu mt-3">
                        <a href="shopping-cart.php" class="dropdown-item">Shopping Cart</a>
                        <a href="payment-page.php" class="dropdown-item">Payment Page</a>
                    </div>
                </li>
            </ul>
         </div>
        </div>
        
        <div class="nav-item custom_btn" style="
    display: flex;
    gap: 5px;">
           <img src="assets/img/profile.png" class="user-pic-info" onclick="toggleMenu()" alt="">
       
        </div>
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
               
                <a href="admin_panel_dashboard.php" class="sub-menu-link">
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
     <main class="page landing-page">
            <div class="container">
                
                
            </div>

            <div class=" container margincs">
               
               
               
               
               
                <div class="carousel slide d-none d-sm-block" data-ride="carousel" id="demo" style="width:100%">
                   <ul class="carousel-indicators">
                       <li data-target="#demo" data-slide-to="0" class="active"></li>
                       <li data-target="#demo" data-slide-to="1"></li>
                       <li data-target="#demo" data-slide-to="2"></li>
                       <li data-target="#demo" data-slide-to="3"></li>
                   </ul>
                           
                   
                  
                   <div class="carousel-inner">
                      
                       <div class="carousel-item active">
                          
                           <img src="assets/img/img_slider1.png" alt="" class="img-fluid">
                            <div class="carousel-caption d-none d-md-block">
                               <h2>Welcome To Vertex Academy</h2>
                               <p>This is a E-learning Website.From here you can learn a lot of thing.Happy Learning.</p>
                               <a href="#" class="btn btn-warning">Click Here</a>
                           </div>
                       </div>
                       
                        <div class="carousel-item">
                           <img src="assets/img/img_slider2.jpg" alt="" class="img-fluid">
                           <div class="carousel-caption d-none d-md-block">
                               <h2>Welcome To Vertex Academy</h2>
                               <p>This is a E-learning Website.From here you can learn a lot of thing.Happy Learning.</p>
                               <a href="#" class="btn btn-warning">Click Here</a>
                           </div>
                       </div>
                       
                        <div class="carousel-item">
                           <img src="assets/img/imgaslider3.png" alt="" class="img-fluid">
                            <div class="carousel-caption d-none d-md-block">
                               <h2>Welcome To Vertex Academy</h2>
                               <p>This is a E-learning Website.From here you can learn a lot of thing.Happy Learning.</p>
                               <a href="#" class="btn btn-warning">Click Here</a>
                           </div>
                       </div>
                       
                         <div class="carousel-item">
                           <img src="assets/img/imageslider4.png" alt="" class="img-fluid">
                            <div class="carousel-caption d-none d-md-block">
                               <h2>Welcome To Vertex Academy</h2>
                               <p>This is a E-learning Website.From here you can learn a lot of thing.Happy Learning.</p>
                               <a href="#" class="btn btn-warning">Click Here</a>
                           </div>
                       </div>
                   </div><!--carousel inner--->
                        <a href="#demo" class="carousel-control-prev" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                          <a href="#demo" class="carousel-control-next" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                </div>
                
            </div>
   
          
        <section class="clean-block ">
            <div class="container text-info" style="background-color: #fcfafa;">
                <div class="block-heading" style="background-color: #ffffff;">
<!--
                    <h1 class="text-info" style="background-color: #ffffff;">Our Best Information</h1>
                    <p class="text-capitalize text-center text-secondary d-xl-flex" style="background-color: #ffffff;background-size: cover;"><br>All classes and batches will be conducted by qualified teachers of Maths, Chemistry, Physics, ICT and English from JSC, SSC to Admission. This institution is managed by the students of Khulna University. the teachers of our institution
                        will also teach at home. We have special facilities for underprivileged students.<br></p>
-->
                </div>
                <div class="row text-danger align-items-center">
                    <div class="col-md-6"><img class="img-thumbnail" src="assets/img/Screenshot%202022-08-04%20001457.png"></div>
                    <div class="col-md-6">
                        <h3><strong><em>Welcome To Vertex Academy</em></strong></h3>
                        <div class="getting-started-info">
                            <p class="text-muted"><br><em>The main objective of our institution is to develop talent. Here we will regularly organize live classes and also provide direct classes.All classes and batches will be conducted by qualified teachers of Maths, Chemistry, Physics, ICT and English from JSC, SSC to Admission. This institution is managed by the students of Khulna University. the teachers of our institution
                        will also teach at home. We have special facilities for underprivileged students.</em><br><br></p>
                        </div><button class="btn btn-primary" type="button">Join Now</button></div>
                </div>
            </div>
        </section>
        <section class="clean-block features">
           <div class="container">
          <div class="block-heading">
            <h2 class="text-info">Our Features</h2>
            <p>We provide services through our website as well as offline.</p>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-5 feature-box">
              <i class="icon-star icon"></i>
              <h4>Online class Support</h4>
              <p>
                Online Class Help is here for you. Discussion boards, workbook
                pages, essays, quizzes, tests and everything
              </p>
            </div>
            <div class="col-md-5 feature-box">
              <i class="icon-pencil icon"></i>
              <h4>Online Result Distribution</h4>
              <p>
                result management system is to manage the grades/results of
                various examinations, courses etc
              </p>
            </div>
            <div class="col-md-5 feature-box">
              <i class="icon-screen-smartphone icon"></i>
              <h4>Online Assesments</h4>
              <p>
                online assessment methods which serve as appropriate measures of
                cognitive levels in Educational Objectives
              </p>
            </div>
            <div class="col-md-5 feature-box">
              <i class="icon-refresh icon"></i>
              <h4>Submit Assignment</h4>
              <p>Track progress of your learning and submit your assignment.</p>
            </div>
<!--

            <div class="col-md-5 feature-box">
              <i class="icon-refresh icon"></i>
              <h4>Download Assignments</h4>
              <p>Download your fullfilled Assignments</p>
            </div>

            <div class="col-md-5 feature-box">
              <i class="icon-refresh icon"></i>
              <h4>Download Course Metarial</h4>
              <p>Download essential Course Metarial sector wise.</p>
            </div>

            <div class="col-md-5 feature-box">
              <i class="icon-refresh icon"></i>
              <h4>Submit Assignment</h4>
              <p>Submit assignment online</p>
            </div>
-->
          </div>
        </div>
        </section>
        
 <!-------Courses backend-------->
              
        <section class="clean-block clean-services dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Our Popular Courses</h2>
<!--                    <p>Here you can find some demo pdf courses. For learn more click download.&nbsp;</p>-->
                </div>
                <div class="row">
                  
<!--                  for our course list-->
                   <?php
                    $sql= "SELECT * FROM `course_list`";
                    $result = mysqli_query($con,$sql);
                    if($result){
                      while($row=mysqli_fetch_assoc($result)){
                           $id = $row['course_id']; 
                          $course_category=$row['course_category'];
                          
                           $course_image = $row['course_image'];
                           $img = 'uploaded_img/'.$course_image;
                           $course_name = $row['course_name'];
                           $course_desc = $row['course_desc'];
                          if($course_category=='website_show'){
                               echo ' <div class="col-md-6 col-lg-4">
                        <div class="card" style="height:25rem;"><img class="card-img-top w-100 d-block" style="height:10rem;" src='.$img.'>
                            <div class="card-body">
                                <h4 class="card-title">'.$course_name.'</h4>
                                <p class="card-text">'.substr($course_desc,0,80).'........</p>
                                <a class="btn btn-outline-primary btn-sm" href="course_inside.php?course_id='.$id.'" role="button">Continue Reading</a>
                            </div>
                           
                        </div>
                        </div>';
                          }
                          
                          
                      }
                    }
                ?>
                   
                   
                    </div>
                   
                    
                </div>
            
        </section>
        
        <section class="clean-block about-us">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Our Best Teachers</h2>
                    <p>All The Classes Are Taken By Khulna University's Student.</p>
                </div>
                <div class="row justify-content-center">
                  
                  
                   <!--                  for our teacher list-->
                   <?php
                    $sql= "SELECT * FROM `teacher_list`";
                    $result = mysqli_query($con,$sql);
                    if($result){
                      while($row=mysqli_fetch_assoc($result)){
                           $teacher_id = $row['teacher_id']; 
                           $teacher_image = $row['teacher_image'];
                           $img = 'uploaded_img/'.$teacher_image;
                           $teacher_name = $row['teacher_name'];
                           $teacher_desc = $row['teacher_desc'];
                           echo '   <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src='.$img.'>
                            <div class="card-body info">
                                <h4 class="card-title">'.$teacher_name.'</h4>
                                <p class="card-text">'.$teacher_desc.'</p>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>';
                          
                      }
                    }
                ?>
                   
                   
                   
                
                </div>
            </div>
        </section>
    </main>

    <?php include './footer.php';?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/script.min.js"></script>
    <script>
        $('.carousel').carousel({
            interval: 3000,
            pause: false
           
        
        })
    </script>
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
<!--
    <script>
        $(window).scroll(function(){
            if($(window).scrollTop()){
                $("nav").addClass("black");
            }
            else{
                $("nav").removeClass("black");
            }
                
        });
        
    </script>
-->

<script>
    let subMenu= document.getElementById("subMenu");
    
    function toggleMenu(){
        subMenu.classList.toggle("open-menu");
    }
    
    
</script>
</body>
</html>


