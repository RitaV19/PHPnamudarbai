<!DOCTYPE html>
<html lang="">
<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title></title>
</head>

<body>
	<?php
		function rectanglesquare($linea, $lineb){
			$square = $linea * $lineb;
			return $square;
		}
		
	$result = rectanglesquare(10, 6);
	echo "Rectangle square - " .$result;
	
	?>
			
</body>
</html>
