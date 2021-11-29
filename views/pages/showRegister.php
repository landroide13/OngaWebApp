
<?php

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
        <h5 class="card-title">Customer #<?php echo $customer[0]; ?></div>
      </div>
      <div class="card-body">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">First Name: <?php echo $customer[1]; ?></li>
          <li class="list-group-item">Last Name: <?php echo $customer[2]; ?></li>
          <li class="list-group-item">Email: <?php echo $customer[3]; ?></li>
        </ul>
      </div>
      <div class="card-body">
        <a type="submit" class="btn btn-info" href="./index.php?page=book">Back</a>
        <a type="submit" class="btn btn-danger" href="./index.php?page=deleteRegister&id=<?php echo $customer[0]; ?>"> Delete </a>
      </div>
    </div>

  </section>

</div>




























