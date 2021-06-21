/* Header */
$("#btn_categorias").click(function() {
    if(window.matchMedia("(max-width: 767px").matches) {
        $("#btn_categorias").after($("#categorias").slideToggle("fast"));
    } else {
        $("#cabezote").after($("#categorias").slideToggle("fast"));
    }
});