<?php

$conn_string = "dbname=d8bgoddl4rn1t4 host=ec2-174-129-29-118.compute-1.amazonaws.com port=5432 user=atvqvoqvbfoerf password=sJBoizX9YrgzkzXdrH9YTbIWli sslmode=require";

$dbconn = pg_connect($conn_string) 
          or die('No puedo conectarme: ' . pg_last_error());

echo "Conectado a la Base de Datos!";

$sql="SELECT id_cliente, nombre, apellido, direccion, email, documento_cliente, tipo_cliente, ciudad_cliente, tipo_documento
	FROM public.clientes";
 
$result = pg_query($dbconn, $sql);
if(!$result)
{
	echo "An error occurred.\n";
	exit;
}
 
echo "<table>";
	while ($row = pg_fetch_array($result))
	{
		echo "<tr>";
			echo "<td>Años:".$row["nombre"]."</td>";
		echo "<tr>";
	}
echo "<table>";
?>