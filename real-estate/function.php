<?php
error_reporting(0);
?>

<?php
if (isset($_POST['contact'])) {
  $to = "rohit.panchal.737@gmail.com";
  $subject = "Contact Us";
  $name = $_POST['fname'];
  $tel = $_POST['cont-num'];
  $email = $_POST['email'];
  $message = $_POST['message'];


  $body = "From: $name\n Phone: $tel\n Email: $email\n Message:\n $message";
  mail($to, $subject, $body);
  echo "<script> alert('We will Contact You Shortly');</script>";
  echo "<script>window.location.href = 'contact.php';</script>";
}

if (isset($_POST['quotation'])) {
  $name = $_POST['fname'];
  $number = $_POST['number'];
  $proptype = $_POST['proptype'];
  $location = $_POST['location'];
  $budget = $_POST['budget'];
  $message = $_POST['message'];

  $to = "rohit.panchal.737@gmail.com";
  $subject = "Requirement For Property";
  $body = "From: $name\n Phone: $number\n Proptype: $proptype\n Location:\n $location\n Budget: $budget\n Message: $message";
  mail($to, $subject, $body);

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "real_estate";

  $conn = new mysqli($servername, $username, $password, $dbname);
  $q = "INSERT INTO requirement (Name, `Contact_Number`, `Property_Type`, Location, Budget, Message) VALUES ('$name', '$number', '$proptype', '$location', '$budget', '$message')";
  // print_r($q);
  $res = mysqli_query($conn, $q);

  echo "<script> alert('Registered Successfully, We will get you a Quotation Shortly'); </script>";
  echo "<script> window.location.href = 'requirement.php'; </script>";
}


if (isset($_POST['register'])) {
  $name = $_POST['fname'];
  $number = $_POST['number'];
  $email = $_POST['email'];
  $for = $_POST['for'];
  $proptype = $_POST['proptype'];
  $location = $_POST['location'];
  $budget = $_POST['budget'];
  $address = $_POST['address'];
  $propDesc = $_POST['propDesc'];

  if(empty($name) || empty($number) || empty($email) || empty($for) || empty($proptype) || empty($location) || empty($budget) || empty($address) || empty($propDesc)){
    echo "<script> alert('Please Fill all Details First.'); </script>";
    echo "<script> window.location.href = 'registerprop.php'; </script>";
  } else {

  $to = "rohit.panchal.737@gmail.com";
  $subject = "New Property Registered for $for";
  $body = "By: $name\n Phone: $number\n Email: $email\n Proptype: $proptype\n Location:\n $location\n Budget: $budget\n Property Description: $propDesc\n Address: $address";
  mail($to, $subject, $body);

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "real_estate";

  $conn = new mysqli($servername, $username, $password, $dbname);
  $q = "INSERT INTO `properties`(`Registrar`, `Contact_No`, `Email`, `For_To`, `Property_Type`, `Location`, `Budget`, `Address`, `Property_Desc`) VALUES ('$name','$number','$email','$for','$proptype','$location','$budget','$address','$propDesc')";
  // print_r($q);
  $res = mysqli_query($conn, $q);

  echo "<script> alert('Property Registered Successfully.'); </script>";
  echo "<script> window.location.href = 'registerprop.php'; </script>";
}
}
