<?php

@include 'config.php';

$id = $_GET['edit'];

if(isset($_POST['update_teacher'])){

   $product_name = $_POST['teacher_name'];
   $product_price = $_POST['teacher_desc'];
   $product_image = $_FILES['teacher_image']['name'];
   $product_image_tmp_name = $_FILES['teacher_image']['tmp_name'];
   $product_image_folder = 'uploaded_img/'.$product_image;

   if(empty($product_name) || empty($product_price) || empty($product_image)){
      $message[] = 'please fill out all!';    
   }else{

      $update_data = "UPDATE `teacher_list` SET `teacher_name`='$product_name', `teacher_desc`='$product_price', `teacher_image`='$product_image'  WHERE teacher_id = '$id'";
      $upload = mysqli_query($conn, $update_data);

      if($upload){
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
         header('location:admin_panel_teacher.php');
      }else{
         $$message[] = 'please fill out all!'; 
      }

   }
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
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


<div class="admin-product-form-container centered">

   <?php
      
      $select = mysqli_query($conn, "SELECT * FROM `teacher_list` WHERE teacher_id = '$id'");
      while($row = mysqli_fetch_assoc($select)){

   ?>
   
   <form action="" method="post" enctype="multipart/form-data">
      <h3 class="title">update the course</h3>
      <input type="text" class="box" name="teacher_name" value="<?php echo $row['teacher_name']; ?>" placeholder="enter the teacher name">
      <input type="text" min="0" class="box" name="teacher_desc" value="<?php echo $row['teacher_desc']; ?>" placeholder="enter the teacher Details">
      <input type="file" class="box" name="teacher_image"  accept="image/png, image/jpeg, image/jpg">
      <input type="submit" value="update teacher" name="update_teacher" class="btn">
      <a href="admin_panel_teacher.php" class="btn">go back!</a>
   </form>
   


   <?php }; ?>

   

</div>

</div>

</body>
</html>