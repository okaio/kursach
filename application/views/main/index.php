<?php foreach ($news as $val): ?>
	<h3><?php echo $val['name']; ?></h3>
	<p><?php echo $val['description']; ?></p>
	<p><?php echo $val['actualDate']; ?></p>
	<hr>
<?php endforeach; ?>
