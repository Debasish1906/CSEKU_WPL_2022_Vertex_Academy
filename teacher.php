<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Vertex Academy</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Vertex Academy</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Team-one-B4-1.css">
    <link rel="stylesheet" href="assets/css/Team-one-B4.css">
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
                <li class="nav-item"><a href="customer.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="features.php" class="nav-link">Features</a></li>
                <li class="nav-item dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Courses</a>
                    <div class="dropdown-menu mt-3">
                        <a href="course-category2.php" class="dropdown-item">Course Category</a>
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
                        <a href="shopping-cart2.php" class="dropdown-item">Shopping Cart</a>
                        <a href="payment-page2.php" class="dropdown-item">Payment Page</a>
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
    <section class="home-team">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col col-md-8">
                    <div class="sectionTitle text-center">
                        <h2>Our Best Teachers </h2>
<!--                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusm temp </p>-->
                    </div>
                </div>
            </div>
            <div class="row">
               
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
               
               
                   
<!--
                <div class="col-md-6 col-lg-3">
                    <div class="card card-style2 team-card">
                        <div class="card_img"><img class="img-fluid img-full loaded" data-original="img/team1.jpg" data-was-processed="true" src="assets/img/debasish.png" alt="Team one">
                            <div class="hover-overlay effect-scale"><a class="overlay_icon" href="#"><i class="fa fa-facebook"></i></a><a class="overlay_icon" href="#"><i class="fa fa-twitter"></i></a><a class="overlay_icon" href="#"><i class="fa fa-linkedin"></i></a></div>
                        </div>
                        <div class="card-block">
                            <h4 class="card-title"><a href="">Debasish</a> </h4>
                            <span>Assistant Teacher</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card card-style2 team-card">
                        <div class="card_img"><img class="img-fluid img-full loaded" data-original="img/team1.jpg" data-was-processed="true" src="assets/img/asif2.jpg" alt="Team one">
                            <div class="hover-overlay effect-scale"><a class="overlay_icon" href="#"><i class="fa fa-facebook"></i></a><a class="overlay_icon" href="#"><i class="fa fa-twitter"></i></a><a class="overlay_icon" href="#"><i class="fa fa-linkedin"></i></a></div>
                        </div>
                        <div class="card-block">
                            <h4 class="card-title"><a href="#">Asif Hasan</a> </h4><span>Associate Teacher</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card card-style2 team-card">
                        <div class="card_img"><img class="img-fluid img-full loaded" data-original="img/team1.jpg" data-was-processed="true" src="assets/img/rais.jpg" alt="Team one">
                            <div class="hover-overlay effect-scale"><a class="overlay_icon" href="#"><i class="fa fa-facebook"></i></a><a class="overlay_icon" href="#"><i class="fa fa-twitter"></i></a><a class="overlay_icon" href="#"><i class="fa fa-linkedin"></i></a></div>
                        </div>
                        <div class="card-block">
                            <h4 class="card-title"><a href="http://smarty.co.ke/templates/team/#">Rais Rahman</a> </h4><span>Associate Teacher</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card card-style2 team-card">
                        <div class="card_img"><img class="img-fluid img-full loaded" data-original="img/team1.jpg" data-was-processed="true" src="assets/img/saykat2.jpg" alt="Team one">
                            <div class="hover-overlay effect-scale"><a class="overlay_icon" href="#"><i class="fa fa-facebook"></i></a><a class="overlay_icon" href="#"><i class="fa fa-twitter"></i></a><a class="overlay_icon" href="#"><i class="fa fa-linkedin"></i></a></div>
                        </div>
                        <div class="card-block">
                            <h4 class="card-title"><a href="http://smarty.co.ke/templates/team/#">Saykat Mondal</a> </h4><span>Assistant Teacher</span>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="card card-style2 team-card">
                        <div class="card_img"><img class="img-fluid img-full loaded" data-original="img/team1.jpg" data-was-processed="true" src="assets/img/monir2.jpg" alt="Team one">
                            <div class="hover-overlay effect-scale"><a class="overlay_icon" href="#"><i class="fa fa-facebook"></i></a><a class="overlay_icon" href="#"><i class="fa fa-twitter"></i></a><a class="overlay_icon" href="#"><i class="fa fa-linkedin"></i></a></div>
                        </div>
                        <div class="card-block">
                            <h4 class="card-title"><a href="http://smarty.co.ke/templates/team/#">Moniruzzaman</a> </h4><span>Assistant Teacher</span>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="card card-style2 team-card">
                        <div class="card_img"><img class="img-fluid img-full loaded" data-original="img/team1.jpg" data-was-processed="true" src="assets/img/azhar2.jpg" alt="Team one">
                            <div class="hover-overlay effect-scale"><a class="overlay_icon" href="#"><i class="fa fa-facebook"></i></a><a class="overlay_icon" href="#"><i class="fa fa-twitter"></i></a><a class="overlay_icon" href="#"><i class="fa fa-linkedin"></i></a></div>
                        </div>
                        <div class="card-block">
                            <h4 class="card-title"><a href="">Azharuddin</a> </h4><span>Assistant Teacher</span>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="card card-style2 team-card">
                        <div class="card_img"><img class="img-fluid img-full loaded" data-original="img/team1.jpg" data-was-processed="true" src="assets/img/sujan2.jpg" alt="Team one">
                            <div class="hover-overlay effect-scale"><a class="overlay_icon" href="#"><i class="fa fa-facebook"></i></a><a class="overlay_icon" href="#"><i class="fa fa-twitter"></i></a><a class="overlay_icon" href="#"><i class="fa fa-linkedin"></i></a></div>
                        </div>
                        <div class="card-block">
                            <h4 class="card-title"><a href="http://smarty.co.ke/templates/team/#">Sujan Dhali</a> </h4><span>Assistant Teacher</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card card-style2 team-card">
                        <div class="card_img"><img class="img-fluid img-full loaded" data-original="img/team1.jpg" data-was-processed="true" src="assets/img/jweel2.jpg" alt="Team one">
                            <div class="hover-overlay effect-scale"><a class="overlay_icon" href="#"><i class="fa fa-facebook"></i></a><a class="overlay_icon" href="#"><i class="fa fa-twitter"></i></a><a class="overlay_icon" href="#"><i class="fa fa-linkedin"></i></a></div>
                        </div>
                        <div class="card-block">
                            <h4 class="card-title"><a href="">Jweel</a> </h4><span>Assistant Teacher</span>
                        </div>
                    </div>
                </div>
-->
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