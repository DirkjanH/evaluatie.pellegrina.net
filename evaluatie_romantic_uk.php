<!DOCTYPE HTML>
<html><!-- InstanceBegin template="/Templates/evaluatie.dwt" codeOutsideHTMLIsLocked="false" -->

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <!-- InstanceBeginEditable name="doctitle" -->
  <title>Evaluation summer school Dvořák's Stabat Mater</title>
  <!-- InstanceEndEditable -->
  <meta charset="utf-8">
  <!-- InstanceBeginEditable name="head" -->
  <!-- InstanceEndEditable -->

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
    <!-- InstanceBeginEditable name="EditRegion1" -->
    <table id="evaluatie">
      <tr>
        <td>
          <h2>Evaluation &quot;Dvořák's Stabat Mater&quot;</h2>
          <p>&nbsp;</p>
          <p><b>Simply jump from question to question using the mouse or the Tab
              key. Should you encounter problem sending in this form, please click <a href="fout_uk.htm" target="_blank">here</a>.</b></p>
          <hr>
          <form action="<?php echo $editFormAction; ?>" name="evaluatie" method="POST">
            <table>
              <tr>
                <td width="54">Name:</td>
                <td width="440">
                  <p>
                    <input name="Naam" type=text id="Naam" size="50">
                  </p>
                </td>
              </tr>
              <tr>
                <td valign="top">&nbsp;</td>
                <td>
                  <p class="nadruk">(not obligatory! Please feel free
                    to fill out this form anonymously) </p>
                </td>
              </tr>
            </table>
            <input name="cursus" type="hidden" id="cursus" value="53">
            <input name="tijd" type="hidden" id="tijd" value="<?php echo date("Y-m-d H:i:s"); ?>">
            <hr>
            <h2>Publicity &amp; Reputation </h2>
            <p class="vraag_enquete">I know about this course in the first
              place from:</p>
            <table>
              <tr>
                <td class="standaard"><input type="hidden" name="Publiciteit2" value="niet ingevuld">
                  <input type="radio" name="Publiciteit" value="kennis">
                  <label>friends/acquaintances, e.g.
                    <input name="naam_aanbrenger" type="text" id="naam_aanbrenger" size="20">
                  </label>
                </td>
              </tr>
              <tr>
                <td class="standaard"><label>
                    <input type="radio" name="Publiciteit" value="LP website">
                    the <em>La Pellegrina </em>web site</label></td>
              </tr>
              <tr>
                <td class="standaard"><label>
                    <input type="radio" name="Publiciteit" value="drukwerk">
                    an overview of music courses, summer schools and festivals in a newspaper or magazine <span class="nadruk">(please state below which newspaper or magazine)</span></label></td>
              </tr>
              <tr>
                <td class="standaard"><label>
                    <input type="radio" name="Publiciteit" value="lijst op internet">
                    an overview of music courses, summer schools and festivals on a web site <span class="nadruk">(please state below which site)</span></label></td>
              </tr>
              <tr>
                <td class="standaard"><label>
                    <input type="radio" name="Publiciteit" value="anders">
                    otherwise <span class="nadruk">(please specify below)</span></label></td>
              </tr>
            </table>
            <p class="standaard">
              <textarea name="Publiciteit_tx" cols="70" rows="3" id="Publiciteit_tx"></textarea>
            </p>
            <p class="vraag_enquete">The web site I consider:</p>
            <table>
              <tr>
                <td><label><input name="website" type="radio" value="0" checked>
                    I did not see the web site</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="website" value="5">
                    excellent</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="website" value="4">
                    good</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="website" value="3">
                    adequate</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="website" value="2">
                    bad</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="website" value="1">
                    very bad </label></td>
              </tr>
            </table>
            <p>The web site can be improved by:</p>
            <p>
              <textarea name="website_tx" cols="70" rows="3" id="website_tx"></textarea>
            </p>
            <h2>Information in advance</h2>
            <p class="vraag_enquete">The information in advance matched reality
              during the course:</p>
            <table width="200">
              <tr>
                <td><label>
                    <input type="hidden" name="Info_vooraf" value="0">
                    <input type="radio" name="Info_vooraf" value="5">
                    excellently</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Info_vooraf" value="4">
                    well</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Info_vooraf" value="3">
                    reasonably</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Info_vooraf" value="2">
                    badly</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Info_vooraf" value="1">
                    very badly </label></td>
              </tr>
            </table>
            <p>The following can be improved:</p>
            <p>
              <textarea name="Info_vooraf_tx" cols="70" rows="3" id="Info_vooraf_tx"></textarea>
            </p>
            <p class="vraag_enquete">This year the course was 10 days including a free day. I consider the optimal course duration:</p>
            <table>
              <tr>
                <td width="491"><label>
                    <input type="hidden" name="duur" value="0">
                    <input type="radio" name="duur" value="8">
                    8 days without a free day </label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="duur" value="9">
                    9 days without a free day</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="duur" value="9-1">
                    9 days with a free day</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="duur" value="10-1">
                    10 days with a free day (like this year)</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="duur" value="0">
                    other (please specify underneath)</label></td>
              </tr>
            </table>
            <p>Remarks about the course duration:</p>
            <p>
              <textarea name="duur_tx" cols="70" rows="3" id="duur_tx2"></textarea>
            </p>
            <p class="vraag_enquete">I consider the course fee:</p>
            <table>
              <tr>
                <td width="491"><label>
                    <input type="hidden" name="prijs" value="0">
                    <input type="radio" name="prijs" value="1">
                    too high in comparison with the quality offered</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="prijs" value="2">
                    high in comparison with the quality offered</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="prijs" value="3">
                    in accordance with the quality offered</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="prijs" value="4">
                    low in comparison with the quality offered</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="prijs" value="5">
                    too low in comparison with the quality offered</label></td>
              </tr>
            </table>
            <p>Remarks about the course fee:</p>
            <p>
              <textarea name="prijs_tx" cols="70" rows="3" id="prijs_tx"></textarea>
            <p class="vraag_enquete">Many things are changing in the Czech Republic. This will have implications for the summer schools, for example on the price and the accommodation. <br>
              Considering participation in next year's summer school, the following is decisive for me:</p>
            <table>
              <tr>
                <td><label>
                    <input type="hidden" name="belangrijk" value="0">
                    <input type="radio" name="belangrijk" value="1">
                    the course fee (please explain below) </label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="belangrijk" value="2">
                    the quality of the accommodation (please explain below)</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="belangrijk" value="3">
                    the way of tuition (please explain below)</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="belangrijk" value="4">
                    the level of the participants (please explain below)</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="belangrijk" value="5">
                    the atmosphere and the way of communicating (please explain below)</label></td>
              </tr>
            </table>
            <p>Explanation:</p>
            <p>
              <textarea name="belangrijk_tx" cols="70" rows="3" id="belangrijk_tx"></textarea>
            </p>
            <p class="vraag_enquete">Many more summer schools exist, each with other choices and systems. La Pellegrina can learn much from a comparison. <br>
              In as far as I can judge, I see the following (positive and negative) differences with other musical summer schools:</p>
            <p>
              <textarea name="verschillen" cols="70" rows="6" id="verschillen"></textarea>
              <hr>
            <h2>Content</h2>
            <p class="vraag_enquete">The preparatory rehearsal on June 12
              in Holland was:</p>
            <table>
              <tr>
                <td><label><input type="radio" name="inzeepdag" value="0" checked>
                    I was not present</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="inzeepdag" value="5">
                    very useful </label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="inzeepdag" value="4">
                    useful</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="inzeepdag" value="3">
                    reasonably</label>
                  useful</td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="inzeepdag" value="2">
                    hardly useful</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="inzeepdag" value="1">
                    superfluous</label></td>
              </tr>
            </table>
            <p>The following can be improved:</p>
            <p>
              <textarea name="inzeepdag_tx" cols="70" rows="3" id="inzeepdag_tx"></textarea>
            </p>
            <p class="vraag_enquete">The chamber music formations I consider:</p>
            <table width="200">
              <tr>
                <td><label>
                    <input type="hidden" name="kamermuziek" value="0">
                    <input type="radio" name="kamermuziek" value="5">
                    excellent</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="kamermuziek" value="4">
                    good</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="kamermuziek" value="3">
                    adequate</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="kamermuziek" value="2">
                    bad</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="kamermuziek" value="1">
                    very bad</label></td>
              </tr>
            </table>
            <p>The following can be improved:</p>
            <p>
              <textarea name="kamermuziek_tx" cols="70" rows="3" id="kamermuziek_tx"></textarea>
            </p>
            <p class="vraag_enquete">The coaching of the chamber music I consider:</p>
            <table width="200">
              <tr>
                <td><label>
                    <input type="hidden" name="coaching_kamermuziek" value="0">
                    <input type="radio" name="coaching_kamermuziek" value="5">
                    excellent</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="coaching_kamermuziek" value="4">
                    good</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="coaching_kamermuziek" value="3">
                    adequate</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="coaching_kamermuziek" value="2">
                    bad</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="coaching_kamermuziek" value="1">
                    very bad</label></td>
              </tr>
            </table>
            <p>The following can be improved:</p>
            <p>
              <textarea name="coaching_kamermuziek_tx" cols="70" rows="3" id="coaching_kamermuziek_tx"></textarea>
            </p>
            <p class="vraag_enquete">The programming of the final concert with Dvořák's Stabat Mater I consider:</p>
            <table width="200">
              <tr>
                <td><label>
                    <input type="hidden" name="tutti" value="0">
                    <input type="radio" name="tutti" value="5">
                    excellent</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="tutti" value="4">
                    good</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="tutti" value="3">
                    adequate</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="tutti" value="2">
                    bad</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="tutti" value="1">
                    very bad</label></td>
              </tr>
            </table>
            <p>The following can be improved:</p>
            <p>
              <textarea name="tutti_tx" cols="70" rows="3" id="tutti_tx"></textarea>
            </p>
            <p class="vraag_enquete">The rehearsals for the final concert
              with Dvořák's Stabat Mater I consider:</p>
            <table width="200">
              <tr>
                <td><label>
                    <input type="hidden" name="coaching_tutti" value="0">
                    <input type="radio" name="coaching_tutti" value="5">
                    excellent</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="coaching_tutti" value="4">
                    good</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="coaching_tutti" value="3">
                    adequate</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="coaching_tutti" value="2">
                    bad</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="coaching_tutti" value="1">
                    very bad</label></td>
              </tr>
            </table>
            <p>The following can be improved:</p>
            <p>
              <textarea name="coaching_tutti_tx" cols="70" rows="3" id="coaching_tutti_tx"></textarea>
            </p>
            <p class="vraag_enquete">The musical and technical level of the participants I consider:</p>
            <table>
              <tr>
                <td><label>
                    <input type="hidden" name="niveau3" value="0">
                    <input type="radio" name="niveau" value="5">
                    too high </label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="niveau" value="4">
                    high</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="niveau" value="3">
                    just right</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="niveau" value="2">
                    low</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="niveau" value="1">
                    too low </label></td>
              </tr>
            </table>
            <p>The following can be improved:</p>
            <p>
              <textarea name="niveau_tx2" cols="70" rows="3" id="niveau_tx2"></textarea>
            </p>
            <p class="vraag_enquete">On the <a href="http://www.pellegrina.net/EN/index.php" target="_blank">opening page of the website</a> is stated: &quot;Whether you are an amateur or professional, with <em>La Pellegrina</em> a professional attitude is of paramount importance. If you are the type of person who comes well prepared, and you appreciate it when others do so too, then please continue reading&quot;. How do you evaluate your preparation for the course? To what extent did you know and master your parts when you arrived in Bechyně?</p>
            <table>
              <tr>
                <td><label>
                    <input type="hidden" name="professionaliteit" value="0">
                    <input type="radio" name="professionaliteit" value="5">
                    very well</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="professionaliteit" value="4">
                    sufficiently</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="professionaliteit" value="3">
                    just about</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="professionaliteit" value="2">
                    barely</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="professionaliteit" value="1">
                    not at all</label></td>
              </tr>
            </table>
            <p>The following can be improved:</p>
            <p>
              <textarea name="professionaliteit_tx" cols="70" rows="3" id="professionaliteit_tx"></textarea>
            </p>
            <hr>
            <h2>Organisation</h2>
            <p class="vraag_enquete">I stayed at:<span class="nadruk"> (the hostel, pension Elektra or accommodation you arranged yourself)</span></p>
            <p>
              <label for="acc_name">Name of accommodation: </label>
              <input name="acc_name" type="text" id="acc_name" size="60">
            </p>
            <p></p>
            <p class="vraag_enquete">I consider this accommodation:</p>
            <table>
              <tr>
                <td><label>
                    <input type="hidden" name="accommodatie" value="0">
                    <input type="radio" name="accommodatie" value="5">
                    excellent</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="accommodatie" value="4">
                    good</label></td>
              </tr>
              <tr>
                <td height="22"><label>
                    <input type="radio" name="accommodatie" value="3">
                    adequate</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="accommodatie" value="2">
                    bad</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="accommodatie" value="1">
                    very bad</label></td>
              </tr>
            </table>
            <p>At this place the following can be improved:</p>
            <p>
              <textarea name="accommodatie_tx" cols="70" rows="3" id="accommodatie_tx"></textarea>
            </p>
            <p class="vraag_enquete">The classrooms and the instruments at the monastery I consider:</p>
            <table width="200">
              <tr>
                <td><label>
                    <input type="hidden" name="werkruimte" value="0">
                    <input type="radio" name="werkruimte" value="5">
                    excellent</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="werkruimte" value="4">
                    good</label></td>
              </tr>
              <tr>
                <td height="22"><label>
                    <input type="radio" name="werkruimte" value="3">
                    adequate</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="werkruimte" value="2">
                    bad</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="werkruimte" value="1">
                    very bad</label></td>
              </tr>
            </table>
            <p>The following can be improved:</p>
            <p>
              <textarea name="werkruimte_tx" cols="70" rows="3" id="werkruimte_tx"></textarea>
            </p>
            <p class="vraag_enquete">Breakfast and lunch I consider:</p>
            <p></p>
            <table width="200">
              <tr>
                <td><label>
                    <input type="hidden" name="maaltijden" value="0">
                    <input type="radio" name="maaltijden" value="5">
                    excellent</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="maaltijden" value="4">
                    good</label></td>
              </tr>
              <tr>
                <td height="22"><label>
                    <input type="radio" name="maaltijden" value="3">
                    adequate</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="maaltijden" value="2">
                    bad</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="maaltijden" value="1">
                    very bad</label></td>
              </tr>
            </table>
            <p>The following can be improved:</p>
            <p>
              <textarea name="maaltijden_tx" cols="70" rows="3" id="maaltijden_tx"></textarea>
            </p>
            <div class="vraag">
              <p class="vraag_enquete">This year the evening meals were no longer organized jointly in one place, except on the first and last evening. I found this:</p>
              <table width="200">
                <tr>
                  <td><label>
                      <input type="hidden" name="diner_vrij" value="0">
                      <input type="radio" name="diner_vrij" value="5">
                      excellent </label></td>
                </tr>
                <tr>
                  <td><label>
                      <input type="radio" name="diner_vrij" value="4">
                      good</label></td>
                </tr>
                <tr>
                  <td><label>
                      <input type="radio" name="diner_vrij" value="3">
                      adequate </label></td>
                </tr>
                <tr>
                  <td><label>
                      <input type="radio" name="diner_vrij" value="2">
                      bad</label></td>
                </tr>
                <tr>
                  <td><label>
                      <input type="radio" name="diner_vrij" value="1">
                      very bad</label></td>
                </tr>
              </table>
              <p>Please give your opinion how this can be improved:</p>
              <p>
                <textarea name="diner_vrij_tx" cols="70" rows="3" id="diner_vrij_tx"></textarea>
              </p>
            </div>
            <div class="onzichtbaar">
              <p class="vraag_enquete">This year it was possible to take a meal ticket for evening meals at restaurant Protivínka. I consider this:</p>
              <table>
                <tr>
                  <td><label>
                      <input type="radio" name="maaltijdpas" value="0">
                      not applicable<span class="nadruk">(did not make use of it)</span></label></td>
                </tr>
                <tr>
                  <td><label>
                      <input type="radio" name="maaltijdpas" value="5">
                      excellent</label></td>
                </tr>
                <tr>
                  <td><label>
                      <input type="radio" name="maaltijdpas" value="4">
                      good</label></td>
                </tr>
                <tr>
                  <td><label>
                      <input type="radio" name="maaltijdpas" value="3">
                      adequate </label></td>
                </tr>
                <tr>
                  <td><label>
                      <input type="radio" name="maaltijdpas" value="2">
                      bad</label></td>
                </tr>
                <tr>
                  <td><label>
                      <input type="radio" name="maaltijdpas" value="1">
                      very bad</label></td>
                </tr>
              </table>
              <p>Please give your opinion how this can be improved:</p>
              <p>
                <textarea name="maaltijdpas_tx" cols="70" rows="3" id="maaltijdpas_tx"></textarea>
              </p>
              <p class="vraag_enquete">The information in the daily bulletin via email and the bulletin board at the monastery I consider:</p>
            </div>
            <table width="200">
              <tr>
                <td><label>
                    <input type="hidden" name="info_terplekke" value="0">
                    <input type="radio" name="info_terplekke" value="5">
                    excellent</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="info_terplekke" value="4">
                    good</label></td>
              </tr>
              <tr>
                <td height="22"><label>
                    <input type="radio" name="info_terplekke" value="3">
                    adequate</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="info_terplekke" value="2">
                    bad</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="info_terplekke" value="1">
                    very bad</label></td>
              </tr>
            </table>
            <p>The following can be improved:</p>
            <p>
              <textarea name="info_terplekke_tx" cols="70" rows="3" id="info_terplekke_tx"></textarea>
            </p>
            <p class="vraag_enquete">The setup of the daily program I consider:</p>
            <table width="200">
              <tr>
                <td><label>
                    <input type="hidden" name="dagindeling" value="0">
                    <input type="radio" name="dagindeling" value="5">
                    excellent</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="dagindeling" value="4">
                    good</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="dagindeling" value="3">
                    adequate</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="dagindeling" value="2"> bad</label> </td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="dagindeling" value="1">
                    very bad</label></td>
              </tr>
            </table>
            <p>The following can be improved:</p>
            <p>
              <textarea name="dagindeling_tx" cols="70" rows="3" id="dagindeling_tx"></textarea>
            </p>
            <p class="vraag_enquete">The &quot;work load&quot; of the daily
              program I consider:</p>
            <table width="200">
              <tr>
                <td><label>
                    <input type="hidden" name="zwaarte" value="0">
                    <input type="radio" name="zwaarte" value="1">
                    too heavy</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="zwaarte" value="2">
                    heavy</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="zwaarte" value="3">
                    well balanced </label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="zwaarte" value="4">
                    light</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="zwaarte" value="5">
                    too light</label></td>
              </tr>
            </table>
            <p>The following can be improved:</p>
            <p>
              <textarea name="zwaarte_tx" cols="70" rows="3" id="zwaarte_tx"></textarea>
            </p>
            <p class="vraag_enquete">The group size I consider:</p>
            <table width="200">
              <tr>
                <td><label>
                    <input type="hidden" name="groepsgrootte" value="0">
                    <input type="radio" name="groepsgrootte" value="5">
                    too big </label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="groepsgrootte" value="4">
                    big</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="groepsgrootte" value="3">
                    just right </label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="groepsgrootte" value="2">
                    small</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="groepsgrootte" value="1">
                    too small </label></td>
              </tr>
            </table>
            <p>The following can be improved:</p>
            <p>
              <textarea name="groepsgrootte_tx" cols="70" rows="3" id="groepsgrootte_tx"></textarea>
            </p>
            <div class="vraag">
              <p class="vraag_enquete">La Pellegrina is considering offering individual classes of teachers (on a limited scale). The participants would then pay directly to the tutors. In this I am:</p>
              <table width="342">
                <tr>
                  <td width="334"><label>
                      <input type="hidden" name="indiv_lessen" value="0">
                      <input type="radio" name="indiv_lessen" value="5">
                      surely interested</label></td>
                </tr>
                <tr>
                  <td><label>
                      <input type="radio" name="indiv_lessen" value="4">
                      quite likely interested</label></td>
                </tr>
                <tr>
                  <td><label>
                      <input type="radio" name="indiv_lessen" value="3">
                      not sure if I am interesed or not</label></td>
                </tr>
                <tr>
                  <td><label>
                      <input type="radio" name="indiv_lessen" value="2">
                      quite likely not interested</label></td>
                </tr>
                <tr>
                  <td><label>
                      <input type="radio" name="indiv_lessen" value="1">
                      surely not interested</label></td>
                </tr>
              </table>
              <p>Please give your opinion how this can be organized optimally for you:</p>
              <p>
                <textarea name="indiv_lessen_tx" cols="70" rows="3" id="indiv_lessen_tx"></textarea>
              </p>
            </div>
            <div class="vraag">
              <p class="vraag_enquete">This year we had the 'Concerto Event', where some participants played as soloists, accompanied by a sightreading ad-hoc orchestra. I consider this event:</p>
              <table width="200">
                <tr>
                  <td><label>
                      <input type="hidden" name="solo_spelen" value="0">
                      <input type="radio" name="solo_spelen" value="5">
                      excellent </label></td>
                </tr>
                <tr>
                  <td><label>
                      <input type="radio" name="solo_spelen" value="4">
                      nice </label></td>
                </tr>
                <tr>
                  <td><label>
                      <input type="radio" name="solo_spelen" value="3">
                      no opinion</label></td>
                </tr>
                <tr>
                  <td><label>
                      <input type="radio" name="solo_spelen" value="2">
                      doubtful </label></td>
                </tr>
                <tr>
                  <td><label>
                      <input type="radio" name="solo_spelen" value="1">
                      very bad </label></td>
                </tr>
              </table>
              <p>Please tell us how this could be organised in such a way that it would appeal (even more) to you:</p>
              <p>
                <textarea name="solo_spelen_tx" cols="70" rows="3" id="solo_spelen_tx"></textarea>
              </p>
            </div>
            <hr>
            <h2>Tutors</h2>
            <p>We would appreciate your opinion about the functioning
              of each individual tutor as musician and teacher. </p>
            <p class="vraag_enquete">I consider the functioning of Martina
              Bernášková:</p>
            <table>
              <tr>
                <td><label><input name="Bernaskova3" type="radio" value="0" checked>
                    no opinion</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Bernaskova3" value="5">
                    excellent</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Bernaskova3" value="4">
                    good</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Bernaskova3" value="3">
                    adequate</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Bernaskova3" value="2">
                    weak</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Bernaskova3" value="1">
                    inadequate</label></td>
              </tr>
            </table>
            <p>Remarks:</p>
            <p>
              <textarea name="Bernaskova3_tx" cols="70" rows="3" id="Bernaskova3_tx"></textarea>
            <p class="vraag_enquete">I consider the functioning of Petr Bernášek:</p>
            <table>
              <tr>
                <td><label><input name="BernasekP" type="radio" value="0" checked>
                    no opinion</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="BernasekP" value="5">
                    excellent</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="BernasekP" value="4">
                    good</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="BernasekP" value="3">
                    adequate</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="BernasekP" value="2">
                    weak</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="BernasekP" value="1">
                    inadequate</label></td>
              </tr>
            </table>
            <p>Remarks:</p>
            <p>
              <textarea name="BernasekP_tx" cols="70" rows="3" id="BernasekP_tx"></textarea>
            <p class="vraag_enquete">I consider the functioning of Dirkjan
              Horringa:</p>
            <table>
              <tr>
                <td><label><input name="Horringa3" type="radio" value="0" checked>
                    no opinion</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Horringa3" value="5">
                    excellent</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Horringa3" value="4">
                    good</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Horringa3" value="3">
                    adequate</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Horringa3" value="2">
                    weak</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Horringa3" value="1">
                    inadequate</label></td>
              </tr>
            </table>
            <p>Remarks:</p>
            <p>
              <textarea name="Horringa3_tx" cols="70" rows="3" id="Horringa3_tx"></textarea>
            </p>
            <p class="vraag_enquete">I consider the functioning of Pavel Hořejší:</p>
            <table>
              <tr>
                <td><label><input name="Horejsi" type="radio" value="0" checked>
                    no opinion</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Horejsi" value="5">
                    excellent</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Horejsi" value="4">
                    good</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Horejsi" value="3">
                    adequate</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Horejsi" value="2">
                    weak</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Horejsi" value="1">
                    inadequate</label></td>
              </tr>
            </table>
            <p>Remarks:</p>
            <p>
              <textarea name="Horejsi_tx" cols="70" rows="3" id="Horejsi_tx"></textarea>
            </p>
            <p class="vraag_enquete">I consider the functioning of Libor Nováček:</p>
            <table>
              <tr>
                <td><label><input name="Novacek" type="radio" value="0" checked>
                    no opinion</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Novacek" value="5">
                    excellent</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Novacek" value="4">
                    good</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Novacek" value="3">
                    adequate</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Novacek" value="2">
                    weak</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Novacek" value="1">
                    inadequate</label></td>
              </tr>
            </table>
            <p>Remarks:</p>
            <p>
              <textarea name="Novacek_tx" cols="70" rows="3" id="Novacek_tx"></textarea>
            </p>
            <p class="vraag_enquete">I consider the functioning of Mitchell Sandler:</p>
            <table>
              <tr>
                <td><label><input name="Sandler3" type="radio" value="0" checked>
                    no opinion</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Sandler3" value="5">
                    excellent</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Sandler3" value="4">
                    good</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Sandler3" value="3">
                    adequate</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Sandler3" value="2">
                    weak</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Sandler3" value="1">
                    inadequate</label></td>
              </tr>
            </table>
            <p>Remarks:</p>
            <p>
              <textarea name="Sandler3_tx" cols="70" rows="3" id="Sandler3_tx"></textarea>
            <p class="vraag_enquete">I consider the functioning of Václav Vacek:</p>
            <table>
              <tr>
                <td><label><input name="Vacek" type="radio" value="0" checked>
                    no opinion</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Vacek" value="5">
                    excellent</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Vacek" value="4">
                    good</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Vacek" value="3">
                    adequate</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Vacek" value="2">
                    weak</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="Vacek" value="1">
                    inadequate</label></td>
              </tr>
            </table>
            <p>Remarks:</p>
            <p>
              <textarea name="Vacek_tx" cols="70" rows="3" id="Vacek_tx"></textarea>
            <div class="vraag">
              <p class="vraag_enquete">I consider the functioning of Jitka Vlašánková:</p>
              <table>
                <tr>
                  <td><label>
                      <input name="Vlasankova" type="radio" value="0" checked>
                      no opinion</label></td>
                </tr>
                <tr>
                  <td><label>
                      <input type="radio" name="Vlasankova" value="5">
                      excellent</label></td>
                </tr>
                <tr>
                  <td><label>
                      <input type="radio" name="Vlasankova" value="4">
                      good</label></td>
                </tr>
                <tr>
                  <td><label>
                      <input type="radio" name="Vlasankova" value="3">
                      adequate</label></td>
                </tr>
                <tr>
                  <td><label>
                      <input type="radio" name="Vlasankova" value="2">
                      weak</label></td>
                </tr>
                <tr>
                  <td><label>
                      <input type="radio" name="Vlasankova" value="1">
                      inadequate</label></td>
                </tr>
              </table>
              <p>Remarks:</p>
              <p>
                <textarea name="Vlasankova_tx" cols="70" rows="3" id="Vlasankova_tx"></textarea>
            </div>
            <p class="vraag_enquete">I consider the functioning of the assistants Milka and Jana:</p>
            <table width="200">
              <tr>
                <td><label>
                    <input type="hidden" name="ass_3" value="0">
                    <input type="radio" name="ass_3" value="5">
                    excellent</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="ass_3" value="4">
                    good</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="ass_3" value="3">
                    adequate</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="ass_3" value="2">
                    weak</label></td>
              </tr>
              <tr>
                <td><label>
                    <input type="radio" name="ass_3" value="1">
                  </label>
                  inadequate</td>
              </tr>
            </table>
            <p>Remarks:</p>
            <p>
              <textarea name="ass_3_tx" cols="70" rows="3" id="ass_3_tx"></textarea>
              <hr>
            <h2>General topics </h2>
            <p class="vraag_enquete">I give the course as a whole the following mark:<br>
              <span class="nadruk">please set the slide from 1 (lowest) to 10 (highest mark) in half steps</span>
            </p>
            <table width="100%" border="1">
              <tr>
                <td width="1%" align="center" class="nadruk">1</td>
                <td width="1%"><input type="range" id="cijfer_LP_slider" min="1" max="10" step="0.5" value="0" onChange="showValue(this.value);" />
                  <input name="cijfer_LP" id="cijfer_LP" type="hidden" value="">
                </td>
                <td width="1%" align="center" class="nadruk">10</td>
                <td width="20%">
                  <div class="groot centreer" id="cijfer"></div>
                </td>
              </tr>
            </table>
            <p class="vraag_enquete">There is always room for improvement: what should <em>La Pellegrina</em> change, so that you would give the course a 10?</p>
            <textarea name="cijfer_LP_tx" cols="70" rows="3" id="cijfer_LP_tx"></textarea>
            <p class="vraag_enquete">I have the following suggestions &amp; wishes
              concerning repertoire:
            <p>
              <textarea name="rep_wensen" cols="70" rows="3" id="rep_wensen"></textarea>
            <p class="vraag_enquete">I have the following general remarks &amp; ideas:
            <p>
              <textarea name="alg_wensen" cols="70" rows="3" id="alg_wensen"></textarea>
            </p>
            <p class="vraag_enquete">The quote or anecdote
              underneath may be published on the web pages (please
              mention your name in that case):
            <p>
              <textarea name="citaat" cols="70" rows="3" id="citaat"></textarea>
            </p>
            <hr>
            <p><strong>Thank you for filling out this enquiry. Please
                send this form to <em>La Pellegrina </em>by pressing
                the button &quot;send&quot;:</strong></p>
            <p>
              <input name="submit" type="submit" value="send">
              <input name="reset" type="reset" value="reset form">
            </p>
            <input type="hidden" name="MM_insert" value="evaluatie">
          </form>
        </td>
      </tr>
    </table>
    <!-- InstanceEndEditable -->
  </div>
</body>
<!-- InstanceEnd -->

</html>