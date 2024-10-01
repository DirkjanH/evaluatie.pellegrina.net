<?php //Connection via PDO
error_reporting( E_ALL ); 

	$DATABASE = 'pellegrina_eval';
	$USERNAME = 'pellegrina_eval';
	$PASSWORD = '12dirig.';

// echo "mysql:dbname=$DATABASE";

try {
    $db = new PDO("mysql:host=localhost;dbname=$DATABASE;charset=utf8", $USERNAME, $PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	 $db->query('SET sql_mode = ""');
} 
catch(PDOException $e) 
{ 
    $sMsg = '<p> 
            Regelnummer: '.$e->getLine().'<br /> 
            Bestand: '.$e->getFile().'<br /> 
            Foutmelding: '.$e->getMessage().'</p>'; 
     
    trigger_error($sMsg); 
} 

// zet de localiteit op Nederland
setlocale(LC_ALL, 'nl_NL');
date_default_timezone_set('Europe/Amsterdam');

function select_query($query, $index = 2 ) {
	global $db;
	try {
		if (isset($query) AND $query != '') 
			foreach($db->query($query, PDO::FETCH_ASSOC) as $row) {
				if (is_string($index) AND $index != '') $result[$row[$index]] = $row;
				else $result[] = $row;
			}
		else echo 'Lege query<br>';
		//echo'$index = '.$index.'<br>';
		//d($result);
		if ($index == 1 and count($result) == 1) {
			$result = $result[0];	// één rij
		}
		elseif ($index == 0 AND count($result, COUNT_RECURSIVE) == 2) {
			$result = current($result[0]);  // één waarde
			//echo 'één waarde';
		}
			
		if (isset($result)) return $result; else return false;
	}
	catch(PDOException $e) {
		echo "Fout: {$e}<br>";
	}
}

function exec_query($query) {
	global $db;
	// print_all($query);
	try {
			$db->query('SET sql_mode = ""');
			$db->exec($query);
	} 
	catch(PDOException $e) {
		echo "Fout: {$e}<br>";
	}
}

function quote($value) {
	global $db;
	//d($value);
	return $db->quote($value);
}

//Euro-functies:
function euro2($bedrag)
{
    $bedr = '&#8364;&nbsp;' . number_format($bedrag, 2, ',', '.');
    return str_replace(',00', ',&#8212;', $bedr);
}

function euro2_EN($bedrag)
{
    $bedr = 'EUR&nbsp;' . number_format($bedrag, 2, ',', '.');
    return str_replace(',00', ',&#8212;', $bedr);
}

function euro($bedrag)
{
    $bedr = '&#8364;&nbsp;' . number_format($bedrag, 0, ',', '.');
     return $bedr;
}

function euro_EN($bedrag)
{
    $bedr = 'EUR&nbsp;' . number_format($bedrag, 0, ',', '.');
    return $bedr;
}

function czk($bedrag ) {
	return 'CZK&nbsp;' . number_format($bedrag, 0, ',', '.');
}


?>