<input type="text" onkeypress="return isNumberKey(event)" value="<?php echo $getRate->charge_amount?>" name="rate" id="rate" placeholder="rate" class="form-control input-sm" style="width: 100%;" required>
<input type="hidden" name="bill_name" id="bill_name" value="<?php echo $getRate->particular_name?>">