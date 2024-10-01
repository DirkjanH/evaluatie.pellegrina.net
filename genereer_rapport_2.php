	</table>
	<br>
	<table id="opmerkingen">
		<tr>
			<th width="15%">name:</th>
			<th>mark:</th>
			<th>remarks:</th>
		</tr>
		<?php
		foreach ( $report as $rep ) {
			if ( $rep[ $opmerkingen ] != NULL )
				echo "<tr><td>{$rep['naam']}</td>
         	<td>{$rep[$punten]}</td>
         	<td>{$rep[$opmerkingen]}</td>
      	</tr>";
		}
		?>
	</table>
</body>
</html>
