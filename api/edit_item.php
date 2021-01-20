<?php
include_once "../base.php";

$id = $_POST['id'];
$item = $Items->find($id);
?>

<h5>編輯物品</h5>

<div>品項<input type="text" name='item' id="edit_item" value="<?= $item['item']; ?>"></div>
<div>價格<input type="text" name='payment' id="edit_payment" value="<?= $item['payment']; ?>"></div>
<div>類別<select name="type" id="edit_type" value="<?=$item['type'];?>">
        <option value="食">食</option>
        <option value="衣">衣</option>
        <option value="住">住</option>
        <option value="行">行</option>
        <option value="育">育</option>
        <option value="樂">樂</option>
    </select></div>
<div>時間<input type="date" name='date' id='edit_date' value="<?= $item['date']; ?>"></div>
<input type="button" value="編輯" onclick="update(<?= $item['id']; ?>)">
<input type="button" value="取消" onclick="cl()">