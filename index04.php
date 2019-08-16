<!DOCTYPE html>
<html lang="">
<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title></title>
</head>

<body>
	<?php
	$cities = array('Berlynas', 'Roma', 'Londonas');
	$cities[] = 'Tokijas';
	print_r($cities);
	?>
	<ul>
		<li><?php echo $cities[1];?></li>
	</ul>

	<?php
	$cities2 = array(
		'Tokijas' => 13.6,
		'Vasingtonas' => 0.6,
		'Maskva' => 11.5);
	$cities2['Londonas'] = 8.6;
	print_r($cities2);
//	print_r($cities2);
	?>
		<ul>
			<li>Gyventojų skaičius: <?php echo $cities2['Tokijas']?> mln.</li>
		</ul>



</body>
</html>
