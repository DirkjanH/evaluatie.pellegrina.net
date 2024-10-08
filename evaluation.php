<?php
// stel php in dat deze fouten weergeeft
//ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once('kies_jaar.php');

?>
<!DOCTYPE HTML>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <link rel="apple-touch-icon" sizes="180x180" href="https://pellegrina.net/Images/Logos/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="https://pellegrina.net/Images/Logos/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="https://pellegrina.net/Images/Logos/favicon-16x16.png">
  <link rel="manifest" href="https://pellegrina.net/Images/Logos/site.webmanifest">
  <link rel="mask-icon" href="https://pellegrina.net/Images/Logos/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="https://pellegrina.net/Images/Logos/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="https://pellegrina.net/Images/Logos/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
  <title>Evaluation reports</title>
  <link href="css/evaluatie.css" rel="stylesheet" type="text/css">
  <script type="text/javascript">
    function CursusZoek(Nr) {
      document.cursus_set.cursusnr.value = Nr;
      document.cursus_set.submit();
    }

    function openrapport(Url) {
      //alert('<object type="text/html" data="'+Url+'" ></object>');
      document.getElementById("rapport").innerHTML = '<object type="text/html" data="' + Url + '" ></object>';
    }
  </script>
  <style type="text/css">
    <!--
    div#T1 {
      <?php if ($_SESSION['cursusnr'] != 1 and $_SESSION['cursusnr'] != 0) echo 'display: none;';
      ?>
    }

    div#T2 {
      <?php if ($_SESSION['cursusnr'] != 2 and $_SESSION['cursusnr'] != 0) echo 'display: none;';
      ?>
    }

    div#T3 {
      <?php if ($_SESSION['cursusnr'] != 3 and $_SESSION['cursusnr'] != 0) echo 'display: none;';
      ?>
    }

    div#T4 {
      <?php if ($_SESSION['cursusnr'] != 4 and $_SESSION['cursusnr'] != 0) echo 'display: none;';
      ?>
    }

    div#T5 {
      <?php if ($_SESSION['cursusnr'] != 5 and $_SESSION['cursusnr'] != 0) echo 'display: none;';
      ?>
    }
    -->
    div#navcontainer
    {
    background-color:
    #B1F2FD;
    font-size:
    11px;
    padding:
    5px;
    width:
    250px;
    }
    div#rapport
    object
    {
    position:
    fixed;
    width:
    100%;
    height:
    100%;
    }
    @media
    (max-width:601px)
    {
    div#navcontainer
    {
    width:
    100%;
    }
    }
  </style>
</head>

<body>
  <div class="w3-row">
    <div class="w3-quarter w3-container" style="height: 1500px;">
      <div id="navcontainer">
        <h1>Year: <?php echo $_SESSION['jaar']; ?></h1>
        <h3>Choose course</h3>
        <form action="" method="post" name="cursus_set" id="cursus_set">
          <input name="cursus" id="cursus" type="radio" <?php if (isset($_SESSION['cursusnr']) and ($_SESSION['cursusnr'] == "0")) echo 'checked';
                                                        elseif (empty($_SESSION['cursusnr'])) echo 'checked'; ?> onClick="CursusZoek(0)">
          all
          <input name="cursus" id="cursus" type="radio" <?php if (isset($_SESSION['cursusnr']) and ($_SESSION['cursusnr'] == "1")) echo 'checked'; ?> onClick="CursusZoek(1)">
          1
          <input name="cursus" id="cursus" type="radio" <?php if (isset($_SESSION['cursusnr']) and ($_SESSION['cursusnr'] == "2")) echo 'checked'; ?> onClick="CursusZoek(2)">
          2
          <input name="cursusnr" type="hidden" value="">
        </form>
        <h3>Choose a report:</h3>
        <div>
          <ul id="navlist">
            <li><a onclick='openrapport( "rapport_publiciteit.php")'>Publicity</a></li>
            <li><a onclick='openrapport( "rapport_website.php")'>Web site</a></li>
            <li><a onclick='openrapport( "rapport_info_vooraf.php")'>Information in advance</a></li>
            <li><a onclick='openrapport( "rapport_prijs.php")'>Price</a></li>
            <li><a onclick='openrapport( "rapport_duur.php")'>Duration</a></li>
            <li><a onclick='openrapport( "rapport_belangrijk.php")'>Decisive factors</a></li>
            <li><a onclick='openrapport( "rapport_kamermuziek.php")'>Chamber Music Programme</a></li>
            <li><a onclick='openrapport( "rapport_coaching_kamermuziek.php")'>Coaching the Chamber Music</a></li>
            <li><a onclick='openrapport( "rapport_tutti.php")'>Tutti Programme</a></li>
            <li><a onclick='openrapport( "rapport_coaching_tutti.php")'>Coaching the Tutti Programme</a></li>
            <li><a onclick='openrapport( "rapport_niveau.php")'>Musical & technical level</a></li>
            <li><a onclick='openrapport( "rapport_indiv_lessen.php")'>Individual lessons</a></li>
            <li><a onclick='openrapport( "rapport_solo_spelen.php")'>Play solo with the orchestra</a></li>
            <li><a onclick='openrapport( "rapport_professionaliteit.php")'>Preparation of music</a></li>
            <li><a onclick='openrapport( "rapport_accommodatie.php")'>Accommodation</a></li>
            <li><a onclick='openrapport( "rapport_werkruimte.php")'>Classrooms</a></li>
            <li><a onclick='openrapport( "rapport_maaltijden.php")'>Meals</a></li>
            <li><a onclick='openrapport( "rapport_info_terplekke.php")'>Information on the Venue</a></li>
            <li><a onclick='openrapport( "rapport_dagindeling.php")'>Daily Programme</a></li>
            <li><a onclick='openrapport( "rapport_zwaarte.php")'>Work Load</a></li>
            <li><a onclick='openrapport( "rapport_groepsgrootte.php")'>Group Size</a></li>
            <li><a onclick='openrapport( "rapport_alg_wensen.php")'>General Remarks</a></li>
            <li><a onclick='openrapport( "rapport_rep_wensen.php")'>Repertoire Remarks</a></li>
            <li><a onclick='openrapport( "rapport_verschillen.php")'>Differences with other summer schools</a></li>
            <li><a onclick='openrapport( "rapport_cijfer_LP.php")'>Marks given</a></li>
            <li><a onclick='openrapport( "rapport_citaat.php")'>Quotes</a></li>
          </ul>
          <div id="T1">
            <h4>Tutors course 1:</h4>
            <ul>
              <li><a onclick='openrapport( "rapport_bernaskova3.php")'>Martina Bernášková</a></li>
              <li><a onclick='openrapport( "rapport_bernasekp.php")'>Petr Bernášek</a></li>
              <li><a onclick='openrapport( "rapport_horringa3.php")'>Dirkjan Horringa</a></li>
              <li><a onclick='openrapport( "rapport_horejsi.php")'>Pavel Hořejší</a></li>
              <li><a onclick='openrapport( "rapport_novacek.php")'>Libor Nováček</a></li>
              <li><a onclick='openrapport( "rapport_sandler3.php")'>Mitchell Sandler</a></li>
              <li><a onclick='openrapport( "rapport_sternadel.php")'>Rudolf Sternadel</a></li>
              <li><a onclick='openrapport( "rapport_vlasankova.php")'>Jitka Vlašánková</a></li>
              <li><a onclick='openrapport( "rapport_ass_3.php")'>Assistants</a></li>
            </ul>
          </div>
          <div id="T2">
            <h4>Tutors course 2:</h4>
            <ul>
              <li><a onclick='openrapport( "rapport_horringa1.php")'>Dirkjan Horringa</a></li>
              <li><a onclick='openrapport( "rapport_huizinga.php")'>Femke Huizinga</a></li>
              <li><a onclick='openrapport( "rapport_lindeijer.php")'>Hanna Lindeijer</a></li>
              <li><a onclick='openrapport( "rapport_rodriguez.php")'>Ricardo Rodriguez Miranda</a></li>
              <li><a onclick='openrapport( "rapport_sandler1.php")'>Mitchell Sandler</a></li>
              <li><a onclick='openrapport( "rapport_valorz.php")'>Edoardo Valorz</a></li>
              <li><a onclick='openrapport( "rapport_ass_2.php")'>Assistant</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div id="rapport" class="w3-container w3-rest" style="height: 1500px;"></div>
  </div>
</body>

</html>