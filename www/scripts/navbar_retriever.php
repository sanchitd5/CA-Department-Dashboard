<?php
include "db.php";
$data=array();
$q=mysqli_query($con,"SELECT * from `ca_main_navbar`");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
mysqli_close($con);
?>