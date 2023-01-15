<?php
include_once(".\config\config.php");

//Queries for fetching data for each section
$main = mysqli_query($mysqli, "SELECT * FROM post WHERE category='MAIN';");
$fashion = mysqli_query($mysqli, "SELECT * FROM post WHERE category='FASHION';");
$shop = mysqli_query($mysqli, "SELECT heading,picPath,url FROM post WHERE category='SHOP';");
$beauty = mysqli_query($mysqli, "SELECT heading,picPath,url,author FROM post WHERE category='BEAUTY';");
$culture = mysqli_query($mysqli, "SELECT heading,picPath,url FROM post WHERE category='CULTURE';");
$trending = mysqli_query($mysqli, "SELECT heading,picPath,url FROM post WHERE category='TRENDING';");
$news = mysqli_query($mysqli, "SELECT * FROM post WHERE category='NEWS';");
$song = mysqli_query($mysqli, "SELECT heading,url,picPath FROM post WHERE category='SONG';");
$style = mysqli_query($mysqli, "SELECT heading,picPath,url,author FROM post WHERE category='STYLE';");
$office = mysqli_query($mysqli, "SELECT heading,picPath,url,author FROM post WHERE category='OFFICE';");
$clothes = mysqli_query($mysqli, "SELECT heading,picPath,url,author FROM post WHERE category='CLOTHES';");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELLE BOOTSTRAP</title>
    <link rel="icon" type="image/x-icon" href="title.png">
    <!-- BOOTSTRAP LINKS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/c604ef251a.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- NAVIGATION BAR -->
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light">
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
                        <a class="nav-link neue" href="Beauty.php">Beauty</a>
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


    <!-- MAIN -->
    <section>
        <div class="main container-fluid">
            <!-- Title -->
            <div class="row ">
                <div class="col-lg-6 main-section1">
                    <h5 class="neue">WIH</h5>
                    <!-- OFF CANVAS -->
                    <div class="offcanvas  offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
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
                            <a class="neue" data-bs-toggle="collapse" href="#fashion" aria-expanded="false" aria-controls="collapseExample">
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
                            <a class="neue" data-bs-toggle="collapse" href="#beauty" aria-expanded="false" aria-controls="collapseExample">
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
                            <a data-bs-toggle="collapse" href="#horoscope" aria-expanded="false" aria-controls="collapseExample">
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





                            <button class="btn1 ">DO NOT SELL MY PERSONAL INFORMATION</button>
                            <a href="#">PRIVACY NOTICE</a>
                            <br>
                            <A href="#">TERMS OF USE</A>

                        </div>
                    </div>

                    <!-- MAIN SECTION -->
                    <?php
                    while ($res = mysqli_fetch_array($main)) {
                        $heading = $res['heading'];
                        $subheading = $res['subheading'];
                        $author = $res['author'];
                        $picPath = $res['picPath'];
                        $url = $res['url'];
                        echo "
<a href='$url'>
<h2>$heading</h2>
<p>
   $subheading</p>
<p class='neue'>
    BY $author
</p>
</a>


</div>

<div class='col-lg-6 main-section2 '>
<a href='$url'>
<img style='width: 80%;'
    src='$picPath'
    alt=''>
</a>
</div>
</div>
<hr>
</div>";
                    }
                    ?>







    </section>

    <!-- FASHION SECTION -->
    <?php
    while ($res = mysqli_fetch_array($fashion)) {
        $heading = $res['heading'];
        $subheading = $res['subheading'];
        $author = $res['author'];
        $picPath = $res['picPath'];
        $url = $res['url'];
        echo "
    <section>
    <div class='container-fluid'>
        <a href='fashion.php'>
            <h1>
                FASHION
            </h1>
        </a>
        <h3 class='sub-heading'>What's New</h3>
        <hr>
        <div class='row main'>
            <a href='$url'>
                <img class='fashion'
                    src='$picPath'
                    alt=''>
                <h2>$heading</h2>
                <h5>$subheading</h5>
                <p class='neue by_ by_padding'>BY $author</p>
            </a>
        </div>
        <hr>
    </div>
</section>";
    }
    ?>


    <!-- SHOP ‘TIL YOU DROP -->
    <section>
        <div class="container-fluid">
            <a href="https://www.elle.com/fashion/shopping/">
                <h1>
                    SHOP ‘TIL YOU DROP
                </h1>
            </a>
            <hr>
            <div class="row main">
                <?php
                $count = 0;
                while ($res = mysqli_fetch_array($shop)) {
                    $heading = $res['heading'];
                    $picPath = $res['picPath'];
                    $url = $res['url'];

                    if ($count < 4) {
                        echo "  <a class='shop col-lg-3 col-md-3 col-sm-6'
                    href='$url'><img
                        src='$picPath'
                        alt=''>
                    <p class='neue'>$heading</p>
                </a>";
                        $count = $count + 1;
                    }
                }
                ?>

                <hr>
            </div>
    </section>






    <!-- BEAUTY FOR LARGE SCREEN -->
    <section class="d-none d-lg-block">
        <div class=" container-fluid">
            <a href="Beauty.php">
                <h1>
                    BEAUTY
                </h1>
            </a>
            <h3 class="sub-heading">
                Fresh Finds
            </h3>
            <hr>
            <br>
            <div class="row ">
                <div class="col-lg-7 col-md-12">
                    <?php
                    while ($res = mysqli_fetch_array($beauty)) {
                        $heading = $res['heading'];
                        $author = $res['author'];
                        $picPath = $res['picPath'];
                        $url = $res['url'];
                        echo "<a class='beauty'
                        href='$url'><img
                            src='$picPath'
                            alt=''>
                        <h3>$heading
                        </h3>
                        <p class='neue by_'>BY $author</p>
                    </a>";
                        break;
                    }
                    ?>

                </div>

                <div class="col-lg-5 col-md-12">
                    <?php
                    while ($res = mysqli_fetch_array($beauty)) {
                        $heading = $res['heading'];
                        $author = $res['author'];
                        $picPath = $res['picPath'];
                        $url = $res['url'];
                        $count = 0;
                        if ($count < 4) {
                            echo " <div class='row'>
               <div class='col-lg-3 col-md-3 '>

                   <a class='beauty-list'
                       href='$url'  >          <img src='$picPath'
                           alt=''></a>
               </div>
               <div class='col-lg-9 col-md-3 '>

                   <a class='beauty-list'
                       href='$url'>

                       <h5>$heading</h5>
                       <p class='by_ neue'>BY $author</p>
                   </a>
               </div>
           </div>";
                            $count++;
                        }
                    }
                    ?>


                </div>
            </div>

        </div>

        <!-- 
BEAUTY FOR MEDIUM SCREEN -->
    </section>
    <section class="d-none d-md-block d-lg-none">
        <div class="container-fluid">
            <a href="Beauty.php">
                <h1>
                    BEAUTY
                </h1>
            </a>
            <h3 class="sub-heading">
                Fresh Finds
            </h3>
            <hr>
            <br>

            <div class="row ">
                <div class="col-md-12 col-sm-12">
                    <?php
                    $beauty = mysqli_query($mysqli, "SELECT heading,picPath,url,author FROM post WHERE category='BEAUTY';");
                    while ($res = mysqli_fetch_array($beauty)) {
                        $heading = $res['heading'];
                        $author = $res['author'];
                        $picPath = $res['picPath'];
                        $url = $res['url'];
                        echo "  <a class='beauty'
                        href='$url'><img
                            src='$picPath'
                            alt=''>
                        <h3>$heading
                        </h3>
                        <p class='neue by_'>BY $author</p>
                    </a>";
                        break;
                    }
                    ?>


                </div>
            </div>
            <div class="row">

                <?php
                while ($res = mysqli_fetch_array($beauty)) {
                    $heading = $res['heading'];
                    $author = $res['author'];
                    $picPath = $res['picPath'];
                    $url = $res['url'];
                    $count = 0;
                    if ($count < 4) {
                        echo "        <div class='col-md-3 col-sm-3'>


               <a class='beauty-list'
                   href='$url'><img
                       src='$picPath'
                       alt=''>
                   <h5>$heading</h5>BY $author</p>
               </a>
           </div>";
                        $count++;
                    }
                }
                ?>
            </div>
        </div>


    </section>
    <!-- BEAUTY FOR SMALL DEVICES -->
    <section class="	d-none d-sm-block d-md-none">
        <div class=" container-fluid">
            <a href="Beauty.php">
                <h1>
                    BEAUTY
                </h1>
            </a>
            <h3 class="sub-heading">
                Fresh Finds
            </h3>
            <hr>
            <br>

            <div class="row ">
                <?php
                $beauty = mysqli_query($mysqli, "SELECT heading,picPath,url,author FROM post WHERE category='BEAUTY';");
                while ($res = mysqli_fetch_array($beauty)) {
                    $heading = $res['heading'];
                    $author = $res['author'];
                    $picPath = $res['picPath'];
                    $url = $res['url'];
                    echo "    <div class='col-sm-12'>

               <a class='beauty'
                   href='$url'><img
                       src='$picPath'
                       alt=''>
                   <h3>$heading
                   </h3>
                   <p class='neue by_'>BY $author</p>
               </a>
           </div>";
                    break;
                }
                ?>
            </div>
            <div class="row">
                <?php
                while ($res = mysqli_fetch_array($beauty)) {
                    $heading = $res['heading'];
                    $author = $res['author'];
                    $picPath = $res['picPath'];
                    $url = $res['url'];
                    $count = 0;
                    if ($count < 4) {
                        echo "
               <div class='col-sm-4'>

               <a class='beauty-list'
                   href='$url'><img
                       src='$picPath'
                       alt=''></a>
           </div>
           <div class='col-sm-8 '>

               <a class='beauty-list'
                   href='$url'>

                   <h5>$heading</h5>
                   <p class='by_ neue'>BY $author</p>
               </a>
           </div>
           <hr>";
                        $count++;
                    }
                }
                ?>

            </div>
        </div>
        </div>

        </div>

    </section>


    <!-- CULTURE -->
    <section>
        <div class="container-fluid">
            <hr>
            <a href="Culture.php">
                <h1>
                    CULTURE
                </h1>
            </a>
            <h3 class="sub-heading">Books, Movies, TV & More</h3>
            <hr>
            <div class="row main ">
                <?php
                while ($res = mysqli_fetch_array($culture)) {
                    $heading = $res['heading'];
                    $picPath = $res['picPath'];
                    $url = $res['url'];
                    echo "
                <a href='$url'>
                    <img class='fashion'
                        src='$picPath'
                        alt=''>
                    <h2>'$heading'</h2>

                </a>";
                    break;
                }
                ?>
            </div>
            <div class="row main">
                <?php
                $count = 0;
                while ($res = mysqli_fetch_array($culture)) {
                    $heading = $res['heading'];
                    $picPath = $res['picPath'];
                    $url = $res['url'];
                    if ($count < 4) {
                        echo "

    <a class='shop col-lg-3 col-md-3 col-sm-6'
    href='$url'><img
        src='$picPath'
        alt=''>
    <p class='neue'>$heading</p>
</a>
";
                        $count = $count + 1;
                    }
                }
                ?>




            </div>
            <hr>
        </div>
    </section>

    <!-- NEWS -->
    <section>
        <div class="container-fluid">


            <a href="https://www.elle.com/culture/career-politics/">
                <h1>
                    NEWS & POLITICS
                </h1>
            </a>

            <h3 class="sub-heading">
                Power & Influence
            </h3>
            <hr>




            <?php
            while ($res = mysqli_fetch_array($news)) {
                $heading = $res['heading'];
                $subheading = $res['subheading'];
                $author = $res['author'];
                $picPath = $res['picPath'];
                $url = $res['url'];
                echo "<div class='row'>
                        <div class='col-lg-6 col-md-6 col-sm-12 news main-section1'>
                                    <a href='$url'>
                                <h2>$heading</h2>
        
                                <p class='by_ neue' style='text-align: center;'>
                                    BY $author
                                </p>
                            </a>
        
        
                        </div>
        
                        <div class='col-lg-6 col-md-6 col-sm-12 news '>
                            <a href='$url'>
        
                                <img src='$picPath' alt=''>
                            </a>
                        </div>
                    </div>";
            }
            ?>




            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 ">
                    <a href="https://www.elle.com/style-points/">
                        <h3 class=" news-col">
                            STYLE POINTS
                        </h3>
                    </a>



                    <?php
                    $count = 0;
                    while ($res = mysqli_fetch_array($style)) {
                        $heading = $res['heading'];
                        $picPath = $res['picPath'];
                        $url = $res['url'];
                        $author = $res['author'];
                        if ($count < 3) {
                            echo " 
                        <div class='row'>

                        <div class='col-lg-6 col-md-6 col-sm-6'>

                            <a class='img-news' 
                            href='$url'><img src='$picPath' alt=''></a>
                        </div>
                        <div class='news-card col-lg-6 col-md-6 col-sm-6'>

                            <a href='$url'>
                                <p>$heading</p>
                                <p class='by_ neue'>


                                    BY $author</p>

                            </a>
                        </div>


                    </div>
                    <br>
                        
                        
                        ";
                            $count = $count + 1;
                        }
                    }
                    ?>









                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <a href="https://www.elle.com/office-hours/">
                        <h3 class=" news-col">
                            OFFICE HOURS
                        </h3>
                    </a>
                    <?php
                    $count = 0;
                    while ($res = mysqli_fetch_array($office)) {
                        $heading = $res['heading'];
                        $picPath = $res['picPath'];
                        $url = $res['url'];
                        $author = $res['author'];
                        if ($count < 3) {
                            echo " 
                        <div class='row'>

                        <div class='col-lg-6 col-md-6 col-sm-6'>

                            <a class='img-news' 
                            href='$url'><img src='$picPath' alt=''></a>
                        </div>
                        <div class='news-card col-lg-6 col-md-6 col-sm-6'>

                            <a href='$url'>
                                <p>$heading</p>
                                <p class='by_ neue'>


                                    BY $author</p>

                            </a>
                        </div>


                    </div>
                    <br>
                        
                        
                        ";
                            $count = $count + 1;
                        }
                    }
                    ?>



                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <a href="https://www.elle.com/clothes-of-our-lives/">
                        <h3 class=" news-col">
                            CLOTHES OF OUR LIVES
                        </h3>
                    </a>
                    <?php
                    $count = 0;
                    while ($res = mysqli_fetch_array($clothes)) {
                        $heading = $res['heading'];
                        $picPath = $res['picPath'];
                        $url = $res['url'];
                        $author = $res['author'];
                        if ($count < 3) {
                            echo " 
                        <div class='row'>

                        <div class='col-lg-6 col-md-6 col-sm-6'>

                            <a class='img-news' 
                            href='$url'><img src='$picPath' alt=''></a>
                        </div>
                        <div class='news-card col-lg-6 col-md-6 col-sm-6'>

                            <a href='$url'>
                                <p>$heading</p>
                                <p class='by_ neue'>


                                    BY $author</p>

                            </a>
                        </div>


                    </div>
                    <br>
                        
                        
                        ";
                            $count = $count + 1;
                        }
                    }
                    ?>



                </div>

            </div>
        </div>


    </section>

    <!-- TRENDING -->
    <section>
        <div class="container-fluid">
            <hr>

            <a href="
            #">


                <!-- TRENDING -->

                <h1>
                    Now Trending
                </h1>
            </a>
            <hr>
            <br>

            <div class="row main">



                <?php
                while ($res = mysqli_fetch_array($trending)) {
                    $heading = $res['heading'];
                    $picPath = $res['picPath'];
                    $url = $res['url'];
                    $count = 0;
                    if ($count < 4) {
                        echo "

                <a class='shop col-lg-3 col-md-3 col-sm-6 	'
                    href='$url'><img
                        src='$picPath'
                        alt=''>
                    <p class='neue'>$heading</p>
                </a>";
                        $count++;
                    }
                } ?>


            </div>
            <div class="row main">



                <?php
                while ($res = mysqli_fetch_array($trending)) {
                    $heading = $res['heading'];
                    $picPath = $res['picPath'];
                    $url = $res['url'];
                    $count = 0;
                    if ($count < 4) {
                        echo "

    <a class='shop col-lg-3 col-md-3 col-sm-6 	'
        href='$url'><img
            src='$picPath'
            alt=''>
        <p class='neue'>$heading</p>
    </a>";
                        $count++;
                    }
                } ?>


            </div>



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

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>

</html>