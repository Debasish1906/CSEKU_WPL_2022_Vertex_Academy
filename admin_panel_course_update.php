<?php

@include 'config.php';

$id = $_GET['edit'];

if(isset($_POST['update_course'])){

   $product_name = $_POST['course_name'];
   $product_price = $_POST['course_desc'];
   $course_price = $_POST['course_price'];
    $course_category=$_POST['course_category'];
   $product_image = $_FILES['course_image']['name'];
   $product_image_tmp_name = $_FILES['course_image']['tmp_name'];
   $product_image_folder = 'uploaded_img/'.$product_image;

   if(empty($product_name) || empty($product_price) || empty($product_image)){
      $message[] = 'please fill out all!';    
   }else{

//      $update_data = "UPDATE `course_list` SET `course_name`='$product_name', `course_desc`='$product_price', `course_image`='$product_image'  `price`='$course_price' WHERE course_id = '$id'";
       
       $update_data = "UPDATE `course_list` SET `course_image`='$product_image',`course_name`='$product_name',`course_desc`='$product_price',`price`='$course_price',
       `course_category`='$course_category' WHERE course_id = '$id'";
       
      $upload = mysqli_query($conn, $update_data);

      if($upload){
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
         header('location:admin_panel_course.php');
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
      
      $select = mysqli_query($conn, "SELECT * FROM `course_list` WHERE course_id = '$id'");
      while($row = mysqli_fetch_assoc($select)){

   ?>
   
   <form action="" method="post" enctype="multipart/form-data">
      <h3 class="title">update the course</h3>
      <input type="text" class="box" name="course_name" value="<?php echo $row['course_name']; ?>" placeholder="enter the product name">
      <input type="text" min="0" class="box" name="course_desc" value="<?php echo $row['course_desc']; ?>" placeholder="enter the product price">
      <input type="text" min="0" class="box" name="course_category" value="<?php echo $row['course_category']; ?>" placeholder="enter the product price">
      <input type="number" min="0" class="box" name="course_price" value="<?php echo $row['price']; ?>" placeholder="enter the course price">
      <input type="file" class="box" name="course_image"  accept="image/png, image/jpeg, image/jpg">
      <input type="submit" value="update course" name="update_course" class="btn">
      <a href="admin_panel_course.php" class="btn">go back!</a>
   </form>
   


   <?php }; ?>

   

</div>

</div>

</body>
</html>