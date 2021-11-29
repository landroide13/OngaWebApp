
<?php
  if(isset($_GET['id'])){

    $item = 'user_id';
    $value = $_GET['id'];

    $customer = FormController::getCustomer($item, $value);
    // print_r($customer);
  }

?>

<div id="page-content" class="wrapper d-flex flex-column">

  <section class="container py-2 sectionA">

    <div class="card col-md-8 offset-md-2 py-4 px-2 text-white bg-dark">

      <form method="POST">
        <h5>Edit Customer #<?php echo $customer[0]; ?></h5>
        <div class="py-2">

        <div class="py-2">
          <label for="exampleInputEmail1" class="form-label">Edit First Name</label>
          <input type="text" class="form-control" name="editfirstName" value="<?php echo $customer[1]; ?>"  required>
        </div>
        <div class="py-2">
          <label for="exampleInputEmail1" class="form-label">Edit Last Name</label>
          <input type="text" class="form-control" name="editlastName" value="<?php echo $customer[2]; ?>"  required>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Edit Email</label>
          <input type="text" class="form-control" name="editemail" value="<?php echo $customer[3]; ?>"  required>
        </div>

        <div class="py-2">
          <button type="Update" class="btn btn-info">Update</button>
          <a type="submit" class="btn btn-success" href="./index.php?page=register">Back</a>
        </div>
        
      </form>

    </div>

  </section>

  <?php
  
    // $updateBooking = new FormController;
    // $updateBooking -> updateBook();
  
  ?>

</div>


























