<?php
include("db.php");


$room=$_POST['room'];

$sql="select msg,stime,ip from messages where cafe='$room'";
$res="";

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_assoc($result))
    {
        $res=$res.'<div class="chatpart">';
        $res=$res.$row['ip'];
        $res=$res."  says  &#8628; <P> ".$row['msg'];
        $res=$res.'</p> <span class="time-right" >'.$row['stime'].'</span></div>';
    }
}


echo $res;





?>