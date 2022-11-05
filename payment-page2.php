<?php include './partials/connect.php';?>
<?php
    if(!isset($_SESSION['isUserLoggedIn'])){
        echo"<script>window.location.href='logins.php?user_not_logged_in';</script>";
    }
    
    if($_SESSION['user_type']!='customer'){
    echo"<script>window.location.href='logins.php';</script>";
    }


?>



<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Feedback</title>
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
 <?php
    if(!isset($_SESSION['user_type'])){
        echo"<script>
        confirm('Please LOG IN First');
        window.location.href='logins.php;</script>";
    }
    ?>
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
   
    <main class="page payment-page">
        <section class="clean-block payment-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Payment</h2>
                    <p></p>
                </div>
                <form>
                    <div class="products">
                        <h3 class="title">Checkout</h3>
                        <?php
        $id =  $_SESSION['course_id'];
        
        $total_price=0;
        $sql="SELECT * FROM `course_list` WHERE course_id = '$id'";
        $result = mysqli_query($con,$sql);
        while($row=mysqli_fetch_assoc($result)){
            $course_name = $row['course_name'];
            $course_desc = $row['course_desc'];
            $course_image = $row['course_image'];
            $price  = $row['price'];
            $img = 'uploaded_img/'.$course_image;
            $total_price=$total_price+$price;
             $_SESSION['course_id']=$row['course_id']; 
                  
            
        }
     
    
    
    
    ?>
 
                        <!-- <div class="item"><span class="price">$100</span>
                            <p class="item-name">Software Development</p>
                            <p class="item-description">Computer Science</p>
                        </div> -->
                        <div class="total"><span>Total</span><span class="price"><?php echo $total_price;?></span></div>
                    </div>
                    <div class="card-details">
                        <h3 class="title">Pay With SSL COMMERZ</h3>
                        <div class="form-row">
                            
                            <div class="col-sm-12">
                                <div class="form-group"><a class="btn btn-primary btn-block btn-lg" href=<?php echo "./sslcommerz.php?total_price=".$total_price; ?>>Proceed</a></div>
                            </div>
                        </div>
                    </div>
                </form>
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