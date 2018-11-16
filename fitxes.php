<html>
 <head>
 	<title>Exemple de lectura de dades a MySQL</title>
 	<style>
 		body{
 		}
 		table,td {
 			border: 1px solid black;
 			border-spacing: 0px;
 		}
 	</style>
 </head>
 
 <body>
 	<h1>Buscador</h1>
<form id="buscador" name="buscador" method="post" action="<?php echo$_SERVER['PHP_SELF'] ?>">
<input id="buscar" name="buscar"placeholder="Buscar aquí..." autofocus >
<input type="submit" name="buscador" value="buscar">
</form>
<?php
// Resultado, número de registros y contenido.
echo $registros;
echo $texto;
?>
 </body>
</html>