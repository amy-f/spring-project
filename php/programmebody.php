<section class="row">
	<article>
		<?php
			/*Ouverture du fichier en lecture seule*/
			$handle = fopen('texte/programme.txt', 'r');
			/*Si on a réussi à ouvrir le fichier*/
			if ($handle)
			{
				/*Tant que l'on est pas à la fin du fichier*/
				while (!feof($handle))
				{
					/*On lit la ligne courante*/
					$buffer = fgets($handle);
					/*On l'affiche*/
					echo "<p>" . $buffer . "</p>";
				}
				/*On ferme le fichier*/
				fclose($handle);
			}
		?>	
	</article>
</section>