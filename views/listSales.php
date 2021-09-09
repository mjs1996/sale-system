<?php require_once('../operations.php'); ?>

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







<!---  navbar   horizontal --->
  
<nav class="navbar navbar-expand bg-dark navbar-dark fixed-top" >
  <!-- Brand -->
<span style="font-size: 2rem;"><i class="fas fa-shopping-cart" style="color: aliceblue; "></i></span>
  <!--  Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
    <a class="nav-link" href="listSales.php" style="color: aliceblue;">Sistema de Ventas</a>
    </li>
    <li>     </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Home</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Dropdown link
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
    </li>
  </ul>
</nav>



<!------------        navbar vertical ------>
    <div class="container-fluid">
      <div class="row">
      <nav class="col-md-2  sidebar border border-dark" style="height: 34rem; background-color:white; margin-top:3em" >
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="listSales.php" >
                  <br>
                  <span data-feather="home">  <i class="fas fa-money-bill-wave-alt"></i></span>
                 Ventas <span class="sr-only"></span>
                </a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="accountControl.php" >
                  <span data-feather="file"><i class="fas fa-money-check-alt"></i></span>
                  Control de cuentas
                </a>
              </li>
           
              <li class="nav-item">
                <a class="nav-link" href="addPerson.php" >
                  <span data-feather="shopping-cart"><i class="fas fa-user"></i></span>
                  Agregar clientes
                </a>
              </li>
    
            </ul>
            </div>
          </nav>







          <!----           Form                   --->
          <div class="col-md-5" style="margin-top: 6rem;">
          <form id="idForm" method="POST" onsubmit="return sends();">
          <div class="form-group" >
           <label for="exampleInputEmail1">Precio</label>
           <input type="number"step="0.01" id="price"class="form-control"  name="price" >
           </div>
           <div class="form-group">
           <label for="exampleInputPassword1">Fecha</label>
           <input type="date" class="form-control" id="currentDate" name="currentDate" >
           </div>
           <button type="submit" class="btn btn-primary">Agregar</button>
           </form>
           <br>
           <p id="respa"></p>
           </div>













<!---- Table -->

<div class="col-md-4" style="margin-top: 3em;">
<br>
<br>

<div id="respan"> </div>


<!---- Table here-->
</div>
</div>
</div>

























<footer  style="  background-color: black;
 position:fixed;
   left:0px;
   bottom:0px;
   height:30px;
   width:100%;
   height:4rem;
  
  color: white;">

  

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" style="color: white;">© 2021 Copyright:
     M.J.S
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

















<script>
document.getElementById('currentDate').valueAsDate=new Date();
showSales();



//insert into datable
function sends(){
  if(validation()){
var dataen= $('#idForm').serialize();
$.ajax({
type:'post',
url:'../functions/insertSales.php',
data: dataen,
success:function(resp){
  $("#respa").html(resp);
}

});
header("refresh:3; ulr=../views/listSales.php")
showSales();
return false;
  }
  else{
    alert("Debe completar todos los campos");
  }
}



//Show the datatable
function showSales(){
$.ajax({
  type:'post',
  url:'../functions/listSalesX.php',

  success:function(resp){
    $("#respan").html(resp);
  }
});
return false;
}



//fields validation
function validation(){
var price=document.getElementById("price").value;
var currentDate=document.getElementById("currentDate").value;
if(price==""){
  return false;
}
if(currentDate==""){
  return false;
}
return true;
}


</script>













  </body>
</html>
