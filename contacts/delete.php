<?php
include("db.php");

session_start();
$userprofile=$_SESSION['user'];
if($userprofile == true){

}else{
    header("location:\index.php");
}
$id=$_GET['Id'];

$sql="DELETE FROM `contact` WHERE Id='$id'";

$res=mysqli_query($conn,$sql);

header("location:index.php");
?>