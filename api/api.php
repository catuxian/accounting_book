<?php
$db = new PDO("mysql:host=localhost;dbname=s1090413;charset=utf8", "root", "");
date_default_timezone_set("Asia/Taipei");


$sql = "select * from account_items";
$rows = $db->query($sql)->fetchAll();

switch ($_GET['do']) {
    case "select":
        if($rows){
        foreach($rows as $key=>$row){
            echo
            '
            <tr>
                <td>' . ($key+1). '</td>
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
    }else{
        echo "無資料";
    }
    break;

}
?>