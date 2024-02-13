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

    //$dept_code = $_SESSION['DEPT_CODE'];
    date_default_timezone_set('CST');
    $today = date("Y-m-d H:i");

    include 'includes/functions.php';

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
                <form name="" method="post" action="scripts/add_mobile_equipment.php"> 
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th class="my_td" colspan="2">Datos del equipo:</th>
                            </tr>
                            <tr>
                                <td class="my_td" colspan="2">
                                    <span class="lead text-info">
                                    Aqu&iacute; podr&aacute; adjuntar los datos necesarios para agregar un equipo a las capas del PMP.
                                    </span>
                                </td>
                            </tr>
                        </thead>
                        <tr>
                            <td class="my_td" colspan="2">
                                <img src="imgs/eq_small.png"><br>
                                <span class="text-danger">
                                    <?php echo $_SESSION['ADD_EQUIPMENT_ERROR'];?>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>*Nombre de Red:</td>
                            <td>
                                <input 
                                    name="network_name" 
                                    type="text" 
                                    id="network_name" 
                                    size="" 
                                    maxlength="20"
                                    placeholder="SPE-AGW-009"
                                    value="<?php echo $_SESSION['NETWORK_NAME_TEMP']; ?>"
                                >
                            </td>
                        </tr>
                        <tr>
                            <td>*Fabricante:</td>
                            <td>
                                <?php  
                                    $query = "SELECT manufacturer_name FROM mobile_manufacturers";   
                                    echo dynamic_select(db_1D_query($query), 'manufacturer', '', 'some_var');
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>*Modelo:</td>
                            <td>
                                <?php  
                                    $query = "SELECT model_name FROM mobile_models";   
                                    echo dynamic_select(db_1D_query($query), 'model_name', '', 'some_var');
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Tipo de instalación:</td>
                            <td>
                                <select name="installation_type" id="installation_type">
                                    <option value="Radio Base">Radio Base</option>
                                    <option value="Enlace Inalambrico">Enlace Inalámbrico</option>
                                    <option value="ATN">ATN</option>
                                    <option value="LandSwitch">LandSwitch</option>
                                    <option value="WiMAX">WiMAX</option>
                                    <option value="VSAT">VSAT</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Localidad:</td>
                            <td>
                                <input 
                                    name="location" 
                                    type="text" 
                                    id="location" 
                                    size="" 
                                    maxlength="20"
                                    placeholder="Curridabat"
                                    value="<?php echo $_SESSION['LOCATION_TEMP']; ?>"
                                >
                            </td>
                        </tr>
                        <tr>
                            <td>C&oacutedigo Central:</td>
                            <td>
                                <input 
                                    name="central_code" 
                                    type="number"
                                    id="central_code" 
                                    size="" 
                                    maxlength="4"
                                    placeholder="1115"
                                    value="<?php print (isset($_SESSION['CENTRAL_CODE_TEMP'])) ? $_SESSION['CENTRAL_CODE_TEMP'] : "000" ?>"
                                >
                            </td>
                        </tr>
                        <tr>
                            <td>N&uacutemero Distrito:</td>
                            <td>
                                <input 
                                    name="district_code" 
                                    type="number"
                                    id="district_code" 
                                    size=""
                                    maxlength="3"
                                    placeholder="018"
                                    value="<?php print (isset($_SESSION['DISTRICT_CODE_TEMP'])) ? $_SESSION['DISTRICT_CODE_TEMP'] : "000" ?>"
                                >
                            </td>
                        </tr>
                        <tr>
                            <td>*Mnemonico:</td>
                            <td>
                                <input 
                                    name="mnemonic" 
                                    type="text" 
                                    id="mnemonic" 
                                    size="" 
                                    maxlength="3"
                                    placeholder="CUR"
                                    value="<?php echo $_SESSION['MNEMONIC_TEMP']; ?>"
                                >
                            </td>
                        </tr>
                        <tr>
                            <td>C&oacutedigo SIMO:</td>
                            <td>
                                <input 
                                    name="simo_code" 
                                    type="number"
                                    id="simo_code" 
                                    size="" 
                                    maxlength="6"
                                    placeholder="115000"
                                    value="<?php print (isset($_SESSION['SIMO_CODE_TEMP'])) ? $_SESSION['SIMO_CODE_TEMP'] : "000000" ?>"
                                >
                            </td>
                        </tr>
                        <tr>
                            <td>*Provincia:</td>
                            <td>
                                <select name="province" id="province" onchange="showCanton(this.value)">
                                    <option value="SAN JOSE">San Jos&eacute;</option>
                                    <option value="ALAJUELA">Alajuela</option>
                                    <option value="CARTAGO">Cartago</option>
                                    <option value="HEREDIA">Heredia</option>
                                    <option value="GUANACASTE">Guanacaste</option>
                                    <option value="PUNTARENAS">Puntarenas</option>
                                    <option value="LIMON">Lim&oacute;n</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Cant&oacuten:</td>
                            <td>
                                <input 
                                    name="canton" 
                                    type="text" 
                                    id="canton" 
                                    size="" 
                                    maxlength="20"
                                    placeholder="CURRIDABAT"
                                    value="<?php echo $_SESSION['CANTON_TEMP']; ?>"
                                >
                            </td>
                        </tr>
                        <tr>
                            <td>Distrito:</td>
                            <td>
                                <input 
                                    name="district_name" 
                                    type="text" 
                                    id="district_name" 
                                    size="" 
                                    maxlength="20"
                                    placeholder="CURRIDABAT"
                                    value="<?php echo $_SESSION['DISTRICT_NAME_TEMP']; ?>"
                                >
                            </td>
                        </tr>
                        <tr>
                            <td>Pueblo:</td>
                            <td>
                                <input 
                                    name="town" 
                                    type="text" 
                                    id="town" 
                                    size="" 
                                    maxlength="20"
                                    placeholder="URBANIZACION LOMAS DEL SOL"
                                    value="<?php echo $_SESSION['TOWN_TEMP']; ?>"
                                >
                            </td>
                        </tr>
                        <tr>
                            <td>Nombre Predio:</td>
                            <td>
                                <input 
                                    name="property_name" 
                                    type="text" 
                                    id="property_name" 
                                    size="" 
                                    maxlength="60"
                                    placeholder="SCURCUR\Curridabat Central ICE"
                                    value="<?php echo $_SESSION['PROPERTY_NAME_TEMP']; ?>"
                                >
                            </td>
                        </tr>
                        <tr>
                            <td>ID Predio:</td>
                            <td>
                                <input 
                                    name="property_id" 
                                    type="number"
                                    id="property_id" 
                                    size="" 
                                    maxlength="10"
                                    placeholder="1010882"
                                    value="<?php print (isset($_SESSION['PROPERTY_ID_TEMP'])) ? $_SESSION['PROPERTY_ID_TEMP'] : "00000" ?>"
                                >
                            </td>
                        </tr>
                        <tr>
                            <td>*Regi&oacuten de Mantenimiento:</td>
                            <td>
                            <select name="region" id="region">
                                    <option value="Metropolitano Este">Metro Este</option>
                                    <option value="Metropolitano Oeste">Metro Oeste</option>
                                    <option value="Huetar">Huetar</option>
                                    <option value="Brunca">Brunca</option>
                                    <option value="Pacifico Central y Norte">Pacifico Central y Norte</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>*Longitud:</td>
                            <td>
                                <input 
                                    name="longitude" 
                                    type="text"
                                    id="longitude" 
                                    size="" 
                                    maxlength=""
                                    placeholder="-84,03109"
                                    value="<?php echo $_SESSION['LONGITUDE_TEMP']; ?>"
                                >
                            </td>
                        </tr>
                        <tr>
                            <td>*Latitud:</td>
                            <td>
                                <input 
                                    name="latitude" 
                                    type="text"
                                    id="latitude" 
                                    size="" 
                                    maxlength=""
                                    placeholder="9,91121"
                                    value="<?php echo $_SESSION['LATITUDE_TEMP']; ?>"
                                >
                            </td>
                        </tr>
                        <tr>
                            <td>Fecha Solicitud:</td>
                            <td>
                                <input name="creation_date" type="" id="creation_date" size="15"
                                maxlength="100" value="<?php echo $today;?>" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td class="my_td" colspan="2"><input class="btn btn-warning" type="submit" name="Submit" value="Enviar"></td>
                        </tr>
                        <tr>
                            <td class="my_td" colspan="2">
                                <span class="text-danger">
                                    <?php echo $_SESSION['ADD_EQUIPMENT_ERROR'];?>
                                </span>
                            </td>
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