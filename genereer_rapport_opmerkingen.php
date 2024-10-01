<?php
//Connection statement
require_once('kies_jaar.php');

// begin Recordset
$query_report = "SELECT naam, {$opmerkingen} FROM {$evaluatie_tabel} {$_SESSION['zoek_cursus']}";
//echo($query_report);
$report = select_query($query_report);
$totalRows_report = count($report);
// end Recordset

?>
<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<html>
<head>
<title>Report <?php echo $naam; ?></title>
<link href="css/evaluatie.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php echo ("<h2>Report {$naam}</h2>") ?>
<table id="opmerkingen">
   <tr>
      <th width="15%">name:</th>
      <th>remarks:</th>
   </tr>
   <?php
foreach ($report as $rep) {
  if ($rep[$opmerkingen] != NULL)
echo "<tr><td>{$rep['naam']}</td>
         <td>{$rep[$opmerkingen]}</td>
      </tr>";
  }
?>
</table>
</body>
</html>