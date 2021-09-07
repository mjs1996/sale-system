
<!DOCTYPE html>
<html>
<head>
    <title>Agregar Cliente</title>
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
    <form  id="addPerson"method="POST" onsubmit="return send();">

    <div class="form-group" >
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" class="form-control"  id="name" name="name" placeholder="Nombre">
    </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Apellido</label>
    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Apellido">
    </div>
    <button type="submit"  name="addPerson" id="btnAddPerson" class="btn btn-primary">Agregar</button>
    </form>
    <p id="respa"></p>
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
function send(){

  var name=document.getElementById('name').value;
  var last_name=document.getElementById('last_name').value;
  var dataen= $('#addPerson').serialize();


$.ajax({
  type:'post',
  url:'../functions/insertPerson.php',
  data: dataen,
  success:function(resp){
    $("#respa").html(resp);
  }
});
return false;


}

</script>


</body>
</html>




  

































       <!-- Footer -->
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