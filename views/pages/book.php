<?php
 $rooms = FormController::getRooms();
 $bookings = FormController::getBook();
?>


 <div id="page-content" class="wrapper d-flex flex-row">

<section class="container py-2 sectionA">

  <div class="card col-md-8 offset-md-2 py-4 px-2 text-white bg-dark">

    <form method="post">
      <h5>Make Booking</h5>
      <div class="py-2">
        <select class="form-select form-select-lg mb-3" name="roomName" aria-label=".form-select-lg example">
          <option disabled selected>Choose a Room</option>

           <?php foreach($rooms as $key => $value): ?>

             <option value="<?php echo $value['name'] ?>" ><?php echo $value['name'] ?></option>
             
           <?php endforeach ?> 
 
        </select>
      </div>
      <div class="py-2">
        <label for="exampleInputEmail1" class="form-label">Check In Date</label>
        <input type="date" class="form-control" name="checkin" id="checkin" aria-describedby="emailHelp">
      </div>
      <div class="py-2">
        <label for="exampleInputEmail1" class="form-label">Check Out Date</label>
        <input type="date" class="form-control" name="checkout" id="checkout" aria-describedby="emailHelp">
      </div>
      <div class="py-2">
        <label for="exampleInputEmail1" class="form-label">Customer First Name</label>
        <input type="text" class="form-control" name="firstName" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="py-2">
        <label for="exampleInputEmail1" class="form-label">Customer Last Name</label>
        <input type="text" class="form-control" name="lastName" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Booking Extras</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="extras" rows="3"></textarea>
      </div>

      <?php
      
        $booking = FormController::ctrBook();
        echo $booking;
        
      ?>
      
      <div class="py-2">
        <button type="submit" class="btn btn-info">Add</button>
      </div>
      
    </form>
  </div>

</section>

<section class="container py-2 sectionB">

  <h3>Booking List</h3>
  <hr>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">Customer Name</th>
        <th scope="col">Room</th>
        <th scope="col">Checkin</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Eltro Lazo</td>
        <td>Aruba</td>
        <td>12/10/21</td>
        <td>
          <a type="button" href="./bookInfo.html" class="btn btn-info"><i class="fas fa-info-circle"></i></a>
          <a type="button" href="./bookUpdate.html" class="btn btn-warning"><i class="fas fa-edit"></i></a>
          <a href="./deleteBook.html" type="button" class="btn btn-danger"><i class="fas fa-trash"></i></a>
        </td>
      </tr>

      <?php foreach($bookings as $key => $value): ?>
      <tr>
        <td><?php echo $value['first_name'] ." ". $value['last_name'] ?></td>
        <td><?php echo $value['room_name']  ?></td>
        <td><?php echo $value['checkin']  ?></td>
        <td>
          <a type="button" href="./bookInfo.html" class="btn btn-info"><i class="fas fa-info-circle"></i></a>
          <a type="button" href="./bookUpdate.html" class="btn btn-warning"><i class="fas fa-edit"></i></a>
          <a href="./deleteBook.html" type="button" class="btn btn-danger"><i class="fas fa-trash"></i></a>
        </td>
      </tr>
      <?php endforeach ?>

    </tbody>
  </table>


  <h3>Search Room</h3>

  <hr>

  <form id="form1" class="row">

    <div class="col-md-4">
      <label for="exampleFormControlInput1" class="form-label">From</label>
      <input type="date" class="form-control" id="from-date" onChange="activate()" placeholder="" required>
    </div>

    <div class="col-md-4">
      <label for="exampleFormControlInput1" class="form-label">To</label>
      <input type="date" class="form-control" id="to-date" onChange="activate()" placeholder="" required>
    </div>

    <div class="col-md-4 py-2">
      <br>
      <button type="submit" class="btn btn-info" id="btn"><i class="fas fa-search"></i></button>
    </div>

  </form>

  <br>

  <table id="t1" class="table table-hover not">

     <thead>
        <tr>
          <th scope="col">Room Name</th>
          <th scope="col">Type</th>
          <th scope="col">Checkout</th>
        </tr>
    </thead>

    <tbody>

      <tr>
        <td id="room1"></td>
        <td id="type1"></td>
        <td id="out1"></td>
      </tr>

      <tr>
        <td id="room2"></td>
        <td id="type2"></td>
        <td id="out2"></td>
      </tr>

      <tr>
        <td id="room3"></td>
        <td id="type3"></td>
        <td id="out3"></td>
      </tr>

      

    </tbody>


  </table>

  


</section>

</div>































