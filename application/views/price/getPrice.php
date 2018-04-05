<?php include($_SERVER["DOCUMENT_ROOT"]."/application/views/price/indexPrice.php");?>
<?php foreach ($price as $val): ?>
	<h3><?php echo $val['name']; echo  ' --- ' .$val['price'];?></h3>
	<p><?php echo $val['description'];?></p>
	<hr>
<?php endforeach; ?>
