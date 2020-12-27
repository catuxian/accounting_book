<?php 
    include_once "../base.php";
?>

<a href="?do=item_list">所有花費</a>
<fieldset>
    <legend>新增項目</legend>
    <form action="../api/add_items.php" method="post">
        <div>
            花費項目：<input type="text" name="item">
        </div>
        <div>
            價格：<input type="text" name="payment">
        </div>
        <div>
            類別：
            <select name="type">
                <option value="食">食</option>
                <option value="衣">衣</option>
                <option value="住">住</option>
                <option value="行">行</option>
                <option value="育">育</option>
                <option value="樂">樂</option>
            </select>
        </div>
        <!-- 因為使用的資料庫無法使用預設值，所以偷偷將當前日期傳入 -->
        <input type="hidden" name="date" value="<?=date('Y-m-d');?>">
        <!-- 所以偷偷將使用者名稱傳入當前日期傳入 -->
        <input type="hidden" name="user" value="<?=$_SESSION['login'];?>">
    <input type="submit" value="送出">
    </form>
</fieldset>