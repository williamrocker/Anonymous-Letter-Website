<?php
$name = "";
if(isset($_GET["name"])){
	$name = $_GET["name"];
}
?>

<html>
	<body>
		<?= $name ?>
	</body>
</html>
