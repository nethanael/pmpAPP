<?php
	$ts = gmdate("D, d M Y H:i:s") . " GMT";
	header("Expires: $ts");
	header("Last-Modified: $ts");
	header("Pragma: no-cache");
	header("Cache-Control: no-cache, must-revalidate");
	
	session_start();
	
	//if ($_SESSION['LOGIN_*'] == TRUE)
	//	{
    //        include('includes/*.php');
	//	}

?>
<!DOCTYPE html>
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
				<table class="table">
					<thead class="thead-light">
						<tr>
							<th class="my_td h5" colspan="2">Menu Principal</th>
						</tr>
					</thead>
					<tr>
						<td class="my_td"><a class="btn btn-light btn-block" href="add_fixed_equipment.php">Agregar Equipo Fijo</a></td>
						<td class="my_td"><a class="btn btn-light btn-block" href="*">Agregar Equipo Móvil</a></td>
					</tr>
                    <tr>
						<td class="my_td"><a class="btn btn-light btn-block" href="add_equipment_pending.php">Pendientes a agregar</a></td>
					</tr>
					<tr>
						<th class="my_td h5" colspan="2">WebMaps:<th>
					</tr>
					<tr>
						<td class="my_td"><a class="btn btn-light btn-block" href="https://geoportal.ice.go.cr/portaltele/apps/webappviewer/index.html?id=ff450de135914e59940119984a6e00aa">Metro Este Inalámbrico</a></td>
						<td class="my_td"><a class="btn btn-light btn-block" href="https://geoportal.ice.go.cr/portaltele/apps/webappviewer/index.html?id=7e04422891214d9caa17d878d001b9c8">Enlace Huetar Inalámbrico</a></td>
					</tr>
                    <tr>
						<td class="my_td"><a class="btn btn-light btn-block" href="https://geoportal.ice.go.cr/portaltele/apps/webappviewer/index.html?id=886d8155541542c0ae2f3ea15359ae57">Metro Este Fijo</a></td>
						<td class="my_td"><a class="btn btn-light btn-block" href="https://geoportal.ice.go.cr/portaltele/apps/webappviewer/index.html?id=4005c1ac34c34d83a80d1bcd6eae6c2f">Enlace Huetar Fijo</a></td>
					</tr>
				</table>
				</div>
			</div>

		<div class = "row justify-content-center my_row">
			<div class = "col-6 my_col">
				<div class="p-3 mb-2 bg-primary text-white">Mensaje </div>
			</div>
		</div>

		<?php include 'includes/footer.php'; ?>

	</div>
</body>
</html>