<?php
    session_start();

    if ($_SESSION['username']=="") { //admin
        header("location:../index.php");
      }

      if ($_SESSION['rol']==2) { //admin
          header("location:../index.php");
        }
//if ($_SESSION['rol']==2) {
//  header("location:../index.php");
//}
?>
<!--VISTA DE ADMINISTRADOR-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Bitacora Azteca </title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/templatemo-style.css" />
    <link rel="stylesheet" href="css/sign.css" />
    <link type="text/css" href="bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="pluma.min.css" rel="stylesheet">
    <link type="text/css" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
<!--EDITAR-->

<style>
       .resaltar {
           cursor: default;
           background-color: yellow;
           color: crimson;
       }
   </style>

    <style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        text-align: left;
        padding: 1px;
    }
    td{


      font-family: sans-serif;
      font-size: 20px;
      font-weight: 400;
      color: bla;
      background: rgba(0, 0, 0, 0.13) ;
      border-color: rgb(0, 0, 0);

    }


    tr:nth-child(even){background-color: rgba(#606060, 0.67); }
    th {
        padding: 1px;
        background-color: rgba(#777777, 0);
        color: white;
        border-color: rgb(0, 0, 0);

    }
    .main-wrapper{
    	width:100%;

      font-family: sans-serif;
      font-size: 20px;
      font-weight: 400;
      color: #ffffff;
      background: rgba(6, 6, 6, 0.52) ;
      margin: 0 0 0px;
      overflow: hidden;
      padding: 10px;
      border-radius: 35px 0px 35px 0px;
      -moz-border-radius: 35px 0px 35px 0px;
      -webkit-border-radius: 10px 10px 10px 10px;
    	border:1px solid #010101;

    }
    hr {
        margin-top: 5px;
        margin-bottom: 5px;
        border: 0;
        border-top: 1px solid #000000;
    }
    </style>

<!--EDITAR-FIN ESTILO-->

      </head>
  <body id="aboutPage">
    <div class="parallax-window" data-parallax="scroll" data-image-src="img/tv-azteca.jpg">
      <div class="container-fluid">
        <div class="row tm-brand-row">
          <div class="col-lg-4 col-11">
            <div class="tm-brand-container tm-bg-white-transparent">
                <img  src="img/logo-salinas.png">
              <div class="tm-brand-texts">
                <h1 class="text-uppercase tm-brand-name">Bitacora DSI</h1>
                <p class="small">Registro de servicios </p>
                <p class="small">Bienvenido <strong><?php echo $_SESSION['username'];?></strong> </p>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-1">
            <div class="tm-nav">
              <nav class="navbar navbar-expand-lg navbar-light tm-bg-white-transparent tm-navbar">
                <button class="navbar-toggler" type="button"
                  data-toggle="collapse" data-target="#navbarNav"
                  aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <div class="tm-nav-link-highlight"></div>
                      <a class="nav-link" href="admin.php"
                        >Inicio</a
                    </li>

                    <li class="nav-item">
                      <div class="tm-nav-link-highlight"></div>
                      <a class="nav-link" href="services.php">Nuevo Registro</a>
                    </li>
                    <li class="nav-item">
                      <div class="tm-nav-link-highlight"></div>
                      <a class="nav-link" href="testimonials.php">Testimonials</a>
                    </li>
                    <li class="nav-item">
                      <div class="tm-nav-link-highlight"></div>
                      <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                      <div class="tm-nav-link-highlight"></div>
                      <form class="nav-link" action='destruir_sesion.php'>
                            <input type="submit"  id="cerrar"  name="sesionDestroy" value="Cerrar sesion"/>
                              </form>
                    </li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>



        <!-- Features -->
        <div class="main-wrapper">
        <h1>Registros</h1>
        <br><br>

    <br/>
    <br/>




        <?php
        	include("function.php");
        ?>
        <table id="tablags"  border="1" width="100%">


          <thead>

            <th scope="col">ID</th>
        		<th scope="col">No.Empleado</th>
        		<th scope="col">Nombre del cliente</th>
            <th scope="col">Fecha</th>
        		<th scope="col">Editar</th>

          </thead>
        <?php
        	$sql = "select * from tabla_demo";
        	$result = db_query($sql);
        	while($row = mysqli_fetch_object($result)){

        	?>
<tbody>
        	<tr>
            <td><?php echo $row->id;?></td>
        		<td><?php echo $row->empleado;?></td>
            <td><?php echo $row->nombres; echo  " "; echo $row->apellidos;?></td>
        		<td><?php echo $row->fecha;?></td>
        		<td>  <a class="btn btn-primary" href="editar.php?id=<?php echo $row->id; ?>">
                  <i class="fa fa-pencil fa-lg glyphicon-pencil" aria-hidden="true" style="width= 30%"></i></a></td>
        	</tr>


        	<?php } ?>
          </tbody>



        </table>

        <!-- Page footer -->
        <footer class="row">
          <p class="col-12 text-white text-center tm-copyright-text">
            Copyright &copy; 2020 Tv Azteca <a href="#" class="tm-copyright-link">tvazteca.com.mx</a>
          </p>
        </footer>
      </div>
      <!-- .container-fluid -->
    </div>

    <script src="js/jquery.min.js"></script>
      <script src="js/datatable.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    


<script type="text/javascript">


$(document).ready( function () {
    $('#tablags').DataTable();
} );

</script>




  </body>
</html>

