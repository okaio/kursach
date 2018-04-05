<? switch (true): 
    case strstr($_SERVER['HTTP_REFERER'],'/client/permClient') or strstr($_SERVER['HTTP_REFERER'],'/auto/getAuto'): ?>
<a href="<?php echo '/client/permClient';?>">вернутся к постоянным клиентам</a>
<? break; 
    case strstr($_SERVER['HTTP_REFERER'],'/client/lostClient') or                                       strstr($_SERVER['HTTP_REFERER'],'/auto/getAuto'): ?>
<a  href="<?php echo '/client/lostClient';?>">вернутся к последним клиентам</a>
<? break; 
case strstr($_SERVER['HTTP_REFERER'],$_SERVER['REQUEST_URI']) and empty($_POST) : ?>
<form enctype='multipart/form-data' action="" method="post">
<? include($_SERVER["DOCUMENT_ROOT"]."/blocks/formAuto.php"); ?>
     <input type="submit" value="добавить авто" />
<? break; 
    case strstr($_SERVER['HTTP_REFERER'],$_SERVER['REQUEST_URI']) and !empty($_POST) : ?>
    <b>Автомобиль добавлен</b>
  <a href="<?php echo "/auto/indexAuto?codeClient=".$_GET['codeClient'];?>&add=ok">вернутся к  клиенту</a>

    <? break; 
 default: ?>
 <? //ниче не писать тут?>
<? endswitch; ?>
    <? switch(true): 
    case(empty($_POST)): ?>
<h3> <?php echo $auto[0]['name']; echo  ' --- ' .$auto[0]['phone'];?></h3>
<a  href="">добавить автомобиль</a>
<?php foreach ($auto as $val): ?>
        <p><?php echo $val['mark']. ' '. $val['model'];?><a href ="/auto/getAuto?codeAuto=<?php echo $val['codeAuto']; ?>">  Подробнее об автомобиле</a>
        <a href ="/work/addWork?codeClient=<?php echo $_GET['codeClient']; ?>&codeAuto=<? echo $val['codeAuto'];?>">Добавить заказ на работу</a></p>
<?php endforeach; ?>
    <? endswitch; ?>