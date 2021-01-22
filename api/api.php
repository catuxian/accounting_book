<?php

$db = new PDO("mysql:host=localhost;dbname=s1090413;charset=utf8", "root", "");
date_default_timezone_set("Asia/Taipei");

session_start();


switch ($_GET['do']) {

    case "checkSession":

        if (!isset($_SESSION['login'])) {
            echo "尚未登入";
        } else {
            echo "登入完成";
        }
        break;

    case "select":

        $sql = "select * from account_items where `user`='{$_SESSION['login']}'";
        $rows = $db->query($sql)->fetchAll();
        if ($rows) {
            foreach ($rows as $key => $row) {
                echo
                '
            <tr>
                <td>' . ($key + 1) . '</td>
                <td>' . $row['item'] . '</td>
                <td>' . $row['payment'] . '</td>
                <td>' . $row['date'] . '</td>
                <td>
                    <button class="mdy">修改</button>
                    <button onclick="del(this)">刪除</button>
                </td>
            </tr>
            ';
            }
        } else {
            echo "無資料";
        }
        break;
}
