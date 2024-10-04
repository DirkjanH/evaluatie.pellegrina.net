<?php
// stel php in dat deze fouten weergeeft
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Connection statement
require_once('kies_jaar.php');

// build the form action
$editFormAction = $_SERVER['PHP_SELF'] . (isset($_SERVER['QUERY_STRING']) ? "?" . $_SERVER['QUERY_STRING'] : "");

Kint::$enabled_mode = true;

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

d(date('n'));

d($evaluatie_tabel, $_SESSION);

// begin query Namen
$Namen = select_query("SELECT `index`, naam FROM {$evaluatie_tabel} {$_SESSION['zoek_cursus']} ORDER BY `index`");
// end Recordset

// begin query Aantallen evaluaties per cursus
for ($i = 1; $i <= 5; $i++) {
   $cursusnr = $i + $cursusoffset;
   $cursus[$i] = select_query("SELECT count(*) FROM {$evaluatie_tabel} WHERE cursus = {$cursusnr}", 0);
}
$cursus[0] = array_sum($cursus);
// end Recordset

$aantal_deelnemers = array(0 => 105, 1 => 64, 2 => 41, 3 => 0, 4 => 0, 5 => 0);

foreach ($cursus as $i => $c) {
   if ($aantal_deelnemers[$i] > 0) $procent[$i] = round($c / $aantal_deelnemers[$i] * 100, 0);
   else $procent[$i] = 0;
}

// begin Recordset
$colname__evaluatie = '-1';
if (isset($_POST['index'])) {
   $colname__evaluatie = $_POST['index'];
}
$query_evaluatie = sprintf("SELECT * FROM {$evaluatie_tabel} WHERE `index` = %s", quote($colname__evaluatie));
// echo 'Query evaluatie = '.$query_evaluatie.'<br>';
$evaluatie = select_query($query_evaluatie, 1);
// end Recordset

?>
<!DOCTYPE HTML>
<html>

<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta charset="utf-8">
   <meta HTTP-EQUIV=Refresh CONTENT="900; URL=<?php echo $_SERVER['PHP_SELF']; ?>">

   <link rel="apple-touch-icon" sizes="180x180" href="https://pellegrina.net/Images/Logos/apple-touch-icon.png">
   <link rel="icon" type="image/png" sizes="32x32" href="https://pellegrina.net/Images/Logos/favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="16x16" href="https://pellegrina.net/Images/Logos/favicon-16x16.png">
   <link rel="manifest" href="https://pellegrina.net/Images/Logos/site.webmanifest">
   <link rel="mask-icon" href="https://pellegrina.net/Images/Logos/safari-pinned-tab.svg" color="#5bbad5">
   <link rel="shortcut icon" href="https://pellegrina.net/Images/Logos/favicon.ico">
   <meta name="msapplication-TileColor" content="#da532c">
   <meta name="msapplication-config" content="https://pellegrina.net/Images/Logos/browserconfig.xml">
   <meta name="theme-color" content="#ffffff">

   <title>Evaluations by name</title>
   <script type="text/javascript">
      //<!--
      function Toon(Id) {
         document.getElementById("index").value = Id;
         document.getElementById("vinden").submit();
      }

      function CursusZoek(Nr) {
         document.getElementById("cursusnr").value = Nr;
         document.getElementById("cursus_set").submit();
      }
      -- >
   </script>
   <link href="css/evaluatie.css" rel="stylesheet" type="text/css">
   <style type="text/css">
      div#menu {
         float: left;
         width: 20%;
         min-width: 260px;
      }

      .main {
         float: left;
         width: 80%;
      }

      /* Use a media query to add a breakpoint at 600px: */
      @media screen and (max-width: 600px) {

         #menu,
         .main {
            width: 100%;
            /* The width is 100%, when the viewport is 600px or smaller */
         }
      }
   </style>
</head>

<body>
   <div id="menu" class="w3-container w3-bar-block">
      <h2>Evaluations <?php echo $_SESSION['jaar']; ?></h2>
      <div id="navcontainer">
         <form action="" method="post" name="cursus_set" id="cursus_set">
            <input name="cursus" id="cursus" type="radio" <?php if (isset($_SESSION['cursusnr']) and ($_SESSION['cursusnr'] == "0")) echo 'checked';
                                                            elseif (empty($_SESSION['cursusnr'])) echo 'checked'; ?> onClick="CursusZoek(0)">
            <strong>Received in total:<br>
               <?php echo $cursus[0]; ?> van <?php echo $aantal_deelnemers[0]; ?> = <?php echo $procent[0]; ?>%</strong> <br>
            <?php foreach ($cursus as $i => $c) {
               if ($c > 0 and $i > 0) {
                  $checked = '';
                  if (isset($_SESSION['cursusnr']) and ($_SESSION['cursusnr'] -
                     $cursusoffset == $i)) $checked = 'checked';
                  echo "<input name=\"cursus\" id=\"radio\" type=\"radio\"
        {$checked} onClick=\"CursusZoek({$i})\"> Course {$i}: {$c} van
        {$aantal_deelnemers[$i]} = {$procent[$i]}%<br>";
               }
            }
            ?>
            <input name="cursusnr" id="cursusnr" type="hidden" value="">
         </form>
      </div>
      <h3>Click on a name:</h3>
      <div id="navcontainer">
         <form action="" method="post" name="vinden" id="vinden">
            <?php if (isset($Namen)) {
               foreach ($Namen as $naam) { ?>
                  <a href="javascript:Toon(<?php echo $naam['index']; ?>)" class="w3-bar-item w3-button w3-border-bottom w3-hover-blue w3-small">
                     <?php
                     if ($naam['naam'] != NULL) echo $naam['naam'];
                     else echo "???"; ?>
                  </a>
               <?php   } ?>
            <?php } ?>
            <input type="hidden" name="index" id="index" value="test">
         </form>
      </div>
   </div>
   <div class="w3-container main">
      <table class="w3-table-all" id="opmerkingen">
         <tr>
            <th width="200px;"><b>Name: <?php echo $evaluatie['naam']; ?></b>
            </th>
            <th width="200px;"><b>Course:
                  <?php if ($evaluatie['cursus'] != '') echo ($evaluatie['cursus']); ?>
               </b>
            </th>
            <th><strong>Time: <?php echo $evaluatie['tijd']; ?></strong>
            </th>
         </tr>
         <tr>
            <td>Publicity:
               <?php echo $evaluatie['publiciteit']; ?>
            </td>
            <td>Referee:
               <?php echo $evaluatie['naam_aanbrenger']; ?>
            </td>
            <td>
               <?php echo $evaluatie['publiciteit_tx']; ?>
            </td>
         </tr>
         <tr>
            <td width="25%">Website</td>
            <td colspan="2">(
               <?php echo $evaluatie['website']; ?>)
               <?php echo $evaluatie['website_tx']; ?>
            </td>
         </tr>
         <tr>
            <td width="25%">Information in advance </td>
            <td colspan="2">(
               <?php echo $evaluatie['info_vooraf']; ?>)
               <?php echo $evaluatie['info_vooraf_tx']; ?>
            </td>
         </tr>
         <tr>
            <td width="25%">Course fee </td>
            <td colspan="2">(
               <?php echo $evaluatie['prijs']; ?>)
               <?php echo $evaluatie['prijs_tx']; ?>
            </td>
         </tr>
         <tr>
            <td width="25%">Duration </td>
            <td colspan="2">(
               <?php echo $evaluatie['duur']; ?>)
               <?php echo $evaluatie['duur_tx']; ?>
            </td>
         </tr>
         <tr>
            <td width="25%">Venue </td>
            <td colspan="2">(
               <?php echo $evaluatie['plaats']; ?>)
               <?php echo $evaluatie['plaats_tx']; ?>
            </td>
         </tr>
         <tr>
            <td width="25%">Period </td>
            <td colspan="2">(
               <?php echo $evaluatie['periode']; ?>)
               <?php echo $evaluatie['periode_tx']; ?>
            </td>
         </tr>
         <tr>
            <td width="25%">Relation duration-price </td>
            <td colspan="2">(
               <?php echo $evaluatie['prijsduur']; ?>)
               <?php echo $evaluatie['prijsduur_tx']; ?>
            </td>
         </tr>
         <tr>
            <td>Decisive factors </td>
            <td colspan="2">(
               <?php echo $evaluatie['belangrijk']; ?>)
               <?php echo $evaluatie['belangrijk_tx']; ?>
            </td>
         </tr>
         <tr>
            <td width="25%">Single rooms </td>
            <td colspan="2">(
               <?php echo $evaluatie['eenpers']; ?>)
               <?php echo $evaluatie['eenpers_tx']; ?>
            </td>
         </tr>
         <tr>
            <td width="25%">Preparatory rehearsal </td>
            <td colspan="2">(
               <?php echo $evaluatie['inzeepdag']; ?>)
               <?php echo $evaluatie['inzeepdag_tx']; ?>
            </td>
         </tr>
         <tr>
            <td width="25%">Chamber music </td>
            <td colspan="2">(
               <?php echo $evaluatie['kamermuziek']; ?>)
               <?php echo $evaluatie['kamermuziek_tx']; ?>
            </td>
         </tr>
         <tr>
            <td width="25%">Chamber music coaching </td>
            <td colspan="2">(
               <?php echo $evaluatie['coaching_kamermuziek']; ?>)
               <?php echo $evaluatie['coaching_kamermuziek_tx']; ?>
            </td>
         </tr>
         <tr>
            <td width="25%">Tutti programme </td>
            <td colspan="2">(
               <?php echo $evaluatie['tutti']; ?>)
               <?php echo $evaluatie['tutti_tx']; ?>
            </td>
         </tr>
         <tr>
            <td width="25%">Tutti programme coaching </td>
            <td colspan="2">(
               <?php echo $evaluatie['coaching_tutti']; ?>)
               <?php echo $evaluatie['coaching_tutti_tx']; ?>
            </td>
         </tr>
         <tr>
            <td>Musical &amp; technical level</td>
            <td colspan="2">(
               <?php echo $evaluatie['niveau']; ?>)
               <?php echo $evaluatie['niveau_tx']; ?>
            </td>
         </tr>
         <tr>
            <td>Preparation of parts</td>
            <td colspan="2">(
               <?php echo $evaluatie['professionaliteit']; ?>)
               <?php echo $evaluatie['niveau_tx']; ?>
            </td>
         </tr>
         <tr>
            <td>Lectures &amp; Excursions</td>
            <td colspan="2">(
               <?php echo $evaluatie['lezing']; ?>)
               <?php echo $evaluatie['lezing_tx']; ?>
            </td>
         </tr>
         <tr>
            <td>Accommodation</td>
            <td>
               <?php echo $evaluatie['acc_name']; ?>
            </td>
            <td>(
               <?php echo $evaluatie['accommodatie']; ?>)
               <?php echo $evaluatie['accommodatie_tx']; ?>
            </td>
         </tr>
         <tr>
            <td>Classrooms</td>
            <td colspan="2">(
               <?php echo $evaluatie['werkruimte']; ?>)
               <?php echo $evaluatie['werkruimte_tx']; ?>
            </td>
         </tr>
         <tr>
            <td>Meals</td>
            <td colspan="2">(
               <?php echo $evaluatie['maaltijden']; ?>)
               <?php echo $evaluatie['maaltijden_tx']; ?>
            </td>
         </tr>
         <tr>
            <td>Dinner choice free</td>
            <td colspan="2">(
               <?php echo $evaluatie['diner_vrij']; ?>)
               <?php echo $evaluatie['diner_vrij_tx']; ?>
            </td>
         </tr>
         <tr>
            <td>Preference for venue</td>
            <td colspan="2">(
               <?php echo $evaluatie['plaats']; ?>)
               <?php echo $evaluatie['plaats_tx']; ?>
            </td>
         </tr>
         <tr>
            <td>Info at the venue </td>
            <td colspan="2">(
               <?php echo $evaluatie['info_terplekke']; ?>)
               <?php echo $evaluatie['info_terplekke_tx']; ?>
            </td>
         </tr>
         <tr>
            <td>Daily programme </td>
            <td colspan="2">(
               <?php echo $evaluatie['dagindeling']; ?>)
               <?php echo $evaluatie['dagindeling_tx']; ?>
            </td>
         </tr>
         <tr>
            <td>Work load </td>
            <td colspan="2">(
               <?php echo $evaluatie['zwaarte']; ?>)
               <?php echo $evaluatie['zwaarte_tx']; ?>
            </td>
         </tr>
         <tr>
            <td>Group size </td>
            <td colspan="2">(
               <?php echo $evaluatie['groepsgrootte']; ?>)
               <?php echo $evaluatie['groepsgrootte_tx']; ?>
            </td>
         </tr>
         <tr>
            <td>Children</td>
            <td colspan="2">(
               <?php echo $evaluatie['kinderen']; ?>)
               <?php echo $evaluatie['kinderen_tx']; ?>
            </td>
         </tr>
         <tr>
            <td>Individual lessons</td>
            <td colspan="2">(
               <?php echo $evaluatie['indiv_lessen']; ?>)
               <?php echo $evaluatie['indiv_lessen_tx']; ?>
            </td>
         </tr>
         <tr>
            <td>Solo concertos</td>
            <td colspan="2">(
               <?php echo $evaluatie['solo_spelen']; ?>)
               <?php echo $evaluatie['solo_spelen_tx']; ?>
            </td>
         </tr>
         <tr>
            <td>Mark for La Pellegrina</td>
            <td colspan="2">(
               <?php echo $evaluatie['cijfer_LP']; ?>)
               <?php echo $evaluatie['cijfer_LP_tx']; ?>
            </td>
         </tr>
         <tr>
            <td>Differences with other summer schools </td>
            <td colspan="2">
               <?php echo $evaluatie['verschillen']; ?>
            </td>
         </tr>
         <tr>
            <td>Repertoire wishes </td>
            <td colspan="2">
               <?php echo $evaluatie['rep_wensen']; ?>
            </td>
         </tr>
         <tr>
            <td>General wishes </td>
            <td colspan="2">
               <?php echo $evaluatie['alg_wensen']; ?>
            </td>
         </tr>
         <tr>
            <td>Quote</td>
            <td colspan="2">
               <?php echo $evaluatie['citaat']; ?>
            </td>
         </tr>
         <?php if ($evaluatie['Vacekcham'] != 0 or $evaluatie['Vacekcham_tx'] != null) echo " 	<tr>
      <td>Václav Bernášek</td>
      <td colspan=\"2\">({$evaluatie['Vacekcham']}) {$evaluatie['Vacekcham_tx']}</td>
   </tr>"; ?>
         <?php if ($evaluatie['Boehmova'] != 0 or $evaluatie['Boehmova_tx'] != null) echo " 	<tr>
      <td>Veronika Böhmová</td>
      <td colspan=\"2\">({$evaluatie['Boehmova']}) {$evaluatie['Boehmova_tx']}</td>
   </tr>"; ?>
         <?php if ($evaluatie['Dolezal'] != 0 or $evaluatie['Dolezal_tx'] != null) echo " 	<tr>
      <td>Štěpán Doležal</td>
      <td colspan=\"2\">({$evaluatie['Dolezal']}) {$evaluatie['Dolezal_tx']}</td>
   </tr>"; ?>
         <?php if ($evaluatie['Fiser'] != 0 or $evaluatie['Fiser_tx'] != null) echo " 	<tr>
      <td>Jakub Fišer</td>
      <td colspan=\"2\">({$evaluatie['Fiser']}) {$evaluatie['Fiser_tx']}</td>
   </tr>"; ?>
         <?php if ($evaluatie['Horringa_chamber'] != 0 or $evaluatie['Horringa_chamber_tx'] != null) echo " 	<tr>
      <td>Dirkjan Horringa</td>
      <td colspan=\"2\">({$evaluatie['Horringa_chamber']}) {$evaluatie['Horringa_chamber_tx']}</td>
   </tr>"; ?>
         <?php if ($evaluatie['Hula'] != 0 or $evaluatie['Hula_tx'] != null) echo " 	<tr>
      <td>Pavel Hůla</td>
      <td colspan=\"2\">({$evaluatie['Hula']}) {$evaluatie['Hula_tx']}</td>
   </tr>"; ?>
         <?php if ($evaluatie['Hulova'] != 0 or $evaluatie['Hulova_tx'] != null) echo " 	<tr>
      <td>Lucie Hůlová</td>
      <td colspan=\"2\">({$evaluatie['Hulova']}) {$evaluatie['Hulova_tx']}</td>
   </tr>"; ?>
         <?php if ($evaluatie['Jezek'] != 0 or $evaluatie['Jezek_tx'] != null) echo " 	<tr>
      <td>Štěpán Ježek</td>
      <td colspan=\"2\">({$evaluatie['Jezek']}) {$evaluatie['Jezek_tx']}</td>
   </tr>"; ?>
         <?php if ($evaluatie['Nykryn'] != 0 or $evaluatie['Nykryn_tx'] != null) echo " 	<tr>
      <td>Jan Nykrýn</td>
      <td colspan=\"2\">({$evaluatie['Nykryn']}) {$evaluatie['Nykryn_tx']}</td>
   </tr>"; ?>
         <?php if ($evaluatie['Kekula'] != 0 or $evaluatie['Kekula_tx'] != null) echo " 	<tr>
      <td>Josef Kekula</td>
      <td colspan=\"2\">({$evaluatie['Kekula']}) {$evaluatie['Kekula_tx']}</td>
   </tr>"; ?>
         <?php if ($evaluatie['Pinkas'] != 0 or $evaluatie['Pinkas_tx'] != null) echo " 	<tr>
      <td>Jiří Pinkas</td>
      <td colspan=\"2\">({$evaluatie['Pinkas']}) {$evaluatie['Pinkas_tx']}</td>
   </tr>"; ?>
         <?php if ($evaluatie['Sedlak'] != 0 or $evaluatie['Sedlak_tx'] != null) echo " 	<tr>
      <td>Martin Sedlák</td>
      <td colspan=\"2\">({$evaluatie['Sedlak']}) {$evaluatie['Sedlak_tx']}</td>
   </tr>"; ?>
         <?php if ($evaluatie['Slechta'] != 0 or $evaluatie['Slechta_tx'] != null) echo " 	<tr>
      <td>Jiří Šlechta</td>
      <td colspan=\"2\">({$evaluatie['Slechta']}) {$evaluatie['Slechta_tx']}</td>
   </tr>"; ?>

         <?php if ($evaluatie['Horringa1'] != 0 or $evaluatie['Horringa1_tx'] != null) echo " 	<tr>
      <td>Dirkjan Horringa (baroque) </td>
      <td colspan=\"2\">({$evaluatie['Horringa1']}) {$evaluatie['Horringa1_tx']}</td>
   </tr>"; ?>
         <?php if ($evaluatie['Huizinga'] != 0 or $evaluatie['Huizinga_tx'] != null) echo " 	<tr>
      <td>Femke Huizinga</td>
      <td colspan=\"2\">({$evaluatie['Huizinga']}) {$evaluatie['Huizinga_tx']}</td>
   </tr>"; ?>
         <?php if ($evaluatie['Lindeijer'] != 0 or $evaluatie['Lindeijer_tx'] != null) echo " 	<tr>
      <td>Hanna Lindeijer</td>
      <td colspan=\"2\">({$evaluatie['Lindeijer']}) {$evaluatie['Lindeijer_tx']}</td>
   </tr>"; ?>
         <?php if ($evaluatie['Rodriguez'] != 0 or $evaluatie['Rodriguez_tx'] != null) echo " 	<tr>
      <td>Ricardo Rodriguez Miranda</td>
      <td colspan=\"2\">({$evaluatie['Rodriguez']}) {$evaluatie['Rodriguez_tx']}</td>
   </tr>"; ?>
         <?php if ($evaluatie['Sandler1'] != 0 or $evaluatie['Sandler1_tx'] != null) echo " 	<tr>
      <td>Mitchell Sandler (baroque)</td>
      <td colspan=\"2\">({$evaluatie['Sandler1']}) {$evaluatie['Sandler1_tx']}</td>
   </tr>"; ?>
         <?php if ($evaluatie['Valorz'] != 0 or $evaluatie['Valorz_tx'] != null) echo " 	<tr>
      <td>Edoardo Valorz</td>
      <td colspan=\"2\">({$evaluatie['Valorz']}) {$evaluatie['Valorz_tx']}</td>
   </tr>"; ?>


         <?php if ($evaluatie['Bernaskova3'] != 0 or $evaluatie['Bernaskova3_tx'] != null) echo " 	<tr>
      <td>Martina Bernášková (romantic) </td>
      <td colspan=\"2\">({$evaluatie['Bernaskova3']}) {$evaluatie['Bernaskova3_tx']}</td>
   </tr>"; ?>
         <?php if ($evaluatie['BernasekP'] != 0 or $evaluatie['BernasekP_tx'] != null) echo " 	<tr>
      <td>Petr Bernášek </td>
      <td colspan=\"2\">({$evaluatie['BernasekP']}) {$evaluatie['BernasekP_tx']}</td>
   </tr>"; ?>
         <?php if ($evaluatie['Horringa3'] != 0 or $evaluatie['Horringa3_tx'] != null) echo " 	<tr>
      <td>Dirkjan Horringa (romantic) </td>
      <td colspan=\"2\">({$evaluatie['Horringa3']}) {$evaluatie['Horringa3_tx']}</td>
   </tr>"; ?>
         <?php if ($evaluatie['Horejsi'] != 0 or $evaluatie['Horejsi_tx'] != null) echo " 	<tr>
      <td>Pavel Hořejší</td>
      <td colspan=\"2\">({$evaluatie['Horejsi']}) {$evaluatie['Horejsi_tx']}</td>
   </tr>"; ?>
         <?php if ($evaluatie['Novacek'] != 0 or $evaluatie['Novacek_tx'] != null) echo " 	<tr>
      <td>Libor Nováček</td>
      <td colspan=\"2\">({$evaluatie['Novacek']}) {$evaluatie['Novacek_tx']}</td>
   </tr>"; ?>
         <?php if ($evaluatie['Sandler3'] != 0 or $evaluatie['Sandler3_tx'] != null) echo " 	<tr>
      <td>Mitchell Sandler (romantic)</td>
      <td colspan=\"2\">({$evaluatie['Sandler3']}) {$evaluatie['Sandler3_tx']}</td>
   </tr>"; ?>
         <?php if ($evaluatie['Sternadel'] != 0 or $evaluatie['Sternadel_tx'] != null) echo " 	<tr>
      <td>Rudolf Sternadel</td>
      <td colspan=\"2\">({$evaluatie['Sternadel']}) {$evaluatie['Sternadel_tx']}</td>
   </tr>"; ?>
         <?php if ($evaluatie['Vlasankova'] != 0 or $evaluatie['Vlasankova_tx'] != null) echo " 	<tr>
      <td>Jitka Vlašánková</td>
      <td colspan=\"2\">({$evaluatie['Vlasankova']}) {$evaluatie['Vlasankova_tx']}</td>
   </tr>"; ?>

         <?php if ($evaluatie['ass_1'] != 0 or $evaluatie['ass_1_tx'] != null) echo " 	<tr>
      <td>organiser Milka</td>
      <td colspan=\"2\">({$evaluatie['ass_1']}) {$evaluatie['ass_1_tx']}</td>
   </tr>"; ?>
         <?php if ($evaluatie['ass_2'] != 0 or $evaluatie['ass_2_tx'] != null) echo " 	<tr>
      <td>assistant Jurgen</td>
      <td colspan=\"2\">({$evaluatie['ass_2']}) {$evaluatie['ass_2_tx']}</td>
   </tr>"; ?>
         <?php if ($evaluatie['ass_3'] != 0 or $evaluatie['ass_3_tx'] != null) echo " 	<tr>
      <td>assistants Milka, Madoka, Jana & Anička</td>
      <td colspan=\"2\">({$evaluatie['ass_3']}) {$evaluatie['ass_3_tx']}</td>
   </tr>"; ?>
      </table>
      <p>&nbsp;</p>
   </div>
</body>

</html>