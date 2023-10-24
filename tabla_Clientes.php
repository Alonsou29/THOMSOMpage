<?php
include("assest/conexion.php");

$datos = mysqli_query($conn,"SELECT * FROM cliente") or die(mysqli_error($conn));


echo "
    <table class='table table-dark' aling='center'>
        <tr class='d-flex'>
            <th class='col-2'>ID</th>
            <th class='col-2'>Nombre</th>
            <th class='col-2'>Rif del cliente</th>
            <th class='col-2'>Zona</th>
        </tr>
";
while ($row = mysqli_fetch_array($datos)){
    echo "<tr class='d-flex'>";
    echo "<td class='col-2'>".$row["id"]."</td>";
    echo "<td class='col-2'>".$row["Nombre"]."</td>";
    echo "<td class='col-2'>".$row["rif"]."</td>";
    echo "<td class='col-2'>".$row["zona_pais"]."</td>";
    echo"</tr>";
}

echo "</table>";
?>