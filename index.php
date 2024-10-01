<?php
// zet de tijdzone:
date_default_timezone_set('Europe/Berlin');

function getisp($ip = '')
{

   if ($ip == '') $ip = $_SERVER['REMOTE_ADDR'];
   $longisp = @gethostbyaddr($ip);
   $isp = explode('.', $longisp);
   $isp = array_reverse($isp);
   $tmp = $isp[1];
   if (preg_match("/\<(org?|com?|net)\>/i", $tmp)) {
      $myisp = $isp[2] . '.' . $isp[1] . '.' . $isp[0];
   } else {
      $myisp = $isp[1] . '.' . $isp[0];
   }
   preg_match("/[0-9]{1,3}\.[0-9]{1,3}/", $myisp);
   return $myisp;
}
?>

<!DOCTYPE HTML>
<html>

<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta charset="utf-8">
   <title>La Pellegrina - Overview of Evaluation Forms</title>

   <link rel="apple-touch-icon" sizes="180x180" href="https://pellegrina.net/Images/Logos/apple-touch-icon.png">
   <link rel="icon" type="image/png" sizes="32x32" href="https://pellegrina.net/Images/Logos/favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="16x16" href="https://pellegrina.net/Images/Logos/favicon-16x16.png">
   <link rel="manifest" href="https://pellegrina.net/Images/Logos/site.webmanifest">
   <link rel="mask-icon" href="https://pellegrina.net/Images/Logos/safari-pinned-tab.svg" color="#5bbad5">
   <link rel="shortcut icon" href="https://pellegrina.net/Images/Logos/favicon.ico">
   <meta name="msapplication-TileColor" content="#da532c">
   <meta name="msapplication-config" content="https://pellegrina.net/Images/Logos/browserconfig.xml">
   <meta name="theme-color" content="#ffffff">

   <link href="/css/evaluatie.css" rel="stylesheet" type="text/css">
   <link href="https://pellegrina.net/css/pellegrina_stijlen.css" rel="stylesheet" type="text/css">
   <style type="text/css">
      <!--
      body {
         margin: 5%;
      }
      -->
   </style>
</head>

<body margin="50">
   <h1>Evaluatie-formulieren | Evaluation questionnaires</h1>
   <table class="w3-table-all w3-card-4 w3-responsive">
      <tr>
         <th width="25%">&nbsp;</th>
         <th width="30%">
            <div align="center"><strong>in het Nederlands |<br>
                  in Dutch</strong></div>
         </th>
         <th width="40%">
            <div align="center"><strong>in English</strong><br>
               Feel free to write
               in English, German, French, Italian or Czech. Japanese
               is not yet supported... <br>
            </div>
         </th>
      </tr>
      <tr>
         <td height="60">
            <div align="left"><strong>I. Baroque Music: Purcell's Chapel Royal</strong><br>
               (21 - 29 July 2018) </div>
         </td>
         <td height="60">
            <div align="center"><a href="evaluatie_barok.php" target="_blank">Evaluatie-formulier I</a></div>
         </td>
         <td>
            <div align="center"><a href="evaluatie_barok_uk.php" target="_blank">Evaluation
                  form I</a></div>
         </td>
      </tr>
      <tr>
         <td height="60">
            <div align="left"><strong>II. Dvořák &amp; contemporaries</strong><br>
               (31 July - 10 August 2018) </div>
         </td>
         <td height="60">
            <div align="center"><a href="evaluatie_romantic.php" target="_blank">Evaluatie-formulier II</a></div>
         </td>
         <td>
            <div align="center"><a href="evaluatie_romantic_uk.php" target="_blank">Evaluation
                  form II</a></div>
         </td>
      </tr>
      <tr>
         <td height="60">
            <div align="left"><b><strong>III. Play Chamber Music with the Kinsky Trio Prague &amp; Friends<br>
                  </strong></b>(12 - 19 August 2018)</div>
         </td>
         <td height="60">
            <div align="center"><a href="evaluatie_chamber.php" target="_blank">Evaluatie-formulier III</a></div>
         </td>
         <td>
            <div align="center"><a href="evaluatie_chamber_uk.php" target="_blank">Evaluation
                  form III</a></div>
            <div align="left"></div>
         </td>
      </tr>
      <tr>
         <td height="60" colspan="3">
            <div class="klein">
               <div align="center">
                  <?php

                  $teller = 1;
                  $tellerbestand = fopen("evaluatieteller.txt", "r");
                  $teller = $teller + fgets($tellerbestand);
                  fclose($tellerbestand);
                  echo ("$teller" . " times opened since 21 August, 2009");
                  $tellerbestand = fopen("evaluatieteller.txt", "w");
                  fputs($tellerbestand, $teller);
                  fclose($tellerbestand);

                  $hos = getisp();
                  $browser = $_SERVER["REMOTE_ADDR"] . "   " . $hos . "   " . $_SERVER['HTTP_USER_AGENT'];
                  $browser_info = fopen("browser_info.txt", "a");
                  fputs($browser_info, date('j-n-Y') . "   ");
                  fputs($browser_info, date('H:i') . "   ");
                  fputs($browser_info, $browser . "\n");
                  fclose($browser_info);

                  ?>
               </div>
            </div>
         </td>
      </tr>
   </table>
</body>

</html>