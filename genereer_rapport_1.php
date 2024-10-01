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
	<title>Report <?php echo $naam; ?></title>
	<link href="css/evaluatie.css" rel="stylesheet" type="text/css">
</head>

<body>
	<h2>Evaluation report <?php echo $naam; ?></h2>
<?php echo ("<h3 class=\"evaluatie\">The average of the marks in {$aantal} reports is: {$gemiddelde}; the standard deviation: {$spreiding}</h3>"); 
	?>
	<table id="marks">
