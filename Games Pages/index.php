<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="../css/main.css" />
		<link rel="stylesheet" type="text/css" href="../css/read.css" />
		<link rel="stylesheet" type="text/css" href="../css/turn.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<title>Papercrafted Adventures</title>
	</head>
	<!--<style>
		body, html {width: 100%; height: 100%; margin: 0; padding: 0}
		.night{
			background:black;
			color:#bcbcbc;
		}
		.day{
			background:white;
			color:black;
		}
	</style>
	<script>
		function night(){
			body.className = "night";
			sitenav.className = "navbar navbar-inverse";
		}
		function day(){
			body.className = "day";
			sitenav.className = "navbar navbar-default";
		}
	</script>noted out for cookies-->
	<body id = "body">
		<?php 
			echo "<article>";
			
			// Handle the query strings.
			$query = $_SERVER['QUERY_STRING'];
			
			if (substr_count($query, "portal") > 0) {
				
				sscanf($query, "portal=%d&turn=%d", $game, $turn);
				$portal = implode("", array("../game/game", $game, "/portal.php"));
				require($portal);
				
			} else if (substr_count($query, "archive") > 0) {
				
				sscanf($query, "archive=%d", $game);
				$archive = implode("", array("../game/game", $game, "/archive.html"));
				require($archive);
				
			} else if (substr_count($query, "recent") > 0) {
				
				sscanf($query, "recent=%d", $game);
				$recent = implode("", array("../game/game", $game, "/recent.php"));
				require($recent);
				
			} else if (substr_count($query, "game") > 0) {
			
				sscanf($query, "game=%d&player=%d&turn=%d", $game, $player, $turn);
				$path = implode("", array("../game/game", $game, "/player", $player, "/turn", $turn, ".html"));
				$prev = implode("", array("../read/?game=", $game, "&player=", $player, "&turn=", $turn - 1, ".html"));
				$next = implode("", array("../read/?game=", $game, "&player=", $player, "&turn=", $turn + 1, ".html"));
				$header = implode("", array("../game/game", $game, "/header.php"));
				$footer = implode("", array("../game/game", $game, "/footer.php"));

				require($header);
				require($path);
				require($footer);
				
			} else {
			
				// This doesn't work properly, but it'll catch when you gave it junk or nil as a query string.
				http_response_code(404);
				require("../404.shtml");
				die();	
				
			}
			
			echo "</article>";
			/*echo "<div class = 'btn-group'>
				<button class = 'btn btn-default' onclick = 'night()'>Night mode</button>
				<button class = 'btn btn-default' onclick = 'day()'>Day mode</button>
			</div>" noted out for cookies*/
		?>
	</body>
</html>