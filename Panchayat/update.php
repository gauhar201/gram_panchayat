<?php
$conn = mysqli_connect("localhost", "root", "", "panchayat");

$id = $_GET['updateid'];
$sql = "select * from `wardmember` where Id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$image = $row['Image'];
$name = $row['Name'];
$post = $row['Post'];
$mobile = $row['Mobile'];


if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $post = $_POST['desig'];
  $mobile = $_POST['mob'];
  $filename = $_FILES['uploadfile']['name'];
  $tempname = $_FILES['uploadfile']['tmp_name'];
  $folder = 'image/' . $filename;
  echo $folder;
  move_uploaded_file($tempname, $folder);
  $sql = "UPDATE `wardmember` set Id='$id', Image='$folder', Name='$name', Post='$post', Mobile='$mobile' where Id='$id'";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    header('location:displaywithoperation.php');
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>

<body>
  <div class="container mt-4">
    <div class="row">
      <div class="col-sm-12 text-center text-success">
        <h3>Update Record</h3>
      </div>
    </div>
    <form action="#" method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="age" class="form-label">Upload Image</label>
        <input type="file" class="form-control" name="uploadfile" id="add" value="<?php echo $tempname ?>" required>
      </div>
      <div class="mb-3">
        <label for="text" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="text" value="<?php echo $name ?>" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Post</label>
        <input type="text" class="form-control" name="desig" value="<?php echo $post ?>">
        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
      </div>
      <div class="mb-3">
        <label for="age" class="form-label">Mobile</label>
        <input type="text" class="form-control" name="mob" id="add" value="<?php echo $mobile ?>" required>
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <button type="submit" class="btn btn-primary" name="submit" value="submit">Update</button>
       <a class="btn btn-danger"  href="displaywithoperation.php"> Cancel</a>
    </form>
  </div>

  <div class="container-fluid bg-success mt-5 text-center">
    <div class="row">
      <div class="col-sm-12">
        <p class="p-2 text-light">You are updating in member details</p>
      </div>
    </div>
  </div>
</body>

</html>