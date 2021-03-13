<?php

    // variables for connection
    $servername = "localhost";
    $susername = "root";
    $spassword = "";
    $dbname = "real_estate";

    // connection query
    $conn = mysqli_connect($servername,$susername,$spassword,$dbname);

    $sql = "select * from admin_property where `for_to` = 'rent'";
    $result = mysqli_query($conn, $sql);

?>

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
      .links-nav:nth-child(4) {
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

    <div class="container main_content mt-5 pb-5">
      <div class="row">
        <div class="col-md-8">
          <h1>Rent/Lease Properties</h1>
          <p>Urban Home(A Real Estate Company)</p>
          <hr />
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit
            explicabo reprehenderit fugiat maxime cum voluptatibus quisquam quam
            sit! Sapiente mollitia eum natus ratione asperiores i um
            voluptatibus quisquam quam sit! Sapiente mollitia eum natus ratione
            asperiores ium voluptatibus quisquam quam sit! Sapiente mollitia eum
            natueriores i um voluptatibus quisquam quam sit! Sapiente mollitia
            eum natus ratione asperiores ium voluptatibus quisquam quam sit!
            Sapiente mollitia eum natueriores i um voluptatibus quisquam quam
            sit! Sapiente mollitia eum natus ratione asperiores ium voluptatibus
            quisquam quam sit! Sapiente mollitia eum natus ratione asperiores
            ipsa tempora iure neque quod deleniti?
          </p>
        </div>
        <div class="col-md-4">
          <img src="./images/main.jpg" height="239px" alt="" />
        </div>
      </div>
    </div>
    <hr />

    <div  class="container buyPropMainDiv mt-4 pb-5">
      <h1>Exclusive Properties</h1>
      <div class="row">
        
        <?php
while ($row = mysqli_fetch_assoc($result)) {
        
        echo "
        <div class='col-md-3 '>
        <div class='propDiv mt-4 pb-2'>
        <div class='imgLocationDiv' style='background-image: url(./images/$row[img_name]);'>
        <div class='locationDiv'>$row[location]</div>
      </div>
        <div class='pgFourContent'>
          <div class='pgFourName'>$row[property_name]</div>
          <div class='pgFourGroup'>$row[buil_deal_name]</div>
          <div class='pgFourLoc'>$row[address]</div>
          <div class='pgFourType'>$row[property_type]</div>
          <div class='pgFourPrice'>
            <p><strong>₹ $row[price]</strong> <span style='font-size: 14px; color: rgb(121, 121, 121);'> onwards </span></p>
          </div>
          <button class='seeDtBtn'>See Details</button>
          
        </div>
        <div>
          <p class='mktBy text-center'>Marketed By $row[marketed_by]</p>
        </div>
        </div>
        </div>";
}
        ?>
        
      </div>
    </div>

    <!--footer starts from here-->
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
