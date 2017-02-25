<?php
include "db.php";
if(isset($_POST['objectid']))
{

 $q=mysqli_query($con,"SELECT * from ca_main_navbar where object_id='".$_POST['objectid']."'");
 while ($row=mysqli_fetch_object($q)){
 $data=$row;}
 echo json_encode($data);
 mysqli_close($con);
}
?>