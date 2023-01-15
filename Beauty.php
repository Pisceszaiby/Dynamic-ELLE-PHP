
<?php
include_once(".\config\config.php");

//Queries for fetching data for each section
$Beauty = mysqli_query($mysqli, "SELECT * FROM post WHERE category='BEAUTY';");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELLE BEAUTY</title>
    <link rel="icon" type="image/x-icon" href="title.png">
    <!-- BOOTSTRAP LINKS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/c604ef251a.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- NAVIGATION BAR -->
    <div class="container-fluid" >
        <nav class="navbar navbar-expand-lg navbar-light" style="padding-bottom: 0%;">
            <button class="btn " type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
                <i class="fa-solid fa-ellipsis"></i>
            </button>
            <a class="navbar-brand didot" href="#">ELLE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link neue" href="fashion.php">Fashion</a>
                    </li>
                    <li class="nav-item">
                        
                        <b> <a class="nav-link neue" href="Beauty.php">Beauty</a></b>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link neue" href="Culture.php">Culture</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link neue" href="horoscope.php">Horoscope</a>
                    </li>
                </ul>
            </div>
        </nav>

    </div>

    <!--
        HEADING
    -->
    <section>

        <!-- Title -->

        <!-- OFF CANVAS -->
        <div class="main-section1" style="height:0px; width: 0%; padding: 0;">
            <div class="offcanvas  offcanvas-start " data-bs-backdrop="static" tabindex="-1" id="staticBackdrop"
                aria-labelledby="staticBackdropLabel">
                <div class="neue offcanvas-header">
                    <form style="width:100%" class="d-flex neue " role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div style="width:100%" class=" neue offcanvas-body">
                    <a class="neue" href="#">
                        State of Black Beauty
                    </a>
                    <br>
                    <a class="neue" href="#">
                        Subscribe
                    </a>
                    <br>
                    <a class="neue" data-bs-toggle="collapse" href="#fashion" aria-expanded="false"
                        aria-controls="collapseExample">
                        FASHION <i class="fa-solid fa-caret-down"></i>
                    </a>
                    <div class=" neue collapse" id="fashion">
                        <a href="#">Trends
                        </a>
                        <br>
                        <a href="#"> Celebrity Style
                        </a>
                        <br>
                        <a href="#"> Designers</a>
                        <br>
                        <a href="#"> Street Style</a>
                        <br>
                        <a href="#"> Runway</a>
                        <br>
                        <a href="#"> Shopping</a>
                        <br>
                        <a href="#"> Accessories</a>
                        <br>
                        <a href="#"> Personal Style</a>
                        <br>
                        <a href="#"> Fashion Week</a>
                        <br>
                        <a href="#"> Spring Fashion</a>
                        <br>
                        <a href="#"> Summer Fashion</a>
                        <br>
                        <a href="#"> Fall Fashion</a>
                        <br>
                        <a href="#"> Winter Fashion</a>
                        <br>
                    </div>
                    <br>
                    <a class="neue" data-bs-toggle="collapse" href="#beauty" aria-expanded="false"
                        aria-controls="collapseExample">
                        BEAUTY <i class="fa-solid fa-caret-down"></i>
                    </a>
                    <div class="collapse neue" id="beauty">
                        <a href="#"> Hair
                        </a>
                        <br>
                        <a href="#"> Makeup & Skincare
                        </a>
                        <br>
                        <a href="#"> Health & Fitness</a>
                        <br>
                    </div>
                    <br>
                    <a data-bs-toggle="collapse" href="#culture" aria-expanded="false" aria-controls="collapseExample">
                        CULTURE <i class="fa-solid fa-caret-down"></i>
                    </a>
                    <div class="neue collapse" id="culture">
                        <a href="#">Celebrity
                        </a>
                        <br>
                        <a href="#">Movies & TV
                        </a>
                        <br>
                        <a href="#"> Music</a>
                        <br>
                        <a href="#">Books</a>
                        <br>
                        <a href="#"> Travel & Food</a>
                        <br>
                        <a href="#"> Tech</a>
                        <br>
                        <a href="#">Art & Design</a>
                        <br>
                        <a href="#"> Power & Politics</a>
                        <br>
                    </div>
                    <br>
                    <a href="#">
                        Features
                    </a>
                    <br>
                    <a data-bs-toggle="collapse" href="#love" aria-expanded="false" aria-controls="collapseExample">
                        LIFE AND LOVE <i class="fa-solid fa-caret-down"></i>
                    </a>
                    <div class="neue collapse" id="love">
                        <a href="#">Relationships</a>
                        <br>
                        <a href="#">Opinions</a>
                        <br>
                    </div>
                    <br>
                    <a data-bs-toggle="collapse" href="#horoscope" aria-expanded="false"
                        aria-controls="collapseExample">
                        Horoscopes <i class="fa-solid fa-caret-down"></i>
                    </a>
                    <div class="neue collapse" id="horoscope">
                        <a href="#">Daily Horoscopes</a>
                        <br>
                        <a href="#">Weekly Horoscopes</a>
                        <br>
                        <a href="#">Monthly Horoscopes</a>
                        <br>
                        <a href="#">Astrological Horoscopes</a>
                        <br>
                        <a href="#">Love Matches</a>
                    </div>
                    <br>
                    <a href="#">
                        In the Magazine
                    </a>
                    <br>
                    <a href="#">
                        Newsletter
                    </a>
                    <br>

                    <a href="#">
                        ELLE Extra
                    </a>
                    <br>
                    <a data-bs-toggle="collapse" href="#follow" aria-expanded="false" aria-controls="collapseExample">
                        FOLLOW <i class="fa-solid fa-caret-down"></i>
                    </a>


                    <div class="collapse" id="follow">
                        <a href="#">pinterest</a>
                        <br>
                        <a href="#">tumblr</a>
                        <br>
                        <a href="#">google+</a>
                        <br>
                        <a href="#">instagram</a>
                        <br>
                        <a href="#">youtube</a>

                    </div>

                    <br>

                    <a data-bs-toggle="collapse" href="#us" aria-expanded="false" aria-controls="collapseExample">
                        UNITED STATES <i class="fa-solid fa-caret-down"></i>
                    </a>


                    <div class="collapse" id="us">
                        <a href="#">US</a>
                        <br>
                        <a href="#">UK</a>
                        <br>
                        <a href="#">España</a>
                        <br>
                        <a href="#">Italia</a>
                        <br>
                        <a href="#"> Nederland</a>
                        <br>
                        <a href="#"> 台灣</a>
                        <br>
                        <a href="#"> Japan</a>

                    </div>
                </div>





                <button class="btn1 ">DO NOT SELL MY PERSONAL INFORMATION</button>
                <a href="#">PRIVACY NOTICE</a>
                <br>
                <A href="#">TERMS OF USE</A>

            </div>



        </div>
        <hr>

        </div>

    </section>





    <!-- BEAUTY SECTION -->
    <section>
        <div class="container-fluid">
            <div style="position: relative;text-align: center;color: white;">
                <img style="margin:0px;padding:0%; width: 100%;"
                    src="https://hips.hearstapps.com/hmg-prod/images/haus-labs-by-lady-gaga-optic-intensity-eco-gel-eyeliner-pencil-1658845184.jpg?crop=1.00xw:0.525xh;0,0.0645xh&amp;resize=1024:*"
                    alt="">
                <h1 style="position: absolute;top: 35%;left: 10%;">
                    BEAUTY
                </h1>
                <h3 class="sub-heading" style="position: absolute;top: 50%;left: 10%;">Why not Embrace it?</h3>
            </div>
            <hr>
            <div class="row main">
                <h1>
                    HAIR STYLES AND HAIRCUTS
                </h1>

            </div>
            <hr>
                <div class="row">
                    <?php
                    $count = 0;
                    while ($res = mysqli_fetch_array($Beauty)) {
                        $heading = $res['heading'];
                        $picPath = $res['picPath'];
                        $url = $res['url'];
                        if ($count < 4) {
                            echo " 
                                <div class='col-md-3 col-lg-3 col-sm-12'>
                                    <a href='$url'>
                                        <img class='fashion'
                                            src='$picPath'
                                            alt=''>
                                        <h2>$heading</h2>

                                    </a>
                                </div>" ;
                                $count++; }
                        } 
                    ?>
                </div>
            <hr>
        </div>
    </section>



    <!-- FOOTER -->
    <footer class="container-fluid py-5">

        <div class="row">
            <div class="didot">
                <h2 class="footer_title">ELLE</h2>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-12  footer_ul neue " style="text-align: left; ">
                <span>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>

                </span>
                <span>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>

                </span>
                <span>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>

                </span>
                <span>
                    <a href="#"> <i class="fa-brands fa-instagram"></i></a>


                </span>
                <span>
                    <a href="#"><i class="fa-brands fa-pinterest"></i></a>
                </span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-6 by_">
                <ul class="nav flex-column footer_ul">
                    <li class="neue by_ mb-2"><a href="#" class="
                         p-0 ">NEWSLETTER</a></li>
                    <li class="neue by_ mb-2"><a href="#" class="
                         p-0 ">SITE MAP</a></li>
                    <li class="neue by_ mb-2"><a href="#" class="
                         p-0 ">SUBSCRIBE</a></li>
                    <li class="neue by_ mb-2"><a href="#" class="
                         p-0 ">GIVEAWAYS</a></li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-6 by_">
                <ul class="nav flex-column footer_ul">
                    <li class="neue by_  mb-2"><a href="#" class="
                         p-0 ">CONTACT US</a></li>
                    <li class="neue by_ mb-2"><a href="#" class="
                         p-0 ">COMMUNITY GUIDELINES</a></li>
                    <li class="neue by_  mb-2"><a href="#" class="
                         p-0 ">GIVE A GIFT</a></li>
                    <li class="neue by_ mb-2"><a href="#" class="
                         p-0 ">MEDIA KIT</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <hr>
            <p class="neue by_ footer_p">©HEARST MAGAZINE MEDIA, INC. ALL RIGHTS
                RESERVED.
            </p>
            <br>
        </div>








        <!-- FOOTER -->
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
        crossorigin="anonymous"></script>
</body>

</html>