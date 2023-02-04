<?php
include "connection.php";
If(isset ($_POST['submit'])) {
    $email=$_POST['email'];
    $password=$_POST['password'];
    echo $email;
    echo $password;

    $sql = "SELECT * FROM ngo";
    $select = mysqli_query($con,$sql);

    if($select){
      while($row = mysqli_fetch_assoc($select)){
        $bemail = $row["email"];
        $bpassword = $row["password"];
        
      }
      if($email == $bemail && $password == $bpassword){
        header("Location:index.html");

      }
      else{
        echo '<script>
          alert("Incorrect username and password");
          window.location.href = "NGOLogin.html";
        </script>';
      
      }
    }
  }
  ?>
