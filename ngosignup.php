<?php
include "connection.php";
If(isset ($_POST['signup'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    echo $email;
    echo $password;
  
    $sql="INSERT INTO ngo (name,email,password) VALUES ('$name','$email','$password')";
    // $insert = mysqli_query($con,$sql);

    if($con->query($sql) == TRUE){
        echo "data inserted";
    }
    else{
        echo "data not inserted";
    }
    header("Location:NGOlogin.html");
 
  }
?>