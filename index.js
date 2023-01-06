


$(".next_btn").on("click", function () {
    $("#q_p1").css("display", "none");
    id = $(this).attr("href");
    $(id).show();
    $(this).hide();
    $(".back_btn").show();

});

$(".back_btn").on("click", function () {
    $("#q_p2").css("display", "none");
    id = $(this).attr("href");
    $(id).show();
    $(this).hide();
    $(".next_btn").show();

});

$(".home").on("click", function () {
    $("#q_p1").show();
    $(".next_btn").show();
});



