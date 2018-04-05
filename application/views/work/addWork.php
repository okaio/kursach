<?
switch (true): 
case  !empty($_POST) : ?>
<form enctype='multipart/form-data' action="" method="post">
<? include($_SERVER["DOCUMENT_ROOT"]."/blocks/blankCxA.php");
include($_SERVER["DOCUMENT_ROOT"]."/blocks/blankPxS.php"); ?>
     <input type="hidden" name="id" value="caps" />
 <input type="submit" value="сделать заказ" />
<input type="reset" value="сбросить" /> 
    <? break;?>
<!--<form enctype='multipart/form-data' action="" method="post">-->
<? //case strstr($_SERVER['HTTP_REFERER'],'/work/indexWork') :
//include($_SERVER["DOCUMENT_ROOT"]."/blocks/formClient.php");
//include($_SERVER["DOCUMENT_ROOT"]."/blocks/formAuto.php"); ?>
 <?// break; 
case strstr($_SERVER['HTTP_REFERER'],'/auto/indexAuto') and empty($_POST) :
include($_SERVER["DOCUMENT_ROOT"]."/blocks/blankCxA.php");?>
<form enctype='multipart/form-data' action="" method="post">
<? include($_SERVER["DOCUMENT_ROOT"]."/blocks/formP.php");?>
 <? include($_SERVER["DOCUMENT_ROOT"]."/blocks/formS.php");?> 
    <input type="hidden" name="id" value="prePS" />
    <input type="submit" value="оформить заказ на работы" />
<input type="reset" value="сбросить" />    
</form>
<? break;
 default: ?>
<div>упс</div>
<? endswitch; ?>
