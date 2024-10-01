<?php 

// Functies voor berekenen gemiddelde en spreiding

function average($array){
   if (is_array($array)){
		$sum  = array_sum($array);
   	$count = count($array);
	}
   if (isset($count) AND $count > 0)
   		return $sum/$count;
		else return NULL;
}

function deviation ($array){ 
   if (is_array($array) AND count($array) > 0) {
   	$avg = average($array);
		foreach ($array as $value) $variance[] = pow($value-$avg, 2);
		$deviation = sqrt(average($variance));
		return $deviation;
		}
	else return NULL;
	}

$cijfers = array();
	foreach ( $report as $rep ) {
		if (isset($rep[ $punten ]) AND $rep[ $punten ] != '' )
			$cijfers[] = $rep[ $punten ];
};

$aantal = count( $cijfers );
$gemiddelde = round( average( $cijfers ), 1 );
$spreiding = round( deviation( $cijfers ), 2 );

?>