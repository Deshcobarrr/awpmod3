<?php
  include_once 'includes/session.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Attendance - <?php echo $title?> </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel = "stylesheet" href = "css/site.css" />


</head>
<body>


<div class= "container">


<!-- NavBar -->

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">IT Conference</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="viewrecords.php">View Attendees</a></li>       
        </ul>

        <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
            <?php 
            if(!isset($_SESSION['userid']))
              {
            ?>
            <a class="nav-item nav-link" href="login.php">Login</a></li>
            <?php } else { ?>

            <a class="nav-item nav-link" href="#"><span>Hello <?php echo $_SESSION['username'] ?>! </span></a></li>
            <a class="nav-item nav-link" href="logout.php">Logout</a></li>
             <?php } ?>
            


    </div>
  </div>
</nav>
<br/>
