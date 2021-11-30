



<div id="page-content" class="container py-5 wrapper">

  <section class="sectionA">

    <div class="card col-md-8 offset-md-2 py-4 px-4 text-white bg-dark">

      <form method="post">
        <h5>Customer Login</h5>
        <div class="py-2">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="py-2">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" id="exampleInputPassword1">
        </div>

        <?php
          $login = new FormController();
          $login -> ctrLogin();
        ?>
        
        <button type="submit" class="btn btn-info">Login</button>
      </form>
      
    </div>
  </section>

  <section class="sectionB"></section>

</div>
















