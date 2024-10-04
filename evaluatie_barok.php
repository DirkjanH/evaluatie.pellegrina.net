<?php
//Connection statement
require_once('schrijf_naar_DB.php');
?>
<!DOCTYPE HTML>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <title>Evaluatie zomercursus barok</title>

  <link rel="apple-touch-icon" sizes="180x180" href="https://pellegrina.net/Images/Logos/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="https://pellegrina.net/Images/Logos/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="https://pellegrina.net/Images/Logos/favicon-16x16.png">
  <link rel="manifest" href="https://www.pellegrina.net/Images/Logos/site.webmanifest">

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
          <h1>Evaluatie Vivaldi's Venetiaanse Vespers</h1>
          <p><b>Spring eenvoudig met behulp van de muis of de Tab-toets van vraag
              naar vraag. Mocht je problemen tegenkomen bij het verzenden van het formulier,
              klik dan <a href="fout.htm" target="_blank">hier</a>.</b></p>
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
            <input name="cursus" type="hidden" id="cursus" value="59">
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
                    zeer goed</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="website" value="4">
                    goed</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="website" value="3">
                    redelijk</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="website" value="2">
                    slecht</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="website" value="1">
                    zeer slecht</label></td>
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
                    zeer goed</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Info_vooraf" value="4">
                    goed</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Info_vooraf" value="3">
                    redelijk</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Info_vooraf" value="2">
                    slecht</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Info_vooraf" value="1">
                    zeer slecht</label></td>
              </tr>
            </table>
            <p>Graag je mening hoe dit verbeterd kan worden:</p>
            <p>
              <textarea name="Info_vooraf_tx" cols="70" rows="3" id="Info_vooraf_tx"></textarea>
            </p>
            <p class="vraag_enquete">Dit jaar duurde de cursus 7 dagen, langer dan vorig jaar. Ik beschouw als optimale cursusduur:</p>
            <input type="hidden" name="duur" value="0">
            <table width="100%">
              <tr>
                <td><label>
                    <input type="radio" name="duur" value="5">
                    5 dagen zonder een vrije dag<span class="nadruk"> (zoals vorig jaar)</span></label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="duur" value="7">&nbsp;7 dagen zonder een vrije dag <span class="nadruk"> (zoals dit jaar)</span></label></td>
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
                    10 dagen met een vrije dag</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="duur" value="0">
                    anders <span class="nadruk">(graag hieronder toelichten)</span></label></td>
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
                    te hoog voor het gebodene</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="prijs" value="2">
                    hoog voor het gebodene</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="prijs" value="3">
                    in overeenstemming met het gebodene</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="prijs" value="4">
                    laag in vergelijking met het gebodene</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="prijs" value="5">
                    te laag in vergelijking met het gebodene</label></td>
              </tr>
            </table>
            <p>Eventuele opmerkingen over de cursusprijs:</p>
            <p>
              <textarea name="prijs_tx" cols="70" rows="3" id="prijs_tx"></textarea>
            </p>
            <p class="vraag_enquete">In Klooster Nieuw Sion verandert de laatste tijd veel. Dat zal mogelijk zijn weerslag hebben op het project, b.v. op de prijs en de accommodatie. <br>
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
            <p>
              <textarea name="belangrijk_tx" cols="70" rows="3" id="belangrijk_tx"></textarea>
            </p>
            <p class="vraag_enquete">Er zijn veel meer zomercursussen, ieder met andere keuzes en opzetten. <em>La Pellegrina</em> kan veel leren van een vergelijking. <br>
              Voor zover ik kan vergelijken, zie ik de volgende (positieve en negatieve) verschillen met andere muziekcursussen:</p>
            <p>
              <textarea name="verschillen" cols="70" rows="6" id="verschillen"></textarea>
              <hr>
            <h2>Inhoud</h2>
            <p class="vraag_enquete">De ensembleindeling en het aantal ensemble-repetities vond ik:</p>
            <table width="200">
              <tr>
                <td><label>
                    <input type="hidden" name="kamermuziek" value="0">
                    <input type="radio" name="kamermuziek" value="5">
                    zeer goed</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="kamermuziek" value="4">
                    goed</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="kamermuziek" value="3">
                    redelijk</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="kamermuziek" value="2">
                    slecht</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="kamermuziek" value="1">
                    zeer slecht</label></td>
              </tr>
            </table>
            <p>Graag je mening hoe dit verbeterd kan worden:</p>
            <p>
              <textarea name="kamermuziek_tx" cols="70" rows="3" id="kamermuziek_tx"></textarea>
            </p>
            <p class="vraag_enquete">De coaching van de kleine ensembles vond ik:</p>
            <table width="200">
              <tr>
                <td><label>
                    <input type="hidden" name="coaching_kamermuziek" value="0">
                    <input type="radio" name="coaching_kamermuziek" value="5">
                    zeer goed</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="coaching_kamermuziek" value="4">
                    goed</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="coaching_kamermuziek" value="3">
                    redelijk</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="coaching_kamermuziek" value="2">
                    slecht</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="coaching_kamermuziek" value="1">
                    zeer slecht</label></td>
              </tr>
            </table>
            <p>Graag je mening hoe dit verbeterd kan worden:</p>
            <p>
              <textarea name="coaching_kamermuziek_tx" cols="70" rows="3" id="coaching_kamermuziek_tx"></textarea>
            </p>
            <p class="vraag_enquete">De muziekkeuze voor het slotconcert is mij als volgt bevallen:</p>
            <table width="200">
              <tr>
                <td><label>
                    <input type="hidden" id="tutti" name="tutti" value="0">
                    <input type="radio" name="tutti" value="5">
                    zeer goed</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="tutti" value="4">
                    goed</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="tutti" value="3">
                    redelijk</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="tutti" value="2">
                    slecht</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="tutti" value="1">
                    zeer slecht</label></td>
              </tr>
            </table>
            <p>Graag je mening hoe dit verbeterd kan worden:</p>
            <p>
              <textarea name="tutti_tx" cols="70" rows="3" id="tutti_tx"></textarea>
            </p>
            <p class="vraag_enquete">De voorbereiding van het slotconcert vond ik:</p>
            <table width="200">
              <tr>
                <td><label>
                    <input name="coaching_tutti" type="hidden" id="coaching_tutti" value="0">
                    <input type="radio" name="coaching_tutti" value="5">
                    zeer goed</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="coaching_tutti" value="4">
                    goed</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="coaching_tutti" value="3">
                    redelijk</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="coaching_tutti" value="2">
                    slecht</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="coaching_tutti" value="1">
                    zeer slecht</label></td>
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
                    <input type="hidden" name="niveau2" value="0">
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
              <textarea name="niveau_tx" cols="70" rows="3" id="niveau_tx"></textarea>
            </p>
            <p class="vraag_enquete">Op de <a href="http://www.pellegrina.net/NL/index.php" target="_blank">openingspagina van de website</a> staat: &quot;of je nou amateur bent of professional, bij <em>La Pellegrina </em>staat een professionele instelling hoog in het vaandel. Natuurlijk kom je goed voorbereid naar een cursus, natuurlijk vind je het fijn als anderen dat ook doen&quot; . Hoe beoordeel je je eigen voorbereiding op de cursus? In welke mate kende je al je partijen toen je bij de cursus arriveerde?</p>
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
            <h2>Organisatie</h2>
            <p class="vraag_enquete">Ik verbleef in:<span class="nadruk"> (het gastenverblijf, de middenvleugel, de kluizen , het kampeerterrein of accommodatie die je zelf had geregeld)</span></p>
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
            <p class="vraag_enquete">De werkruimtes en de instrumenten in het klooster vond ik:</p>
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
            <p class="vraag_enquete">Ontbijt, lunch en avondmaaltijden vond ik:</p>
            <table width="494">
              <tr>
                <td width="339"><label>
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
              <tr>
                <td><label>
                    <input type="radio" name="maaltijden" value="0">
                    niet van toepassing (geen gebruik van gemaakt)</label></td>
              </tr>
            </table>
            <p>Graag je mening hoe dit verbeterd kan worden:</p>
            <p>
              <textarea name="maaltijden_tx" cols="70" rows="3" id="maaltijden_tx"></textarea>
            </p>
            <p class="vraag_enquete">De informatievoorziening middels dagelijkse bulletins via email vond
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
            <table width="200">
              <tr>
                <td><label>
                    <input type="hidden" name="dagindeling" value="0">
                    <input type="radio" name="dagindeling" value="5">
                    zeer goed</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="dagindeling" value="4">
                    goed</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="dagindeling" value="3">
                    in orde</label></td>
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
                    zeer slecht</label></td>
              </tr>
            </table>
            <p>Graag je mening hoe dit verbeterd kan worden:</p>
            <p>
              <textarea name="dagindeling_tx" cols="70" rows="3" id="dagindeling_tx"></textarea>
            </p>
            <p class="vraag_enquete">De &quot;werkdruk&quot; van het programma vond ik:</p>
            <table width="200">
              <tr>
                <td><label>
                    <input type="hidden" name="zwaarte" value="0">
                    <input type="radio" name="zwaarte" value="1">
                    te zwaar</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="zwaarte" value="2">
                    zwaar</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="zwaarte" value="3">
                    evenwichtig</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="zwaarte" value="4">
                    licht</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="zwaarte" value="5">
                    te licht</label></td>
              </tr>
            </table>
            <p>Graag je mening hoe dit verbeterd kan worden:</p>
            <p>
              <textarea name="zwaarte_tx" cols="70" rows="3" id="zwaarte_tx"></textarea>
            </p>
            <p class="vraag_enquete">De groepsgrootte vond ik:</p>
            <table width="200">
              <tr>
                <td><label>
                    <input type="hidden" name="groepsgrootte" value="0">
                    <input type="radio" name="groepsgrootte" value="5">
                    te groot </label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="groepsgrootte" value="4">
                    groot</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="groepsgrootte" value="3">
                    precies goed </label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="groepsgrootte" value="2">
                    klein</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="groepsgrootte" value="1">
                    te klein </label></td>
              </tr>
            </table>
            <p>Graag je mening hoe dit verbeterd kan worden:</p>
            <p>
              <textarea name="groepsgrootte_tx" cols="70" rows="3" id="groepsgrootte_tx"></textarea>
            </p>
            <hr>
            <h2>Docenten</h2>
            <p>Graag willen wij je mening weten over het functioneren van
              iedere afzonderlijke docent als musicus en als leraar.</p>
            <p class="vraag_enquete">Ik vond het functioneren van Dirkjan
              Horringa:</p>
            <table>
              <tr>
                <td><label><input type="radio" name="Horringa1" value="0" checked>
                    Geen mening (b.v. geen les van gehad) </label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Horringa1" value="5">
                    zeer goed</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Horringa1" value="4">
                    goed</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Horringa1" value="3">
                    redelijk</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Horringa1" value="2">
                    slecht</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Horringa1" value="1">
                    zeer slecht</label></td>
              </tr>
            </table>
            <p>Opmerkingen:</p>
            <p>
              <textarea name="Horringa1_tx" cols="70" rows="3" id="Horringa1_tx"></textarea>
            </p>
            <p class="vraag_enquete">Ik vond het functioneren van Femke Huizinga:</p>
            <table>
              <tr>
                <td><label>
                    <input type="radio" name="Huizinga" value="0" checked>
                    Geen mening (b.v. geen les van gehad) </label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Huizinga" value="5">
                    zeer goed</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Huizinga" value="4">
                    goed</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Huizinga" value="3">
                    redelijk</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Huizinga" value="2">
                    slecht</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Huizinga" value="1">
                    zeer slecht</label></td>
              </tr>
            </table>
            <p>Opmerkingen:</p>
            <p>
              <textarea name="Huizinga_tx" cols="70" rows="3" id="Huizinga_tx"></textarea>
            <p class="vraag_enquete">Ik vond het functioneren van Hanna Lindeijer:</p>
            <table>
              <tr>
                <td><label>
                    <input type="radio" name="Lindeijer" value="0" checked>
                    Geen mening (b.v. geen les van gehad) </label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Lindeijer" value="5">
                    zeer goed</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Lindeijer" value="4">
                    goed</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Lindeijer" value="3">
                    redelijk</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Lindeijer" value="2">
                    slecht</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Lindeijer" value="1">
                    zeer slecht</label></td>
              </tr>
            </table>
            <p>Opmerkingen:</p>
            <p>
              <textarea name="Lindeijer_tx" cols="70" rows="3" id="Lindeijer_tx"></textarea>
            <p class="vraag_enquete">Ik vond het functioneren van Ricardo Rodriguez Miranda:</p>
            <table>
              <tr>
                <td><label><input type="radio" name="Rodriguez" value="0" checked>
                    Geen mening (b.v. geen les van gehad) </label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Rodriguez" value="5">
                    zeer goed</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Rodriguez" value="4">
                    goed</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Rodriguez" value="3">
                    redelijk</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Rodriguez" value="2">
                    slecht</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Rodriguez" value="1">
                    zeer slecht</label></td>
              </tr>
            </table>
            <p>Opmerkingen:</p>
            <p>
              <textarea name="Rodriguez_tx" cols="70" rows="3" id="Rodriguez_tx"></textarea>
            </p>
            <p class="vraag_enquete">Ik vond het functioneren van Mitchell
              Sandler: </p>
            <table>
              <tr>
                <td><label><input type="radio" name="Sandler1" value="0" checked>
                    Geen mening (b.v. geen les van gehad) </label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Sandler1" value="5">
                    zeer goed</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Sandler1" value="4">
                    goed</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Sandler1" value="3">
                    redelijk</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Sandler1" value="2">
                    slecht</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Sandler1" value="1">
                    zeer slecht</label></td>
              </tr>
            </table>
            <p>Opmerkingen:</p>
            <p>
              <textarea name="Sandler1_tx" cols="70" rows="3" id="Sandler1_tx"></textarea>
            <p class="vraag_enquete">Ik vond het functioneren van Edoardo Valorz:</p>
            <table>
              <tr>
                <td><label><input type="radio" name="Valorz" value="0" checked>
                    Geen mening (b.v. geen les van gehad) </label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Valorz" value="5">
                    zeer goed</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Valorz" value="4">
                    goed</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Valorz" value="3">
                    redelijk</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Valorz" value="2">
                    slecht</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Valorz" value="1">
                    zeer slecht</label></td>
              </tr>
            </table>
            <p>Opmerkingen:</p>
            <p>
              <textarea name="Valorz_tx" cols="70" rows="3" id="Valorz_tx"></textarea>
            <p class="vraag_enquete">Ik vond het functioneren van Jurgen als assistent:</p>
            <table width="200">
              <tr>
                <td><label>
                    <input type="hidden" name="ass_2" value="0">
                    <input type="radio" name="ass_2" value="5">
                    zeer goed</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="ass_2" value="4">
                    goed</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="ass_2" value="3">
                    voldoende</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="ass_2" value="2">
                    zwak</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="ass_2" value="1">
                    onvoldoende</label></td>
              </tr>
            </table>
            <p>Opmerkingen:</p>
            <p>
              <textarea name="ass_2_tx" cols="70" rows="3" id="ass_2_tx"></textarea>
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
            <textarea name="cijfer_LP_tx" cols="70" rows="3" id="cijfer_LP_tx"></textarea>

            <p class="vraag_enquete">Ik heb de volgende suggesties &amp; wensen
              voor repertoire:
            <p>
              <textarea name="rep_wensen" cols="70" rows="3" id="rep_wensen"></textarea>
            <p class="vraag_enquete">Ik heb de volgende algemene opmerkingen &amp; ideeën:
            <p>
              <textarea name="alg_wensen" cols="70" rows="3" id="alg_wensen"></textarea>
            </p>
            <p class="vraag_enquete">De onderstaande uitspraak of anecdote
              mag op de website worden geciteerd:<br>
              <span class="nadruk">graag
                in dat geval ook je naam vermelden </span>
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
            <p>&nbsp;</p>
            <input type="hidden" name="MM_insert" value="evaluatie">
          </form>
        </td>
      </tr>
    </table>
  </div>
</body>

</html>