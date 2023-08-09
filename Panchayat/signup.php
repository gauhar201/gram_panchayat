<?php
$success=0;
$user=0;
$conn=mysqli_connect("localhost", "root", "", "panchayat");
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $mail=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="SELECT*from  `signup` where Username='$username'";
    $result=mysqli_query($conn, $sql);
    $total=mysqli_num_rows($result);
    if($total>0){
        $user=1;
    }else{
    $sql="insert into `signup` (Name, Email, Username, Password) values('$name', '$mail', '$username', '$password')";
    $result=mysqli_query($conn, $sql);
    if($result){
       $success=1;
    }
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
if($user){
    echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>user already exists!</strong>Please enter another username.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}

if($success){
    echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>You have signup succesfully</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
?>

    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h3>Sign up</h3>
            </div>
            <div class="col-sm-6">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="text" class="form-label">Enter Your Name</label>
                        <input type="text" class="form-control" name="name" id="text" required autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="mail" class="form-label">Enter Your Email</label>
                        <input type="mail" class="form-control" name="email" id="add" required>
                    </div>
                    <div class="mb-3">
                        <label for="text" class="form-label">Enter User Name</label>
                        <input type="text" class="form-control" name="username" id="text" required>
                    </div>
                    <div class="mb-3">
                        <label for="pass" class="form-label">Enter Password</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                    <button type="submit" class="btn btn-primary col-12" name="submit" value="submit">Submit</button>
                </form>
            </div>
            <div class="col-sm-6">
                <img src="images/signup.jpg" class="img-fluid " alt="" srcset="">
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-sm-12 text-center">
                <p class="fs-3 mt-3 mb-0">Already Have Sign up?</p> <a href="login.php"  class="fs-3 mb-0 mt-0">Login</a>
            </div>
        </div> -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>