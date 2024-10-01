<?php
$naam = "availability of single rooms";
$punten = "eenpers";
$opmerkingen = $punten . "_tx";

//Connection statement
require_once('kies_jaar.php');


// begin Recordset
$query_report = "SELECT naam, {$punten}, {$opmerkingen} FROM {$evaluatie_tabel} {$_SESSION['zoek_cursus']}";
$report = $evaluatie->SelectLimit($query_report) or die($evaluatie->ErrorMsg());
$totalRows_report = $report->RecordCount();
// end Recordset

?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?php //PHP ADODB document - made with PHAkt 3.7.0?>
<html>
<head>
<title>Report <?php echo $naam; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="http://www.pellegrina.net/css/pellegrina_stijlen.css" rel="stylesheet" type="text/css">
<link href="css/evaluatie.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php echo ("<h2>Evaluation report {$naam}</h2>
<p>&nbsp;</p>"); ?>
<table id="marks">
<tr>
     <td width="25%"><div align="center">1 = 1e periode </div></td>
      <td width="25%"><div align="center">2 = 2e periode </div></td>
      <td width="25%"><div align="center">3 = beide OK </div></td>
      <td width="25%"><div align="center">4 = geen van beide  </div></td>
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
$report->MoveFirst();
  while (!$report->EOF) {
  if ($report->Fields($punten) != NULL)
echo "<tr><td>{$report->Fields('naam')}</td>
         <td>{$report->Fields($punten)}</td>
         <td>{$report->Fields($opmerkingen)}</td>
      </tr>";
    $report->MoveNext(); 
  }
?>
</table>
</body>
</html>
<?php
$report->Close();
?>