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
    // print_r($booking);
  }

  $rooms = FormController::getRooms();

?>

<script>

  $(function() {
    $( "#checkin" ).datepicker({
      dateFormat: 'yy-mm-dd',
    });
  });

  $(function() {
    $( "#checkout" ).datepicker({
      dateFormat: 'yy-mm-dd',
    });
  });


</script>

<div id="page-content" class="wrapper d-flex flex-column">

  <section class="container py-2 sectionA">

    <div class="card col-md-8 offset-md-2 py-4 px-2 text-white bg-dark">

      <form method="POST">
        <h5>Edit Booking #<?php echo $booking[0]; ?></h5>
        <div class="py-2">

          <select class="form-select form-select-lg mb-3" name="editroom_name" required>

            <option disabled selected>Edit Room</option>
           <?php foreach($rooms as $key => $value): ?> 

             <option type="text" value="<?php echo $value['name'] ?>"><?php echo $value['name'] ?></option>
             
           <?php endforeach ?>
            
          </select>

        </div>

        <div class="py-2 picker">
          <div class="input-group date" data-provide="datepicker">
            <label for="exampleInputEmail1" class="form-label">Edit Check In Date</label>
              <input type="text" name="editcheckin" id="checkin" value="<?php echo $booking[2]; ?>">
              <div class="input-group-addon">
                  <span class="glyphicon glyphicon-th"></span>
              </div>
          </div>
        </div>

        <div class="py-2 picker">
          <div class="input-group date" data-provide="datepicker">
            <label for="exampleInputEmail1" class="form-label">Edit Out Date</label>
              <input type="text" name="editcheckout" id="checkout" value="<?php echo $booking[3]; ?>">
              <div class="input-group-addon">
                  <span class="glyphicon glyphicon-th"></span>
              </div>
          </div>
        </div>

        <div class="py-2">
          <label for="exampleInputEmail1" class="form-label">Edit First Name</label>
          <input type="text" class="form-control" name="editfirstName" value="<?php echo $booking[4]; ?>"  required>
        </div>
        <div class="py-2">
          <label for="exampleInputEmail1" class="form-label">Edit Last Name</label>
          <input type="text" class="form-control" name="editlastName" value="<?php echo $booking[5]; ?>"  required>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Edit Extras</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" name="editextras" value="" rows="3"><?php echo $booking[6]; ?></textarea>
        </div>

        <div class="py-2">
          <button type="Update" class="btn btn-info">Update</button>
          <a type="submit" class="btn btn-success" href="./index.php?page=book">Back</a>
        </div>

        <input type="hidden" class="form-control" name="id" value="<?php echo $value['id'] ?>" >
        
      </form>

    </div>

  </section>

  <?php
  
    $updateBooking = new FormController;
    $updateBooking -> updateBook();
  
  ?>

</div>

























