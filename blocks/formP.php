    <div class="priceWork">
        <b>Прайс на работы</b><br>
       <? foreach($work [1] as $val): ?>
          <input type="checkbox" name="codeWork[]" value="<? echo $val['codeWork']?>"/><? echo $val['name'];?> ---
              <? echo $val['price'];?><br>  
    <? endforeach;?>     
    </div> 