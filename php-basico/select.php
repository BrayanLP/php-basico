<?php
//including the database connection file
include_once("config.php");
 
$result2 = mysqli_query($mysqli , "SELECT users.id_roles, roles.nombre FROM roles INNER JOIN users on roles.id = users.id_roles");

$result3 = mysqli_query($mysqli , "SELECT users.id_roles, roles.nombre FROM roles INNER JOIN users on roles.id = users.id_roles");
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body> 
 	
 	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Name</td>
		<td>Age</td> 
	</tr>
	<?php  
	while($res = mysqli_fetch_array($result2)) { 		
		echo "<tr>";
		echo "<td>".$res['id_roles']."</td>";
		echo "<td>".$res['nombre']."</td>";
		echo "</tr>"; 		
	} 
	while($res3 = mysqli_fetch_array($result3)){
	  	echo "<h1>".$res3['id_roles']."</h1>";
	  	echo "<h1>".$res3['nombre']."</h1>";
	}
	?>
	</table>
 
</body>
</html>
