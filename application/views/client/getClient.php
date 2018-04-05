<a href="<?php echo $_SERVER['HTTP_REFERER']?>">вернутся к списку клиентов</a>
<?php foreach ($client as $val): ?>
	<h3><a href ="/auto/indexAuto?codeClient= <?php echo $val['codeClient']; ?>"> <?php echo $val['name']; echo  ' --- ' .$val['phone'];?></a></h3>
<?php endforeach; ?>
