<?php
include_once "../base.php";

$items = $Items->all(['user' => $_SESSION['login']]);
foreach ($items as $key=>$item) {
?>
<tr>
    <td><?= $key+1; ?></td>
    <td><?= $item['item']; ?></td>
    <td><?= $item['payment']; ?></td>
    <td><?= $item['type']; ?></td>
    <td><?= $item['date']; ?></td>
    <td>
    <button type="button" data-id="<?=$item['id'];?>" onclick="del(<?=$item['id'];?>)">刪除</button>
    <button type="button" data-id="<?=$item['id'];?>" onclick="op(<?=$item['id'];?>)">編輯</button>
    
    </td>
</tr>
<?php
}
?>