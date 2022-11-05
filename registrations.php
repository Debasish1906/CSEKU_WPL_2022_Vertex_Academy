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
     
      <main class="page registration-page">
       
       <?php
          
         if(isset($_SESSION['isUserLoggedIn'])){
               if($_SESSION['user_type']=="customer"){
                       echo"<script>
                   confirm('User loggedin Successfully');
                   window.location.href='customer.php?user_already_logged_in';</script>";
                   }
                   
                   if($_SESSION['user_type']=="admin"){
                       echo"<script>
                   confirm('Admin loggedin Successfully');
                   window.location.href='admin.php?admin_already_logged_in';</script>";
                   }
            }
          
          
           if($_SERVER['REQUEST_METHOD']=="POST"){
              $user_name = $_POST['uname'];
              $email = $_POST['email'];
              $password = $_POST['password'];
              $user_type = $_POST['user_type'];
             
               
               $sql = "SELECT * FROM `user_table` WHERE user_email='$email'";
                $result = mysqli_query($con,$sql);              
               $data = mysqli_fetch_array($result);
               
               if($data)
               {
                   echo"<script>
                   
                   confirm('User already registered, Please Login');
                   window.location.href='logins.php?User already registered';</script>";
               }
               
               else{
                     
              $sql = "INSERT INTO `user_table`(`user_name`, `user_email`, `user_password`, `user_type`) VALUES ('$user_name','$email','$password','$user_type')";
               $result = mysqli_query($con,$sql);
               
               if(!$result){
                   echo "Something Error";
               }
               else{
                   echo" <script>
                            confirm('User registered Successfully');
                            window.location.href='logins.php?User registered Successfully';
                        </script>";
                   exit();
               }
               
               }
             
          }
          
          
          ?>
          
          
          
         
       
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Registration</h2>
                    <p>Please sign up for log in.</p>
                </div>
                <form action="" method="POST">
                    <div class="form-group"><label for="name">User Name</label><input class="form-control item" type="text" name="uname"></div>
                    <div class="form-group"><label for="email">Email</label><input class="form-control item" type="email" name="email"></div>
                    <div class="form-group"><label for="password">Password</label><input class="form-control item" type="password" name="password"></div>
                    <div class="form-group">				
				<label class="form-control-label"></label>
				<select class="form-control" name="user_type">
				    <option>customer</option>
					
					
					
					
				</select>
			</div>	
                   
                    <button class="btn btn-primary btn-block" type="submit">Sign Up</button>
                      <div class="d-grid gap-2">
                           
                             <button class="btn " type="button"><a href="logins.php">Already Have account ! Login</a></button>
                            
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
</body>

</html>