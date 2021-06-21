/* Template */
$.ajax({
    url: "ajax/plantilla.ajax.php",
    success: function(respuesta) {
        
        let color_fondo = JSON.parse(respuesta).color_fondo;
        let color_texto = JSON.parse(respuesta).color_texto;
        let barra_superior = JSON.parse(respuesta).barra_superior;
        let texto_superior = JSON.parse(respuesta).texto_superior;

        $(".back--color, .back--color a").css({ "background": color_fondo, "color": color_texto });
        $(".superior--bar, .superior--bar a").css({ "background": barra_superior, "color": texto_superior });

    }
});