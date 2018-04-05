<?php 
switch(true):
case(strstr($vars['client'],'clientADD')):
 header("Location: indexClient?add=ok");
exit;
break;
    default:?>
<form enctype='multipart/form-data' action="" method="post">
    <?
include($_SERVER["DOCUMENT_ROOT"]."/blocks/formClient.php");
include($_SERVER["DOCUMENT_ROOT"]."/blocks/formAuto.php"); ?>
     <input type="submit" value="добавить клиента" />
    <? endswitch;?>