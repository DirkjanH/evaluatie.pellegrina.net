<?php
// stel php in dat deze fouten weergeeft
ini_set('display_errors', 1);
error_reporting(E_ALL);

$naam = "publicity";
$punten = "publiciteit";
require_once('genereer_rapport_1a.php');?>
<tr>
	<th><i>name:</i></td>
	<th><i>contact via:</i></td>
	<th><i>remarks:</i></td>
	<th><i>name of referee:</i></td>
</tr>
<?php require_once('genereer_rapport_2a.php');?>