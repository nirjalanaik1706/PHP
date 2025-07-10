
<style>
    body{
        background-image:url(sky3.jpg);
        background-size:cover;
        background-attachment:fixed;
        background-repeat:no-repeat;
    }
</style>
<?php
session_start();
?>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Airline Reservation</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'hd.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>READY FOR TAKE OFF.</h1>
                       <p>Book A Ticket And Just Leave.</p>
                       <a href="Login2.php" class="btn btn-danger">Register Now</a>
                   </div>
                   </center>
               </div>
           </div>
           
    </body>
</html>