<?php
header('Content-Type: text/html; charset=utf-8');
// Toimiva demo osoitteessa: opiskelu.businesscollege.fi/mermi/jsonesim.php


$viikonpaivat = [
	"Monday" => "Ma",
	"Tuesday" => "Ti",
	"Wednesday" => "Ke",
	"Thursday" => "To",
	"Friday" => "Pe",
	
];

$weekday = date("l");

// Haetaan PHP:n vakiofunktiolla date nykyinen päivämäärä ja haetaan se parametrien avulla oikeassa muodossa: http://php.net/manual/en/function.date.php
$today = date("Y/m/d");
$next_day = date("Y/m/d", strtotime($today . "+1 days"));


$url = "";

echo (date("1", strtotime(2015-01-27)));






if (isset($_GET["day"]))	{
	
	if ($_GET["day"] == 1) {
		$url = "http://www.sodexo.fi/ruokalistat/output/daily_json/90/" . $next_day . "/fi";

		}
	
	} else {
		$url = "http://www.sodexo.fi/ruokalistat/output/daily_json/90/" . $today . "/fi";
	}
	
	echo '<a href="jsonesim.php?day=1">Seuraava paiva</a>';

// Muodostetaan url-osoite, josta saadaan tämän päivän ruokalista



// Alustetaan curl, jonka avulla saadaan json ladattua
$ch = curl_init($url);

// Säädetään curlin asetus niin, että se palauttaa vastauksen
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Suoritetaan curl (lisätietoa: http://php.net/manual/en/book.curl.php)
$result = curl_exec($ch);

curl_close($ch);

// Muutetaan json-tulos PHP-taulukoksi
$json_array = json_decode($result, true);

// Foreach-funktion avulla jsonin käsittely on helpompaa
foreach($json_array['courses'] as $course){
   // Laitetaan jokainen ruokalaji omaksi divikseen ja tekstikappaleekseen
   echo "<div><p>";
   // Haetaan suomenkielinen ruokalaji
   $string = $course['title_fi'];
   // Varmistetaan, että ääkköset toimivat
   echo htmlentities($string, ENT_COMPAT, 'UTF-8');
   // Lopputägit html-elementeille
   echo "</p></div>";
}

?>

