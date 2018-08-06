<?php

//getting the value of post parameter
$room=$_POST['cafe'];


//checking the cafe name size
if(strlen($room)>20 or strlen($room)<3)
{
    $msg="Please choose a name between 3 to 20 characters.";
     echo '<script language="javascript">';
     echo 'alert("'.$msg.'");';
     echo 'window.location="http://localhost/chatCaffe";';
     echo '</script>';
}

 //checking the cafe name alphanumeric or not
 else if(!ctype_alnum($room))
 {
     $msg="Please choose a alphanumeric cafe name.";
     echo '<script language="javascript">';
     echo 'alert("'.$msg.'");';
     echo 'window.location="http://localhost/chatCaffe";';
     echo '</script>';
 }


//db connection
else {
    include("db.php");
}

//check if cafe is already created

$sql= "select * from cafes where cafename ='$room'";
$result= mysqli_query($conn, $sql);
if($result)
{
    if(mysqli_num_rows($result) > 0)
    {
        $msg="Please choose a different cafe name.It's already created.";
        echo '<script language="javascript">';
        echo 'alert("'.$msg.'");';
        echo 'window.location="http://localhost/chatCaffe";';
        echo '</script>';
        

    }
    else {
        $sql="insert into cafes(cafename,stime) values('$room', CURRENT_TIMESTAMP);";
        if(mysqli_query($conn,$sql))
        {
            $msg="your cafe is ready and you can chat now!";
            echo '<script language="javascript">';
            echo 'alert("'.$msg.'");';
          echo 'window.location="http://localhost/chatCaffe/cafe.php?cafename='.$room.'";';
            echo '</script>';
            
        }
    }
}



?>

