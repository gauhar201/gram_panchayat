<?php
$conn = mysqli_connect("localhost", "root", "", "panchayat");
// if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
   
    $sql="delete from `wardmember` where Id=$id";
    $result=mysqli_query($conn , $sql);
    if($result){
        // header('location:display.php');
        echo "<script> alert('Record Deleted')</script>";
        header('location:displaywithoperation.php');
    }
    else{
        die(mysqli_error($conn));
    }
// }
?>