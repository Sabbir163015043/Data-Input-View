<?php include './include/header.php' ?>

<section>
    <div class="bg-info py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                        All Student Info
                        </div>
                        <div class="card-body">
                        <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Sl No</th>
                                <th>Student Name</th>
                                <th>Student Email</th>
                                <th>Student Password</th>
                                <th>Student Mobile</th>
                                <th> Student Address</th>
                                <th>Gender Info</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <body>
                            <tr>
                                <td>1</td>
                                <td><?php echo $_POST['name']; ?></td>
                                <td><?php echo $_POST['email']; ?></td>
                                <td><?php echo $_POST['password']; ?></td>
                                <td><?php echo $_POST['mobile']; ?></td>
                                <td><?php echo $_POST['address']; ?></td>
                                <td><?php echo $_POST['gender']; ?></td>
                                
                                <td>
                                    <a href="" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        </body>
                        </table>
                        </div>
        </div>
        </div>
        </div>
        </div>
    
    </div>
</section>

<?php include './include/footer.php' ?>