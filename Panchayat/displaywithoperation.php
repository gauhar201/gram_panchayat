<?php
$conn = mysqli_connect("localhost", "root", "", "panchayat");
session_start();
$userprofile = $_SESSION['username'];
if ($userprofile == true) {
} else {
    header('location:login.php');
}
?>
<html>

<head>
    <title>Representative</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <!-- //FOR DATATABLE -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
</head>

<body>
    <!-- navbar -->
    <section class="header">
        <!-- navigation-wrap" data-spy="affix" data-offset-top="197" for sticky navbar  -->
        <nav class="navbar navbar-expand-lg bg-success nav  navigation-wrap mb-0">
            <div class="container justify-content-center">
                <a class="navbar-brand" href="#">
                    <!-- <img src="images/logo.png" alt=""> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse flex-grow-0" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" style=" color: yellow ;" aria-current="page" href="index.php">Home</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="login.php">Admin</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="enterleader.php">Add-Members</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="signup.php">Sign-Up</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Log-Out</a>
                        </li>
                        <!--<li class="nav-item">
                            <a class="nav-link" href="#testi">Gallary</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#blog">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#faq">मुखिया जी</a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <div class="container mt-4">
        <div class="container text-center text-success fs-3 mb-4">
            <h3>Members</h3>
        </div>
        <table class="table" id="myTable">
            <thead>
                <tr class="text-primary fs-4">
                    <th scope="col">Ward No.</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "select * from `wardmember` ";
                $result =  mysqli_query($conn, $sql);
                $Sno = 0;
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $Sno++;
                        $id = $row['Id'];
                        $image = $row['Image'];
                        $Name = $row['Name'];
                        $Desig = $row['Post'];
                        $Mobile = $row['Mobile'];
                        echo '<tr  class="text-success fs-5">
                            <th scope="row" >' . $Sno . '</th>
                            <td><img src="' . $image . '" height="100" width="100"/></td>
                            <td>' . $Name . '</td>
                            <td>' . $Desig . '</td>
                            <td>' . $Mobile . '</td>
                            <td>
                            <button class="btn btn-primary" ><a href="update.php?updateid=' . $id . '" class="text-light" >Update</a></button>
                            <button class="btn btn-danger" id="del"><a href="delete.php?deleteid=' . $id . '" class="text-light" onclick = "return checkdelete()" >Delete</a></button>
                            </td>
                            </tr>';
                    }
                }
                ?>
            </tbody>
        </table>

        <script>
            function checkdelete() {
                return confirm('are you sure you wanna delete?');
            }
        </script>

    </div>
    <script src=https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js></script>
</body>

</html>