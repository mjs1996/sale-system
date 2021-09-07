
<!DOCTYPE html>
<html>
<head>
<title>Listar Ventas</title>
<link rel='stylesheet' href='/stylesheets/style.css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../js/bootstrap.min.js">
<script src="../views/jquery-3.6.0.js"></script>
</head>
<body>





<table class="table table-bordered table table-responsive"  WIDTH="450" HEIGHT="450" >
 
<tr class="bg-primary">
  <td>Id</td>
  <td>Precio</td>
  <td>Fecha</td>

</tr>
<?php 
require_once('connection.php');

$selectSales=mysqli_query(connection(), "select id,price,currentDate from sales order by id desc") or 
die("selection error!!".mysqli_error(connection()));


while($reg=mysqli_fetch_array($selectSales)){ ?>
<tr>

  <td><?php echo $reg['id'];?></td>
  <td><?php echo '$ '.$reg['price'];?></td>
  <td> <input class="form-control"  type="date" value="<?php echo $reg['currentDate'];?>">  </td>

 
</tr>
<?php }

mysqli_close(connection());?>
</table>

