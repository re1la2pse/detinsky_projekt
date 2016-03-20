
$(function() {
    
    $("input[name='aktivniAktualita']").change(function() {
        
        console.log("checkbox changed");
        
        var aktivni = 0;
        if ($(this).is(":checked")) {
            aktivni = 1;
        } else {
            aktivni = 0;
        }
 
        $.nette.ajax({
            type: 'GET',
            url: "?do=changeAktivni",
            data: {
                aktivni: aktivni,
                aktualitaId: $(this).attr('id')
            },
            success: function (data) {
                console.log("ok");
 
            },
            error: function (jqXHR, textStatus, errorThrown) {
 
            }
        });
    });
    
    
})