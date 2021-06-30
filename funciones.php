<?php



$conexion = mysqli_connect("localhost", "root", "", "bitacorags");
$consulta = "SELECT nombres, apellidos, fecha, empleado, servicio, contacto, marca, modelo, placa, problema, inge FROM tabla_demo";
$registro = mysqli_query($conexion, $consulta);

//guardamos en un array multidimensional todos los datos de la consulta
$i=0;
$tabla = "";

while($row = mysqli_fetch_array($registro))
{
$tabla.='{"nombres":"'.$row['nombres'].'","nombres":"'.$row['nombres'].'","apellidos":"'.$row['apellidos'].'","fecha":"'.$row['fecha'].'","empleado":"'.$row['empleado'].'","contacto":"'.
  $row['contacto'].'","marca":"'.$row['marca'].'","modelo":"'.$row['modelo'].'","placa":"'.$row['placa'].'"problema":"'.$row['problema'].'"servicio":"'.$row['servicio'].'"inge":"'.$row['inge'].'"},';
$i++;
}
$tabla = substr($tabla,0, strlen($tabla) );

echo '{"data":['.$tabla.']}';

?>






<link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

<script src="js/jquery.min.js"></script>
<script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js" ></script>





<table id="table"  border="1" width="100%">


  <thead>
<tr>


    <th scope="col">ID</th>
    <th scope="col">No.Empleado</th>
    <th scope="col">Nombre del cliente</th>
    <th scope="col">Fecha</th>
    <th scope="col">Editar</th>

    </tr>

  </thead>

<tbody></tbody>



</table>
<script>

$(document).ready( function () {
$('#table').dataTable({

  "ajax":  "funciones.php",
  "columns": [
  { "data": "ID" },
  { "data": "nombres" },
  { "data": "apellidos" },
  { "data": "fecha" },
  { "data": "empleado" },
  { "data": "contacto" },
  { "data": "marca" },
  { "data": "modelo" },
  { "data": "placa" },
  { "data": "problema" },
  { "data": "servicio" },
  { "data": "inge" }
  ]

});
} );

</script>
