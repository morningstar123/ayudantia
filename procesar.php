<?php
include("conexion.php");

$smt = $conn->prepare("SELECT * FROM persona");
$smt->execute();

 if($_GET['param2'] == upla){

	echo "1";
    echo "<table>";  
    echo "<tr>";  
    echo "<th>Nombre</th>";  
    echo "<th>rut</th>";  
    echo "<th>apellido</th>";  
    echo "</tr>"; 
} 

else{
	echo "2",
}
echo $_GET['param1'];

?>