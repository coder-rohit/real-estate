<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <!-- fthgh -->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous" />

    <!-- Special Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <style>
      .links-nav:nth-child(2){
        background-color: red;
      }
    </style>
</head>

<body style="background-image: url(images/aboutbg.jpg); background-repeat: no-repeat;
    background-attachment: fixed; background-size: cover;">
    <?php
    include "./components/topnav.php";
    include "./components/slider.php";
    include "./components/mainnav.php";

    echo $topnav;
    echo $slider;
    echo $mainnav;
    ?>

    <div class="container mt-5 pb-5">
        <div class="row">
            <div class="col-md-7">
                <h2>Our mission is to redefine real estate in the customer's favor.</h2>
                <p class="mt-5">Urban Home got its start inventing map-based search.</p>
                <p>Everyone told us the easy money was in running ads for traditional brokers, but we couldn’t stop thinking about how different real estate would be if it were designed from the ground up, using technology and totally different values, to put customers first.</p>
                <p>So we joined forces with agents who wanted to be customer advocates, not salesmen.</p>
                <p>We deepened our technology beyond the initial search to make the home tour, the listing debut, the escrow process, the whole process, faster, easier and worry-free.</p>
                <p>And we gave customers more value, not just by saving each thousands in fees, but by investing in every home we sell, by measuring our performance and improving constantly.</p>
                <p>This is how real estate would be if it were designed just for you, because, well, it was.</p>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4">
                <div class="moreabout">
                    <h2>More about Urban Home</h2>
                    <div class="underline_head" style="margin: 9px 0; width: 58px;"></div>
                    <ul>
                        <li><a class="mt-5" href="">Company Timeline</a></li>
                        <li><a href="">FAQ</a></li>
                        <li><a href="">Management Team</a></li>
                    </ul>
                </div>
                <div class="moreaboutContact mt-5">
                    <h2>Contact</h2>
                    <div class="underline_head" style="margin: 9px 0; width: 25px;"></div>
                    <p>Urban Home Properties and Builders <br>
                        Phone: 989-588-6863 <br>
                        Email: <span><a href="">urbanhome12@fake.com</a></span>    </p>
                </div>
                <div class="moreaboutConnect mt-5">
                    <h2>Connect</h2>
                    <div class="underline_head" style="margin: 9px 0; width: 25px;"></div>
                    <div>
                    <i class="bi bi-facebook"></i>
                    <i class="bi bi-twitter"></i>
                    <i class="bi bi-instagram"></i>
                    <i class="bi bi-youtube"></i>
                    <i class="bi bi-linkedin"></i>
                    </div>
                </div>
                <div class="moreabout mt-5">
                    <h2>What else?</h2>
                    <div class="underline_head" style="margin: 9px 0; width: 25px;"></div>
                    <ul style="list-style-type: circle;">
                        <li><a class="mt-5" href="">Urban-home.com</a></li>
                        <li><a href="">Urban Home News</a></li>
                        <li><a href="">Urban Home Blog</a></li>
                        <li><a href="">Data Center</a></li>
                        <li><a href="">Jobs</a></li>
                        <li><a href="">Classes and Events</a></li>
                        <li><a href="">Our App</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--footer-->
    <?php
    include "./components/footer.php";
    echo $footer;
    ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="./js/script.js"></script>
</body>

</html>

</body>

</html>