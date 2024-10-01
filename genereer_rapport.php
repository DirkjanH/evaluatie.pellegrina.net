<?php
$opmerkingen = $punten . "_tx";

//Connection statement
require_once( 'kies_jaar.php' );


// begin Recordset
$query_report = "SELECT * FROM {$evaluatie_tabel} {$_SESSION['zoek_cursus']}";
$report = select_query( $query_report );
// end Recordset

require_once('includes/functies_gemiddelde_spreiding.php');

?>

<!DOCTYPE HTML>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title>Report
		<?php echo $naam; ?>
	</title>
	<link href="css/evaluatie.css" rel="stylesheet" type="text/css">
</head>

<body>
	<?php echo ("<h2>Evaluation report {$naam}</h2>
<h3 class=\"evaluatie\">The average of the marks in {$aantal} reports is: {$gemiddelde}; the standard deviation: {$spreiding}</h3>"); ?>
	<table id="marks">
		<tr>
			<td width="20%">
				<div align="center">5 = excellent </div>
			</td>
			<td width="20%">
				<div align="center">4 = good </div>
			</td>
			<td width="20%">
				<div align="center">3 = adequate </div>
			</td>
			<td width="20%">
				<div align="center">2 = bad </div>
			</td>
			<td width="20%">
				<div align="center">1 = very bad </div>
			</td>
		</tr>
	</table>
	<br>
	<table id="opmerkingen">
		<tr>
			<th width="15%">name:</th>
			<th>mark:</th>
			<th>remarks:</th>
		</tr>
		<?php
		foreach ( $report as $rep ) {
			if ( $rep[ $opmerkingen ] != NULL )
				echo "<tr><td>{$rep['naam']}</td>
         	<td>{$rep[$punten]}</td>
         	<td>{$rep[$opmerkingen]}</td>
      	</tr>";
		}
		?>
	</table>
</body>
</html>