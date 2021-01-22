$().ready(function () {
    
    checkSession();//
    loading();

    function checkSession(){
        $.post("api/api.php?do=checkSession",(re)=>{
            if(re=="尚未登入"){
                window.location.href="login.html";
            }
        })
    }

    function loading() {
        $.post("api/api.php?do=select", function (re) {
            if(re!="無資料"){
                $("tbody").append(re);
            }
        });
    }
    
})