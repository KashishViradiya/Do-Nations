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
    $other=$_POST['other'];
    $quantity=$_POST['quantity'];
    $ngo=$_POST['ngo'];

  
    $sql="INSERT INTO books (fname,lname,email,mobile,address,state,zipcode,other,quantity,ngo) 
            VALUES ('$fname','$lname','$email','$mobile','$address','$state','$zipcode','$other','$quantity','$ngo')";
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