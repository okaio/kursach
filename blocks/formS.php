<div class="priceSpare">
        <b>Прайс на запчасти</b><br>
        <?// debug($work[2]);?>
       <? foreach($work [2] as $val): ?>
          <input type="checkbox" name="codeSpare[]" value="<? echo $val['codeSpare']?>"/><? echo $val['name'];?> ---
              <? echo $val['price'];?><br>      
    <? endforeach;?>
    </div>