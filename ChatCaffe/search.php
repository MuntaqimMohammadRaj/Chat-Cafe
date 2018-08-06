<?php

$searchname=$_POST['searchCafe'];



include("db.php");

$sql="select * from cafes where cafename='$searchname'";
$result= mysqli_query($conn, $sql);

if($result)
{
   
        echo '<script language="javascript">';
       
     echo 'window.location="http://localhost/chatCaffe/cafe.php?cafename='.$searchname.'";';
        echo '</script>';
    
}

else {
    echo "Error".mysqli_connect_error();
}




?>