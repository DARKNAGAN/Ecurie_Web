<?php
	if (isset($_GET["table"]) && isset($_GET["email"]) && isset($_GET["mdp"])) {
		$selectAllWhere = $unController->selectAllWhere($_GET["table"], "email = '".$_GET["email"]."' AND mdp = '".$_GET["mdp"]."'");
		$result = json_encode(array($_GET["table"] => $selectAllWhere), JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
		print($result);
	} else if (isset($_GET["table"])) {
		$selectAll = $unController->selectAll($_GET["table"]);
		$result = json_encode(array($_GET["table"] => $selectAll), JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
		print($result);
	} else {
		echo "error";
	}
?>
