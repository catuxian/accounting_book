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

<?php include_once "../base.php";?>
<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">編輯內容</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    
    <input type="hidden" name="user" value="<?= $_SESSION['login']; ?>" id="user">
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">關閉</button>
    <button type="button" class="btn btn-primary" data-dismiss="modal"  onclick="update(<?= $item['id']; ?>)">確定修改</button>
</div>