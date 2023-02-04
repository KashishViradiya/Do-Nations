<?php
include "connection.php";
If(isset ($_POST['submit'])) {
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];
    $state=$_POST['state'];
    $zipcode=$_POST['zipcode'];
    $typeofgrocery=$_POST['typeofgrocery'];
    $quantity=$_POST['quantity'];
    $ngo=$_POST['ngo'];

  
    $sql="INSERT INTO grocery (fname,lname,email,mobile,address,state,zipcode,typeofgrocery,quantity,ngo) 
            VALUES ('$fname','$lname','$email','$mobile','$address','$state','$zipcode','$typeofgrocery','$quantity','$ngo')";
    $insert = mysqli_query($con,$sql);

    if($insert === true){
        echo '<script>
          alert("Thank you for Donating...");
          window.location.href = "index.html";
     </script>';
    }
    else{
        echo "data not inserted";
    }
 
  }
?>