/*
 $(document).ready(function () {
 $.get("php/select.php", function (valasz, status) {
 console.log(status);
 $("#container").html(valasz);
 });
 });
 */

//így bármikor meghívhatom a frissítést
$(document).ready(function () {
    olvas();
    $(document).on("click",".torol",function(){
        let id = $(this).attr("id");
        //console.log(id);
        $.post("php/del.php",{del: id},function(valasz){
          olvas();  
        });
    });
    
    $(document).on("click",".ment",function(){
        let vnev = $("#vnev").text();
        let knev = $("#knev").text();
        //console.log(vnev+" "+knev);
        
        if((vnev.length > 0) && (knev.length > 0)){
            $.ajax({
                    url: "php/insert.php",
                    method: "post",
                    //dataType: "JSON",
                    data:{
                        vnev: vnev,
                        knev: knev
                    },
                    success: function(){
                        olvas();
                    }
                });
        };
    });    
});

function olvas() {
    $.get("php/select.php", function (valasz, status) {
        console.log(status);
        $("#container").html(valasz);
    });
}