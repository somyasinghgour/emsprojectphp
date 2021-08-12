<?php include "../session.php"; ?>
<?php include "../Admin/header.php"; ?>
<?php include "sidebar.php"; ?>

<?php
include "../dbcon.php";

$id = $_GET['id'];

$data = "select * from assign_task join employee on assign_task.emp_id=employee.emp_id where t_id = $id";

$result = mysqli_query($con,$data);

$result2 = mysqli_fetch_array($result);

?>

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
        
        <h1>Task Reply</h1>
 
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid" style="padding:10px 100px;">

            <div class="card">
              	<h4 class="text-center">TASK</h4><br>
                    <form method="POST" action="reply_insert.php">
                 
                     <?php 
                    if($_SESSION['data1'] == $result2['emp_id'])
                    {
                      ?>
                    <center><h4 class="text-center bordered"><?php echo $result2['task']  ?></h4></center>
                    
                   

                    <input type="hidden" name="reply_by" value="<?php echo $_SESSION['e_id'] ?>">
                    <input type="hidden" name="t_id" value="<?php echo $result2['t_id'] ?>">
                    

                <?php } ?>

            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <center>
              <div class="card" style="background: #cfcaca;width: 400px;">
              
              <div class="card-body">
              
                  <div class="form-group">
                    <textarea class="form-control" name="reply_msg" placeholder="Start Typing..." style=" border: 1px solid black;border: 1px dashed black;"></textarea>
                  </div>
                  
                  <center>
                    <button type="submit" class="btn btn-light float-sm-right" class="text-center btn-center"><i class="fa fa-share text-success"></i></button>
                  </center>
                </form>


                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </center>
            <div class="row">
              <div class="col-md-6">
                <?php
                include "../dbcon.php";

                $id = $_GET['id'];

                $data = "select * from reply_task where t_id = $id";

                $result = mysqli_query($con,$data);

                $result3 = mysqli_fetch_array($result);
                
                ?>                
                <h4 class="text-center"><b>Task Reply</b></h4>
                <center>
                 <h5 class="bordered"><?php echo $result3['reply_msg'] ?></h5> 
                </center>
              </div>
              <!--col-6 end-->
              <div class="col-md-6">
                <?php
                    include "../dbcon.php";

                    $id = $_GET['id'];
                    $data = "select * from admin_reply where a_id = $id";
                    $result = mysqli_query($con,$data);
                    $a_reply = mysqli_fetch_array($result);
                
                    ?>                
                    <h4 class="text-center"><b>Admin Reply</b></h4>
                    <h5 class="text-center"><?php echo $a_reply['admin_msg'] ?></h5>
              </div>
              <!--col-6 end-->
            </div>
            
      </div><!-- /.container-fluid -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

</body>
</html>

<?php include "footer.php"; ?>