/**
 * Created by Fabricio on 10/07/2017.
 */
$(function(){
    $(".calendario-sem-data-futura").datepicker({
        showOn: "both",
        buttonImage: "../../../img/calendar.gif",
        dateFormat: "dd/mm/yy",
        language: "pt-BR",
        changeMonth: true,
        changeYear: true,
        yearRange: "c-80:c+1",
        maxDate: new Date(),
        dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
        dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
        dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
        monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
        monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']
    });

    $(".calendario-com-data-futura").datepicker({
        showOn: "both",
        buttonImage: "../../../img/calendar.gif",
        dateFormat: "dd/mm/yy",
        language: "pt-BR",
        changeMonth: true,
        changeYear: true,
        yearRange: "c-80:c+1",
        dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
        dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
        dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
        monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
        monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']
    });

    $(".calendario-sem-data-passada").datepicker({
        showOn: "both",
        buttonImage: "../../../img/calendar.gif",
        changeMonth: true,
        changeYear: true,
        yearRange: "c-80:c+1",
        minDate: new Date(),
        dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
        dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
        dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
        monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
        monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
        dateFormat: "dd/mm/yy",
        language: "pt-BR",

    });
});