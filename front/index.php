<?php
include_once "../base.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>主畫面</title>
    <script src="../plugin/jquery-3.5.1.min.js"></script>
</head>

<body>
    <h1>這是<?= $_SESSION['login']; ?>的記帳本</h1>
    <fieldset>
        <legend>新增項目</legend>
        <form action="../api/add_items.php" method="post">
            <div>
                花費項目：<input type="text" name="item" id="item">
            </div>
            <div>
                價格：<input type="text" name="payment" id="payment">
            </div>
            <div>
                類別：
                <select name="type" id="type">
                    <option value="食">食</option>
                    <option value="衣">衣</option>
                    <option value="住">住</option>
                    <option value="行">行</option>
                    <option value="育">育</option>
                    <option value="樂">樂</option>
                </select>
            </div>
            <input type="hidden" name="date" value="<?= date('Y-m-d');?>" id="date">
            <!-- 所以偷偷將使用者名稱傳入當前日期傳入 -->
            <input type="hidden" name="user" value="<?= $_SESSION['login']; ?>" id="user">
            <input type="button" value="新增" onclick="creat()">
        </form>
    </fieldset>
    <h1>所有花費</h1>
    <table>
        <tr>
            <td>序號</td>
            <td>品項</td>
            <td>金額</td>
            <td>類別</td>
            <td>時間</td>
            <?php
            $items = $Items->all(['user' => $_SESSION['login']]);
            foreach ($items as $key => $item) {
            ?>
        <tr>
            <td><?= $key + 1; ?></td>
            <td><?= $item['item']; ?></td>
            <td><?= $item['payment']; ?></td>
            <td><?= $item['type']; ?></td>
            <td><?= $item['date']; ?></td>
        </tr>
    <?php
            }
    ?>
    </tr>
    </table>
    <a href="../api/logout.php">登出</a>
</body>

</html>
<script>
    function create(){
        let item
    }
</script>