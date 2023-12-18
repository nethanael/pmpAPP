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
						<td class="my_td"><a class="btn btn-light btn-block" href="add_mobile_equipment.php">Agregar Equipo Móvil</a></td>
					</tr>
                    <tr>
						<td class="my_td"><a class="btn btn-light btn-block" href="fixed_equipment_pending.php">Pendientes Agregar Fijo</a></td>
						<td class="my_td"><a class="btn btn-light btn-block" href="mobile_equipment_pending.php">Pendientes Agregar Móvil</a></td>
					</tr>
					<tr>
						<th class="my_td h5" colspan="2">WebMaps Inal&aacutembrico:<th>
					</tr>
					<tr>
						<td class="my_td"><a class="btn btn-light btn-block" href="https://geoportal.ice.go.cr/portaltele/apps/webappviewer/index.html?id=ff450de135914e59940119984a6e00aa"  target="_blank">Metro Este Inal&aacutembrico</a></td>
						<td class="my_td"><a class="btn btn-light btn-block" href="https://geoportal.ice.go.cr/portaltele/apps/webappviewer/index.html?id=f43ab80843a5463d8b26e737d851d855"  target="_blank">Metro Oeste Inal&aacutembrico</a></td>
					</tr>
					<tr>
						<td class="my_td"><a class="btn btn-light btn-block" href="https://geoportal.ice.go.cr/portaltele/apps/webappviewer/index.html?id=beef046f3e1e462eab46f97ba3275403"  target="_blank">Pacifico Central y Norte Inal&aacutembrico</a></td>
						<td class="my_td"><a class="btn btn-light btn-block" href="https://geoportal.ice.go.cr/portaltele/apps/webappviewer/index.html?id=5fc3e6c0058e45949f331ff4ea9882a8"  target="_blank">Brunca Inal&aacutembrico</a></td>
					</tr>
					<tr>
					<td class="my_td" colspan="2"><a class="btn btn-light btn-block" href="https://geoportal.ice.go.cr/portaltele/apps/webappviewer/index.html?id=7e04422891214d9caa17d878d001b9c8"  target="_blank">Huetar Inal&aacutembrico</a></td>
					</tr>
					<tr>
						<th class="my_td h5" colspan="2">WebMaps Fijo:<th>
					</tr>
                    <tr>
						<td class="my_td"><a class="btn btn-light btn-block" href="https://geoportal.ice.go.cr/portaltele/apps/webappviewer/index.html?id=886d8155541542c0ae2f3ea15359ae57"  target="_blank">Metro Este Fijo</a></td>
						<td class="my_td"><a class="btn btn-light btn-block" href="https://geoportal.ice.go.cr/portaltele/apps/webappviewer/index.html?id=c2416bc26fba478aad4391d149051c9a"  target="_blank">Metro Oeste Fijo</a></td>
					</tr>
					<tr>
						<td class="my_td"><a class="btn btn-light btn-block" href="https://geoportal.ice.go.cr/portaltele/apps/webappviewer/index.html?id=ac771820c6f447c893bc970f9cb7bb02"  target="_blank">Pacifico Central y Norte Fijo</a></td>
						<td class="my_td"><a class="btn btn-light btn-block" href="https://geoportal.ice.go.cr/portaltele/apps/webappviewer/index.html?id=1ecddc68b40447da9548dfd712526e34"  target="_blank">Brunca Fijo</a></td>
					</tr>
					<tr>
						<td class="my_td" colspan="2"><a class="btn btn-light btn-block" href="https://geoportal.ice.go.cr/portaltele/apps/webappviewer/index.html?id=4005c1ac34c34d83a80d1bcd6eae6c2f"  target="_blank">Huetar Fijo</a></td>
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