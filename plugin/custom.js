$().ready(function () {
    function loading() {
        $.post("api/api.php?do=select", function (re) {
            if(re!="無資料"){
                $("tbody").append(re);
            }
        });
    }
    loading();
})