$("#hide").click(function() {
    $("#tbody").hide(2500);
    $("#down").show();
    $("#up").hide();
});

$("#show").click(function() {
    $("#tbody").show(2500);
    $("#down").hide();
    $("#up").show();
});