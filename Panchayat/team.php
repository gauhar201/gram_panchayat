<?php
$conn = mysqli_connect("localhost", "root", "", "panchayat")
?>

<html>

<head>
  <title>Upload Representative</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <form action="" method="post" enctype="multipart/form-data">

      <div class="mb-3">
        <label for="age" class="form-label">Upload Image</label>
        <input type="file" class="form-control" name="uploadfile" id="add" required>
      </div>
      <div class="mb-3">
        <label for="text" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="text" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Post</label>
        <input type="text" class="form-control" name="desig">
        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
      </div>
      <div class="mb-3">
        <label for="age" class="form-label">Mobile</label>
        <input type="text" class="form-control" name="mob" id="add" required>
      </div>
      <button type="submit" class="btn btn-primary " name="submit" value="submit">Submit</button>
    </form>
  </div>
</body>

</html>

<?php
if (isset($_POST['submit'])) {

  $name = $_POST['name'];
  $desig = $_POST['desig'];
  $mobile = $_POST['mob'];
  $image = $_FILES['uploadfile']['name'];
  $tempname = $_FILES["uploadfile"]["tmp_name"];
  // echo $_FILES["uploadfile"];
  // print_r($_FILES['uploadfile']);
  $folder = "image/". $image;
  // echo $folder;
  move_uploaded_file($tempname, $folder);
  echo "<img src='$folder' height='100' width='100'/>";

  if ($name!= "" && $folder!= "") {
    $query = "INSERt INTO `representative` (Image, Name, Designation, Mobile) values('$folder',  '$name', '$desig', '$mobile')";
    $result = mysqli_query($conn, $query);
    if ($result) {
      echo "record submitted";
    }
  }

  else{
    echo "all record required";
  }
}
?>
