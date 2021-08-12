<?php
include "../dbcon.php";
if(isset($_POST['approved'])){
   $applyby=$_POST['apply_by'];
   $status="Approved";
   $comment=$_POST['comment'];
   
  

  $query="UPDATE apply_leave set status='$status', comment='$comment' where apply_by=$applyby";
  
  $res=mysqli_query($con,$query);

  header("location:view_apply_leave.php");

}


if(isset($_POST['rejected'])){
  $applyby=$_POST['apply_by'];
  $status="Rejected";
  $comment=$_POST['comment'];

  $query="UPDATE apply_leave set status='$status', comment='$comment' where apply_by=$applyby";
  
  $res=mysqli_query($con,$query);
  header("location:view_apply_leave.php");
}

?>