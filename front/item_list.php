<h1>所有花費</h1>
<table>
    <tr>
        <td>序號</td>
        <td>品項</td>
        <td>金額</td>
        <td>類別</td>
        <td>時間</td>
        <?php
        $items = $Items->all(['user'=>$_SESSION['login']]);
        foreach ($items as $key=>$item) {
        ?>
        <tr>
            <td><?=$key+1;?></td>
            <td><?=$item['item'];?></td>
            <td><?=$item['payment'];?></td>
            <td><?=$item['type'];?></td>
            <td><?=$item['date'];?></td>
        </tr>
        <?php
        }
        ?>
    </tr>
</table>
<a href="?">上一頁</a>