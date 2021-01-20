<?php
include_once "base.php";
if (empty($_SESSION['login'])) {
    //若使用者未照正常程序登入，則回到首頁。
    to("index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>主畫面</title>
    <link rel="stylesheet" href="plugin/style.css">
    <script src="plugin/jquery-3.5.1.min.js"></script>
</head>

<body>
    <h1>這是<?= $_SESSION['login']; ?>的記帳本</h1>

    <fieldset>
        <legend>新增項目</legend>
        <form action="api/add_items.php" method="post">
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
            <input type="button" value="新增" onclick="create()">
        </form>
    </fieldset>
    <h1>所有花費</h1>
    <table>
        <thead>
            <td>序號</td>
            <td>品項</td>
            <td>金額</td>
            <td>類別</td>
            <td>時間</td>
            <td>操作</td>
            <thead>
            <tbody id="list">
            </tbody>
        </thead>
    </table>

    <div class="modal"></div>
    <a href="api/logout.php">登出</a>
</body>

</html>
<script>
    query();

    function query() {
        $.get("api/query.php", function(res) {
            $("#list").html(res)

        })
    }

    function create() {
        let item = $("#item").val();
        let payment = $("#payment").val();
        let type = $("#type").val();
        let date = $("#date").val();
        let user = $("#user").val();
        console.log(item, payment, type, date, user);
        $.post("api/add_items.php", {
            item,
            payment,
            type,
            date,
            user
        }, function(res) {
            query()
        })
    }

    function op(id) {

        $(".modal").load("api/edit_item.php", {
            id
        }).show();

    }

    function cl() {

        $(".modal").html("").hide();

    }

    function update(id) {
        let item = $("#edit_item").val();
        let payment = $("#edit_payment").val();
        let type = $("#edit_type").val();
        let date = $("#edit_date").val();
        $.post("api/update.php", {
            item,
            payment,
            type,
            date,
            id
        }, function(res) {
            query()
            $(".modal").html("").hide()
        })
    }

    function del(id) {
        let con = confirm("你確定要刪除這筆資料嗎?");
        if (con) {
            $.post("api/delete.php", {
                id
            }, function() {
                query();
            })
        }
    }
</script>