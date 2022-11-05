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
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Customer</title>
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
   <nav>
       <img src="assets/img/avatars/avatar1.jpeg" class="user-pic" alt="">
       <div class="sub-menu-wrap">
           <div class="sub-menu">
               <div class="user-info">
                   <img src="assets/img/avatars/avatar1.jpeg" alt="">
                   <h2>Debasish</h2> 
               </div>
           </div>
       </div>
       
   </nav>
    <h1>Customer Dashboard</h1>
    <h2><?=$_SESSION['user_type']?></h2>
    <h3><?=$_SESSION['email']?></h3>
    <a href="logout.php">logout</a>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/script.min.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
</body>
</html>