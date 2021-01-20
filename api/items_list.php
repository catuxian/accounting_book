<table>
    <thead>
        <td>序號</td>
        <td>品項</td>
        <td>金額</td>
        <td>類別</td>
        <td>時間</td>
        <td>操作</td>

    </thead>
    <tbody>
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
                <td>
                    <button type="button" class="btn btn-primary" data-id="<?= $item['id']; ?>" onclick="del(<?= $item['id']; ?>)">刪除</button>
                    <button type="button" class="btn btn-primary edit" data-id="<?= $item['id']; ?>" data-toggle="modal" data-target="#myModal" onclick="id(<?= $item['id']; ?>)">編輯</button>

                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<script>
    function id(id) {
        console.log(id)
        $.post('edit_item.php', {
            id
        }, () => {
            $.get('../api/edit_item.php', (data) => {
                console.log(data)
                $('.modal-content').html(data)
            })
        })
    }

</script>