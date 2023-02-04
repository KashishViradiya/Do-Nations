<?php
$con= mysqli_connect("localhost","root","","do-nation");
if($con){
    echo "connection successfully";
}
else{
    echo "connection faild";
}

?>