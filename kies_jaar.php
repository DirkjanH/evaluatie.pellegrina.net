<?php // stel php in dat deze fouten weergeeft
//ini_set('display_errors', 1);
error_reporting(E_ALL);

//Connection statement [PDO]
require_once('connections/PDO_connect.php');
require_once $_SERVER["DOCUMENT_ROOT"] . '/vendor/autoload.php';

if (class_exists('Kint')) Kint::$enabled_mode = false;

// zet de tijdzone:
date_default_timezone_set('Europe/Berlin');

// build the form action
$editFormAction = $_SERVER['PHP_SELF'] . (isset($_SERVER['QUERY_STRING']) ? "?" . $_SERVER['QUERY_STRING'] : "");

// Kies het jaar en de cursus uit de invoer.
session_start();
$evaluatie_tabel = '';

if (date('n') <= 6) $jaar = (date('Y') - 1);
else $jaar = date('Y');

// Controleer het jaar voordat het in de tabelnaam terechtkomt.
$gekozenJaar = filter_input(INPUT_GET, 'jaar', FILTER_VALIDATE_INT);
if ($gekozenJaar === false or $gekozenJaar === null) $_SESSION['jaar'] = $jaar;
elseif ($gekozenJaar >= 2006 and $gekozenJaar <= $jaar) $_SESSION['jaar'] = $gekozenJaar;
else echo 'Dit is geen geldig jaar!<br>';

if (isset($_SESSION['jaar']) and $_SESSION['jaar'] != '') $evaluatie_tabel = 'evaluatie_' . $_SESSION['jaar'];
if (empty($_POST['cursusnr']) and empty($_SESSION['cursusnr'])) $_SESSION['cursusnr'] = 0;
if (isset($_POST['cursusnr'])) {
    $gekozenCursus = filter_var($_POST['cursusnr'], FILTER_VALIDATE_INT);
    $_SESSION['cursusnr'] = ($gekozenCursus !== false and $gekozenCursus >= 1 and $gekozenCursus <= 5)
        ? $gekozenCursus
        : 0;
}
if (!isset($_SESSION['cursusnr']) or !is_numeric($_SESSION['cursusnr']) or $_SESSION['cursusnr'] < 0 or $_SESSION['cursusnr'] > 5) {
    $_SESSION['cursusnr'] = 0;
}
if ($_SESSION['cursusnr'] > 0) $_SESSION['zoek_cursus'] = "WHERE cursus = " . (int) $_SESSION['cursusnr'];
else $_SESSION['zoek_cursus'] = '';

if (function_exists('d')) d($_GET, $_POST, $evaluatie_tabel, $_SESSION);
