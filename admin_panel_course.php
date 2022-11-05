<?php

@include 'config.php';

if(isset($_POST['add_course'])){

   $product_name = $_POST['course_name'];
   $product_price = $_POST['course_desc'];
   $course_price = $_POST['course_price'];
    $course_category=$_POST['course_category'];
   $product_image = $_FILES['course_image']['name'];
   $product_image_tmp_name = $_FILES['course_image']['tmp_name'];
   $product_image_folder = 'uploaded_img/'.$product_image;

   if(empty($product_name) || empty($product_price) || empty($product_image)){
      $message[] = 'please fill out all';
   }else{
      $insert = "INSERT INTO `course_list`( `course_image`, `course_name`, `course_desc`,`price`,`course_category`) VALUES ('$product_image','$product_name','$product_price','$course_price','$course_category')";
      $upload = mysqli_query($conn,$insert);
      if($upload){
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
         $message[] = 'new course added successfully';
      }else{
         $message[] = 'could not add the course';
      }
   }

};

if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM course_list WHERE course_id = $id");
   header('location:admin_panel_course.php');
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
 
   <div class="admin-product-form-container">
        <a href="admin_panel_dashboard.php" class="back">Back to dashboard</a>
      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
         <h3>add a new course</h3>
         <input type="text" placeholder="enter course name" name="course_name" class="box">
         <input type="text" placeholder="enter course Description" name="course_desc" class="box">
         <input type="text" placeholder="enter course Category" name="course_category" class="box">
         <input type="text" placeholder="enter course Price" name="course_price" class="box">
         <input type="file" accept="image/png, image/jpeg, image/jpg" name="course_image" class="box">
         <input type="submit" class="btn" name="add_course" value="add course">
      </form>

   </div>

   <?php

   $select = mysqli_query($conn, "SELECT * FROM course_list");
   
   ?>
   <div class="product-display">
      <table class="product-display-table">
         <thead>
         <tr>
            <th>course image</th>
            <th>course name</th>
            <th>course desc</th>
            <th>course Category</th>
            <th>course price</th>
            <th>action</th>
         </tr>
         </thead>
         <?php while($row = mysqli_fetch_assoc($select)){ ?>
         <tr>
            <td><img src="uploaded_img/<?php echo $row['course_image']; ?>" height="100" alt=""></td>
            <td><?php echo $row['course_name']; ?></td>
            <td><?php echo $row['course_desc']; ?></td>
            <td><?php echo $row['course_category']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td>
               <a href="admin_panel_course_update.php?edit=<?php echo $row['course_id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
               <a href="admin_panel_course.php?delete=<?php echo $row['course_id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
            </td>
         </tr>
      <?php } ?>
      </table>
   </div>

</div>


</body>
</html>