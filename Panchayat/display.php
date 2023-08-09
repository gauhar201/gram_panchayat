<?php
$conn=mysqli_connect("localhost", "root", "", "panchayat")
?>
<html>
    <head>
        <title>Representative</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">

        <!-- //FOR DATATABLE -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css"> 
    </head>
    <body >
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
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Admin Login</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#service">Download</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#representative">Representatives</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="display.php">Members</a>
                        </li>
                        <li class="nav-item">
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
                <tr  class="text-primary fs-4">
                    <th scope="col">Ward No.</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Mobile</th>
                </tr>
              </thead>
              <tbody>
                   <?php
                    $sql="select * from `wardmember` ";
                    $result=  mysqli_query($conn, $sql);
                    $Sno=0;
                    if ($result){
                        while($row=mysqli_fetch_assoc($result)){
                            $Sno++;
                            $id=$row['Id'];
                            $image=$row['Image'];
                            $Name=$row['Name'];
                            $Desig=$row['Post'];
                            $Mobile=$row['Mobile'];
                            echo '<tr  class="text-success fs-5">
                            <th scope="row" >'.$Sno.'</th>
                            <td><img src="'.$image.'" height="100" width="100"/></td>
                            <td>'.$Name.'</td>
                            <td>'.$Desig.'</td>
                            <td>'.$Mobile.'</td>
                            </tr>';
                        }
                    }
                    ?>
              </tbody>
            </table>
        </div>

        <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
         -->
        <script src=https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js></script>
   
    </body>
</html>