


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
                <form action="">
                <div class="mb-3">
                    <label class="form-label">Room Name</label>
                    <input type="name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <h5>Room Type</h5>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Double</label>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">King</label>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Super King</label>
                </div>

                <button type="submit" class="btn btn-info">Create Room</button>

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
        <tr>
            <th scope="row">1</th>
            <td>Aruba</td>
            <td>Double</td>
            <td>
            <button type="button" class="btn btn-info"><i class="fas fa-info-circle"></i></button>
            <a type="button" href="./roomUpdate.html" class="btn btn-warning"><i class="fas fa-edit"></i></a>
            <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
            </td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Mediterranean</td>
            <td>King</td>
            <td>
            <button type="button" class="btn btn-info"><i class="fas fa-info-circle"></i></button>
            <a type="button" href="./roomUpdate.html" class="btn btn-warning"><i class="fas fa-edit"></i></a>
            <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
            </td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Bahia</td>
            <td>Super King</td>
            <td>
            <button type="button" class="btn btn-info"><i class="fas fa-info-circle"></i></button>
            <a type="button" href="./roomUpdate.html" class="btn btn-warning"><i class="fas fa-edit"></i></a>
            <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
            </td>
        </tr>
        </tbody>
    </table>

    </section>

</div>

















