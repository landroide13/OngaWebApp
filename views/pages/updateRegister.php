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

    $item = 'id';
    $value = $_GET['id'];

    $customer = FormController::getCustomer($item, $value);
    // print_r($customer);
  }

?>

<div id="page-content" class="wrapper d-flex flex-column">

  <section class="container py-2 sectionA">

    <div class="card col-md-8 offset-md-2 py-4 px-2 text-white bg-dark">

      <form method="POST">
        <h5>Edit Customer #<?php echo $customer["id"]; ?></h5>
        <div class="py-2">

        <div class="py-2">
          <label for="exampleInputEmail1" class="form-label">Edit First Name</label>
          <input type="text" class="form-control" name="editfirstName" value="<?php echo $customer["first_name"]; ?>">
        </div>
        <div class="py-2">
          <label for="exampleInputEmail1" class="form-label">Edit Last Name</label>
          <input type="text" class="form-control" name="editlastName" value="<?php echo $customer["last_name"]; ?>">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Edit Email</label>
          <input type="text" class="form-control" name="editemail" value="<?php echo $customer["email"]; ?>">
        </div>

        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Password</label>
          <input type="password" class="form-control" name="updatePass" value="">

          <input type="hidden" class="form-control" id="psw" name="currentpass" value="<?php echo $customer["password"]; ?>">
          <input type="hidden" class="form-control" id="uid" name="id" value="<?php echo $customer["id"]; ?>">
        </div>

        <div class="py-2">

           <?php
            $updateRegister = new FormController;
            $updateRegister -> ctrUpdateRegister();
          ?>


          <button type="submit" class="btn btn-info">Update</button>

          <a type="submit" class="btn btn-success" href="./index.php?page=register">Back</a>
        </div>
        
      </form>

    </div>

  </section>

</div>


























