
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

    $booking = FormController::getBook($item, $value);

    // print_r($booking[0]);

  }

?>

<div id="page-content" class="container py-5 wrapper col-md-8 offset-md-2">

  <section class="sectionA">

    <div class="card text-white bg-dark">
      <div class="card-header">
        <h5 class="card-title">Delete Booking #<?php echo $booking[0]; ?></div>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Room: <?php echo $booking[1]; ?></li>
        <li class="list-group-item">CheckIn: <?php echo $booking[2]; ?></li>
        <li class="list-group-item">Checkout: <?php echo $booking[3]; ?></li>

        <li class="list-group-item">First Name: <?php echo $booking[4]; ?></li>
        <li class="list-group-item">Last Name: <?php echo $booking[5]; ?></li>
        <li class="list-group-item">Extras: <?php echo $booking[6]; ?></li>
      </ul>
      <div class="btn-group">
        
        <div class="px-1">
          <a type="submit" class="btn btn-info" href="./index.php?page=book">Back</a>
        </div>

        <form action="" method="post">
          <input type="hidden" name="idDelete" value="<?php echo $booking["id"] ?>" />
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>

       
      </div>

       <?php
        $deleteBook = new FormController;
        $deleteBook -> ctrDeleteBook();
       ?>

    </div>

  </section>

</div>





















