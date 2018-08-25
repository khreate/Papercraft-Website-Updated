<html>
<body>

	<?php
		// Open the text file
		if((isset($_GET["date"])) && (isset($_GET["turn_text"])) && (isset($_GET["player_token"]))){
			$f = fopen("turnsubmittions.txt", "a");

			fwrite($f, "Date: ".$_GET["date"]."\n");
			fwrite($f, "Turn Text: ".$_GET["turn_text"]."\n"); 
			fwrite($f, "Player Token: ".$_GET["player_token"]."\n");
			fwrite($f, "\n");

			fclose($f);
		}	
	?>
	<h1>Thank you for your submission. Click <a href = "http://www.papercraftedadventures.net"><b>here</b></a> to return to the Papercrafted Adventures homepage.</h1>
	

</body>

</html> 
<!-- Khreator; 2018.7.6-->