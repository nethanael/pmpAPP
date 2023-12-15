<?php
	$ts = gmdate("D, d M Y H:i:s") . " GMT";
	header("Expires: $ts");
	header("Last-Modified: $ts");
	header("Pragma: no-cache");
	header("Cache-Control: no-cache, must-revalidate");
	
	session_start();

    //if ($_SESSION['LOGIN_INFOAPP'] == FALSE ){header("Location: index.php");}
    //else
    //   {
    //    if ($_SESSION['ROLE_NAME'] == "administrator") header("Location: home_admin.php");
        //if ($_SESSION['ROLE_NAME'] == "supervisor") header("Location: home_supervisor.php");
    //    if ($_SESSION['ROLE_NAME'] == "employee") header("Location: home_employee.php");
    //    }

    $equipment_code = $_GET['data']; 
    //$dept_code = $_SESSION['DEPT_CODE'];
    
    include 'includes/functions.php';

    //------------------First query-------------------------------

    $tasks_table="add_equipment";
    $fields="*";
    $whereClause="add_equipment.status='pendiente' AND add_equipment.equipment_code='$equipment_code'";

    $result = db_select_simple($tasks_table, $fields, $whereClause);
    $data = mysqli_fetch_assoc($result);
    
    $network_name = $data["network_name"];
    $manufacturer = $data["manufacturer"];
    $model = $data["model"];
    $installation_type = $data["installation_type"];
    $location = $data["location"];
    $central_code = $data["central_code"];
    $district_code = $data["district_code"];
    $mnemonic = $data["mnemonic"];
    $simo_code = $data["simo_code"];
    $province = $data["province"];
    $canton = $data["canton"];
    $district_name = $data["district_name"];
    $town = $data["town"];
    $property_name = $data["property_name"];
    $property_id = $data["property_id"];
    $region = $data["region"];
    $longitude = $data["longitude"];
    $latitude = $data["latitude"];

    mysqli_free_result($result);

    
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimun-scale=1.0">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/test_borders.css">
		<title>Plan de Mantenimiento Preventivo</title>
	</head>
<body>
	<div class = "container my_cont">

    <?php include 'includes/header.php'; ?>
	<?php //include 'includes/navBar.php'; ?>
          
        <div class = "row justify-content-center my_row">
			<div class = "col-6 my_col">
				<!-- (row_!Centro!) -->
                <form name="" method="post" action="scripts/reabrir_act.php"> 
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th class="my_td" colspan="2">Detalles de Adici&oacuten de equipo:</th>
                            </tr>
                        </thead>
                        <tr>
                            <td>C&oacutedigo de Equipo:</td>  
                                <td><input name="network_code" id="network_code" size="1" value="<?php echo $equipment_code;?>"readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>Nombre de Red:</td>  
                            <td><?php echo $network_name;?></td>
                        </tr>
                        <tr>
                            <td>Fabricante:</td>  
                                <td><?php echo $manufacturer;?></td>
                            </tr>

                        <tr>
                            <td>Tipo de instalaci&oacuten:</td>  
                            <td><?php echo $installation_type;?></td>
                        </tr>
                        <tr>
                            <td>Ubicaci&oacuten:</td>  
                            <td><?php echo $location;?></td>
                        </tr>
                        <tr>
                            <td>C&oacutedigo Central:</td>  
                            <td><?php echo $central_code;?></td>
                        </tr>
                        <tr>
                            <td>C&oacutedigo Distrito:</td>  
                            <td><?php echo $district_code;?></td>
                        </tr>
                        <tr>
                            <td>Mnem&oacutenico:</td>  
                            <td><?php echo $mnemonic;?></td>
                        </tr>
                        <tr>
                            <td>C&oacutedigo SIMO:</td>  
                            <td><?php echo $simo_code;?></td>
                        </tr>
                        <tr>
                            <td>Provincia:</td>  
                            <td><?php echo $province;?></td>
                        </tr>
                        <tr>
                            <td>Cant&oacuten:</td>  
                            <td><?php echo $canton;?></td>
                        </tr>
                        <tr>
                            <td>Nombre Distrito:</td>  
                            <td><?php echo $district_name;?></td>
                        </tr>
                        <tr>
                            <td>Pueblo:</td>  
                            <td><?php echo $town;?></td>
                        </tr>
                        <tr>
                            <td>Nombre Predio:</td>  
                            <td><?php echo $property_name;?></td>
                        </tr>
                        <tr>
                            <td>ID Predio:</td>  
                            <td><?php echo $property_id;?></td>
                        </tr>
                        <tr>
                            <td>Regi&oacuten de Mantenimiento:</td>  
                            <td><?php echo $region;?></td>
                        </tr>
                        <tr>
                            <td>Longitud:</td>  
                            <td><?php echo $longitude;?></td>
                        </tr>
                        <tr>
                            <td>latitude:</td>  
                            <td><?php echo $latitude;?></td>
                        </tr>
                        <tr>
                            <td class="my_td" colspan="2"><a class="btn btn-info" href="index.php">Volver</a></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>

        <?php include 'includes/footer.php'; ?>

	</div>
</body>
</html>