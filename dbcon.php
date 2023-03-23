<?php
// mysqli_select_db('eb_lms',mysqli_connect('localhost','root',''))or die(mysqli_error());
$sever="localhost";
$user_name="root";
$password="";
$database_name="eb_lms";

$con=mysqli_connect($sever,$user_name,$password,$database_name);
if($conn){
    echo "connect";
}else{
    echo "not connect";
}
?>