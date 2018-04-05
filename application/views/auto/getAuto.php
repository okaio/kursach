<a href="<?php echo $_SERVER['HTTP_REFERER']?>">вернутся к списку автомобилей клиента</a>
<h3> <?php echo $auto[0]['mark']; echo  ' --- ' .$auto[0]['model'];?></a></h3>
<?php foreach ($auto as $val): ?>
	<p><?php echo $val['year']. ' '. $val['engine'] . ' '. $val['description'];?></p>
<?php endforeach; ?>