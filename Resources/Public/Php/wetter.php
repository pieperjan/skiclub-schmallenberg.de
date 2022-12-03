<?php

/* Felix Mönig, 11-2019 */

/* PHP-Skript fragt jeweils aktuellen Messwert ab. Anschließend werden die Messwerte als Tabelle ausgegeben.*/
header("Content-Type: text/html; charset=utf-8");

//Verbindung herstellen
$db = new PDO('mysql:host=sql141.your-server.de;dbname=weather_data;charset=utf8', 'weather_data', 'iK7M7KP4szc2vtWu');

//aktuelle Messwerte abfragen - TAL
$befehl = $db->prepare("SELECT entry, temperature, humidity FROM valley ORDER BY entry DESC LIMIT 1");
$befehl->execute();
if ($row = $befehl->fetch()) //$befehl->fetch(): liefert Datenbankeintrag oder false
{
    $Datum_akt=date("d.m.Y", strtotime($row['entry'])); //Timestamp zu Datum konvertieren
    $Uhrzeit_akt=date("H:i", strtotime($row['entry'])); //Timestamp zu Uhrzeit konvertieren
    $Temp_akt=$row['temperature'];
    $Luftfe_akt=$row['humidity'];
}
// if weatherdata older than 30 minutes, don't use
if ((time() - strtotime($row['entry'])) > 1800) {
    $Temp_akt = '-';
    $Luftfe_akt = '-';
}


//aktuelle Messwerte abfragen - BERG
$befehl = $db->prepare("SELECT entry, temperature, humidity FROM mountain ORDER BY entry DESC LIMIT 1");
$befehl->execute();
if ($row = $befehl->fetch()) //$befehl->fetch(): liefert Datenbankeintrag oder false
{
    $Temp_akt_berg=$row['temperature'];
    $Luftfe_akt_berg=$row['humidity'];
}
// if weatherdata older than 30 minutes, don't use
if ((time() - strtotime($row['entry'])) > 1800) {
    $Temp_akt_berg = '-';
    $Luftfe_akt_berg = '-';
}

/*
$xml = simplexml_load_file("https://wetterstationen.sauerlandwetter.de/stationen/schmallenberg/allsensors.xml");

$Temp_berg = $xml->xpath('/meteohub/data[@timeframe="actual"]/item[@sensor="th0" and @cat="temp" and @unit="c"]');
$Luftfe_berg = $xml->xpath('/meteohub/data[@timeframe="actual"]/item[@sensor="th0" and @cat="hum" and @unit="rel"]');
$Date_berg = $xml->xpath('/meteohub/data[@timeframe="actual"]/item[@sensor="date0" and @cat="date2" and @unit="local"]');

// if weatherdata older than 30 minutes or don't exist, don't use
if (!array_key_exists(0, $Temp_berg) || (array_key_exists(0, $Date_berg) && (time() - strtotime($Date_berg[0])) > 1800)) {
    $Temp_berg[0] = '-';
    $Luftfe_berg[0] = '-';
}
*/

//AUSGABE der abgerufenen Werte in Tabellenform

echo "<table style=\"margin-left: auto; margin-right: auto; width: 350px\" border=\"0\" cellspacing=\"5\" cellpadding=\"5\">
        <tbody>
            <tr>
                <td><strong>Temperatur</strong></td>
                <td style=\"text-align: center\">".$Temp_akt_berg." °C</td>
                <td style=\"text-align: center\">".$Temp_akt." °C</td>
            </tr>
            <tr>
                <td><strong>rel. Feuchte</strong></td>
                <td style=\"text-align: center\">".$Luftfe_akt_berg." %</td>
                <td style=\"text-align: center\">".$Luftfe_akt." %</td>
            </tr>
            <tr style=\"visibility: hidden\">
                <td><strong>Schneehöhe</strong></td>
                <td><strong>Berg (630m)</strong></td>
                <td><strong>Tal (460m)</strong></td>
            </tr>
        </tbody>
    </table>
    ";
?>
