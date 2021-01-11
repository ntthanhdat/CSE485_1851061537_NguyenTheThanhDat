<?php
$conn=mysqli_connect('localhost', 'root', '', 'blogth4');
if(!$conn){
    die("connect fail ".mysqli_connect_error());
}
?>