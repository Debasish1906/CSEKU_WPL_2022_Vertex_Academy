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
     <main class="page service-page">
        <section class="clean-block clean-services dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Courses PDF</h2>
                    <p>Here you can find some demo pdf courses. For learn more click download.&nbsp;</p>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="card"><img class="card-img-top w-100 d-block" src="assets/img/Screenshot-2021-12-08-at-12.08.11-PM.webp">
                            <div class="card-body">
                                <h4 class="card-title">HSC CHEMISTRY 1ST PAPER</h4>
                                <p class="card-text">All Suggetions about Chemistry 1st paper. It is very helpful for a hsc candidate. You must follow this PDF and take better preparation for your HSC exam.</p>
                            </div>
                            <div><button class="btn btn-outline-primary btn-sm" type="button">Download PDF</button></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card"><img class="card-img-top w-100 d-block" src="assets/img/download%20(1).jpg">
                            <div class="card-body">
                                <h4 class="card-title">WEB DEVELOPMENT</h4>
                                <p class="card-text">Here you can find all kind web development notes like html,css,javascripts and many framework like laravel,django and so on. This PDF is very much important for a web developer .</p>
                            </div>
                            <div><button class="btn btn-outline-primary btn-sm" type="button">Download PDF</button></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card"><img class="card-img-top w-100 d-block" src="assets/img/software-development-business-process-automation-internet-technology-concept-virtual-screen-software-development-143587196.jpg">
                            <div class="card-body">
                                <h4 class="card-title">SOFTWARE DEVELOPMENT</h4>
                                <p class="card-text">We can not think our day to day life without a software. Here you can find all kind of notes about JAVA,Dart,Python,Javascripts and so on. Hopefully it will be helpful.</p>
                            </div>
                            <div><button class="btn btn-outline-primary btn-sm" type="button">Download PDF</button></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card"><img class="card-img-top w-100 d-block" src="assets/img/image-62516-1653314935.jpg">
                            <div class="card-body">
                                <h4 class="card-title">CYBER SECURITY</h4>
                                <p class="card-text">In this world, the most expensive thing is data. So we have to know about cyber security for our safety issue. On the other hand this PDF can help your career to being a cyber security specialist . For know more download
                                    this PDF and have a look.</p>
                            </div>
                            <div><button class="btn btn-outline-primary btn-sm" type="button">Download PDF</button></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card"><img class="card-img-top w-100 d-block" src="assets/img/6896db168cdc97dd503297fc65514853.jpg">
                            <div class="card-body">
                                <h4 class="card-title">PHYSICS 1st PAPER</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in.</p>
                            </div>
                            <div><button class="btn btn-outline-primary btn-sm" type="button">Download PDF</button></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card"><img class="card-img-top w-100 d-block" src="assets/img/images%20(1).jpg">
                            <div class="card-body">
                                <h4 class="card-title">THERMODYNAMICS</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in.</p>
                            </div>
                            <div><button class="btn btn-outline-primary btn-sm" type="button">Download PDF</button></div>
                        </div>
                    </div>
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