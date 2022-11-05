<?php

@include 'config.php';



if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM contact_us WHERE id = $id");
   header('location:admin_panel_contact-us.php');
};

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '<span class="message">'.$message.'</span>';
   }
}

?>
   
<div class="container">

   

   <?php

   $select = mysqli_query($conn, "SELECT * FROM contact_us");
   
   ?>
   <div class="product-display">
     <a href="admin_panel_dashboard.php" class="back">Back to dashboard</a>
     <h1 class="display">All People from Contact</h1>
     
      <table class="product-display-table">
         <thead>
         <tr>
            <th>name</th>
            <th>email</th>
            <th>Message</th>
           <th>action</th>
         </tr>
         </thead>
         <?php while($row = mysqli_fetch_assoc($select)){ ?>
         <tr>
            
            <td><?php echo $row['contact_name']; ?></td>
            <td style="text-transform:lowercase;"><?php echo $row['contact_email']; ?></td>
            <td><?php echo $row['contact_message']; ?></td>
            
            <td>
              
               <a href="admin_panel_contact-us.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
            </td>
         </tr>
      <?php } ?>
      </table>
   </div>

</div>


</body>
</html>