<? $resultMoney=0; ?>
<div class="blank">
    <div class="work">
        <p><b>Заказ на работы</b></p>
        <p><? 
            if(!empty($_POST['codeWork'])):
            foreach($_POST['codeWork'] as $indexWork):
                foreach($work[1] as $val ):
                    if($val['codeWork']==$indexWork):
                    echo $val['name'].'---'.$val['price'];
                    $resultMoney+=$val['price']; ?>
            <br>
            <? endif;
            endforeach;
              endforeach;  
           endif; ?>
          <br> </p>
    </div>
    <div class="spare">
        <p><b>Запчасти</b></p>
        <p><? 
            if(!empty($_POST['codeSpare'])):
           // debug($work[1]);
            foreach($_POST['codeSpare'] as $indexSpare):
                foreach($work[2] as $val ):
                    if($val['codeSpare']==$indexSpare):
                    echo $val['name'].'---'.$val['price'];
                    $resultMoney+=$val['price']; ?>
            <br>
            <? endif;
            endforeach;
              endforeach;  
           endif; ?>
          <br> </p>
        </div>
   <p><b>Итоговая стоимость работ и запчастей</b></p> <? echo $resultMoney; ?>
    <br>
</div>