
<?php
     
    //  if(isset($_SESSION["login"])){
    //     if($_SESSION['login'] != 'ok'){
    //         echo '<script>
    //             window.location = "./index.php?page=login";
    //         </script>';
    //         return;
    //     }
    //  }else{
    //     '<script>
    //         window.location = "./index.php?page=login";
    //         </script>';
    //         return;
    //  }


    $rooms = FormController::getRooms();
?>

 <div id="page-content" class="container py-4 wrapper">

    <section class="sectionA">

    <!-- Button trigger modal -->
        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add New Room
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Room</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <div class="mb-3">
                        <label class="form-label">Room Name</label>
                        <input type="name" name="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <h5>Room Type</h5>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" name="db" for="exampleCheck1">Double</label>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" name="k" for="exampleCheck1">King</label>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" name="SK" for="exampleCheck1">Super King</label>
                    </div>

                    <button type="submit" class="btn btn-info">Create Room</button>
                <?php
                    $book = FormController::ctrRoom();
                ?>

                </form>
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>

    </section>

    <section class="py-5 sectionB col-md-8 offset-md-2">

    <h3>Rooms List</h3>
    <hr>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Room</th>
            <th scope="col">Type</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
       
        <?php foreach($rooms as $key => $value): ?>

            <tr>
                <th scope="row">1</th>
                <td><?php echo $value['name']  ?></td>
                <td><?php echo $value['type']  ?></td>
                <td>
                <button type="button" class="btn btn-info"><i class="fas fa-info-circle"></i></button>
                <a type="button" href="./roomUpdate.html" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                </td>
            </tr>



        <?php endforeach ?>    
        </tbody>
    </table>

    </section>

</div>

















