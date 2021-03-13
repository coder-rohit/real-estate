<?php
error_reporting(0);
?>

<?php
    session_start();
    if(isset($_SESSION['name'])){
    echo "Go Back, You're already logged in <br />";
    } else{
        echo "Loading...";
    }
    // variables for connection
    $servername = "localhost";
    $susername = "root";
    $spassword = "";
    $dbname = "real_estate";
    // connection query
    $conn = mysqli_connect($servername,$susername,$spassword,$dbname);

if(isset($_POST['login'])){
    // variables for login
    $username = $_POST['username'];
    $password = $_POST['password'];
    // fetching data from database
    $sql = "select * from admin where username = '$username'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    
    if(empty($username) || empty($password)){
        echo "<script> alert('Please fill details first.');</script>";
        echo "<script> window.location.href = './index.php';</script>";
    }
     else if($username != $row['username'] || $password != $row['password']){
        echo "<script> alert('Username or Password is not correct');</script>";
        echo "<script> window.location.href = './index.php';</script>";
    } else {
        $_SESSION['name'] = $row['name'];
        echo "<script> window.location.href = './admin.php';</script>";
    }
    $conn->close();
}

if(isset($_POST['regAdminProp'])){
    $for = $_POST['for'];
    $location = $_POST['location'];
    $propName = $_POST['propName'];
    $builDealName = $_POST['builDealName'];
    $address = $_POST['address'];
    $proptype = $_POST['proptype'];
    $price = $_POST['price'];
    $marketedBy = $_POST['marketedBy'];
    $propDesc = $_POST['propDesc'];
    // file uploading variables
    $filename = $_FILES["image"]["name"];
    $targetDir = "../images/";
    $targetFile = $targetDir . ($filename);
    $tempName = $_FILES["image"]["tmp_name"];
    // saving details to database
    $sql = "INSERT INTO `admin_property`(`for_to`, `location`, `property_name`, `buil_deal_name`, `address`, `property_type`, `price`, `marketed_by`, `propdesc`, `img_name`) VALUES ('$for','$location','$propName','$builDealName','$address','$proptype','$price','$marketedBy','$propDesc','$filename')";
    if(empty($for) || empty($location) || empty($propName) || empty($builDealName) || empty($address) || empty($proptype) || empty($price) || empty($marketedBy) || empty($propDesc)){
        echo "<script> alert('Please Fill all the details');</script>";
        echo "<script> window.location.href = './admin.php';</script>";
    } else if(empty($filename)){
        echo "<script> alert('Image not selected');</script>";
        echo "<script> window.location.href = './admin.php';</script>";
    } else {
    $res = mysqli_query($conn, $sql);
    move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);
    // showing message
    echo "<script> alert('Details Succesfully Saved');</script>";
    // back to addmin panel
    echo "<script> window.location.href = './admin.php';</script>";  
}
}
