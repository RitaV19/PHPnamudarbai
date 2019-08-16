<!DOCTYPE html>
<html lang="">
<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title></title>
</head>

<body>
	<?php
		$cities4 = array('Tokijas', 'Vasingtonas', 'Maskva', 'Londonas');
	?>
		<ul>
			<?php for($i = 0; $i < count($cities4); $i++)?>
			<li>
				<?php echo $i;?>
			</li>

			<li>
				<?php print_r($cities4)[$i];
				?>
			</li>

		</ul>

	<?php
    $cities4 = array('Tokijas', 'Vasingtonas', 'Maskva', 'Londonas');
	?>

      <ul>
         <?php foreach($cities4 as $cities4) { ?>
         <li><?php echo $cities4; ?></li>
         <?php } ?>
     	</ul>



</body>
</html>
