<?php

// rapport voor publiciteit

	foreach ( $report as $rep ) {
		if ( isset($rep[ $opmerkingen ]) OR isset($rep[ $punten ]) )
			echo "<tr><td>{$rep['naam']}</td>
			<td>{$rep[$punten]}</td>
			<td>{$rep[$opmerkingen]}</td>
			<td>{$rep['naam_aanbrenger']}</td>
		</tr>";
	}
	?>
	</table>
</body>
</html>
