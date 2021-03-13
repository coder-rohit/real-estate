<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <!-- fthgh -->

    <link
      href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
      rel="stylesheet"
      id="bootstrap-css"
    />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
      integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
      crossorigin="anonymous"
    />

    <!-- fvgadfg -->

    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css"
    />

    <link rel="stylesheet" href="./css/style.css" />
    <style>
      .links-nav:nth-child(1){
        background-color: red;
      }
    </style>
  </head>
  <body>
    
    <?php

        include "./components/topnav.php";
        include "./components/slider.php";
        include "./components/mainnav.php";
        
        echo $topnav;
        echo $slider;
        echo $mainnav;

    ?>
    
    <!-- main content -->
    <div class="container main_content mt-5 pb-5">
        <div class="row">
            <div class="col-md-8">
                <h1>Welcome to Urban Home</h1>
                <p>A Real Estate Company</p>
                <hr>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit explicabo reprehenderit fugiat maxime cum voluptatibus quisquam quam sit! Sapiente mollitia eum natus ratione asperiores i um voluptatibus quisquam quam sit! Sapiente mollitia eum natus ratione asperiores ium voluptatibus quisquam quam sit! Sapiente mollitia eum natueriores i um voluptatibus quisquam quam sit! Sapiente mollitia eum natus ratione asperiores ium voluptatibus quisquam quam sit! Sapiente mollitia eum natueriores i um voluptatibus quisquam quam sit! Sapiente mollitia eum natus ratione asperiores ium voluptatibus quisquam quam sit! Sapiente mollitia eum natus ratione asperiores ipsa tempora iure neque quod deleniti?</p>
            </div>
            <div class="col-md-4">
                <img src="./images/main.jpg" height="239px" alt="">
            </div>
        </div>
    </div>
    <hr>

    <div class="container pb-5 mt-2">
        <h1 class="text-center mt-4">Our Top Projects</h1>
        <div class="underline_head"></div>
        <p class="mt-3 text-center">Lugiat maxime cum voluptatibus quisquam quam sit! Sapiente mollitia eum natus ratione asperiores i um voluptatibus quisquam quam sit! Sapiente mollitia eum natus ratione asperiores ium voluptatibus quisquam quam sit! Sapiente mollitia eum natueriores i um voluptatibus quisquam quam sit! Sapiente mollitia eum natus ratione asperiores ium voluptatibus quisquam quam sit! Sapiente mollitia eum natueriores i um voluptatibus quisquam quam sit! Sapiente mollitia eum natus ratione asperiores ium voluptatollitia eum natus ratione asperiores ipsa tempora iure neque quod deleniti?</p>
        <div class="cards mt-5 pb-3">
            <div>
                <img src="./images/top1.jpg" alt="">
                <h4>Italy</h4>
                <p>Colambadia</p>
            </div>
            <div>
                <img src="./images/top2.jpg" alt="">
                <h4>North Deneris</h4>
                <p>Sedan</p>
            </div>
            <div>
                <img src="./images/top3.jpg" alt="">
                <h4>Velariaus</h4>
                <p>Cersie</p>
            </div>
            <div>
                <img src="./images/top4.jpg" alt="">
                <h4>India</h4>
                <p>Bangalore</p>
            </div>
        </div>
    </div>

    <!--footer-->
    <?php
    include "./components/footer.php";
    echo $footer;
    ?>
    
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>
    <script src="./js/script.js"></script>
  </body>
</html>