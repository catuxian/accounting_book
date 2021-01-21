query();
//取得是誰登入的資料
$.get('api/title.php', (data) => {
    $('#title').html(data)
})
//查詢目前資料庫裡所有的項目
function query() {
    $.get("api/items_list.php", function (res) {
        $("#list").html(res)

    })
}

function create() {
    let item = $("#item").val();
    let payment = $("#payment").val();
    let type = $("#type").val();
    let date = $("#date").val();
    let user = $("#user").val();
    // console.log(item, payment, type, date, user);
    $.post("api/add.php", {
        item,
        payment,
        type,
        date,
        user
    }, function (res) {
        query()
    })
}
$('#add').on('click',()=>{
    $.get('api/add_items.php', (data) => {
        $('.modal-content').html(data)
    })
})

function give(id){//將id傳給edit_item.php
    $.get(`api/edit_item.php?id=${id}`, (data) => {
        $('.modal-content').html(data)
    })
    console.log(id)

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
    }, function (res) {
        query()
    })
}

function del(id) {
    let con = confirm("你確定要刪除這筆資料嗎?");
    if (con) {
        $.post("api/delete.php", {
            id
        }, function () {
            query();
        })
    }
}