<?php
session_start();
$login=1;
$invalid=0;
if(isset($_POST['submit'])){
$conn=mysqli_connect("localhost", "root", "", "panchayat");
$username=$_POST['username'];
$password=$_POST['password'];
$sql="SELECT * from `signup` where Username='$username' && Password='$password'";
$result=mysqli_query($conn, $sql);
$total=mysqli_fetch_assoc($result);
if($total>0){
    $login=1;
    $_SESSION['username']=$username;
    header('location:displaywithoperation.php');
}else{
     $invalid=1;
}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">

</head>
<body>
<?php
if($invalid){
    echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>user or password dont match</strong> Try Again.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
?>
    
    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h3>Login Here</h3>
            </div>
            <div class="col-sm-6">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="text" class="form-label">Enter User Name</label>
                        <input type="text" class="form-control" name="username" id="text" required>
                    </div>
                    <div class="mb-3">
                        <label for="pass" class="form-label">Enter Password</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                    <button type="submit" class="btn btn-success col-12" name="submit" value="submit">Submit</button>
                </form>
            </div>
            <div class="col-sm-6">
                <img src="images/signup.jpg" class="img-fluid " alt="" srcset="">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <p class="fs-3 mt-3 mb-0">Have you not Signup?</p> <a href="signup.php"  class="fs-3 mb-0 mt-0">Sign up</a>
            </div>
        </div>
    </div>



    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

</body>
</html>