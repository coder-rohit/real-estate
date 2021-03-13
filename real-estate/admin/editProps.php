<?php

session_start();
if (!isset($_SESSION['name'])) {
    echo "<script> window.location.href = './index.php'</script>";
}

// variables for connection
$servername = "localhost";
$susername = "root";
$spassword = "";
$dbname = "real_estate";
// connection query
$conn = mysqli_connect($servername, $susername, $spassword, $dbname);
// select query
$sql = "select * from admin_property ORDER BY `ID` DESC";
$result = mysqli_query($conn, $sql);
// delete function
if (isset($_POST['delete'])) {
    $sql = "DELETE FROM `admin_property` WHERE ID = $_POST[delete]";
    echo "<script>confirm('Property ID $_POST[delete] will be deleted')</script>";
    mysqli_query($conn, $sql);
    echo "<script>alert('Deleted Successfully')</script>";
    echo "<script>window.location.href = 'editProps.php'</script>";
}
if (isset($_POST['update'])) {
    $sql = "UPDATE `admin_property` SET `for_to`='$_POST[for_to]',`location`='$_POST[location]',`property_name`='$_POST[prop_name]',`buil_deal_name`='$_POST[buil_deal_name]',`address`='$_POST[address]',`property_type`='$_POST[proptype]',`price`='$_POST[price]',`marketed_by`='$_POST[marketed_by]',`propdesc`='$_POST[propdesc]' WHERE `admin_property`.`ID` = $_POST[updateID]";
    // print_r($sql);
    mysqli_query($conn, $sql);
    echo "<script>alert('Updated Successfully')</script>";
    echo "<script>window.location.href = 'editProps.php'</script>";
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
        #mySidenav a:nth-child(4) {
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
                    <h1 class="text-center" style="font-weight: 700;"><?php echo "Welcome Admin " . $_SESSION['name']; ?></h1>
                    <div class="underline_head"></div>
                    <p id="err" class="text-center"></p>
                    <table class="requirementsTable">
                        <tr>
                            <th>ID</th>
                            <th>For_To</th>
                            <th>Location</th>
                            <th>Property Name</th>
                            <th>Buil_deal_name</th>
                            <th>Address</th>
                            <th>Property_type</th>
                            <th>Price</th>
                            <th>Marketed_by</th>
                            <th>Prop. Description</th>
                        </tr>

                    <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "
                <tr>
                <form action='editProps.php' method='POST'>
                <input type='hidden' name='updateID' value='$row[ID]'>
                    <td>$row[ID]</td>
                    <td>
                        <input type='text' value='$row[for_to]' name='for_to'>
                    </td>
                    <td>
                        <input type='text' value='$row[location]' name='location'>
                    </td>
                    <td>
                        <input type='text' value='$row[property_name]' name='prop_name'>
                    </td>
                    <td>
                        <input type='text' value='$row[buil_deal_name]' name='buil_deal_name'>
                    </td>
                    <td>
                        <input type='text' value='$row[address]' name='address'>
                    </td>
                    <td>            
                        <input type='text' value='$row[property_type]' name='proptype'>
                    </td>                
                    <td>
                        <input type='text' value='$row[price]' name='price'>
                    </td>
                    <td>
                        <input type='text' value='$row[marketed_by]' name='marketed_by'>
                    </td>
                    <td>
                        <input type='text' value='$row[propdesc]' name='propdesc'>
                    </td>
                    <td>
                    <button type='submit' name='update'>Update</button></form>
                    </td>
                    <td>
                    <form action='editProps.php' method='POST'>
                    <button type='submit' value='$row[ID]' name='delete'>Delete</button>
                </form>
                </td>
                </tr>
                ";
                    }
                    ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
