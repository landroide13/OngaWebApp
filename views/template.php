<?php
  session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"> 

  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->

  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
  
  

  <style>
    <?php include'styles/style.css'; ?>
  </style>
  
 
  <title alignt-text="center">Bed and Breakfast</title>
</head>
<body class="d-flex flex-column">

  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid d-flex justify-content-center">
        <span class="navbar-text fs-3 text-white">
          <i class="fas fa-hotel"></i>
          Ongaonga B&B
        </span>
    </div>
  </nav>

  <ul class="nav nav-tabs justify-content-center navbar-dark bg-dark">

    <?php if(isset($_GET['page'])): ?>

      <?php if($_GET['page'] == 'home'): ?>  
        <li class="nav-item">
          <a class="nav-link active text-black" aria-current="page" href="./index.php?page=home">Home</a>
        </li>
      <?php else: ?>
      <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="./index.php?page=home">Home</a>
        </li>
      <?php endif ?> 

      <?php if($_GET['page'] == 'rooms'): ?> 
        <li class="nav-item">
          <a class="nav-link active text-black" href="./index.php?page=rooms">Rooms</a>
        </li>
      <?php else: ?>
      <li class="nav-item">
          <a class="nav-link text-white" href="./index.php?page=rooms">Rooms</a>
        </li>
      <?php endif ?>

      <?php if($_GET['page'] == 'book'): ?>
        <li class="nav-item">
          <a class="nav-link active text-black" href="./index.php?page=book">Book</a>
        </li>
      <?php else: ?>
      <li class="nav-item">
          <a class="nav-link text-white" href="./index.php?page=book">Book</a>
        </li>
      <?php endif ?>

      <?php if($_GET['page'] == 'register'): ?>
        <li class="nav-item">
          <a class="nav-link text-black active" href="./index.php?page=register">Register</a>
        </li>
      <?php else: ?>
      <li class="nav-item">
          <a class="nav-link text-white" href="./index.php?page=register">Register</a>
        </li>
      <?php endif ?>

      <?php if($_SESSION['validLogin'] != 'ok'): ?>

        <?php if($_GET['page'] == 'login'): ?>
          <li class="nav-item">
            <a class="nav-link text-black active" href="./index.php?page=login">Login</a>
          </li>
        <?php else: ?>
          <li class="nav-item">
            <a class="nav-link text-white" href="./index.php?page=login">Login</a>
          </li>
        <?php endif ?>

      <?php else: ?>

        <?php if($_GET['page'] == 'logout'): ?>
          <li class="nav-item">
            <a class="nav-link text-black active" href="./index.php?page=logout">Logout</a>
          </li>
        <?php else: ?>
          <li class="nav-item">
            <a class="nav-link text-white" href="./index.php?page=logout">Logout</a>
          </li>
        <?php endif ?>

      <?php endif ?>

    <?php else: ?> 
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="./index.php?page=home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="./index.php?page=rooms">Rooms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="./index.php?page=book">Book</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="./index.php?page=register">Register</a>
      </li>

      <?php if($_SESSION['validLogin'] != 'ok'): ?>
        <li class="nav-item">
          <a class="nav-link text-white" href="./index.php?page=login">Login</a>
        </li>
      <?php else: ?>
        <li class="nav-item">
          <a class="nav-link text-white" href="./index.php?page=logout">Logout</a>
        </li>
      <?php endif ?>  

    <?php endif ?>
  </ul>

  <?php

    if(isset($_GET['page'])){
      if($_GET['page'] == 'home' || $_GET['page'] == 'rooms' || $_GET['page'] == 'book' || $_GET['page'] == 'register' || 
      $_GET['page'] == 'login' || $_GET['page'] == 'updateBook' || $_GET['page'] == 'updateRegister' || 
      $_GET['page'] == 'deleteBook' || $_GET['page'] == 'showBook' || $_GET['page'] == 'showRoom' || $_GET['page'] == 'deleteRoom' ||
      $_GET['page'] == 'showBook' || $_GET['page'] == 'showRegister' || $_GET['page'] == 'deleteRegister' || $_GET['page'] == 'logout'){
        include 'pages/'.$_GET['page'].'.php';
      }else{
        include 'pages/404.php';
      }
    }else{
      include 'pages/home.php';
    }

  ?>

<footer class="flex-shrink-0 py-3 bg-dark text-white">
    <div class="container">
      <h4>Follow Us</h4>
      <ul class="nav flex-row">
        <li class="nav-item p-2">
          <i class="fab fa-instagram fa-2x"></i>
        </li>
        <li class="nav-item p-2">
          <i class="fab fa-facebook-square fa-2x"></i>
        </li>
      </ul>
    </div>  
  </footer>


  <script src="views/JS/ajax.js" type="text/javascript"></script>
  
</body>
</html>













