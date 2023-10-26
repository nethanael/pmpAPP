<?php
    session_start();

    include'../includes/functions.php';

    //$user = $_SESSION['USER'];
    $network_name = $_POST["network_name"];
	$manufacturer = $_POST["manufacturer"];
	$model = $_POST["model_name"];
	$installation_type = $_POST["installation_type"];
	$location = $_POST["location"];
	$central_code = $_POST["central_code"];
	$district_code = $_POST["district_code"];
	$mnemonic = $_POST["mnemonic"];
	$simo_code = $_POST["simo_code"];
	$province = $_POST["province"];
	$canton = $_POST["canton"];
	$district_name = $_POST["district_name"];
	$town = $_POST["town"];
	$property_name = $_POST["property_name"];
	$property_id = $_POST["property_id"];
	$region = $_POST["region"];
	$longitude = $_POST["longitude"];
	$latitude = $_POST["latitude"];

   	// $month = date("m");
	//$year = date("y");
    $today = date("d/m/y H:i a");
    	
	if (false)

	{
		$_SESSION['ADD_EQUIPMENT_ERROR'] = "¡Todos los campos son obligatorios!";
		$_SESSION['_TEMP'] = $A;
		$_SESSION['_TEMP'] = $B;
		header("Location: ../add_fixed_equipment.php");
	}
	else
	{		

        $table='add_equipment';

        $fields='(network_name, manufacturer, model, installation_type, location, central_code, district_code, mnemonic, simo_code, 
        province, canton, district_name, town, property_name, property_id, region, longitude, latitude, status )';
        
        $values="('$network_name','$manufacturer', '$model', '$installation_type', '$location', '$central_code', '$district_code', '$mnemonic', '$simo_code', 
		'$province', '$canton', '$district_name', '$town', '$property_name', '$property_id', '$region', '$longitude', '$latitude', '$status')";

        db_insert_query($table, $fields, $values);
    
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimun-scale=1.0">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/test_borders.css">
		<title>Sistema de Informes</title>
	</head>
<body>
	<div class = "container my_cont">
		
		<?php include '../includes/header.php'; ?>

    	<div class = "row justify-content-center my_row">
			<div class = "col-4 my_col">
				<!-- (row_!Centro!) -->
				<span class="text-center"><h3>Adici&oacute;n de Equipos</h3></span>
				<table class="table table-bordered">
					<tr>
						<td></td>
						<td class="my_td"><img src="../imgs/new_task.png"></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td>Equipo reportado con &eacute;xito</td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td class="my_td"><a class="btn btn-info" href="../index.php">Volver</a></td>
						<td></td>
					</tr>
				</table>
			</div>
    	</div>

		<?php include '../includes/footer.php'; ?>

	</div>

	<?php $_SESSION['ADD_EQUIPMENT_ERROR'] = '';}?>
</body>
</html>