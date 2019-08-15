<!DOCTYPE html>
<html lang="">
<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title></title>
</head>

<body>
	<?php
		$cities3 = array(
			'Tokijas' => array('13.5', '1868', 'Japonija'),
			'Vasingtonas' => array('0.6', '1790', 'JAV'),
			'Maskva' => array('11.5', '1147', 'Rusija'));
		$cities3['Londonas'] = ['8.6', '43', 'Anglija'];
//		print_r($cities3);
	

	?>
	<ul>
		<li>Gyventoju skaicius: <?php echo $cities3['Londonas'][0]?> mln.</li>
		<li>Ikurtas: <?php echo $cities3['Londonas'][1]?> m.</li>
		<li>Salis: <?php echo $cities3['Londonas'][2]?></li>
	</ul>
			
</body>
</html>
