<?php
$naam = "Preference for venue";
$punten = "plaats";
$opmerkingen = $punten . "_tx";

//Connection statement
require_once('kies_jaar.php');

// begin Recordset
$query_report = "SELECT * FROM {$evaluatie_tabel} {$_SESSION['zoek_cursus']}";
$report = select_query($query_report);
// end Recordset

function average( $array ) {
	$sum = array_sum( $array );
	$count = count( $array );
	return $sum / $count;
}

function deviation( $array ) {

	$avg = average( $array );
	foreach ( $array as $value ) {
		$variance[] = pow( $value - $avg, 2 );
	}
	$deviation = sqrt( average( $variance ) );
	return $deviation;
}

$cijfers = array();
$aantal = array();
foreach ( $report as $rep ) {
	if ($rep[$punten] != 0)
		$cijfers[] = $rep[$punten];
		switch ($rep[$punten]) {
    case 'BE':
        $stemmen['BE']++;
        $stemmen['totaal']++;
        break;
    case 'CB':
        $stemmen['CB']++;
        $stemmen['totaal']++;
        break;
	case 'NU':
		$stemmen['NU']++;
		$stemmen['totaal']++;
		break;
	}
}
?>
<!DOCTYPE HTML>
<?php //PHP ADODB document - made with PHAkt 3.7.0?>
<html>
<head>
<title>Report <?php echo $naam; ?></title>
<meta charset="utf-8">
<link href="http://www.pellegrina.net/css/pellegrina_stijlen.css" rel="stylesheet" type="text/css">
<link href="css/evaluatie.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php echo ("<h2>Evaluation report {$naam}</h2>
<p>&nbsp;</p>
<!-- <h3 class=\"evaluatie\">The average of the marks in {$aantal} reports is: {$gemiddelde}; the standard deviation: {$spreiding}</h3>"); ?> -->
<table id="marks">
<tr>
      <td width="20%"><div align="center"><?php echo $stemmen['BE']; ?> x BE (<?php echo round($stemmen['BE']/$stemmen['totaal']*100, 1); ?> %) = Bechyně</div></td>
      <td width="20%"><div align="center"><?php echo $stemmen['CB']; ?> x CB (<?php echo round($stemmen['CB']/$stemmen['totaal']*100, 1); ?> %) = České Budějovice</div></td>
      <td width="20%"><div align="center"><?php echo $stemmen['NU']; ?> x NU (<?php echo round($stemmen['NU']/$stemmen['totaal']*100, 1); ?> %) = geen voorkeur</div></td>
   </tr>
</table>
<br>
<table id="marks">
<tr>
      <td><i>name:</i></td>
      <td><i>mark:</i></td>
      <td><i>remarks:</i></td>
   </tr>
<?php
foreach ( $report as $rep ) {
  if ($rep[$opmerkingen] != NULL)
	echo "<tr><td>{$rep['naam']}</td>
				<td>{$rep[$punten]}</td>
				<td>{$rep[$opmerkingen]}</td>
			</tr>";
   }
?>
</table>
</body>
</html>