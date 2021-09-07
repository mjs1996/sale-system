<!DOCTYPE html>
<html>
  <head>
  <link rel='stylesheet' href='/stylesheets/style.css' />
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
       <link rel="stylesheet" href="../css/bootstrap.min.css">
       <link rel="stylesheet" href="../js/bootstrap.min.js">
       <script src="../views/jquery-3.6.0.js"></script>
       </head>
<?php
require_once('connection.php');

$connection=connection();

$name=$_POST['name'];
$quantiti=$_POST['quantiti'];
$dates=$_POST['dates'];
$price=$_POST['price'];
$id=$_POST['id'];


$sql=mysqli_query($connection,"insert into commodity(id_person,name,quantiti,dates,price,sta_tus) values('$id','$name','$quantiti','$dates','$price','PENDIENTE')") or die("error ".mysqli_error($connection));
?> <div class="alert alert-primary" role="alert">
    Insercion correcta!!
    </div>
    <?php 
    ?>