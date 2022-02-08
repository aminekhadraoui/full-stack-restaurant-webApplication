$(function () {
    $(".btn").on('click',function(e){
        e.preventDefault();
        $(".over").addClass("active");
    })
    $(".overlayer i").on('click',function(e){
        e.preventDefault();
        $(".over").removeClass("active");
    })
})