<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Table - Brand</title>
    <link rel="stylesheet" href="assets2/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets2/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets2/css/styles.min.css">
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
     <div id="wrapper">
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Teacher Courses Supervision</h3>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">Teachers Info</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label>Show&nbsp;<select class="form-control form-control-sm custom-select custom-select-sm"><option value="10" selected="">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select>&nbsp;</label></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-md-right dataTables_filter" id="dataTable_filter"><label><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                                </div>
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table dataTable my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Teacher's Name</th>
                                            <th>Institution &amp; Discipline</th>
                                            <th>Courses</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Review</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img class="rounded-circle mr-2" width="30" height="30" src="assets2/img/277565669_1536471670081226_4703325489712408034_n.jpg">Shaikh Rais Rahman</td>
                                            <td>CSE,Khulna University</td>
                                            <td>WPL,SDP,HSC</td>
                                            <td>25</td>
                                            <td>2008/11/28</td>
                                            <td>Excellent</td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle mr-2" width="30" height="30" src="assets2/img/269702675_3335111890108288_7149487888715434441_n.jpg">Debasis Biswash</td>
                                            <td>CSE,Khulna University</td>
                                            <td>JSC,SSC,HSC,Algo</td>
                                            <td>24</td>
                                            <td>2009/10/09<br></td>
                                            <td>Very Good</td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle mr-2" width="30" height="30" src="assets2/img/274381251_1602952633403252_5906259503267801618_n.jpg">Asif Hossain</td>
                                            <td>EEE,Ruet</td>
                                            <td>SSC</td>
                                            <td>25</td>
                                            <td>2009/01/12<br></td>
                                            <td>Not Bad</td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle mr-2" width="30" height="30" src="assets2/img/70165631_947476742252359_343104845420429312_n.jpg">Mehedi Hasan</td>
                                            <td>CE,KUET</td>
                                            <td>JAVA</td>
                                            <td>41</td>
                                            <td>2012/10/13<br></td>
                                            <td>Good</td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle mr-2" width="30" height="30" src="assets2/img/Screenshot%202022-08-04%20013440.png">Afridy Khan</td>
                                            <td>CSE,Dhaka University</td>
                                            <td>C &amp; C++</td>
                                            <td>28</td>
                                            <td>2011/06/07<br></td>
                                            <td>Average</td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle mr-2" width="30" height="30" src="assets2/img/Screenshot%202022-08-04%20013653.png">Noor Mohammad</td>
                                            <td>CSE,Rajshahi University</td>
                                            <td>C#,Mathematics</td>
                                            <td>23</td>
                                            <td>2012/12/02<br></td>
                                            <td>Good Enough</td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle mr-2" width="30" height="30" src="assets2/img/Screenshot%202022-08-04%20013323.png">Faiyaj</td>
                                            <td>ME,BUET</td>
                                            <td>SQL,HSC,SSC</td>
                                            <td>38</td>
                                            <td>2011/05/03<br></td>
                                            <td>Very Good</td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle mr-2" width="30" height="30" src="assets2/img/avatars/avatar3.jpeg">Rakib Hasan</td>
                                            <td>BMB,Barishal University</td>
                                            <td>Biology</td>
                                            <td>21</td>
                                            <td>2011/12/12<br></td>
                                            <td>Bad</td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle mr-2" width="30" height="30" src="assets2/img/Screenshot%202022-08-04%20013540.png">Deba</td>
                                            <td>FMRT,BUBT</td>
                                            <td>Zoology</td>
                                            <td>46</td>
                                            <td>2011/12/06<br></td>
                                            <td>Average</td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle mr-2" width="30" height="30" src="assets2/img/Screenshot%202022-08-04%20013440.png">Sakib</td>
                                            <td>BBA,Dhaka University</td>
                                            <td>English Spoken</td>
                                            <td>22</td>
                                            <td>2012/03/29<br></td>
                                            <td>Excellent</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr></tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    
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