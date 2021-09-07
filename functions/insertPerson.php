<!DOCTYPE html>
<html>
  <head>
  <link rel='stylesheet' href='/stylesheets/style.css' />
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
       <link rel="stylesheet" href="../css/bootstrap.min.css">
       <link rel="stylesheet" href="../js/bootstrap.min.js">
     
       </head>



<?php 
require_once('connection.php');
$connection=connection();
$name=$_POST['name'];
$last_name=$_POST['last_name'];
$sql=mysqli_query($connection,"insert into person(name,last_name) values('$name','$last_name')") or die("error ".mysqli_error($connection));
    ?> <div class="alert alert-primary" role="alert">
    Insercion correcta!!
    </div>
    <?php 
    ?>