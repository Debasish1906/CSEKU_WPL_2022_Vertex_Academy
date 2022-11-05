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
    <?php include './header.php';?>
    
    
    <?php
            /* if(isset($_SESSION['isUserLoggedIn'])){
               if($_SESSION['user_type']=="customer"){
                       echo"<script>
                   confirm('User loggedin Successfully');
                   window.location.href='customer.php?user_already_logged_in';</script>";
                   }
                   
                   if($_SESSION['user_type']=="admin"){
                       echo"<script>
                   confirm('Admin loggedin Successfully');
                   window.location.href='admin_panel_dashboard.php?admin_already_logged_in';</script>";
                   }
            }*/
          
           if(isset($_POST['login'])){
             
              $email = $_POST['email'];
              $password = $_POST['password'];
             
               
               $sql = "SELECT * FROM `user_table` WHERE user_email='$email' AND user_password='$password'";
                $result = mysqli_query($con,$sql);              
               $data = mysqli_fetch_array($result);
               if($data)
               {
                   
                   $_SESSION['isUserLoggedIn']=true;
                   $_SESSION['email']=$email; 
                   $_SESSION['user_type']=$data['user_type'];
                   $_SESSION['user_name']=$data['user_name'];
                   $_SESSION['cart']=array();
                   
                   if($data['user_type']=="customer"){
                       echo"<script>
                   confirm('User loggedin Successfully');
                   window.location.href='customer.php?user_logged_in';</script>";
                   }
                   
                   if($data['user_type']=="admin"){
                       echo"<script>
                   confirm('Admin loggedin Successfully');
                   window.location.href='admin_panel_dashboard.php?admin_logged_in';</script>";
                   }
                   
               }
               else{
                   echo"<script>
                   confirm('Incorrect Email and Password');
                   window.location.href='logins.php?Incorrect_email_or_password';</script>";
               }
              
          }
          
          
          ?>
     
      <main class="page login-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Log In</h2>
                    <p>Please write your email and password for log in.</p>
                </div>
                <form action="" method="POST">
                    <div class="form-group"><label for="email">Email</label><input class="form-control item" type="email" name="email"></div>
                    <div class="form-group"><label for="password">Password</label><input class="form-control" type="password"  name="password"></div>
                    <div class="form-group">
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="checkbox"><label class="form-check-label" for="checkbox">Remember me</label></div>
                    </div>
                     <button class="btn btn-primary btn-block" type="submit" name="login">Login</button>
                   
                    <button class="btn " type="button"><a href="mail.php">Forget Password?</a></button>
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
</body>

</html>