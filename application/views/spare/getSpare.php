<?php include($_SERVER["DOCUMENT_ROOT"]."/application/views/spare/indexSpare.php");?>

<?php foreach ($spare as $val): ?>
	<h3><?php echo $val['name']; echo  ' --- ' .$val['price'];?></h3>
	<p><?php echo $val['description'];?></p>
	<hr>
<?php endforeach; ?>
