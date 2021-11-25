
<?php
  $customers = FormController::getCustomer();
?>

<div id="page-content" class="wrapper d-flex flex-row">

<section class="container py-3 sectionA">

  <div class="card col-md-8 offset-md-2 py-4 px-2 text-white bg-dark">

    <form method="post">
      <h5>Customer Sign Up</h5>
      <div class="py-2">
        <label for="exampleInputEmail1" class="form-label">First Name</label>
        <input type="text" class="form-control" name="firstName"  aria-describedby="emailHelp">
      </div>
      <div class="py-2">
        <label for="exampleInputEmail1" class="form-label">Last Name</label>
        <input type="text" class="form-control"  name="lastName" aria-describedby="emailHelp">
      </div>
      <div class="py-2">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control"  name="email" aria-describedby="emailHelp">
      </div>
      <div class="py-2">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name="pass" >
      </div>

      <?php
      
        $regis = FormController::ctrRegister();
        echo $regis;
        
      ?>
      
      <div class="py-2">
        <button type="submit" class="btn btn-info">Sign Up</button>
      </div>
    </form>


  </div>

</section>

<section class="container py-4 sectionB">

  <h3>Customer List</h3>
  <hr>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      
      <?php foreach($customers as $key => $value): ?>

        <tr>
          <th scope="row"><?php echo $value['user_id']  ?></th>
          <td><?php echo $value['first_name']  ?></td>
          <td><?php echo $value['last_name']  ?></td>
          <td><?php echo $value['email']  ?></td>
          <td>
            <button type="button" class="btn btn-info"><i class="fas fa-info-circle"></i></button>
            <a type="button" href="./edit.html" class="btn btn-warning"><i class="fas fa-edit"></i></a>
            <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
          </td>
        </tr>
        
      <?php endforeach ?>
      
      
    </tbody>
  </table>

</section>

</div>























