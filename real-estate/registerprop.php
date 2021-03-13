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
      .links-nav:nth-child(5){
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

<div class="container main_content mt-5 pb-5">
        <div class="row">
            <div class="col-md-8">
                <h1>Register Your property</h1>
                <p>Urban Home(A Real Estate Company)</p>
                <hr>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit explicabo reprehenderit fugiat maxime cum voluptatibus quisquam quam sit! Sapiente mollitia eum natus ratione asperiores i um voluptatibus quisquam quam sit! Sapiente mollitia eum natus ratione asperiores ium voluptatibus quisquam quam sit! Sapiente mollitia eum natueriores i um voluptatibus quisquam quam sit! Sapiente mollitia eum natus ratione asperiores ium voluptatibus quisquam quam sit! Sapiente mollitia eum natueriores i um voluptatibus quisquam quam sit! Sapiente mollitia eum natus ratione asperiores ium voluptatibus quisquam quam sit! Sapiente mollitia eum natus ratione asperiores ipsa tempora iure neque quod deleniti?</p>
            </div>
            <div class="col-md-4">
                <img src="./images/main.jpg" height="239px" alt="">
            </div>
        </div>
    </div>
    <hr>

<div class="container mt-4 pb-5">
      <div class="contact-us-div">
      <h1 class="text-center" style="font-weight: 700;">We Will Do Our Best</h1>
      <div class="underline_head"></div>
      <p id="err" class="text-center"></p>
      <form class="contact-form mt-4" method="POST" id="form" action="function.php">
          <table>
              
              <tr>
                  <td><label for="fname">Your Name <span style="color: red;">*</span></label></td>
                  <td><input type="text" id="fname" name="fname" placeholder="Your name.."></td>
              </tr>
              <tr>
                  <td> <label for="tel">Contact Number <span style="color: red;">*</span></label>
                  </td>
                  <td> <input type="tel" id="tel" name="number" placeholder="Contact Number...">
                  </td>
              </tr>
              <tr>
                  <td> <label for="email">Email <span style="color: red;">*</span></label>
                  </td>
                  <td> <input type="email" id="email" name="email" placeholder="Email...">
                  </td>
              </tr>
              <tr>
                <td><label for="for">For <span style="color: red;">*</span></label></td>
                <td>
                    <label class="rentL" for="Rent">Rent</label>
                    <input class="rentI" name="for" value="rent" type="radio">
                    <label class="rentS" for="sale">Sale</label>
                    <input class="rentI" name="for" value="sale" type="radio">   
                </td>
            </tr>
              <tr>
                  <td> <label for="type">Property Type <span style="color: red;">*</span></label>
                  </td>
                  <td>
                  <select name="proptype">
                      <option value="" selected>Select</option>
                      <option value="Residential">Residential</option>
                      <option value="Commercial">Commercial</option>
                      <option value="Industrial">Industrial</option>
                      <option value="Raw Land">Raw land</option>
                      <option value="Special Use">Special use</option>
                      <option value="Other">Other</option>
                  </select>
                  </td>
              </tr>
              <tr>
                  <td> <label for="location">Location <span style="color: red;">*</span></label>
                  </td>
                  <td>
                  <select name="location">
                      <option value="" selected>Select</option>
                      <option value="Karnal">Karnal</option>
                      <option value="Model Town">Model Town</option>
                      <option value="Sec 32/33/34">Sec 32/33/34</option>
                      <option value="Sec 4/5/6">Sec 4/5/6</option>
                      <option value="Panipat">Panipat</option>
                      <option value="Ghrounda">Ghrounda</option>
                  </select>
                  </td>
              </tr>
              <tr>
                  <td> <label for="budjet">Budget <span style="color: red;">*</span></label>
                  </td>
                  <td>
                  <select name="budget">
                      <option value="" selected>Select</option>
                      <option value="30L - 50L">30L - 50L</option>
                      <option value="50L - 80L">50L - 80L</option>
                      <option value="80L - 1.2Cr">80L - 1.2Cr</option>
                      <option value="1Cr - 2Cr">1Cr - 2Cr</option>
                      <option value="2Cr - 5Cr">2Cr - 5Cr</option>
                      <option value="5Cr - 10Cr">5Cr - 10Cr</option>
                  </select>
                  </td>
              </tr>
              <tr>
                <td> <label for="address">Address:  <span style="color: red;">*</span></label>
                </td>
                <td> <textarea id="address" name="address" placeholder="Address of your property."></textarea>
                </td>
            </tr>
              <tr>
                  <td> <label for="description">Property Description:  <span style="color: red;">*</span></label>
                  </td>
                  <td> <textarea id="propDesc" name="propDesc" placeholder="Write brief description about your property so that buyer can make his decision easily."></textarea>
                  </td>
              </tr>
          </table>
          <div style="display: flex; ">
          <button type="submit" class="contact-btn" name="register" id="submit">Register</button>
          </div>
      </form>
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