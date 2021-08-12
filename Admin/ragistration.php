<?php include "../session.php"; ?>
<?php include "header.php"; ?>
<?php include "sidebar.php"; ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="font-weight-bold"><u>REGISTRATION FORM</u></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Registration Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section><br>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card shadow card-center bg-warning">
              <div class="card-header">
                <h3 class="card-title" style="text-align: center;font-weight: bold;">FILL THE DETAILS</h3>
              </div>
              <!-- /.card-header -->
                <div class="card-body" style="background-color: #e5e3e3">
                  <!-- form start -->
                  <form method="POST" action="ragis_insert.php">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>First Name*</label>
                        <input type="text" class="form-control" name="fname" placeholder="Enter your First Name">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <label>Last Name*</label>
                          <input type="text" class="form-control" name="lname" placeholder="Enter your Last Name">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Password*</label>
                    <input type="password" class="form-control" name="password" placeholder="Your Password">
                  </div>
                  <div class="form-group">
                    <label>Email*</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter your Email">
                  </div>
                  <div class="form-group">
                    <label>Age*</label>
                    <input type="text" class="form-control" name="age" placeholder="Enter your Age">
                  </div>
                  <div class="form-group">
                    <label>Phone*</label>
                    <input type="text" class="form-control" name="phone" placeholder="Enter your Phone no.">
                  </div>
                  <div class="form-group">
                    <label>Gender*</label>
                    <input type="text" class="form-control" name="gender" placeholder="Enter your Gender">
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Department*</label>
                          <select class="form-control" name="department">
                            <option>Select Department*</option>
                            <option>HR</option>
                            <option>IT</option>
                          </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Role*</label>
                          <select class="form-control" name="role">
                            <option>Select Role</option>
                            <option>Admin</option>
                            <option>employee</option>
                          </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer" style="background-color: #e5e3e3">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col-8 -->
        </div>
        <!-- /. row -->
      </div>
    </section>
</div>
<!-- /.content wrapper -->

</body>
</html>

<?php include "footer.php"; ?>