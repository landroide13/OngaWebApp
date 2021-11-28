<?php
 $rooms = FormController::getRooms();
 $bookings = FormController::getBook(null, null);

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

  $(function() {
    $( ".dateP" ).datepicker({
      dateFormat: 'yy-mm-dd',
    });
  });

  $(document).ready(function (){
        $('#form1').submit(function(event){
            var formData = {
              sqa: $('#from').val(),
              sqb: $('#to').val()
            };
            $.ajax({
              type: "POST",
              url: "book.php",
              data: formData,
              dataType: "json",
              encode: true,
            }).done(function(data){
              var tbl = document.getElementById("t1"); //find the table in the HTML  
              var rowCount = tbl.rows.length;
              for (var i = 1; i < rowCount; i++) {
                //delete from the top - row 0 is the table header we keep
                tbl.deleteRow(1); 
              }          
              //populate the table
              //data.length is the size of our array
              for (var i = 0; i < data.length; i++) {
                // var rid = data[i]['roomID'];
                var rn    = data[i]['room_name'];
                var rt    = data[i]['type'];
                            
                //create a table row with four cells  
                tr = tbl.insertRow(-1);
                var tabCell = tr.insertCell(-1);
                    tabCell.innerHTML = rid; //roomID
                var tabCell = tr.insertCell(-1);
                    tabCell.innerHTML = rn; //room name  
                var tabCell = tr.insertCell(-1);
                    tabCell.innerHTML = rt; //room type       
                var tabCell = tr.insertCell(-1);
                    tabCell.innerHTML = bd; //beds          
                } 
            });
            event.preventDefault();
        })
    })





</script>

 <div id="page-content" class="wrapper d-flex flex-row">

<section class="container py-2 sectionA">

  <div class="card col-md-8 offset-md-2 py-4 px-2 text-white bg-dark">

    <form method="POST">
      <h5>Make Booking</h5>
      <div class="py-2">

        <select class="form-select form-select-lg mb-3" name="room_name" required>

          <option disabled selected>Choose a Room</option>
           <?php foreach($rooms as $key => $value): ?> 

             <option type="text" value="<?php echo $value['name'] ?>"><?php echo $value['name'] ?></option>
             
           <?php endforeach ?>
        </select>

      </div>

      <div class="py-2 picker">
        <div class="input-group date" data-provide="datepicker">
          <label for="exampleInputEmail1" class="form-label">Check In Date</label>
            <input type="text" name="checkin" id="checkin">
            <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
            </div>
        </div>
      </div>

      <div class="py-2 picker">
        <div class="input-group date" data-provide="datepicker">
          <label for="exampleInputEmail1" class="form-label">Check Out Date</label>
            <input type="text" name="checkout" id="checkout">
            <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
            </div>
        </div>
      </div>

      <div class="py-2">
        <label for="exampleInputEmail1" class="form-label">Customer First Name</label>
        <input type="text" class="form-control" name="firstName" id="exampleInputEmail1" required>
      </div>
      <div class="py-2">
        <label for="exampleInputEmail1" class="form-label">Customer Last Name</label>
        <input type="text" class="form-control" name="lastName" id="exampleInputEmail1" required>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Booking Extras</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="extras" rows="3"></textarea>
      </div>

      <div class="py-2">
        <button type="submit" class="btn btn-info">Add</button>
      </div>

      <?php
        $booking = FormController::ctrBook();

        print_r($booking);
      ?>
      
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
  
      <?php foreach($bookings as $key => $value): ?>
        <tr>
          <td><?php echo $value['first_name'] ." ". $value['last_name']; ?></td>
          <td><?php echo $value['room_name'];  ?></td>
          <td><?php echo $value['checkin']; ?></td>

          <td class="btn-group">
            <a type="button" href="./bookInfo.html" class="btn btn-info"><i class="fas fa-info-circle"></i></a>
            <a type="button" href="./index.php?page=updateBook&id=<?php echo $value['id']; ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
            <form action="post">
              <input type="hidden" class="form-control" name="deleteBook" value="<?php echo $value['id']; ?>">
              <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></a>
              <?php
                $deleteBook = new FormController;
                $deleteBook -> ctrDeleteBook();
              ?>
            </form>
          </td>

        </tr>
      <?php endforeach ?>

    </tbody>
  </table>


  <h3>Search Room</h3>

  <hr>

  <form id="form1" class="row" method="post">

    <div class="col-md-4">
      <label for="exampleFormControlInput1" class="form-label">From</label>
      <input type="text" class="form-control dateP" id="from" required>
    </div>

    <div class="col-md-4">
      <label for="exampleFormControlInput1" class="form-label">To</label>
      <input type="text" class="form-control dateP" id="to" required>
    </div>

    <div class="col-md-4 py-2">
      <br>
      <button type="submit" class="btn btn-info"><i class="fas fa-search"></i></button>
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

    </tbody>

  </table>

  


</section>

</div>































