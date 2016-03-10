$(function() {
    $.nette.init();

   $("input[name='checkboxZaloha']").change(function() {

       var zaloha = 0;
       if ($(this).is(":checked")) {
           zaloha = 1;
       } else {
           zaloha = 0;
       }

       $.nette.ajax({
           type: 'GET',
           url: "?do=changeZaloha",
           data: {
               zaloha: zaloha,
               rezervaceId: $(this).attr('id')
           },
           success: function (data) {
               console.log("ok");

           },
           error: function (jqXHR, textStatus, errorThrown) {

           }
       });

   });

});