<?php 
   require "connection.php";

   $queryProject = mysqli_query($conn, "SELECT * FROM projects");
   $rowProject = mysqli_fetch_all($queryProject, MYSQLI_ASSOC);

   $queryPortfolio = mysqli_query($conn, "SELECT * FROM portfolio");
   $rowPortfolio = mysqli_fetch_all($queryPortfolio, MYSQLI_ASSOC);
   
   $querySkill = mysqli_query($conn, "SELECT categories.category_name AS category, skills.* FROM skills JOIN categories ON categories.id = skills.category_id");
   $rowSkill = mysqli_fetch_all($querySkill, MYSQLI_ASSOC);
   
   $queryProfession = mysqli_query($conn, "SELECT * FROM professions");
   $rowProfession = mysqli_fetch_all($queryProfession, MYSQLI_ASSOC);

   if (isset($_POST['send'])) {
      $full_name = $_POST['full_name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];

      $checkEmail = mysqli_query($conn, "SELECT email FROM contact WHERE email = '$email';");
		$rowEmail = mysqli_fetch_assoc($checkEmail);

      if (isset($message) && isset($subject) && isset($email)) {
         mail("diodamar14102000@gmail.com", $subject, $message, $email);
      }

      $queryInsert = mysqli_query($conn, "INSERT INTO contact (full_name, email, phone, subject, message) 
      VALUES ('$full_name', '$email', '$phone', '$subject', '$message')");
   
      if ($queryInsert) {
         header("Location: index.php");
      }
   }
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Portofolio - Dio Damar Danendra</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
      <!-- font awesome css -->
      <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   </head>
   <body>
      <?php include_once "inc/header.php"; ?>
      <?php include_once "inc/projects.php"; ?>
      <?php include_once "inc/skills.php"; ?>
      <?php include_once "inc/portfolio.php"; ?>
      <?php include_once "inc/contact.php"; ?>
      <?php include_once "inc/project_box.php"; ?>
      <?php include_once "inc/footer.php" ?>
      <!-- footer section end -->
      <?php include_once "inc/copyright.php"; ?>
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script>
         function animasi() {
            $('#myCarousel').carousel({
               interval: 3000, // Change slide every 3 seconds
               pause: 'mouseenter'
            });
         }
         
         //scroll slides on swipe for touch enabled devices
         
         $("#myCarousel").on("touchstart", function(event){
         
            var yClick = event.originalEvent.touches[0].pageY;
            $(this).one("touchmove", function(event){
         
                var yMove = event.originalEvent.touches[0].pageY;
                if( Math.floor(yClick - yMove) > 1 ){
                    $(".carousel").carousel('next');
                }
                else if( Math.floor(yClick - yMove) < -1 ){
                    $(".carousel").carousel('prev');
                }
            });
            $(".carousel").on("touchend", function(){
                $(this).off("touchmove");
            });
         });
      </script>
   </body>
</html>