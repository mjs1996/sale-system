<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="js/bootstrap.min.js">
</head>
<body>
<?php 





$selectPerson=mysqli_query(connection(),"select id,name,last_name from person  order by id desc") or die("error".mysqli_error(connection()));




$selectClient=mysqli_query(connection(),"select name from person  order by id desc") or die("error".mysqli_error(connection()));









function connection(){

    $connection=mysqli_connect("localhost","root","","business") or die("connection error!!");

    return $connection;
}


function confirmCloseAccount($id_person){

    $sql=mysqli_query(connection(),"update commodity set sta_tus='PAGADO' where id_person='$id_person' and sta_tus='PENDIENTE'") or die("error".mysqli_error(connection()));
    ?> <div class="alert alert-primary" role="alert">
    Cuenta Cerrada!!
   </div>
   <?php 
   mysqli_close(connection());
   header( "refresh:1;url=views/accountControl.php" );
}


if(isset($_POST['confirm'])){
    confirmCloseAccount($_POST['id_person']);
}


?>
</body>

</html>