<!DOCTYPE html>
<html>
<head>
	<style type="text/css" media="all">
 @import url("/public/css/default.css");
 </style>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/blocks/header.php");?>
	<title><?php echo $title; ?></title>
	<script src="/public/scripts/jquery.js"></script>
	<script src="/public/scripts/form.js"></script>
</head>
<body>
    <div class = "content">
	<?php echo $content; ?>
	<?php include($_SERVER["DOCUMENT_ROOT"]."/blocks/footer.php");?>
    </div>
</body>
</html>
