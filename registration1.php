<?php
include "connect.php";
$fname =$lname= $email = $gender = $password = $repassword = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$fname= $_POST['fname'];
$lname= $_POST['lname'];
$email= $_POST['email'];
$password=$_POST['password'];
$repassword=$_POST['repassword'];
}
$sql = "INSERT INTO customer (fname, lname, email,gender,password,repassword)
VALUES ('$fname', '$lname', '$email','$gender','$password','$repassword')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
echo "<h2></h2>";
echo $fname;
echo "<br>";
echo $email;
echo "<br>";
echo $lname;
echo "<br>";
echo $password;
echo "<br>";
echo $repassword;
?>
