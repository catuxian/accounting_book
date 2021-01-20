<?php include_once "../base.php";?>
<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">新增項目</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <div>
        花費項目：<input type="text" name="item" id="item" required>
    </div>
    <div>
        價格：<input type="text" name="payment" id="payment" required>
    </div>
    <div>
        類別：
        <select name="type" id="type" required>
            <option value="食">食</option>
            <option value="衣">衣</option>
            <option value="住">住</option>
            <option value="行">行</option>
            <option value="育">育</option>
            <option value="樂">樂</option>
        </select>
    </div>
    <input type="hidden" name="date" value="<?= date('Y-m-d'); ?>" id="date">
    <input type="hidden" name="user" value="<?= $_SESSION['login']; ?>" id="user">
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">關閉</button>
    <button type="button" class="btn btn-primary" data-dismiss="modal"  onclick="create()">確定新增</button>
</div>