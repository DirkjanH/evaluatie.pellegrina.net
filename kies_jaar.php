<?php // stel php in dat deze fouten weergeeft
//ini_set('display_errors', 1);
error_reporting(E_ALL);

//Connection statement [PDO]
require_once('connections/PDO_connect.php');
require_once $_SERVER["DOCUMENT_ROOT"] . '/vendor/autoload.php';

Kint::$enabled_mode = false;

// zet de tijdzone:
date_default_timezone_set('Europe/Berlin');

// build the form action
$editFormAction = $_SERVER['PHP_SELF'] . (isset($_SERVER['QUERY_STRING']) ? "?" . $_SERVER['QUERY_STRING'] : "");

// Kies jaar
session_start();

if (date('n') <= 6) $jaar = (date('Y') - 1);
else $jaar = date('Y');

if (empty($_GET['jaar']) or $_GET['jaar'] == '') $_SESSION['jaar'] = $jaar;
elseif ($_GET['jaar'] >= 2006 and $_GET['jaar'] <= $jaar) $_SESSION['jaar'] = $_GET['jaar'];
else echo 'Dit is geen geldig jaar!<br>';

if (isset($_SESSION['jaar']) and $_SESSION['jaar'] != '') $evaluatie_tabel = 'evaluatie_' . $_SESSION['jaar'];

if (empty($_SESSION['jaar']) or $_SESSION['jaar'] == 2024) $cursusoffset = 57;

$_SESSION['cursusoffset'] = $cursusoffset;
$_SESSION['cursusnr'] = $_POST['cursusnr'];
$cursusnr = $_POST['cursusnr'] + $cursusoffset;
if ($_SESSION['cursusnr'] > 0) $_SESSION['zoek_cursus'] = "WHERE cursus = {$cursusnr}";
else $_SESSION['zoek_cursus'] = '';

d($_GET, $_REQUEST, $evaluatie_tabel, $_SESSION);
