

<?php

if(isset($_GET['user_id'])){

    $item = 'user_id';
    $value = $_GET['user_id'];

    $customer = FormController::getCustomer($item, $value);

    print_r($customer);

  }

?>

<div id="page-content" class="container py-5 wrapper col-md-8 offset-md-2">

  <section class="sectionA">

    <div class="card text-white bg-dark">
      <div class="card-header">
        <h5 class="card-title">Delete Customer #<?php echo $customer[0]['user_id']; ?></div>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Room: <?php echo $customer[1]; ?></li>
        <li class="list-group-item">CheckIn: <?php echo $customer[2]; ?></li>
        <li class="list-group-item">Checkout: <?php echo $customer[3]; ?></li>

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



























