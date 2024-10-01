<?php

// rapport voor accommodatie

	foreach ( $report as $rep ) {
		if ( isset($rep[ $opmerkingen ]) OR isset($rep[ $punten ]) )
			echo "<tr><td>{$rep['naam']}</td>
			<td>{$rep['acc_name']}</td>
			<td>{$rep[$punten]}</td>
			<td>{$rep[$opmerkingen]}</td>
		</tr>";
	}
	?>
	</table>
</body>
</html>
