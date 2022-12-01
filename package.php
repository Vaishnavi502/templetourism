<?php
   $connection = mysqli_connect('localhost','root','','packages_db');
   if(!$connection){
      die("Connection failed: ".mysqli_connect_error());
   }
   $query = "SELECT name,descr,price FROM `packages`";

   $result = mysqli_query($connection,$query);
   if(mysqli_num_rows($result) == 0)
      echo "0 results";
   $query2="SELECT image FROM `images`";
   $result2=mysqli_query($connection,$query2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>package</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">travel.</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/temple5-home.jpeg) no-repeat">
   <h1>packages</h1>
</div>

<!-- packages section starts  -->

<section class="packages">

   <h1 class="heading-title">top destinations</h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <?php if($img=mysqli_fetch_row($result2)) ?>
               <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($img[0]); ?>" />
         </div>
         <div class="content">
            <?php
            $row = mysqli_fetch_row($result);
            echo "<h3>{$row[0]}</h3><p>".nl2br($row[1])."</p><p>Price estimate: INR {$row[2]}</p>";
            ?>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
         <?php if($img=mysqli_fetch_row($result2)) ?>
               <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($img[0]); ?>" />
         </div>
         <div class="content">
            <?php 
            $row = mysqli_fetch_row($result);
            echo "<h3>{$row[0]}</h3><p>".nl2br($row[1])."</p><p>Price estimate: INR {$row[2]}</p>";
            ?>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
         <?php if($img=mysqli_fetch_row($result2)) ?>
               <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($img[0]); ?>" />
         </div>
         <div class="content">
            <?php 
            $row = mysqli_fetch_row($result);
            echo "<h3>{$row[0]}</h3><p>".nl2br($row[1])."</p><p>Price estimate: INR {$row[2]}</p>";
            ?>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
         <?php if($img=mysqli_fetch_row($result2)) ?>
         <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($img[0]); ?>" />
         </div>
         <div class="content">
            <?php 
            $row = mysqli_fetch_row($result);
            echo "<h3>{$row[0]}</h3><p>".nl2br($row[1])."</p><p>Price estimate: INR {$row[2]}</p>";
            ?>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
         <?php if($img=mysqli_fetch_row($result2)) ?>
         <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($img[0]); ?>" />
         </div>
         <div class="content">
            <?php 
            $row = mysqli_fetch_row($result);
            echo "<h3>{$row[0]}</h3><p>".nl2br($row[1])."</p><p>Price estimate: INR {$row[2]}</p>";
            ?>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
         <?php if($img=mysqli_fetch_row($result2)) ?>
         <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($img[0]); ?>" />
         </div>
         <div class="content">
            <?php 
            $row = mysqli_fetch_row($result);
            echo "<h3>{$row[0]}</h3><p>".nl2br($row[1])."</p><p>Price estimate: INR {$row[2]}</p>";
            ?>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/temple5-home.jpeg" alt="">
         </div>
         <div class="content">
            <h3>temple</h3>
            <p>temple details</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/temple5-home.jpeg" alt="">
         </div>
         <div class="content">
            <h3>temple</h3>
            <p>temple details</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/temple5-home.jpeg" alt="">
         </div>
         <div class="content">
            <h3>temple</h3>
            <p>temple details</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/temple5-home.jpeg" alt="">
         </div>
         <div class="content">
            <h3>temple</h3>
            <p>temple details</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/temple5-home.jpeg" alt="">
         </div>
         <div class="content">
            <h3>temple</h3>
            <p>temple details</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/temple5-home.jpeg" alt="">
         </div>
         <div class="content">
            <h3>temple</h3>
            <p>temple details</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

   </div>

   <div class="load-more"><span class="btn">load more</span></div>

</section>

<!-- packages section ends -->
















<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> templetourism@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> mumbai, india - 400104 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> created by <span>Vandhana-Vaishnavi P-Vaishnavi Anand-Umashankar</span></div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
?>