<?php //Connection statement [PDO]
require_once('connections/PDO_connect.php');

//Aditional Functions
require_once('includes/functions.inc.php');

// stel php in dat deze fouten weergeeft
//ini_set('display_errors', 1);

error_reporting(E_ALL);

require_once $_SERVER["DOCUMENT_ROOT"].'/../vendor/autoload.php';

Kint::$enabled_mode = false;

// zet de tijdzone:
date_default_timezone_set('Europe/Berlin');

// build the form action
$editFormAction = $_SERVER['PHP_SELF'] . (isset($_SERVER['QUERY_STRING']) ? "?" . $_SERVER['QUERY_STRING'] : "");

// Kies jaar
session_start();

if ($_POST['inzeepdag'] == '') $_POST['inzeepdag'] = 0;

d($_SESSION, $_REQUEST);

if (date('n') <= 6) $evaluatie_tabel = 'evaluatie_'.(date('Y')-1);
else $evaluatie_tabel = 'evaluatie_'.(date('Y'));

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "evaluatie")) {
$insertSQL = sprintf("INSERT INTO {$evaluatie_tabel} (naam, tijd, cursus, publiciteit, naam_aanbrenger, publiciteit_tx, website, website_tx, info_vooraf, info_vooraf_tx, prijs, prijs_tx, belangrijk, belangrijk_tx, inzeepdag, inzeepdag_tx, duur, duur_tx, periode, periode_tx, prijsduur, prijsduur_tx, verschillen, eenpers, eenpers_tx, professionaliteit, professionaliteit_tx, kamermuziek, kamermuziek_tx, coaching_kamermuziek, coaching_kamermuziek_tx, tutti, tutti_tx, coaching_tutti, coaching_tutti_tx, lezing, lezing_tx, acc_name, accommodatie, accommodatie_tx, werkruimte, werkruimte_tx, plaats, plaats_tx, maaltijden, maaltijden_tx, info_terplekke, info_terplekke_tx, dagindeling, dagindeling_tx, zwaarte, zwaarte_tx, groepsgrootte, groepsgrootte_tx, indiv_lessen, indiv_lessen_tx, solo_spelen, solo_spelen_tx, diner_vrij, diner_vrij_tx,

Lohmann, Lohmann_tx, Horringa1, Horringa1_tx, Vitale, Vitale_tx, Semkiw, Semkiw_tx, Sandler1, Sandler1_tx, 

Bernaskova3, Bernaskova3_tx, BernasekP, BernasekP_tx, Horringa3, Horringa3_tx, Horejsi, Horejsi_tx, Novacek, Novacek_tx, Sandler3, Sandler3_tx, Sternadel, Sternadel_tx, Vacek, Vacek_tx, Vlasankova, Vlasankova_tx,

ass_1, ass_1_tx, ass_2, ass_2_tx, ass_3, ass_3_tx, cijfer_LP, cijfer_LP_tx, niveau, niveau_tx, kinderen, kinderen_tx, rep_wensen, alg_wensen, citaat) 

VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
   quote($_POST['Naam']),
   quote($_POST['tijd']),
   quote($_POST['cursus']),
   quote($_POST['Publiciteit']),
   quote($_POST['naam_aanbrenger']),
   quote($_POST['Publiciteit_tx']),
   quote($_POST['website']),
   quote($_POST['website_tx']),
   quote($_POST['Info_vooraf']),
   quote($_POST['Info_vooraf_tx']),
   quote($_POST['prijs']),
   quote($_POST['prijs_tx']),
   quote($_POST['belangrijk']),
   quote($_POST['belangrijk_tx']),
   quote($_POST['inzeepdag']),
   quote($_POST['inzeepdag_tx']),
   quote($_POST['duur']),
   quote($_POST['duur_tx']),
   quote($_POST['periode']),
   quote($_POST['periode_tx']),
   quote($_POST['prijsduur']),
   quote($_POST['prijsduur_tx']),
   quote($_POST['verschillen']),
   quote($_POST['eenpers']),
   quote($_POST['eenpers_tx']),
   quote($_POST['professionaliteit']),
   quote($_POST['professionaliteit_tx']),
   quote($_POST['kamermuziek']),
   quote($_POST['kamermuziek_tx']),
   quote($_POST['coaching_kamermuziek']),
   quote($_POST['coaching_kamermuziek_tx']),
   quote($_POST['tutti']),
   quote($_POST['tutti_tx']),
   quote($_POST['coaching_tutti']),
   quote($_POST['coaching_tutti_tx']),
   quote($_POST['lezing']),
   quote($_POST['lezing_tx']),
   quote($_POST['acc_name']),
   quote($_POST['accommodatie']),
   quote($_POST['accommodatie_tx']),
   quote($_POST['werkruimte']),
   quote($_POST['werkruimte_tx']),
   quote($_POST['plaats']),
   quote($_POST['plaats_tx']),
   quote($_POST['maaltijden']),
   quote($_POST['maaltijden_tx']),
   quote($_POST['info_terplekke']),
   quote($_POST['info_terplekke_tx']),
   quote($_POST['dagindeling']),
   quote($_POST['dagindeling_tx']),
   quote($_POST['zwaarte']),
   quote($_POST['zwaarte_tx']),
   quote($_POST['groepsgrootte']),
   quote($_POST['groepsgrootte_tx']),
   quote($_POST['indiv_lessen']),
   quote($_POST['indiv_lessen_tx']),
   quote($_POST['solo_spelen']),
   quote($_POST['solo_spelen_tx']),
   quote($_POST['diner_vrij']),
   quote($_POST['diner_vrij_tx']),

   quote($_POST['Lohmann']),
   quote($_POST['Lohmann_tx']),
   quote($_POST['Horringa1']),
   quote($_POST['Horringa1_tx']),
   quote($_POST['Vitale']),
   quote($_POST['Vitale_tx']),
   quote($_POST['Semkiw']),
   quote($_POST['Semkiw_tx']),
   quote($_POST['Sandler1']),
   quote($_POST['Sandler1_tx']),

   quote($_POST['Bernaskova3']),
   quote($_POST['Bernaskova3_tx']),
   quote($_POST['BernasekP']),
   quote($_POST['BernasekP_tx']),
   quote($_POST['Horringa3']),
   quote($_POST['Horringa3_tx']),
   quote($_POST['Horejsi']),
   quote($_POST['Horejsi_tx']),
   quote($_POST['Novacek']),
   quote($_POST['Novacek_tx']),
   quote($_POST['Sandler3']),
   quote($_POST['Sandler3_tx']),
   quote($_POST['Sternadel']),
   quote($_POST['Sternadel_tx']),
   quote($_POST['Vacek']),
   quote($_POST['Vacek_tx']),
   quote($_POST['Vlasankova']),
   quote($_POST['Vlasankova_tx']),

   quote($_POST['ass_1']),
   quote($_POST['ass_1_tx']),
   quote($_POST['ass_2']),
   quote($_POST['ass_2_tx']),
   quote($_POST['ass_3']),
   quote($_POST['ass_3_tx']),
   quote($_POST['cijfer_LP']),
   quote($_POST['cijfer_LP_tx']),
   quote($_POST['niveau']),
   quote($_POST['niveau_tx']),
   quote($_POST['kinderen']),
   quote($_POST['kinderen_tx']),
   quote($_POST['rep_wensen']),
   quote($_POST['alg_wensen']),
   quote($_POST['citaat']));
  
d($insertSQL);

	exec_query($insertSQL);

	if (isset($taal) and $taal == 'EN')
	  $insertGoTo = "dank_eval_uk.htm";
	  else
	  $insertGoTo = "dank_eval.htm";
  
	if (isset($_SERVER['QUERY_STRING'])) {
		$insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
		$insertGoTo .= $_SERVER['QUERY_STRING'];
	}
	KT_redir($insertGoTo);
}
?>
  <script type="text/javascript">
  function showValue(num){
           var cijfer = document.getElementById('cijfer');     
           var cijfer_LP = document.getElementById('cijfer_LP');     
           cijfer.innerHTML = num;
           cijfer_LP.value = num;
  }
  </script>
