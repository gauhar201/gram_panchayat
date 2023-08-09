<?php
$submit = 0;
$notsubmit = 0;
$conn = mysqli_connect("localhost", "root", "", "panchayat");


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mob = $_POST['mob'];
    $mail = $_POST['mail'];
    $comment = $_POST['comments'];
    $sql = "INSERT into `suggession` (Name, Mobile, Email, Comment) values('$name', '$mob', '$mail', '$comment')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $submit = 1;
    } else {
        $notsubmit = 1;
    }
}
?>
<html>

<head>
    <title>Gram Panchayat</title>
    <link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="heading">
        <div class="container-fluid text-center pt-2">
            <div class="row">
                <div class="col-3 ms-0 ">
                    <img src="images/logo.png" class="leftlogo  ">
                </div>

                <div class="col-6 mt-4 text-center">
                    <h5 class="text">ग्राम पंचायत राज पोखरैरा</h5>
                    <p>प्रखंड - बोखड़ा , जिला - सीतामढ़ी (बिहार)</p>
                </div>

                <div class="col-3">
                    <img src="images/download.png" class="rightlogo">
                </div>
            </div>
        </div>
    </div>


    <!-- navbar -->
    <section class="header">
        <!-- navigation-wrap" data-spy="affix" data-offset-top="197" for sticky navbar  -->
        <nav class="navbar navbar-expand-lg bg-success nav  navigation-wrap mb-0">
            <div class="container justify-content-center">
                <div class="row">
                    <a class="navbar-brand" href="#">
                        <!-- <img src="images/logo.png" alt=""> -->
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse flex-grow-0" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" style=" color: yellow ;" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">About-us</a>
                            </li>
                            <li class="nav-item">
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
                                <a class="nav-link" href="#contact">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#faq">मुखिया जी</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </section>


    <!-- slider -->
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/slider2.jpg" class=" w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/Scaling-up-Gram-Panchayat.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/slider4.gif" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <!-- counting section -->
    <section id="counter">
        <div class="countersection">
            <div class="container">
                <div class="row ms-5">
                    <div class="col-6 col-sm-3 mb-lg-o mb-md-0 mb-5">
                        <h2>
                            <span id="count1"></span><span>+</span>
                        </h2>
                        <p>Toal Voter</p>
                    </div>
                    <div class="col-6 col-sm-3 mb-lg-o mb-md-0 mb-5">
                        <h2>
                            <span id="count2"></span><span>+</span>
                        </h2>
                        <p>Male Voters</p>
                    </div>
                    <div class="col-6 col-sm-3 mb-lg-o mb-md-0 mb-5">
                        <h2>
                            <span id="count3"></span><span>+</span>
                        </h2>
                        <p>Female Voters</p>
                    </div>
                    <div class=" col-6 col-sm-3 mb-lg-o mb-md-0 mb-5">
                        <h2>
                            <span id="count4"></span><span></span>
                        </h2>
                        <p>Wards</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="about" class="about mb-5">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12 mt-5">
                    <h4 class="mt-5 text-warning">About us</h4>
                </div>
                <div class="col-sm-12 col-lg-7 pb-4" style="text-align:justify;">
                    <p><b>Pokhraira</b> is a village in Bokhra block of Sitamarhi District in Bihar state of India. It is surrounded by three main cities of Bihar, which are Muzaffarpur, Darbhanga and Sitamarhi. Pokhraira is 35 km distance from district main city Sitamarhi and 105 km distance from state capital Patna. Pokhraira is also known as Pokhraira Sharif in respect of Sufi saints.This village is a centre not only for education but also for years long culture and civilization. A small remote village of North Bihar produced numbers of scholars spread all across the country. This village is also known due to some famous Zamindars.This village is known due to active presence in the field of education . There are numbers of Government school, Private school and Religious school(Madrasa) present here. There is also a government girls school which were earlier known as Pardanashin Urdu Maktab </p>
                </div>
                <div class="col-sm-12 col-lg-5 pb-2">
                    <img src="images/aboutimg.jfif" alt="" srcset="">
                </div>
            </div>
        </div>
    </section>

    <section class="floting">
        <marquee behavior="smooth" direction="right" class="decoration text-center pt-5">
            <a href="https://serviceonline.bihar.gov.in/"><i class="fa-solid fa-link pb-3">जाति , निवासी , आय प्रमाण पत्र आवेदन करने के लिए यहाँ क्लिक करें </i></a>
            <br>
            <a href="https://land.bihar.gov.in/landbihar/Default.aspx"><i class="fa-solid fa-link pb-3">जमीन के लगान,दाखिल ख़ारिज, एल. पी. सी. के आवेदन के लिए यहां क्लिक करें</i></a>
            <br>
            <a href="https://land.bihar.gov.in/landbihar/Default.aspx"><i class="fa-solid fa-link">जमीन के लगान,दाखिल ख़ारिज, एल. पी. सी. के आवेदन के लिए यहां क्लिक करें</i></a>
        </marquee>
    </section>

    <section id="representative">
        <div class="container representative">
            <div class="row pt-4 ">
                <div class="col-sm-12 mt-5 mb-4">
                    <h3 class="text-center text-warning">पंचायत प्रतिनिधि </h3>
                </div>

                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="card team-card mb-4 text-center rounded-3">
                            <div class="team-img">
                                <img src="images/sarpanch.jfif" alt="" srcset="">
                            </div>
                            <div class="team-info pt-3 text-center">
                                <h5>अहमद हुसैन</h5>
                                <p>मुखिया</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-6 col-md-4">
                        <div class="card team-card mb-4 text-center rounded-3">
                            <div class="team-img">
                                <img src="images/sarpanch.jfif" class="rd">
                            </div>
                            <div class="team-info pt-3 text-center">
                                <h5>अमित</h5>
                                <p>सरपंच</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-6 col-md-4">
                        <div class="card team-card mb-4 text-center rounded-3">
                            <div class="team-img">
                                <img src="images/samiti1.jpg" alt="" srcset="">
                            </div>
                            <div class="team-info pt-3 text-center">
                                <h5>आज़म खान</h5>
                                <p>पंचायत समिति सदस्य</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="contact" id="contact">
        <div class="container mt-5 pb-3">
            <div class="row">
                <div class="col-sm-12 text-center mt-5 pt-4  text-warning">
                    <h3>Get in Touch</h3>
                </div>
                <div class="col-12 col-md-7 pb-3bgimage bg-transparent">

                    <h4 class="text-center text-SUCCESS mb-4 mt-3">ANY SUGGESTION</h4>
                    <div id="result"><?php
                                        if ($submit) {
                                            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Your query has been submitted succesfully</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';
                                        }
                                        ?>
                    </div>
                    <form action="" method="post" enctype="multipart/form-data" id="myform">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingtext" name="name" placeholder="Your Name">
                            <label for="floatingPassword">Enter Your Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="mob" placeholder=" your number">
                            <label for="floatingInput">Enter Your Mobile No</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="mail">
                            <label for="floatingInput">Enter Your Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Leave a comment here" name="comments" id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Comments</label>
                        </div>
                        <button type="submit" onclick="scrollwin()" style="position: fixed;" value="submit" name="submit" class="btn btn-success col-12" id="submit">Submit</button>
                    </form>
                </div>

                <div class="col-12 col-md-5 map-wrapper pt-3">
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7149.084374685968!2d85.60976029999999!3d26.373665649999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ec555da8b2bdab%3A0x56d3c2d7c63d0877!2sPokhraira%2C%20Bihar%20843326!5e0!3m2!1sen!2sin!4v1691206744166!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="fast" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    <section class="footer  bg-dark text-white py-4" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-7 text-center">
                    <p>&copy;2023 Pokhraira panchayat. All Right Reserved.</p>
                </div>
                <div class="col-md-5 text-md-end">
                    <ul class="social-network list-unstyled d-flex justify-content-center   p-0 ps-3">
                        <li class="custom-icon"><a href=""><i class="me-3 custom-icon fa-brands fa-facebook"></i></a></li>
                        <li class="custom-icon"><a href=""><i class="me-3 custom-icon fa-brands fa-twitter"></i></a></li>
                        <li class="custom-icon"><a href=""><i class="me-3 custom-icon fa-brands fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>




    <script>
        let navBar = document.querySelectorAll(".nav-link");
        let navCollapse = document.querySelector(".navbar-collapse.collapse");
        navBar.forEach(function(a) {
            a.addEventListener("click", function() {
                navCollapse.classList.remove("show");
            })
        })
    </script>


<script>
    function scrollwin(){
        window.scrollTo(0, 500)
    }
</script>




    <script src=https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js></script>
    <script src="javascript.js"></script>

    <script src="ajax.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>