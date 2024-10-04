<?php
// stel php in dat deze fouten weergeeft
//ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once $_SERVER["DOCUMENT_ROOT"] . '/vendor/autoload.php';

Kint::$enabled_mode = false;

$opmerkingen = $punten . "_tx";

//Connection statement [PDO]
require_once('kies_jaar.php');

// begin Recordset
$report = select_query("SELECT naam, {$punten}, {$opmerkingen} FROM {$evaluatie_tabel} {$_SESSION['zoek_cursus']}");
// end Recordset

d($report, $_SESSION);

function average($array)
{
	if (is_array($array)) {
		$sum  = array_sum($array);
		$count = count($array);
	}
	if (isset($count) and $count > 0)
		return $sum / $count;
	else return NULL;
}

function deviation($array)
{
	if (is_array($array) and count($array) > 0) {
		$avg = average($array);
		foreach ($array as $value) $variance[] = pow($value - $avg, 2);
		$deviation = sqrt(average($variance));
		return $deviation;
	} else return NULL;
}

$cijfers = array();
if (is_array($report)) foreach ($report as $row) {
	if ($row[$punten] != 0)
		$cijfers[] = $row[$punten];
}

if (is_array($cijfers)) {
	$aantal = count($cijfers);
	$gemiddelde = round(average($cijfers), 1);
	$spreiding = round(deviation($cijfers), 2);
} else $aantal = $gemiddelde = $spreiding = 0;


?>
<!DOCTYPE HTML>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title>Report <?php echo $naam; ?></title>
	<link rel="shortcut icon" href="https://www.pellegrina.net/Images/Logos/favicon.ico" type="image/x-icon" />
	<link rel="icon" href="https://www.pellegrina.net/Images/Logos/favicon.ico" type="image/x-icon" />
	<link href="css/evaluatie.css" rel="stylesheet" type="text/css">
</head>

<body>
	<h2>Evaluation report <?php echo $naam ?></h2>
	<?php echo ("<h3 class=\"evaluatie\">The average of the marks in {$aantal} reports is: {$gemiddelde}; the standard deviation: {$spreiding}</h3>"); ?>
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
				<div align="center">2 = weak </div>
			</td>
			<td width="20%">
				<div align="center">1 = inadequate </div>
			</td>
		</tr>
	</table>
	<br>
	<table id="opmerkingen">
		<tr>
			<th width="13%" valign="top"><i>name:</i></th>
			<th width="1%" valign="top"><i>mark:</i></th>
			<th valign="top"><i>remarks:</i></th>
		</tr>
		<?php
		if (is_array($report)) foreach ($report as $row) {
			if ($row[$opmerkingen] != NULL)
				echo "<tr><td>{$row['naam']}</td>
				<td class=\"centreer\">{$row[$punten]}</td>
				<td>{$row[$opmerkingen]}</td>
			</tr>";
		}
		?>
	</table>
</body>

</html>