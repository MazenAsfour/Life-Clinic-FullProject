<?php
$conn=mysqli_connect('localhost','root','','lifeclinic')
include 'C:\xampp\htdocs\project\assignvalues.php'; 


if(isset($_GET['infowebsite'])){
    $logo=$_GET['logo'];
    $lifeclinic=$GET['name'];
    $process="UPDATE details SET nameclinic='$lifeclinic',
    logo='$logo'";
    $n=mysqli_query($conn,$process);
    if(!$n){
        echo mysqli_error(!$conn);
    }    
    header('REFRESH:0;url=adminsite.php');
}

?>