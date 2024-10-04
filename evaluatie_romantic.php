<?php
//Connection statement
require_once('schrijf_naar_DB.php');
?>
<!DOCTYPE HTML>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <title>Evaluatie romantische zomercursus</title>

  <link rel="apple-touch-icon" sizes="180x180" href="https://pellegrina.net/Images/Logos/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="https://pellegrina.net/Images/Logos/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="https://pellegrina.net/Images/Logos/favicon-16x16.png">
  <link rel="manifest" href="https://pellegrina.net/Images/Logos/site.webmanifest">
  <link rel="mask-icon" href="https://pellegrina.net/Images/Logos/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="https://pellegrina.net/Images/Logos/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="https://pellegrina.net/Images/Logos/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">

  <link href="css/evaluatie.css" rel="stylesheet" type="text/css">
</head>

<body>
  <div id="main">
    <table id="evaluatie">
      <tr>
        <td>
          <h1>Evaluatie Reicha's Requiem</h1>
          <p><b>Spring eenvoudig met behulp van de muis of de Tab-toets van vraag
              naar vraag</b>. <b>Mocht je problemen tegenkomen bij het verzenden
              van het formulier, klik dan <a href="fout.htm" target="_blank">hier</a>.</b></p>
          <hr>
          <form action="<?php echo $editFormAction; ?>" name="evaluatie" method="POST">
            <table>
              <tr>
                <td width="54">Naam:</td>
                <td>
                  <p>
                    <input name="Naam" type=text id="Naam" size="50">
                  </p>
                </td>
              </tr>
              <tr>
                <td valign="top">&nbsp;</td>
                <td>
                  <p class="nadruk">(niet verplicht! Je kunt de evaluatie
                    ook anoniem invullen) </p>
                </td>
              </tr>
            </table>
            <input name="cursus" type="hidden" id="cursus" value="56">
            <input name="tijd" type="hidden" id="tijd" value="<?php echo date("Y-m-d H:i:s"); ?>">
            <hr>
            <h2>Publiciteit &amp; bekendheid </h2>
            <p class="vraag_enquete">Ik weet van deze cursus in de eerste plaats via:</p>
            <table>
              <tr>
                <td class="standaard"><input type="hidden" name="Publiciteit" value="niet ingevuld">
                  <input type="radio" name="Publiciteit" value="kennis">
                  <label>vrienden/bekenden, n.l.
                    <input name="naam_aanbrenger" type="text" id="naam_aanbrenger" size="20">
                  </label>
                </td>
              </tr>
              <tr>
                <td class="standaard"><label>
                    <input type="radio" name="Publiciteit" value="LP website">
                    webpagina <em>La Pellegrina</em></label></td>
              </tr>
              <tr>
                <td class="standaard"><label>
                    <input type="radio" name="Publiciteit" value="drukwerk">
                    een overzicht van muziekcursussen in een krant of tijdschrift <span class="nadruk">(geef SVP hieronder aan welke krant of blad)</span></label></td>
              </tr>
              <tr>
                <td class="standaard"><label>
                    <input type="radio" name="Publiciteit" value="lijst op internet">
                    een overzicht van muziekcursussen op internet <span class="nadruk">(geef SVP hieronder aan welke site)</span></label></td>
              </tr>
              <tr>
                <td class="standaard"><label>
                    <input type="radio" name="Publiciteit" value="anders">
                    anders <span class="nadruk">(geef SVP hieronder aan hoe)</span></label></td>
              </tr>
            </table>
            <p class="standaard">
              <textarea name="Publiciteit_tx" cols="70" rows="3" id="Publiciteit_tx"></textarea>
            </p>
            <p class="vraag_enquete">De website vind ik:</p>
            <table width="406">
              <tr>
                <td><label><input name="website" type="radio" value="0" checked>
                    Ik heb de website niet gezien</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="website" value="5">
                    zeer goed</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="website" value="4">
                    goed</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="website" value="3">
                    redelijk</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="website" value="2">
                    slecht</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="website" value="1">
                    zeer slecht</label> </td>
              </tr>
            </table>
            <p>De website kan met het volgende verbeterd worden:</p>
            <p>
              <textarea name="website_tx" cols="70" rows="3" id="website_tx"></textarea>
            </p>
            <h2>Informatie vooraf &amp; vorm van de cursus</h2>
            <p class="vraag_enquete">De informatie vooraf via email stemde
              overeen met de werkelijkheid tijdens het project:</p>
            <table>
              <tr>
                <td><label>
                    <input type="hidden" name="Info_vooraf" value="0">
                    <input type="radio" name="Info_vooraf" value="5">
                    zeer goed</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Info_vooraf" value="4">
                    goed</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Info_vooraf" value="3">
                    redelijk</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Info_vooraf" value="2">
                    slecht</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Info_vooraf" value="1">
                    zeer slecht</label> </td>
              </tr>
            </table>
            <p>Graag je mening hoe dit verbeterd kan worden:</p>
            <p>
              <textarea name="Info_vooraf_tx" cols="70" rows="3" id="Info_vooraf_tx"></textarea>
            </p>
            <p class="vraag_enquete">Dit jaar duurde de cursus 10 dagen inclusief een vrije dag. Ik beschouw als optimale cursusduur:</p>
            <table>
              <tr>
                <td width="491"><label>
                    <input type="hidden" name="duur" value="0">
                    <input type="radio" name="duur" value="8">
                    8 dagen zonder een vrije dag </label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="duur" value="9">
                    9 dagen zonder een vrije dag</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="duur" value="9-1">
                    9 dagen met een vrije dag</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="duur" value="10-1">
                    10 dagen met een vrije dag <span class="nadruk">(zoals dit jaar)</span></label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="duur" value="0">
                    anders<span class="nadruk"> (graag hieronder toelichten)</span></label></td>
              </tr>
            </table>
            <p>Opmerkingen over de cursusduur:</p>
            <p>
              <textarea name="duur_tx" cols="70" rows="3" id="duur_tx"></textarea>
            </p>
            <p class="vraag_enquete">Ik vind de prijs van het project:</p>
            <table>
              <tr>
                <td><label>
                    <input type="hidden" name="prijs" value="0">
                    <input type="radio" name="prijs" value="1">
                    te hoog voor het gebodene</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="prijs" value="2">
                    hoog voor het gebodene</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="prijs" value="3">
                    in overeenstemming met het gebodene</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="prijs" value="4">
                    laag in vergelijking met het gebodene</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="prijs" value="5">
                    te laag in vergelijking met het gebodene</label> </td>
              </tr>
            </table>
            <p>Eventuele opmerkingen over de cursusprijs:</p>
            <p>
              <textarea name="prijs_tx" cols="70" rows="3" id="prijs_tx"></textarea>
            </p>
            <p class="vraag_enquete">In Tsjechië verandert de laatste tijd veel. Dat zal mogelijk zijn weerslag hebben op het project, b.v. op de prijs en de accommodatie. <br>
              Als ik mij afvraag of ik zal deelnemen aan een volgend project, is voor mij van doorslaggevende betekenis:</p>
            <table>
              <tr>
                <td><label>
                    <input type="hidden" name="belangrijk" value="0">
                    <input type="radio" name="belangrijk" value="1">
                    de prijs van het project</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="belangrijk" value="2">
                    de kwaliteit van de accommodatie</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="belangrijk" value="3">
                    het niveau van de docenten</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="belangrijk" value="4">
                    het niveau van de deelnemers</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="belangrijk" value="5">
                    de sfeer en de manier waarop men met elkaar omgaat</label></td>
              </tr>
            </table>
            <p>Graag je keuze hieronder toelichten:</p>
            <textarea name="belangrijk_tx" cols="70" rows="3" id="belangrijk_tx"></textarea></p>
            <p class="vraag_enquete">Er zijn veel meer zomercursussen, ieder met andere keuzes en opzetten. La Pellegrina kan veel leren van een vergelijking. <br>
              Voor zover ik kan vergelijken, zie ik de volgende (positieve en negatieve) verschillen met andere muziekcursussen:</p>
            <p>
              <textarea name="verschillen" cols="70" rows="6" id="verschillen"></textarea>
            </p>
            <hr>
            <h2>Inhoud</h2>
            <div class="onzichtbaar">
              <p class="vraag_enquete">De voorbereidende repetitie op 11 juni
                is me als volgt bevallen:</p>
              <table>
                <tr>
                  <td><label><input type="radio" name="inzeepdag" value="0" checked>
                      Ik was niet aanwezig</label></td>
                </tr>
                <tr>
                  <td><label>
                      <input type="radio" name="inzeepdag" value="5">
                      zeer nuttig </label>
                  </td>
                </tr>
                <tr>
                  <td><label>
                      <input type="radio" name="inzeepdag" value="4">
                      nuttig</label>
                  </td>
                </tr>
                <tr>
                  <td><label>
                      <input type="radio" name="inzeepdag" value="3">
                      redelijk</label>
                    nuttig</td>
                </tr>
                <tr>
                  <td><label>
                      <input type="radio" name="inzeepdag" value="2">
                      nauwelijks nuttig </label> </td>
                </tr>
                <tr>
                  <td><label>
                      <input type="radio" name="inzeepdag" value="1">
                      overbodig</label></td>
                </tr>
              </table>
              <p>Hierin kan het volgende verbeterd worden:</p>
              <p>
                <textarea name="inzeepdag_tx" cols="70" rows="3" id="inzeepdag_tx"></textarea>
              </p>
              <p class="vraag_enquete">De kamermuziekindeling vond ik:</p>
            </div>
            <table>
              <tr>
                <td><label>
                    <input type="hidden" name="kamermuziek" value="0">
                    <input type="radio" name="kamermuziek" value="5">
                    zeer goed</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="kamermuziek" value="4">
                    goed</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="kamermuziek" value="3">
                    redelijk</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="kamermuziek" value="2">
                    slecht</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="kamermuziek" value="1">
                    zeer slecht</label> </td>
              </tr>
            </table>
            <p>Graag je mening hoe dit verbeterd kan worden:</p>
            <p>
              <textarea name="kamermuziek_tx" cols="70" rows="3" id="kamermuziek_tx"></textarea>
            </p>
            <p class="vraag_enquete">De coaching van de kamermuziek vond ik:</p>
            <table>
              <tr>
                <td><label>
                    <input type="hidden" name="coaching_kamermuziek" value="0">
                    <input type="radio" name="coaching_kamermuziek" value="5">
                    zeer goed</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="coaching_kamermuziek" value="4">
                    goed</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="coaching_kamermuziek" value="3">
                    redelijk</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="coaching_kamermuziek" value="2">
                    slecht</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="coaching_kamermuziek" value="1">
                    zeer slecht</label> </td>
              </tr>
            </table>
            <p>Graag je mening hoe dit verbeterd kan worden:</p>
            <p>
              <textarea name="coaching_kamermuziek_tx" cols="70" rows="3" id="coaching_kamermuziek_tx"></textarea>
            </p>
            <p class="vraag_enquete">Het programma van het slotconcert is mij als volgt
              bevallen:</p>
            <table>
              <tr>
                <td><label>
                    <input type="hidden" name="tutti" value="0">
                    <input type="radio" name="tutti" value="5">
                    zeer goed</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="tutti" value="4">
                    goed</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="tutti" value="3">
                    redelijk</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="tutti" value="2">
                    slecht</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="tutti" value="1">
                    zeer slecht</label> </td>
              </tr>
            </table>
            <p>Graag je mening hoe dit verbeterd kan worden:</p>
            <p>
              <textarea name="tutti_tx" cols="70" rows="3" id="tutti_tx"></textarea>
            </p>
            <p class="vraag_enquete">De voorbereiding van het slotconcert vond ik:</p>
            <table>
              <tr>
                <td><label>
                    <input type="hidden" name="coaching_tutti" value="0">
                    <input type="radio" name="coaching_tutti" value="5">
                    zeer goed</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="coaching_tutti" value="4">
                    goed</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="coaching_tutti" value="3">
                    redelijk</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="coaching_tutti" value="2">
                    slecht</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="coaching_tutti" value="1">
                    zeer slecht</label> </td>
              </tr>
            </table>
            <p>Graag je mening hoe dit verbeterd kan worden:</p>
            <p>
              <textarea name="coaching_tutti_tx" cols="70" rows="3" id="coaching_tutti_tx"></textarea>
            </p>
            <p class="vraag_enquete">Het muzikale en technische niveau van de deelnemers vond
              ik:</p>
            <table>
              <tr>
                <td><label>
                    <input type="hidden" name="niveau3" value="0">
                    <input type="radio" name="niveau" value="5">
                    te hoog </label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="niveau" value="4">
                    hoog</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="niveau" value="3">
                    precies goed </label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="niveau" value="2">
                    laag</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="niveau" value="1">
                    te laag </label></td>
              </tr>
            </table>
            <p>Graag je mening hoe dit verbeterd kan worden:</p>
            <p>
              <textarea name="niveau_tx2" cols="70" rows="3" id="niveau_tx2"></textarea>
            </p>
            <p class="vraag_enquete">Op de <a href="http://www.pellegrina.net/NL/index.php" target="_blank">openingspagina van de website</a> staat: &quot;of je nou amateur bent of professional, bij <em>La Pellegrina </em>staat een professionele instelling hoog in het vaandel. Natuurlijk kom je goed voorbereid naar een cursus, natuurlijk vind je het fijn als anderen dat ook doen&quot; . Hoe beoordeel je je eigen voorbereiding op de cursus? In welke mate kende je al je partijen toen je in České Budějovice arriveerde?</p>
            <table width="200">
              <tr>
                <td><label>
                    <input name="professionaliteit" type="hidden" id="professionaliteit" value="0">
                    <input type="radio" name="professionaliteit" value="5">
                    zeer goed</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="professionaliteit" value="4">
                    goed</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="professionaliteit" value="3">
                    voldoende</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="professionaliteit" value="2">
                    matig</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="professionaliteit" value="1">
                    onvoldoende</label></td>
              </tr>
            </table>
            <p>Graag je mening hoe dit verbeterd kan worden:</p>
            <p>
              <textarea name="professionaliteit_tx" cols="70" rows="3" id="professionaliteit_tx"></textarea>
            </p>
            <hr>
            <h2>Organisatie </h2>
            <p class="vraag_enquete">Ik verbleef in:<span class="nadruk"> (het internaat van het Conservatorium of in accommodatie die je zelf had geregeld)</span></p>
            <p>
              <label for="acc_name">Naam van accommodatie: </label>
              <input name="acc_name" type="text" id="acc_name" size="60">
            </p>
            <p class="vraag_enquete">Ik vond deze accommodatie:</p>
            <table width="200">
              <tr>
                <td><label>
                    <input type="hidden" name="accommodatie" value="0">
                    <input type="radio" name="accommodatie" value="5">
                    zeer goed</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="accommodatie" value="4">
                    goed</label></td>
              </tr>
              <tr>
                <td height="22"><label>
                    <input type="radio" name="accommodatie" value="3">
                    redelijk</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="accommodatie" value="2">
                    slecht</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="accommodatie" value="1">
                    zeer slecht</label></td>
              </tr>
            </table>
            <p>Graag je mening hoe deze plek verbeterd kan worden:</p>
            <p>
              <textarea name="accommodatie_tx" cols="70" rows="3" id="accommodatie_tx"></textarea>
            </p>
            <p class="vraag_enquete">De werkruimtes en instrumenten in het conservatorium vond ik:</p>
            <table width="200">
              <tr>
                <td><label>
                    <input type="hidden" name="werkruimte" value="0">
                    <input type="radio" name="werkruimte" value="5">
                    zeer goed</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="werkruimte" value="4">
                    goed</label></td>
              </tr>
              <tr>
                <td height="22"><label>
                    <input type="radio" name="werkruimte" value="3">
                    redelijk</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="werkruimte" value="2">
                    slecht</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="werkruimte" value="1">
                    zeer slecht</label></td>
              </tr>
            </table>
            <p>Graag je mening hoe dit verbeterd kan worden:</p>
            <p>
              <textarea name="werkruimte_tx" cols="70" rows="3" id="werkruimte_tx"></textarea>
            </p>
            <p class="vraag_enquete">Ontbijt en lunch vond ik:</p>
            <p></p>
            <table width="200">
              <tr>
                <td><label>
                    <input type="hidden" name="maaltijden" value="0">
                    <input type="radio" name="maaltijden" value="5">
                    zeer goed</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="maaltijden" value="4">
                    goed</label></td>
              </tr>
              <tr>
                <td height="22"><label>
                    <input type="radio" name="maaltijden" value="3">
                    redelijk</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="maaltijden" value="2">
                    slecht</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="maaltijden" value="1">
                    zeer slecht</label></td>
              </tr>
            </table>
            <p>Graag je mening hoe dit verbeterd kan worden:</p>
            <p>
              <textarea name="maaltijden_tx" cols="70" rows="3" id="maaltijden_tx"></textarea>
            </p>
            <div class="vraag">
              <p class="vraag_enquete">De avondmaaltijden worden niet meer gezamenlijk op één plek georganiseerd, behalve op de eerste en laatste avond. Dit vond ik:</p>
              <table width="200">
                <tr>
                  <td><label>
                      <input type="hidden" name="diner_vrij" value="0">
                      <input type="radio" name="diner_vrij" value="5">
                      zeer goed </label></td>
                </tr>
                <tr>
                  <td><label>
                      <input type="radio" name="diner_vrij" value="4">
                      goed</label></td>
                </tr>
                <tr>
                  <td><label>
                      <input type="radio" name="diner_vrij" value="3">
                      OK </label></td>
                </tr>
                <tr>
                  <td><label>
                      <input type="radio" name="diner_vrij" value="2">
                      slecht</label></td>
                </tr>
                <tr>
                  <td><label>
                      <input type="radio" name="diner_vrij" value="1">
                      zeer slecht</label></td>
                </tr>
              </table>
              <p>Graag je mening hoe dit verbeterd kan worden:</p>
              <p>
                <textarea name="diner_vrij_tx" cols="70" rows="3" id="diner_vrij_tx"></textarea>
              </p>
            </div>
            <p class="vraag_enquete">De informatievoorziening middels dagelijkse bulletins via email en het prikbord vond
              ik:</p>
            <table width="200">
              <tr>
                <td><label>
                    <input type="hidden" name="info_terplekke" value="0">
                    <input type="radio" name="info_terplekke" value="5">
                    zeer goed</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="info_terplekke" value="4">
                    goed</label></td>
              </tr>
              <tr>
                <td height="22"><label>
                    <input type="radio" name="info_terplekke" value="3">
                    adequaat</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="info_terplekke" value="2">
                    slecht</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="info_terplekke" value="1">
                    zeer slecht</label></td>
              </tr>
            </table>
            <p>Graag je mening hoe dit verbeterd kan worden:</p>
            <p>
              <textarea name="info_terplekke_tx" cols="70" rows="3" id="info_terplekke_tx"></textarea>
            </p>
            <p class="vraag_enquete">De dagindeling vond ik:</p>
            <table>
              <tr>
                <td><label>
                    <input type="hidden" name="dagindeling" value="0">
                    <input type="radio" name="dagindeling" value="5">
                    zeer goed</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="dagindeling" value="4">
                    goed</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="dagindeling" value="3">
                    in orde</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="dagindeling" value="2">
                  </label>
                  slecht </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="dagindeling" value="1">
                    zeer slecht</label> </td>
              </tr>
            </table>
            <p>Graag je mening hoe dit verbeterd kan worden:</p>
            <p>
              <textarea name="dagindeling_tx" cols="70" rows="3" id="dagindeling_tx"></textarea>
            </p>
            <p class="vraag_enquete">Het programma vond ik:</p>
            <table>
              <tr>
                <td><label>
                    <input type="hidden" name="zwaarte" value="0">
                    <input type="radio" name="zwaarte" value="1">
                    te zwaar</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="zwaarte" value="2">
                    zwaar</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="zwaarte" value="3">
                    evenwichtig</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="zwaarte" value="4">
                    licht</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="zwaarte" value="5">
                    te licht</label> </td>
              </tr>
            </table>
            <p>Graag je mening hoe dit verbeterd kan worden:</p>
            <p>
              <textarea name="zwaarte_tx" cols="70" rows="3" id="zwaarte_tx"></textarea>
            </p>
            <p class="vraag_enquete">De groepsgrootte vond
              ik:</p>
            <table>
              <tr>
                <td><label>
                    <input type="hidden" name="groepsgrootte" value="0">
                    <input type="radio" name="groepsgrootte" value="5">
                    te groot </label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="groepsgrootte" value="4">
                    groot</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="groepsgrootte" value="3">
                    precies goed </label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="groepsgrootte" value="2">
                    klein</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="groepsgrootte" value="1">
                    te klein </label> </td>
              </tr>
            </table>
            <p>Graag je mening hoe dit verbeterd kan worden:</p>
            <p>
              <textarea name="groepsgrootte_tx" cols="70" rows="3" id="groepsgrootte_tx"></textarea>
            </p>
            <div class="vraag">
              <p class="vraag_enquete">La Pellegrina overweegt om (op beperkte schaal) individuele lessen van de docenten aan te bieden, die de deelnemers dan direct aan de docenten zouden betalen. Hiervoor heb ik:</p>
              <table width="342">
                <tr>
                  <td width="334"><label>
                      <input type="hidden" name="indiv_lessen" value="0">
                      <input type="radio" name="indiv_lessen" value="5">
                      zeer zeker belangstelling</label></td>
                </tr>
                <tr>
                  <td><label>
                      <input type="radio" name="indiv_lessen" value="4">
                      waarschijnlijk belangstelling</label></td>
                </tr>
                <tr>
                  <td><label>
                      <input type="radio" name="indiv_lessen" value="3">
                      nog geen mening</label></td>
                </tr>
                <tr>
                  <td><label>
                      <input type="radio" name="indiv_lessen" value="2">
                      waarschijnlijk geen belangstelling</label></td>
                </tr>
                <tr>
                  <td><label>
                      <input type="radio" name="indiv_lessen" value="1">
                      zeker geen belangstelling</label></td>
                </tr>
              </table>
              <p>Graag je mening hoe dit voor jou het beste georganiseerd kan worden:</p>
              <p>
                <textarea name="indiv_lessen_tx" cols="70" rows="3" id="indiv_lessen_tx"></textarea>
              </p>
            </div>
            <div class="vraag">
              <p class="vraag_enquete">Dit jaar hadden we het 'Concerto Event', waar enkele deelnemers als solisten speelden, begeleid door een van blad spelend ad-hoc-orkest. Dit gebeuren vind ik:</p>
              <table width="200">
                <tr>
                  <td><label>
                      <input type="hidden" name="solo_spelen" value="0">
                      <input type="radio" name="solo_spelen" value="5">
                      uitstekend </label></td>
                </tr>
                <tr>
                  <td><label>
                      <input type="radio" name="solo_spelen" value="4">
                      leuk </label></td>
                </tr>
                <tr>
                  <td><label>
                      <input type="radio" name="solo_spelen" value="3">
                      geen mening</label></td>
                </tr>
                <tr>
                  <td><label>
                      <input type="radio" name="solo_spelen" value="2">
                      twijfelachtig </label></td>
                </tr>
                <tr>
                  <td><label>
                      <input type="radio" name="solo_spelen" value="1">
                      zeer slecht</label></td>
                </tr>
              </table>
              <p>Vertel ons hoe dit op een zodanige manier kan worden georganiseerd dat het je (nog meer) zou aanspreken:</p>
              <p>
                <textarea name="solo_spelen_tx" cols="70" rows="3" id="solo_spelen_tx"></textarea>
              </p>
            </div>
            <hr>
            <h2>Docenten</h2>
            <p>Graag willen wij je mening weten over het functioneren
              van iedere afzonderlijke docent als musicus en als leraar.</p>
            <p class="vraag_enquete">Ik vond het functioneren van Martina
              Bernášková:</p>
            <table>
              <tr>
                <td><label><input name="Bernaskova3" type="radio" value="0" checked>
                    Geen mening (b.v. geen les van gehad)</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Bernaskova3" value="5">
                    zeer goed</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Bernaskova3" value="4">
                    goed</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Bernaskova3" value="3">
                    voldoende</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Bernaskova3" value="2">
                    zwak</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Bernaskova3" value="1">
                    onvoldoende</label> </td>
              </tr>
            </table>
            <p>Opmerkingen:</p>
            <p>
              <textarea name="Bernaskova3_tx" cols="70" rows="3" id="Bernaskova3_tx"></textarea>
            </p>
            <p class="vraag_enquete">Ik vond het functioneren van Petr Bernášek:</p>
            <table>
              <tr>
                <td><label><input type="radio" name="BernasekP" value="0" checked>
                    Geen mening (b.v. geen les van gehad)</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="BernasekP" value="5">
                    zeer goed</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="BernasekP" value="4">
                    goed</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="BernasekP" value="3">
                    voldoende</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="BernasekP" value="2">
                    zwak</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="BernasekP" value="1">
                    onvoldoende</label> </td>
              </tr>
            </table>
            <p>Opmerkingen:</p>
            <p>
              <textarea name="BernasekP_tx" cols="70" rows="3" id="BernasekP_tx"></textarea>
            </p>
            <p class="vraag_enquete">Ik vond het functioneren van Dirkjan
              Horringa:</p>
            <table>
              <tr>
                <td><label><input type="radio" name="Horringa3" value="0" checked>
                    Geen mening (b.v. geen les van gehad)</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Horringa3" value="5">
                    zeer goed</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Horringa3" value="4">
                    goed</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Horringa3" value="3">
                    voldoende</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Horringa3" value="2">
                    zwak</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Horringa3" value="1">
                    onvoldoende</label> </td>
              </tr>
            </table>
            <p>Opmerkingen:</p>
            <p>
              <textarea name="Horringa3_tx" cols="70" rows="3" id="Horringa3_tx"></textarea>
            </p>
            <p class="vraag_enquete">Ik vond het functioneren van Pavel Hořejší:</p>
            <table>
              <tr>
                <td><label><input type="radio" name="Horejsi" value="0" checked>
                    Geen mening (b.v. geen les van gehad)</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Horejsi" value="5">
                    zeer goed</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Horejsi" value="4">
                    goed</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Horejsi" value="3">
                    voldoende</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Horejsi" value="2">
                    zwak</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Horejsi" value="1">
                    onvoldoende</label></td>
              </tr>
            </table>
            <p>Opmerkingen:</p>
            <p>
              <textarea name="Horejsi_tx" cols="70" rows="3" id="Horejsi_tx"></textarea>
            </p>
            <p class="vraag_enquete">Ik vond het functioneren van Libor Nováček:</p>
            <table>
              <tr>
                <td><label><input type="radio" name="Novacek" value="0" checked>
                    Geen mening (b.v. geen les van gehad)</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Novacek" value="5">
                    zeer goed</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Novacek" value="4">
                    goed</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Novacek" value="3">
                    voldoende</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Novacek" value="2">
                    zwak</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Novacek" value="1">
                    onvoldoende</label> </td>
              </tr>
            </table>
            <p>Opmerkingen:</p>
            <p>
              <textarea name="Novacek_tx" cols="70" rows="3" id="Novacek_tx"></textarea>
            </p>
            <p class="vraag_enquete">Ik vond het functioneren van Mitchell Sandler:</p>
            <table>
              <tr>
                <td><label><input type="radio" name="Sandler3" value="0" checked>
                    Geen mening (b.v. geen les van gehad)</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Sandler3" value="5">
                    zeer goed</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Sandler3" value="4">
                    goed</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Sandler3" value="3">
                    voldoende</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Sandler3" value="2">
                    zwak</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Sandler3" value="1">
                    onvoldoende</label> </td>
              </tr>
            </table>
            <p>Opmerkingen:</p>
            <p>
              <textarea name="Sandler3_tx" cols="70" rows="3" id="Sandler3_tx"></textarea>
            </p>

            <p class="vraag_enquete">Ik vond het functioneren van Rudolf Sternadel:</p>
            <table>
              <tr>
                <td><label><input type="radio" name="Sternadel" value="0" checked>
                    Geen mening (b.v. geen les van gehad)</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Sternadel" value="5">
                    zeer goed</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Sternadel" value="4">
                    goed</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Sternadel" value="3">
                    voldoende</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Sternadel" value="2">
                    zwak</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Sternadel" value="1">
                    onvoldoende</label></td>
              </tr>
            </table>
            <p>Opmerkingen:</p>
            <p>
              <textarea name="Sternadel_tx" cols="70" rows="3" id="Sternadel_tx"></textarea>
            </p>
            </p>

            <div class="vraag">
              <p class="vraag_enquete">Ik vond het functioneren van Jitka Vlašánková:</p>
              <table>
                <tr>
                  <td><label>
                      <input type="radio" name="Vlasankova" value="0" checked>
                      Geen mening (b.v. geen les van gehad)</label></td>
                </tr>
                <tr>
                  <td><label>
                      <input type="radio" name="Vlasankova" value="5">
                      zeer goed</label></td>
                </tr>
                <tr>
                  <td><label>
                      <input type="radio" name="Vlasankova" value="4">
                      goed</label></td>
                </tr>
                <tr>
                  <td><label>
                      <input type="radio" name="Vlasankova" value="3">
                      voldoende</label></td>
                </tr>
                <tr>
                  <td><label>
                      <input type="radio" name="Vlasankova" value="2">
                      zwak</label></td>
                </tr>
                <tr>
                  <td><label>
                      <input type="radio" name="Vlasankova" value="1">
                      onvoldoende</label></td>
                </tr>
              </table>
              <p>Opmerkingen:</p>
              <p>
                <textarea name="Vlasankova_tx" cols="70" rows="3" id="Vlasankova_tx"></textarea>
              </p>
            </div>
            <p class="vraag_enquete">Ik vond het functioneren van organisator
              Milka:</p>
            <table>
              <tr>
                <td><label>
                    <input type="hidden" name="ass_3" value="0">
                    <input type="radio" name="ass_3" value="5">
                    zeer goed</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="ass_3" value="4">
                    goed</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="ass_3" value="3">
                    voldoende</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="ass_3" value="2">
                    zwak</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="ass_3" value="1">
                    onvoldoende</label> </td>
              </tr>
            </table>
            <p>Opmerkingen:</p>
            <p>
              <textarea name="ass_3_tx" cols="70" rows="3" id="ass_3_tx"></textarea>
            </p>
            <hr>
            <h2>Algemene vragen </h2>
            <p class="vraag_enquete">Ik geef de gehele cursus als rapportcijfer:<br>
              <span class="nadruk">stel de schuif in van 1 (laagste) tot 10 (hoogste waardering) in halve punten</span>
            </p>
            <table width="100%" border="1">
              <tr>
                <td width="1%" align="center" class="nadruk">1</td>
                <td width="1%"><input type="range" min="1" max="10" step="0.5" value="0" onChange="showValue(this.value);" />
                  <input name="cijfer_LP" id="cijfer_LP" type="hidden" value="">
                </td>
                <td width="1%" align="center" class="nadruk">10</td>
                <td width="20%">
                  <div class="groot centreer" id="cijfer"></div>
                </td>
              </tr>
            </table>
            <p class="vraag_enquete">Er is altijd ruimte voor verbetering: wat zou <em>La Pellegrina</em> moeten veranderen zodat je de cursus een 10 zou geven?</p>
            <textarea name="cijfer_LP_tx" cols="70" rows="3" id="cijfer_LP_tx"></textarea></p>

            <p class="vraag_enquete">Ik heb de volgende suggesties &amp; wensen
              voor repertoire:
            <p>
              <textarea name="rep_wensen" cols="70" rows="3" id="rep_wensen"></textarea>
            </p>
            <p class="vraag_enquete">Ik heb de volgende algemene opmerkingen &amp; ideeën:
            <p>
              <textarea name="alg_wensen" cols="70" rows="3" id="alg_wensen"></textarea>
            </p>
            <p class="vraag_enquete">De onderstaande uitspraak of
              anecdote mag op de website worden geciteerd (graag
              in dat geval ook je naam vermelden):
            <p>
              <textarea name="citaat" cols="70" rows="3" id="citaat"></textarea>
            </p>
            <hr>
            <p><strong>Dank voor het invullen. Verstuur nu dit formulier
                naar <em>La Pellegrina </em>door op de onderstaande
                knop &quot;verzenden&quot; te drukken:</strong></p>
            <p>
              <input name="submit" type="submit" value="verzenden">
              <input name="reset" type="reset" value="formulier leegmaken">
            </p>
            <input type="hidden" name="MM_insert" value="evaluatie">
          </form>
        </td>
      </tr>
    </table>
  </div>
</body>

</html>