<?php
//Connection statement
require_once('kies_jaar.php');

function e($value)
{
   return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

// Standaardwaarden voorkomen waarschuwingen bij lege of mislukte queries.
$Namen = array();
$namenPerCursus = array(1 => array(), 2 => array());
$evaluationFields = array(
   'naam',
   'cursus',
   'tijd',
   'publiciteit',
   'naam_aanbrenger',
   'publiciteit_tx',
   'website',
   'website_tx',
   'info_vooraf',
   'info_vooraf_tx',
   'prijs',
   'prijs_tx',
   'duur',
   'duur_tx',
   'plaats',
   'plaats_tx',
   'periode',
   'periode_tx',
   'prijsduur',
   'prijsduur_tx',
   'belangrijk',
   'belangrijk_tx',
   'eenpers',
   'eenpers_tx',
   'inzeepdag',
   'inzeepdag_tx',
   'kamermuziek',
   'kamermuziek_tx',
   'coaching_kamermuziek',
   'coaching_kamermuziek_tx',
   'tutti',
   'tutti_tx',
   'coaching_tutti',
   'coaching_tutti_tx',
   'niveau',
   'niveau_tx',
   'professionaliteit',
   'lezing',
   'lezing_tx',
   'acc_name',
   'accommodatie',
   'accommodatie_tx',
   'werkruimte',
   'werkruimte_tx',
   'maaltijden',
   'maaltijden_tx',
   'diner_vrij',
   'diner_vrij_tx',
   'info_terplekke',
   'info_terplekke_tx',
   'dagindeling',
   'dagindeling_tx',
   'zwaarte',
   'zwaarte_tx',
   'groepsgrootte',
   'groepsgrootte_tx',
   'kinderen',
   'kinderen_tx',
   'indiv_lessen',
   'indiv_lessen_tx',
   'solo_spelen',
   'solo_spelen_tx',
   'cijfer_LP',
   'cijfer_LP_tx',
   'verschillen',
   'rep_wensen',
   'alg_wensen',
   'citaat',
   'Vacekcham',
   'Vacekcham_tx',
   'Boehmova',
   'Boehmova_tx',
   'Dolezal',
   'Dolezal_tx',
   'Fiser',
   'Fiser_tx',
   'Horringa_chamber',
   'Horringa_chamber_tx',
   'Hula',
   'Hula_tx',
   'Hulova',
   'Hulova_tx',
   'Jezek',
   'Jezek_tx',
   'Nykryn',
   'Nykryn_tx',
   'Kekula',
   'Kekula_tx',
   'Pinkas',
   'Pinkas_tx',
   'Sedlak',
   'Sedlak_tx',
   'Slechta',
   'Slechta_tx',
   'Horringa1',
   'Horringa1_tx',
   'Huizinga',
   'Huizinga_tx',
   'Lindeijer',
   'Lindeijer_tx',
   'Rodriguez',
   'Rodriguez_tx',
   'Sandler1',
   'Sandler1_tx',
   'Valorz',
   'Valorz_tx',
   'Bernaskova3',
   'Bernaskova3_tx',
   'BernasekP',
   'BernasekP_tx',
   'Horringa3',
   'Horringa3_tx',
   'Horejsi',
   'Horejsi_tx',
   'Novacek',
   'Novacek_tx',
   'Sandler3',
   'Sandler3_tx',
   'Sternadel',
   'Sternadel_tx',
   'Vlasankova',
   'Vlasankova_tx',
   'ass_1',
   'ass_1_tx',
   'ass_2',
   'ass_2_tx',
   'ass_3',
   'ass_3_tx'
);
$evaluatie = array_fill_keys($evaluationFields, '');
$cursus = array_fill(0, 6, 0);
$procent = array_fill(0, 6, 0);
$tableName = isset($evaluatie_tabel) && preg_match('/^evaluatie_[0-9]{4}$/', $evaluatie_tabel)
   ? $evaluatie_tabel
   : null;
$courseNumber = filter_var($_SESSION['cursusnr'] ?? 0, FILTER_VALIDATE_INT);
$courseFilter = ($courseNumber !== false && $courseNumber >= 1 && $courseNumber <= 5)
   ? "WHERE cursus = {$courseNumber}"
   : '';

// Zoek de namen die bij de gekozen cursus horen.
if ($tableName !== null) {
   $NamenResult = select_query("SELECT `index`, naam, cursus FROM {$tableName} {$courseFilter} ORDER BY cursus, `index`");
   if (is_array($NamenResult)) $Namen = $NamenResult;
   foreach ($Namen as $naam) {
      $naamCursus = filter_var($naam['cursus'] ?? null, FILTER_VALIDATE_INT);
      if ($naamCursus === 1 || $naamCursus === 2) $namenPerCursus[$naamCursus][] = $naam;
   }
   if (function_exists('d')) d($Namen);
}

// Bereken het aantal evaluaties en het percentage per cursus.
for ($i = 1; $i <= 5; $i++) {
   $cursusnr = $i;
   if ($tableName !== null) {
      $count = select_query("SELECT count(*) FROM {$tableName} WHERE cursus = {$cursusnr}", 0);
      $cursus[$i] = is_numeric($count) ? (int) $count : 0;
   }
}
$cursus[0] = array_sum($cursus);

$aantal_deelnemers = array(0 => 106, 1 => 61, 2 => 45, 3 => 0, 4 => 0, 5 => 0);

foreach ($cursus as $i => $c) {
   if ($aantal_deelnemers[$i] > 0) $procent[$i] = round($c / $aantal_deelnemers[$i] * 100, 0);
   else $procent[$i] = 0;
}

// Haal de geselecteerde evaluatie op.
$selectedIndex = filter_input(INPUT_POST, 'index', FILTER_VALIDATE_INT);
if ($selectedIndex !== false && $selectedIndex !== null && $selectedIndex >= 0 && $tableName !== null) {
   $query_evaluatie = "SELECT * FROM {$tableName} WHERE `index` = {$selectedIndex}";
   if (function_exists('d')) d($query_evaluatie);
   $selectedEvaluation = select_query($query_evaluatie, 1);
   if (is_array($selectedEvaluation)) {
      $evaluatie = array_merge($evaluatie, $selectedEvaluation);
      array_walk($evaluatie, function (&$value) {
         $value = e($value);
      });
   }
}

?>
<!DOCTYPE HTML>
<html>

<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta charset="utf-8">
   <meta HTTP-EQUIV=Refresh
      CONTENT="900; URL=<?php echo e($_SERVER['PHP_SELF'] ?? 'evaluation_name.php'); ?>">
   <link rel="apple-touch-icon" sizes="180x180"
      href="https://pellegrina.net/Images/Logos/apple-touch-icon.png">
   <link rel="icon" type="image/png" sizes="32x32"
      href="https://pellegrina.net/Images/Logos/favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="16x16"
      href="https://pellegrina.net/Images/Logos/favicon-16x16.png">
   <link rel="manifest"
      href="https://pellegrina.net/Images/Logos/site.webmanifest">
   <link rel="mask-icon"
      href="https://pellegrina.net/Images/Logos/safari-pinned-tab.svg"
      color="#5bbad5">
   <link rel="shortcut icon"
      href="https://pellegrina.net/Images/Logos/favicon.ico">
   <meta name="msapplication-TileColor" content="#da532c">
   <meta name="msapplication-config"
      content="https://pellegrina.net/Images/Logos/browserconfig.xml">
   <meta name="theme-color" content="#ffffff">
   <title>Evaluations by name</title>
   <script type="text/javascript">
      function Toon(Id) {
         document.getElementById("index").value = Id;
         document.getElementById("vinden").submit();
      }

      function CursusZoek(Nr) {
         document.getElementById("cursusnr").value = Nr;
         document.getElementById("cursus_set").submit();
      }
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
      <h2>Evaluations <?php echo e($_SESSION['jaar'] ?? ''); ?></h2>
      <div id="navcontainer">
         <form action="" method="post" name="cursus_set" id="cursus_set">
            <input name="cursus" id="cursus" type="radio" <?php if (isset($_SESSION['cursusnr']) and ($_SESSION['cursusnr'] == "0")) echo 'checked';
                                                            elseif (empty($_SESSION['cursusnr'])) echo 'checked'; ?>
               onClick="CursusZoek(0)">
            <strong>Received in total:<br> <?php echo $cursus[0]; ?> van
               <?php echo $aantal_deelnemers[0]; ?> =
               <?php echo $procent[0]; ?>%</strong> <br> <?php foreach ($cursus as $i => $c) {
                                                            if ($c > 0 and $i > 0) {
                                                               $checked = '';
                                                               if (isset($_SESSION['cursusnr']) and ($_SESSION['cursusnr'] == $i)) $checked = 'checked';
                                                               echo "<input name=\"cursus\" id=\"radio\" type=\"radio\"
        {$checked} onClick=\"CursusZoek({$i})\"> Course {$i}: {$c} van
        {$aantal_deelnemers[$i]} = {$procent[$i]}%<br>";
                                                            }
                                                         }
                                                         ?> <input
               name="cursusnr" id="cursusnr" type="hidden" value="">
         </form>
      </div>
      <h3>Click on a name:</h3>
      <div id="navcontainer">
         <form action="" method="post" name="vinden" id="vinden"> <?php foreach ($namenPerCursus as $naamCursus => $namen) {
                                                                     if (count($namen) === 0) continue;
                                                                     if ($courseNumber === 0) { ?> <strong>Course
                     <?php echo $naamCursus; ?></strong><br> <?php }
                                                                     foreach ($namen as $naam) {
                                                                        $naamIndex = filter_var($naam['index'] ?? null, FILTER_VALIDATE_INT);
                                                                        if ($naamIndex === false) continue;
                                                               ?> <a href="javascript:Toon(<?php echo $naamIndex; ?>)"
                     class="w3-bar-item w3-button w3-border-bottom w3-hover-blue w3-small"> <?php
                                                                                             if (($naam['naam'] ?? null) != NULL) echo e($naam['naam']);
                                                                                             else echo "???"; ?> </a> <?php }
                                                                     if ($courseNumber === 0 && $naamCursus === 1 && count($namenPerCursus[2]) > 0) echo '<br>';
                                                                  } ?> <input type="hidden" name="index" id="index">
         </form>
      </div>
   </div>
   <div class="w3-container main">
      <table class="w3-table-all" id="opmerkingen">
         <tr>
            <th width="200px;"><b>Name:
                  <?php echo $evaluatie['naam']; ?></b>
            </th>
            <th width="200px;"><b>Course:
                  <?php if ($evaluatie['cursus'] != '') echo ($evaluatie['cursus']); ?>
               </b>
            </th>
            <th><strong>Time: <?php echo $evaluatie['tijd']; ?></strong>
            </th>
         </tr>
         <tr>
            <td>Publicity: <?php echo $evaluatie['publiciteit']; ?> </td>
            <td>Referee: <?php echo $evaluatie['naam_aanbrenger']; ?> </td>
            <td> <?php echo $evaluatie['publiciteit_tx']; ?> </td>
         </tr>
         <tr>
            <td width="25%">Website</td>
            <td colspan="2">( <?php echo $evaluatie['website']; ?>)
               <?php echo $evaluatie['website_tx']; ?> </td>
         </tr>
         <tr>
            <td width="25%">Information in advance </td>
            <td colspan="2">( <?php echo $evaluatie['info_vooraf']; ?>)
               <?php echo $evaluatie['info_vooraf_tx']; ?> </td>
         </tr>
         <tr>
            <td width="25%">Course fee </td>
            <td colspan="2">( <?php echo $evaluatie['prijs']; ?>)
               <?php echo $evaluatie['prijs_tx']; ?> </td>
         </tr>
         <tr>
            <td width="25%">Duration </td>
            <td colspan="2">( <?php echo $evaluatie['duur']; ?>)
               <?php echo $evaluatie['duur_tx']; ?> </td>
         </tr>
         <tr>
            <td width="25%">Venue </td>
            <td colspan="2">( <?php echo $evaluatie['plaats']; ?>)
               <?php echo $evaluatie['plaats_tx']; ?> </td>
         </tr>
         <tr>
            <td width="25%">Period </td>
            <td colspan="2">( <?php echo $evaluatie['periode']; ?>)
               <?php echo $evaluatie['periode_tx']; ?> </td>
         </tr>
         <tr>
            <td width="25%">Relation duration-price </td>
            <td colspan="2">( <?php echo $evaluatie['prijsduur']; ?>)
               <?php echo $evaluatie['prijsduur_tx']; ?> </td>
         </tr>
         <tr>
            <td>Decisive factors </td>
            <td colspan="2">( <?php echo $evaluatie['belangrijk']; ?>)
               <?php echo $evaluatie['belangrijk_tx']; ?> </td>
         </tr>
         <tr>
            <td width="25%">Single rooms </td>
            <td colspan="2">( <?php echo $evaluatie['eenpers']; ?>)
               <?php echo $evaluatie['eenpers_tx']; ?> </td>
         </tr>
         <tr>
            <td width="25%">Preparatory rehearsal </td>
            <td colspan="2">( <?php echo $evaluatie['inzeepdag']; ?>)
               <?php echo $evaluatie['inzeepdag_tx']; ?> </td>
         </tr>
         <tr>
            <td width="25%">Chamber music </td>
            <td colspan="2">( <?php echo $evaluatie['kamermuziek']; ?>)
               <?php echo $evaluatie['kamermuziek_tx']; ?> </td>
         </tr>
         <tr>
            <td width="25%">Chamber music coaching </td>
            <td colspan="2">(
               <?php echo $evaluatie['coaching_kamermuziek']; ?>)
               <?php echo $evaluatie['coaching_kamermuziek_tx']; ?> </td>
         </tr>
         <tr>
            <td width="25%">Tutti programme </td>
            <td colspan="2">( <?php echo $evaluatie['tutti']; ?>)
               <?php echo $evaluatie['tutti_tx']; ?> </td>
         </tr>
         <tr>
            <td width="25%">Tutti programme coaching </td>
            <td colspan="2">( <?php echo $evaluatie['coaching_tutti']; ?>)
               <?php echo $evaluatie['coaching_tutti_tx']; ?> </td>
         </tr>
         <tr>
            <td>Musical &amp; technical level</td>
            <td colspan="2">( <?php echo $evaluatie['niveau']; ?>)
               <?php echo $evaluatie['niveau_tx']; ?> </td>
         </tr>
         <tr>
            <td>Preparation of parts</td>
            <td colspan="2">(
               <?php echo $evaluatie['professionaliteit']; ?>)
               <?php echo $evaluatie['niveau_tx']; ?> </td>
         </tr>
         <tr>
            <td>Lectures &amp; Excursions</td>
            <td colspan="2">( <?php echo $evaluatie['lezing']; ?>)
               <?php echo $evaluatie['lezing_tx']; ?> </td>
         </tr>
         <tr>
            <td>Accommodation</td>
            <td> <?php echo $evaluatie['acc_name']; ?> </td>
            <td>( <?php echo $evaluatie['accommodatie']; ?>)
               <?php echo $evaluatie['accommodatie_tx']; ?> </td>
         </tr>
         <tr>
            <td>Classrooms</td>
            <td colspan="2">( <?php echo $evaluatie['werkruimte']; ?>)
               <?php echo $evaluatie['werkruimte_tx']; ?> </td>
         </tr>
         <tr>
            <td>Meals</td>
            <td colspan="2">( <?php echo $evaluatie['maaltijden']; ?>)
               <?php echo $evaluatie['maaltijden_tx']; ?> </td>
         </tr>
         <tr>
            <td>Dinner choice free</td>
            <td colspan="2">( <?php echo $evaluatie['diner_vrij']; ?>)
               <?php echo $evaluatie['diner_vrij_tx']; ?> </td>
         </tr>
         <tr>
            <td>Preference for venue</td>
            <td colspan="2">( <?php echo $evaluatie['plaats']; ?>)
               <?php echo $evaluatie['plaats_tx']; ?> </td>
         </tr>
         <tr>
            <td>Info at the venue </td>
            <td colspan="2">( <?php echo $evaluatie['info_terplekke']; ?>)
               <?php echo $evaluatie['info_terplekke_tx']; ?> </td>
         </tr>
         <tr>
            <td>Daily programme </td>
            <td colspan="2">( <?php echo $evaluatie['dagindeling']; ?>)
               <?php echo $evaluatie['dagindeling_tx']; ?> </td>
         </tr>
         <tr>
            <td>Work load </td>
            <td colspan="2">( <?php echo $evaluatie['zwaarte']; ?>)
               <?php echo $evaluatie['zwaarte_tx']; ?> </td>
         </tr>
         <tr>
            <td>Group size </td>
            <td colspan="2">( <?php echo $evaluatie['groepsgrootte']; ?>)
               <?php echo $evaluatie['groepsgrootte_tx']; ?> </td>
         </tr>
         <tr>
            <td>Children</td>
            <td colspan="2">( <?php echo $evaluatie['kinderen']; ?>)
               <?php echo $evaluatie['kinderen_tx']; ?> </td>
         </tr>
         <tr>
            <td>Individual lessons</td>
            <td colspan="2">( <?php echo $evaluatie['indiv_lessen']; ?>)
               <?php echo $evaluatie['indiv_lessen_tx']; ?> </td>
         </tr>
         <tr>
            <td>Solo concertos</td>
            <td colspan="2">( <?php echo $evaluatie['solo_spelen']; ?>)
               <?php echo $evaluatie['solo_spelen_tx']; ?> </td>
         </tr>
         <tr>
            <td>Mark for La Pellegrina</td>
            <td colspan="2">( <?php echo $evaluatie['cijfer_LP']; ?>)
               <?php echo $evaluatie['cijfer_LP_tx']; ?> </td>
         </tr>
         <tr>
            <td>Differences with other summer schools </td>
            <td colspan="2"> <?php echo $evaluatie['verschillen']; ?> </td>
         </tr>
         <tr>
            <td>Repertoire wishes </td>
            <td colspan="2"> <?php echo $evaluatie['rep_wensen']; ?> </td>
         </tr>
         <tr>
            <td>General wishes </td>
            <td colspan="2"> <?php echo $evaluatie['alg_wensen']; ?> </td>
         </tr>
         <tr>
            <td>Quote</td>
            <td colspan="2"> <?php echo $evaluatie['citaat']; ?> </td>
         </tr> <?php if ($evaluatie['Horringa1'] != 0 or $evaluatie['Horringa1_tx'] != null) echo " 	<tr>
      <td>Dirkjan Horringa (baroque) </td>
      <td colspan=\"2\">({$evaluatie['Horringa1']}) {$evaluatie['Horringa1_tx']}</td>
   </tr>"; ?> <?php if ($evaluatie['Huizinga'] != 0 or $evaluatie['Huizinga_tx'] != null) echo " 	<tr>
      <td>Femke Huizinga</td>
      <td colspan=\"2\">({$evaluatie['Huizinga']}) {$evaluatie['Huizinga_tx']}</td>
   </tr>"; ?> <?php if ($evaluatie['Lindeijer'] != 0 or $evaluatie['Lindeijer_tx'] != null) echo " 	<tr>
      <td>Hanna Lindeijer</td>
      <td colspan=\"2\">({$evaluatie['Lindeijer']}) {$evaluatie['Lindeijer_tx']}</td>
   </tr>"; ?> <?php if ($evaluatie['Rodriguez'] != 0 or $evaluatie['Rodriguez_tx'] != null) echo " 	<tr>
      <td>Ricardo Rodriguez Miranda</td>
      <td colspan=\"2\">({$evaluatie['Rodriguez']}) {$evaluatie['Rodriguez_tx']}</td>
   </tr>"; ?> <?php if ($evaluatie['Sandler1'] != 0 or $evaluatie['Sandler1_tx'] != null) echo " 	<tr>
      <td>Mitchell Sandler (baroque)</td>
      <td colspan=\"2\">({$evaluatie['Sandler1']}) {$evaluatie['Sandler1_tx']}</td>
   </tr>"; ?> <?php if ($evaluatie['Valorz'] != 0 or $evaluatie['Valorz_tx'] != null) echo " 	<tr>
      <td>Edoardo Valorz</td>
      <td colspan=\"2\">({$evaluatie['Valorz']}) {$evaluatie['Valorz_tx']}</td>
   </tr>"; ?> <?php if ($evaluatie['Bernaskova3'] != 0 or $evaluatie['Bernaskova3_tx'] != null) echo " 	<tr>
      <td>Martina Bernášková (romantic) </td>
      <td colspan=\"2\">({$evaluatie['Bernaskova3']}) {$evaluatie['Bernaskova3_tx']}</td>
   </tr>"; ?> <?php if ($evaluatie['BernasekP'] != 0 or $evaluatie['BernasekP_tx'] != null) echo " 	<tr>
      <td>Petr Bernášek </td>
      <td colspan=\"2\">({$evaluatie['BernasekP']}) {$evaluatie['BernasekP_tx']}</td>
   </tr>"; ?> <?php if ($evaluatie['Horringa3'] != 0 or $evaluatie['Horringa3_tx'] != null) echo " 	<tr>
      <td>Dirkjan Horringa (romantic) </td>
      <td colspan=\"2\">({$evaluatie['Horringa3']}) {$evaluatie['Horringa3_tx']}</td>
   </tr>"; ?> <?php if ($evaluatie['Horejsi'] != 0 or $evaluatie['Horejsi_tx'] != null) echo " 	<tr>
      <td>Pavel Hořejší</td>
      <td colspan=\"2\">({$evaluatie['Horejsi']}) {$evaluatie['Horejsi_tx']}</td>
   </tr>"; ?> <?php if ($evaluatie['Novacek'] != 0 or $evaluatie['Novacek_tx'] != null) echo " 	<tr>
      <td>Libor Nováček</td>
      <td colspan=\"2\">({$evaluatie['Novacek']}) {$evaluatie['Novacek_tx']}</td>
   </tr>"; ?> <?php if ($evaluatie['Sandler3'] != 0 or $evaluatie['Sandler3_tx'] != null) echo " 	<tr>
      <td>Mitchell Sandler (romantic)</td>
      <td colspan=\"2\">({$evaluatie['Sandler3']}) {$evaluatie['Sandler3_tx']}</td>
   </tr>"; ?> <?php if ($evaluatie['Sternadel'] != 0 or $evaluatie['Sternadel_tx'] != null) echo " 	<tr>
      <td>Rudolf Sternadel</td>
      <td colspan=\"2\">({$evaluatie['Sternadel']}) {$evaluatie['Sternadel_tx']}</td>
   </tr>"; ?> <?php if ($evaluatie['Vlasankova'] != 0 or $evaluatie['Vlasankova_tx'] != null) echo " 	<tr>
      <td>Jitka Vlašánková</td>
      <td colspan=\"2\">({$evaluatie['Vlasankova']}) {$evaluatie['Vlasankova_tx']}</td>
   </tr>"; ?> <?php if ($evaluatie['ass_1'] != 0 or $evaluatie['ass_1_tx'] != null) echo " 	<tr>
      <td>organiser Milka</td>
      <td colspan=\"2\">({$evaluatie['ass_1']}) {$evaluatie['ass_1_tx']}</td>
   </tr>"; ?> <?php if ($evaluatie['ass_2'] != 0 or $evaluatie['ass_2_tx'] != null) echo " 	<tr>
      <td>assistant Jurgen</td>
      <td colspan=\"2\">({$evaluatie['ass_2']}) {$evaluatie['ass_2_tx']}</td>
   </tr>"; ?> <?php if ($evaluatie['ass_3'] != 0 or $evaluatie['ass_3_tx'] != null) echo " 	<tr>
      <td>organizer Milka</td>
      <td colspan=\"2\">({$evaluatie['ass_3']}) {$evaluatie['ass_3_tx']}</td>
   </tr>"; ?>
      </table>
      <p>&nbsp;</p>
   </div>
</body>

</html>