<?php foreach ($master as $val): ?>
	<h3><?php echo $val['name']; echo  ' --- ' .$val['phone'];?></h3>
	<p><?php echo $val['specialization'];?></p>
	<hr>
<?php endforeach;?>
