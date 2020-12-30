<?php
include_once "../base.php";

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