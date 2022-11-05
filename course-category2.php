


<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Vertex Academy</title>
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
    <?php
    $sql="SELECT * FROM `course_list`";
    $result = mysqli_query($con,$sql);              
    if(isset($_GET['course_id'])){
        if(!isset($_SESSION['user_type'])){
            echo"<script>
            confirm('Please LOG IN First');
            window.location.href='logins.php;</script>";
        }
        
       
        $course_id = $_GET['course_id'];
        
        array_push($_SESSION['cart'],$course_id);
    }

    
    ?>

     <main class="page pricing-table-page">
        <section class="clean-block clean-pricing dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Our Popular Courses</h2>
                    <p class="text-capitalize">Most popular courses of this week-</p>
                </div>
                <div class="row justify-content-center">
                    <?php
                    //while($row= mysqli_fetch_array($result)){
                     /* ?>
                    <div class="col-md-5 col-lg-4">
                        <div class="clean-pricing-item">
                            <div class="heading">
                                <h3><?php echo $row['course_name'];?></h3>
                            </div>
                            <p class="text-capitalize"><br>&nbsp;<strong ><?php echo $row['course_desc'];?></strong>.&nbsp;<br><br></p>
                            <div class="features">
                                <h4><span class="feature">Full Support:&nbsp;</span><span>No</span></h4>
                                <h4><span class="feature">Duration:&nbsp;</span><span>30 Days</span></h4>
                                <h4><span class="feature">Storage:&nbsp;</span><span>10GB</span></h4>
                            </div>
                            <div class="price">
                                <h4>$<?php echo $row['price'];?></h4>
                            </div><a href=<?php echo "./shopping-cart2.php?course_id=".$row["course_id"];?> class="btn btn-outline-primary btn-block" type="button">BUY NOW</a></div>
                    </div>
                    <?php
                    }*/
                    ?>
                    <!--                  for our course list-->
                   <?php
                    $sql= "SELECT * FROM `course_list`";
                    $result = mysqli_query($con,$sql);
                    if($result){
                      while($row=mysqli_fetch_assoc($result)){
                           $id = $row['course_id']; 
                           $course_image = $row['course_image'];
                           $img = 'uploaded_img/'.$course_image;
                           $course_name = $row['course_name'];
                           $course_desc = $row['course_desc'];
                          $course_price = $row['price'];
                           
                          
                          /*echo'
                          <div class="col-md-5 col-lg-4">
                        <div class="clean-pricing-item">
                            <div class="heading">
                                <h3>'.$course_name.'</h3>
                            </div>
                            <p class="text-capitalize"><br><strong>'.$course_desc.'</p>
                            <div class="features">
                                <h4><span class="feature">Full Support:&nbsp;</span><span>Yes</span></h4>
                                <h4><span class="feature">Duration:&nbsp;</span><span>120 Days</span></h4>
                                <h4><span class="feature">Storage:&nbsp;</span><span>150 GB</span></h4>
                                <h4><span class="feature">Storage:&nbsp;</span><span>150 GB</span></h4>
                                
                            </div>
                            <div class="price">
                                <h4>'.$course_price.'</h4>
                            </div>
                            <a class="btn btn-outline-primary btn-sm" href="shopping-cart2.php?course_id='.$id.'" role="button">Buy Now</a>
                        </div>
                    </div>
                          
                          
                          
                          ';*/
                          
                           echo ' <div class="col-md-6 col-lg-4">
                        <div class="card" style="height:25rem; text-align:center;">
                            <div class="card-body">
                                <h4 class="card-title">'.$course_name.'</h4>
                                <p class="card-text">'.substr($course_desc,0,80).'........</p>
                                <div class="features">
                                <h4><span class="feature">Full Support:&nbsp;</span><span>Yes</span></h4>
                                <h4><span class="feature">Duration:&nbsp;</span><span>120 Days</span></h4>
                                <h4><span class="feature">Storage:&nbsp;</span><span>150 GB</span></h4>
                                
                                <div class="price">
                                <h4>$'.$course_price.'</h4>
                            </div>
                            <a class="btn btn-outline-primary btn-sm" href="shopping-cart2.php?course_id='.$id.'" role="button">Buy Now</a>
                            </div>
                            </div>
                           
                        </div>
                        </div>';
                          
                      }
                    }
                ?>
              
                    
                    
                    
                    
                    <!-- <div class="col-md-5 col-lg-4">
                        <div class="clean-pricing-item">
                            <div class="heading">
                                <h3>Web Development</h3>
                            </div>
                            <p class="text-capitalize"><br><strong>A well-designed website is essential for</strong>&nbsp;<strong>reaching a larger audience and generating more leads or customers</strong>.&nbsp;<br></p>
                            <div class="features">
                                <h4><span class="feature">Full Support:&nbsp;</span><span>Yes</span></h4>
                                <h4><span class="feature">Duration:&nbsp;</span><span>120 Days</span></h4>
                                <h4><span class="feature">Storage:&nbsp;</span><span>150 GB</span></h4>
                            </div>
                            <div class="price">
                                <h4>$50</h4>
                            </div><button class="btn btn-primary btn-block" type="button">BUY NOW</button></div>
                    </div>
                    <div class="col-md-5 col-lg-4">
                       
                        <div class="clean-pricing-item">
                           
                            <div class="heading">
                                <h3>Digital Marketing</h3>
                            </div>
                            
                            <p class="text-capitalize"><br>&nbsp;<strong>it connects a business with its customers when they are online, &amp; is effective in all industries</strong>.<br><br></p>
                            
                            <div class="features">
                                <h4><span class="feature">Full Support:&nbsp;</span><span>Yes</span></h4>
                                <h4><span class="feature">Duration:&nbsp;</span><span>120 Days</span></h4>
                                <h4><span class="feature">Storage:&nbsp;</span><span>150GB</span></h4>
                            </div>
                            
                            <div class="price">
                                <h4>$150</h4>
                            </div>
                            <button class="btn btn-outline-primary btn-block" type="button">BUY NOW</button></div>
                    </div> -->
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