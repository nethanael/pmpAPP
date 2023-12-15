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
    	
	if ( $network_name == '' || $manufacturer == '' || $model == '' || $mnemonic == '' || $province == '' || $region == '' ||
	$longitude == '' || $latitude == '' )

	{
		$_SESSION['ADD_EQUIPMENT_ERROR'] = "¡Los campos marcados con asterisco son obligatorios!";

		$_SESSION['NETWORK_NAME_TEMP'] = $network_name;
		$_SESSION['LOCATION_TEMP'] = $location;
		$_SESSION['CENTRAL_CODE_TEMP'] = $central_code;
		$_SESSION['DISTRICT_CODE_TEMP'] = $district_code;
		$_SESSION['MNEMONIC_TEMP'] = $mnemonic;
		$_SESSION['SIMO_CODE_TEMP'] = $simo_code;
		$_SESSION['CANTON_TEMP'] = $canton;
		$_SESSION['DISTRICT_NAME_TEMP'] = $district_name;
		$_SESSION['TOWN_TEMP'] = $town;
		$_SESSION['PROPERTY_NAME_TEMP'] = $property_name;
		$_SESSION['PROPERTY_ID_TEMP'] = $property_id;
		$_SESSION['LONGITUDE_TEMP'] = $longitude;
		$_SESSION['LATITUDE_TEMP'] = $latitude;

		header("Location: ../add_fixed_equipment.php");
	}
	else
	{		

        $table='add_equipment';

        $fields='(network_name, manufacturer, model, installation_type, location, central_code, district_code, mnemonic, simo_code, 
        province, canton, district_name, town, property_name, property_id, region, longitude, latitude )';
        
        $values="('$network_name','$manufacturer', '$model', '$installation_type', '$location', '$central_code', '$district_code', '$mnemonic', '$simo_code', 
		'$province', '$canton', '$district_name', '$town', '$property_name', '$property_id', '$region', '$longitude', '$latitude')";

        db_insert_query($table, $fields, $values);
    
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimun-scale=1.0">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/test_borders.css">
		<title>Plan de Mantenimiento Preventivo</title>
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
						<td class="my_td"><img src="../imgs/eq_small.png"></td>
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

	<?php 
	
	$_SESSION['ADD_EQUIPMENT_ERROR'] = '';
	$_SESSION['NETWORK_NAME_TEMP'] = '';
	$_SESSION['LOCATION_TEMP'] = '';
	$_SESSION['CENTRAL_CODE_TEMP'] = '';
	$_SESSION['DISTRICT_CODE_TEMP'] = '';
	$_SESSION['MNEMONIC_TEMP'] = '';
	$_SESSION['SIMO_CODE_TEMP'] = '';
	$_SESSION['CANTON_TEMP'] = '';
	$_SESSION['DISTRICT_NAME_TEMP'] = '';
	$_SESSION['TOWN_TEMP'] = '';
	$_SESSION['PROPERTY_NAME_TEMP'] = '';
	$_SESSION['PROPERTY_ID_TEMP'] = '';
	$_SESSION['LONGITUDE_TEMP'] = '';
	$_SESSION['LATITUDE_TEMP'] = '';
	
	}?>
</body>
</html>