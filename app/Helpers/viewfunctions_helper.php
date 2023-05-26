<?php
function submitButton($value, $type, $btName){
    // $db = \Config\Database::connect();
    ?>
    <style>
         #verifyBtn:hover{
            background-color:green;
        }
        #verifyBtn:focus{
            background-color:#765341;
        }
    </style>
    <div id="activityPrepareDiv" style="margin-top:10px; margin-bottom:10px">
    <input type="<?=$type?>" id="verifyBtn" value="<?=$value?>" class="btn  btn-primary btn-sm text-white" name="<?=$btName?>">
    </div>

<?php
}

// Customer IDs list
function clientPicker(){
    $db = \Config\Database::connect();
    $queryCustomer = $db->query('SELECT customer_id, customer_name FROM customer');
    ?><option value="all">Clients</option><?php
    foreach ($queryCustomer->getResult('array') as $row){
        ?>
        <option value="<?=$row['customer_id']?>"><?=$row['customer_name']?></option>
        <?php
    }
  }