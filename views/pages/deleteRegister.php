<?php

if(!isset($_SESSION['validLogin'])){

  echo '<script>
            window.location = "./index.php?page=home";
          </script>';

    return;

  }else{

    if($_SESSION['validLogin'] != 'ok'){

    echo '<script>
            window.location = "./index.php?page=login";
          </script>';

    return;
  }
    
}

if(isset($_GET['id'])){

    $item = 'user_id';
    $value = $_GET['id'];

    $customer = FormController::getCustomer($item, $value);

    // print_r($customer);

  }

?>

<div id="page-content" class="container py-5 wrapper col-md-8 offset-md-2">

  <section class="sectionA">

    <div class="card text-white bg-dark">
      <div class="card-header">
        <h5 class="card-title">Delete Customer #<?php echo $customer[0]; ?></div>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">First Name: <?php echo $customer[1]; ?></li>
        <li class="list-group-item">Last Name: <?php echo $customer[2]; ?></li>
        <li class="list-group-item">Email: <?php echo $customer[3]; ?></li>

      </ul>
      <div class="card-body">
        <a type="submit" class="btn btn-info" href="./index.php?page=register">Back</a>
        <a type="submit" class="btn btn-danger">Delete</a>
      </div>

       <?php
        //$deleteBook = new FormController;
        //$deleteBook -> ctrDeleteBook();
       ?>

    </div>

  </section>

</div>



























