<?php

   $conexion=mysqli_connect('localhost','root','','datalab');

   $latitud = $_GET['lati'];
   $longitud = $_GET['long'];

   $sql="select c.cuenta as cuenta, c.Cod_trafo as cod_trafo, t.Latitud as Latitud, t.Longitud as Longitud from cuentas as c INNER JOIN (select Cod_trafo,Latitud, Longitud from trafos where Cod_trafo in (select Cod_trafo from trafos where Long_metros BETWEEN $longitud -10 AND $longitud +10) and  Lat_metros BETWEEN $latitud-10 and $latitud+10 GROUP by Cod_trafo)as t  on c.Cod_trafo=t.Cod_trafo";

   $result= mysqli_query($conexion, $sql);
   $rows = array();
    while($r = mysqli_fetch_assoc($result)) {
        $rows[] = $r;
    }
    echo json_encode($rows);
?>