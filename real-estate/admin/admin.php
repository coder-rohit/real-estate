<?php

    session_start();
    if(!isset($_SESSION['name'])){
        echo "<script> window.location.href = './index.php'</script>";
    }

    

?>

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
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="style.css">
    <style>
        #mySidenav a:nth-child(3){
            text-decoration: underline;
            color: white;
        }
    </style>
</head>
<body>


<div class="row">
    <div class="col-md-2">
<?php
 include './components/sideNav.php';
 echo $sideNav;
?>
</div>

<div class="col-md-10">
<div class="container mt-4 pb-5">
      <div class="contact-us-div">
      <h1 class="text-center" style="font-weight: 700;"><?php echo "Welcome Admin " .$_SESSION['name']; ?></h1>
      <div class="underline_head"></div>
      <p id="err" class="text-center"></p>
      <form class="contact-form mt-4" method="POST" id="form" action="function.php" enctype="multipart/form-data">
          <table>
              
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
                  <td> <label for="location">Location <span style="color: red;">*</span></label>
                  </td>
                  <td>
                  <select name="location" id="">
                      <option value="" selected>Select</option>
                      <option value="Karnal">Karnal</option>
                      <option value="Model Town">Model Town</option>
                      <option value="Sec 32">Sec 32</option>
                      <option value="Sec 33">Sec 33</option>
                      <option value="Sec 34">Sec 34</option>
                      <option value="Sec 4">Sec 4</option>
                      <option value="Sec 5">Sec 5</option>
                      <option value="Sec 6">Sec 6</option>
                      <option value="Panipat">Panipat</option>
                      <option value="Ghrounda">Ghrounda</option>
                  </select>
                  </td>
              </tr>
              <tr>
                  <td> <label for="image">Property Name<span style="color: red;">*</span></label>
                  </td>
                  <td> <input type="text" id="subject" name="propName" placeholder="Property Name"/>
                  </td>
              </tr>
              <tr>
                  <td> <label for="image">Builder/Dealer  <span style="color: red;">*</span></label>
                  </td>
                  <td> <input type="text" id="subject" name="builDealName" placeholder="Builder/Dealer Name"/>
                  </td>
              </tr>
              <tr>
                <td> <label for="address">Address:  <span style="color: red;">*</span></label>
                </td>
                <td> <textarea id="subject" name="address" placeholder="Address of your property."></textarea>
                </td>
            </tr>
              <tr>
                  <td> <label for="type">Property Type <span style="color: red;">*</span></label>
                  </td>
                  <td>
                  <select name="proptype" id="">
                      <option value="" selected>Select</option>
                      <option value="Residential">Residential</option>
                      <option value="Commercial">Commercial</option>
                      <option value="Industrial">Industrial</option>
                      <option value="Raw Land">Raw land</option>
                      <option value="Special Use">Special use</option>
                      <option value="2, 3 BHK Flats">2, 3 BHK Flats</option>
                      <option value="Other">Other</option>
                  </select>
                  </td>
              </tr>
              
              <tr>
                  <td> <label for="price">Price/Cost <span style="color: red;">*</span></label>
                  </td>
                  <td> <input type="text" id="subject" name="price" placeholder="Price/Cost of Property"/>
                  </td>
              </tr>

              <tr>
                  <td> <label for="marketedBy">Marketed By <span style="color: red;">*</span></label>
                  </td>
                  <td> <input type="text" id="subject" name="marketedBy" placeholder="Dealer or Owner Name"/>
                  </td>
              </tr>
              
              <tr>
                  <td> <label for="description">Property Description:  <span style="color: red;">*</span></label>
                  </td>
                  <td> <textarea id="subject" name="propDesc" placeholder="Write brief description about your property so that buyer can make his decision easily."></textarea>
                  </td>
              </tr>
              <tr>
                  <td> <label for="image">Image:  <span style="color: red;">*</span></label>
                  </td>
                  <td> <input type="file" id="subject" name="image" />
                  </td>
              </tr>
          </table>
          <div style="display: flex; ">
          <button type="submit" class="contact-btn" name="regAdminProp" id="submit">Admin Register</button>
          </div>
      </form>
  </div>
  </div>
  </div>
  </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>