<?php 


function connection(){

    $connection=mysqli_connect("localhost","root","","business") or die("connection error!!");

    return $connection;
}





?>