<?php 

include './include/header.php';

use App\classes\Student;
if(isset($_POST['btn']))
{
    $student = new Student();
    $student->makeViewForStudent();
}


?>

<section class="bg-info py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Student Form</h3>
                        <div class="card-body">
                        
                        <form action="view-student.php" method="POST">
                            <div class="form-group">
                                <label class="col-sm-2 col-form-label">Student Name</label>
                                <div class="col-sm-10">
                                <input type="text" name="name" class="form" placeholder="Name" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-sm-2 col-form-label">Student Email</label>
                                <div class="col-sm-10">
                                <input type="text" name="email" class="form" placeholder="Email" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-sm-2 col-form-label">Student Password</label>
                                <div class="col-sm-10">
                                <input type="text" name="password" class="form" placeholder="Password" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-sm-2 col-form-label">Student Mobile</label>
                                <div class="col-sm-10">
                                <input type="text" name="mobile" class="form" placeholder="Mobile" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-sm-2 col-form-label">Student Address</label>
                                <div class="col-sm-10">
                                <input type="text" name="address" class="form" placeholder="Password" >
                                </div>
                            </div>

                           <div class="form-group row">
                            <label class="col-sm-2">Gender Info</label>
                           <div class="col-sm-10">
                           <div class="form-check form-check-inline">
                           <input class="form-check-input" name="gender" type="radio" id="inlineCheckbox1" value="Male">
                           <lable class="form-check-label" for="inlineCheckbox1">Male</lable>

                           </div>
                           <div class="form-check form-check-inline">
                           <input class="form-check-input" name="gender" type="radio" id="inlineCheckbox2" value="Female">
                           <lable class="form-check-label" for="inlineCheckbox1">FeMale</lable>

                           </div>
                           </div>
                           </div>
                            <div class="form-group row">
                            <label class="col-sm-2 col-form-lable"></label>
                            <div class="col-sm-10">
                            <input type="submit" name="btn" class="btn btn-success"  value="Save Student Info">
                            </div>                            
                            </div>
                            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php include './include/footer.php' ?>