
<!DOCTYPE html>
<html>
  <head>
    <title>Listar Ventas</title>
    <link rel='stylesheet' href='/stylesheets/style.css' />
   <meta name="viewport" content="width=device-width, initial-scale=1">
 

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../js/bootstrap.min.js">
<script src="jquery-3.6.0.js"></script>



  </head>
  <body>




<!------------        navbar vertical ------>
    <div class="container-fluid">
      <div class="row">
       











          <div class="col-md-10" style="margin-top:4rem;">

          <table class="table table-bordered table table-responsive"  WIDTH=400 HEIGHT=350>
   <tr class="bg-primary">
     <td>Id</td>
     <td>Nombre</td>
     <td>Apellido</td>
     <td>Mercaderia</td>
     <td>Cantidad</td>
     <td>Fecha</td>
     <td>Precio Unitario</td>
     <td>Subtotal</td>
     </tr>
   <?php 
     require_once('../functions/connection.php');
     $connection=connection();
     $pID=$_POST['id_person'];
     $sqlPS=mysqli_query($connection, "select c.id as id, p.id as id_person, p.name as name, p.last_name as last_name,
      c.name as commodity, c.quantiti as quantiti, 
      c.dates as dates,c.sta_tus as status, c.price as price
      from commodity c inner join person p on p.id=c.id_person where p.id='$pID'
      order by c.id DESC")or 
      die("error".mysqli_error($connection));
     
      
      $total=0;
      $name='';
      $last_name='';
      $ID_PERSON='';
      $count=0;

   while($reg=mysqli_fetch_array($sqlPS)){ 
     if($reg['status']!='PAGADO'){
      $count++;
     $subTotal=$reg['quantiti']*$reg['price'];
     $total+=$subTotal;
     $name=$reg['name'];
     $last_name=$reg['last_name'];
     $ID_PERSON=$reg['id_person'];
     ?>
   <tr>
   
     <td><input class="form-control" readonly style="width: 100px;" type="number"value="<?php echo $count;?>"></td>
     <td><input class="form-control" readonly style="width: 150px;" type="text" value="<?php echo $reg['name'];?>"></td>
     <td><input class="form-control" readonly style="width: 100px;" type="text" value="<?php echo $reg['last_name'];?>"></td>
     <td><input class="form-control" readonly style="width: 100px;" type="text" value="<?php echo $reg['commodity'];?>"></td>
     <td><input class="form-control" readonly style="width: 100px;" type="number" value="<?php echo $reg['quantiti'];?>"></td>
     <td><input class="form-control" style="width: 160px;" type="date" value="<?php echo $reg['dates'];?>"></td>
     
     
     
     <td><input class="form-control"  id="price"name="price" style="width: 100px;" step="0.01" type="number" value="<?php echo $reg['price'];?>"></td>
     
     
     
     <td> <input class="form-control"type="number" readonly style="width: 100px;" value="<?php echo $subTotal; ?>"> </td>
     </tr>
   <?php } 

  } ?> 
    <?php
   mysqli_close($connection);?>
   
   </table>










   <?php if($total>0){?>
   <form action="confirm.php" method="post" >
   <div class="form-group" >

   <div class="row">
   <div class="col-md-6">
   <label for="exampleInputEmail1">Total a pagar</label>
   <input type="number"step="0.01" name="total" class="form-control"readonly   style="width: 300px;" value="<?php echo $total;?>" >
   <input type="hidden" name="name" value="<?php echo  $name;?>">    
   <input type="hidden" name="last_name" value="<?php echo $last_name;?>">    
   <input type="hidden" name="id_person" value="<?php echo $ID_PERSON;?>">    

   
   <br>
       <button type="submit"  name="details" class="btn btn-primary">Pagar</button>
</div>
  
<div class="col-md-3" id="respa" style="padding-top:2em">
   
  
</div>
       </div>
       </div>
   </form>
   
   <?php }?>


          </div>
          </div>
          </div>


  <!--- form --->






<footer  style="  background-color: black;
 position:fixed;
   left:0px;
   bottom:0px;
   height:30px;
   width:100%;
   height:4rem;
  
  color: white;">

  

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" style="color: white;">?? 2021 Copyright:
     M.J.S
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->






  </body>
</html>








