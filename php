 <?php 
  $interruptor = $_POST['interruptor'];
	$url="https://...; Llamada a la api
	$json = file_get_contents($url); //Aqui tengo todo el contenido
	$obj = json_decode($json);
echo json_encode($obj); //Devuelvo los datos de la API a la función AJax
?>
