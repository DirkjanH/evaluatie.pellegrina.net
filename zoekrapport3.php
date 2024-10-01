<?php
session_start();

$_SESSION['cursusnr'] = 3;
$_SESSION['cursus'] = $_SESSION['cursusnr'] + $_SESSION['cursusoffset'];
$_SESSION['zoek_cursus'] = "WHERE cursus = {$_SESSION['cursus']}";
$_SESSION['jaar'] = 2017;
 
/* echo '<pre>';
print_r($_POST);
print_r($_SESSION);
echo '</pre>';
 */
 ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>navigation evaluation reports</title>
<link href="css/evaluatie.css" rel="stylesheet" type="text/css">
<script type="text/javascript">

function CursusZoek (Nr) {
	document.cursus_set.cursusnr.value = Nr; 
	document.cursus_set.submit();
}

</script>
</head>
<body>
<table width="200" border="0" align="center" cellpadding="5" cellspacing="0">
  <tr>
    <td valign="top"><div class="navgeheel">
        <h3>Choose a report:</h3>
        <div class="navcontainer">
          <ul id="navlist">
          <li><a href="rapport_publiciteit.php" target="mainFrame">Publicity</a></li>
          <li><a href="rapport_website.php" target="mainFrame">Web site</a></li>
          <li><a href="rapport_info_vooraf.php" target="mainFrame">Information in advance</a></li>
          <li><a href="rapport_prijs.php" target="mainFrame">Price</a></li>
          <li><a href="rapport_duur.php" target="mainFrame">Duration</a></li>
          <li><a href="rapport_plaats.php" target="mainFrame">Place</a></li>
          <li><a href="rapport_belangrijk.php" target="mainFrame">Decisive factors</a></li>
          <li><a href="rapport_kamermuziek.php" target="mainFrame">Chamber Music Programme</a></li>
          <li><a href="rapport_coaching_kamermuziek.php" target="mainFrame">Coaching the Chamber Music</a></li>
          <li><a href="rapport_tutti.php" target="mainFrame">Tutti Programme</a></li>
          <li><a href="rapport_coaching_tutti.php" target="mainFrame">Coaching the Tutti Programme</a></li>
          <li><a href="rapport_niveau.php" target="mainFrame">Musical & technical level</a></li>
          <li><a href="rapport_indiv_lessen.php" target="mainFrame">Individual lessons</a></li>
          <li><a href="rapport_solo_spelen.php" target="mainFrame">Play solo with the orchestra</a></li>
          <li><a href="rapport_professionaliteit.php" target="mainFrame">Preparation of music</a></li>
          <li><a href="rapport_accommodatie.php" target="mainFrame">Accommodation</a></li>
          <li><a href="rapport_werkruimte.php" target="mainFrame">Classrooms</a></li>
          <li><a href="rapport_maaltijden.php" target="mainFrame">Meals</a></li>
          <li><a href="rapport_diner_vrij.php" target="mainFrame">Free choice for dinner</a></li>
          <li><a href="rapport_info_terplekke.php" target="mainFrame">Information on the Venue</a></li>
          <li><a href="rapport_dagindeling.php" target="mainFrame">Daily Programme</a></li>
          <li><a href="rapport_zwaarte.php" target="mainFrame">Work Load</a></li>
          <li><a href="rapport_groepsgrootte.php" target="mainFrame">Group Size</a></li>
          <li><a href="rapport_alg_wensen.php" target="mainFrame">General Remarks</a></li>
          <li><a href="rapport_rep_wensen.php" target="mainFrame">Repertoire Remarks</a></li>
          <li><a href="rapport_verschillen.php" target="mainFrame">Differences with other summer schools</a></li>
          <li><a href="rapport_cijfer_LP.php" target="mainFrame">Marks given</a></li>
          <li><a href="rapport_citaat.php" target="mainFrame">Quotes</a></li>
        </ul>
          <div id="T3">
        <h4>Tutors course 3:</h4>
           <ul> 
            <li id="active"><a href="rapport_bernaskova3.php" target="mainFrame">Martina Bernášková</a></li>
            <li id="active"><a href="rapport_bernasekp.php" target="mainFrame">Petr Bernášek</a></li>
            <li id="active"><a href="rapport_bernasekv.php" target="mainFrame">Václav Bernášek</a></li>
            <li id="active"><a href="rapport_horringa3.php" target="mainFrame">Dirkjan Horringa</a></li>
            <li id="active"><a href="rapport_horejsi.php" target="mainFrame">Pavel Hořejší</a></li>
            <li id="active"><a href="rapport_novacek.php" target="mainFrame">Libor Nováček</a></li>
            <li id="active"><a href="rapport_sandler3.php" target="mainFrame">Mitchell Sandler</a></li>
            <li id="active"><a href="rapport_sternadel.php" target="mainFrame">Rudolf Sternadel</a></li>
            <li id="active"><a href="rapport_ass_3.php" target="mainFrame">Assistants</a></li>
          </div>
          </ul>
        </div>
     </div>
     </td>
  </tr>
</table>
</body>
</html>
