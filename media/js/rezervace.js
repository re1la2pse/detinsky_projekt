
$(function() {
    //console.log('rezervace');

    var form = $('#rezervaceForm');
    var formErrors = $("#rezervaceFormBlok div.formErrors");
    var formSuccess = $("#rezervaceFormBlok div.formSuccess");

    form.submit(function() {

        console.log('rezervaceForm');

        formErrors.empty();
        formSuccess.empty();

        var jmeno = $("input[name='jmeno']").val();
        var prijmeni = $("input[name='prijmeni']").val();
        var tel = $("input[name='tel']").val();
        var email = $("input[name='mail']").val();
        var pocetOsob = $("input[name='pocetOsob']").val();
        var datumPrijezdu = $("input[name='datumOd']").val();
        var datumOdjezdu = $("input[name='datumDo']").val();
        var typPokoje = $("select[name='typPokoje']").val();
        var snidane = $("select[name='snidane']").val();
        var degustace = $("select[name='degustace']").val();




       /* console.log('\n jmeno: ' + jmeno);
        console.log('\n prijmeni: ' + prijmeni);
        console.log('\n tel: ' + tel);
        console.log('\n email: ' + email);
        console.log('\n pocetOsob: ' + pocetOsob);
        console.log('\n DatumPrijezdu: ' + datumPrijezdu);
        console.log('\n datumOdjezdu: ' + datumOdjezdu);
        console.log('\n typPokoje: ' + typPokoje);
        console.log('\n snidane: ' + snidane);
        console.log('\n degustace: ' + degustace);*/

        if (jmeno == "" || prijmeni == "" || tel == "" || email == "" || datumOdjezdu == "" || datumPrijezdu == ""
            || typPokoje == "" || snidane == "" || degustace == "") {
            //console.log("neco je prazdne");
            formErrors.append("<p>Prosíme, vyplňte všechny pole.</p>");
            return false;
        }

        var pattern =/^(\+\d{3})? ?\d{3} ?\d{3} ?\d{3}$/;
        if(!pattern.test(tel)) {
            //console.log("spatne cislo tel");
            formErrors.append("<p>Zadejte telefon ve správném tvaru.</p>");
            return false;
        }

        //Kontrola tvaru emailu
        pattern = /^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
        if(!pattern.test(email)){
            //console.log("spatny email");
            formErrors.append("<p>Zadejte prosím email ve správném tvaru.</p>");
            return false
        }

        //kontrola datumu
        var pattern = /^([1-9]|[12][0-9]|3[01])\.([1-9]|1[012])\.[0-9]{4}$/;
        if(!pattern.test(datumPrijezdu)){
            //console.log("spatny email");
            formErrors.append("<p>Zadejte prosím datum příjezdu ve tvaru dd.mm.rrrr.</p>");
            return false
        }
        if(!pattern.test(datumOdjezdu)){
            //console.log("spatny email");
            formErrors.append("<p>Zadejte prosím datum odjezdu ve tvaru dd.mm.rrrr.</p>");
            return false
        }

        //formular byl vyplnen spravne, muzu odeslat
        $.ajax({
            //na produkcnim jen url: "rezervaceForm"
            url: "/detinsky_projekt/rezervaceForm",
            type: "POST",
            data: {
                jmeno: jmeno,
                prijmeni: datumPrijezdu,
                tel: tel,
                email: email,
                pocetOsob: pocetOsob,
                datumPrijezdu: datumPrijezdu,
                datumOdjezdu: datumOdjezdu,
                typPokoje: typPokoje,
                snidane: snidane,
                degustace: degustace
            },
            cache: false,
            success: function(value) {

                if(value == "ok") {
                    formSuccess.append("<p>Vaše zpráva byla úspěšne odeslána.</p>");
                    console.log("odesláno");
                }
                else {
                    formErrors.append("<p>Zprávu se nepodařilo odeslat, zkuste to později..</p>");
                    console.log(value);
                }
                form[0].reset();
            },
            error: function() {
                console.log("rezervaceForm error");
            }
        });


        return false;
    });
})