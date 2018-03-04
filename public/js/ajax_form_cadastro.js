$('#tp_cadastro').on('change',function(e){

    var tp_cadastro = e.target.value;
    $("#ac1n_cad").prop("disabled", true);
    $('#ac1n_cad').empty();

    if(tp_cadastro != ''){
        $.get('/ajax-tp_entidade/' + tp_cadastro, function(data){

            $('#ac1n_cad').append('<option value="">'+ 'Selecione' +'</option>')
            $.each(data, function(index,ac1n){
                $("#ac1n_cad").prop("disabled", false);
                $('#ac1n_cad').append('<option value="'+ac1n.id+'">'+ac1n.nomentidade+'</option>')
            });
        });
    }

});

$('#ac1n_cad').on('change',function(e){

    var acn1 = e.target.value;
    $("#ac2n_cad").prop("disabled", true);
    $('#ac2n_cad').empty();

    if(acn1 != ''){
        $.get('/ajax-getentidade/' + acn1, function(data){

            $('#ac2n_cad').append('<option value="">'+ 'Selecione' +'</option>')
            $.each(data, function(index,ac2n){
                $("#ac2n_cad").prop("disabled", false);
                $('#ac2n_cad').append('<option value="'+ac2n.id+'">'+ac2n.nomentidade+'</option>')
            });
        });
    }

});

$('#ac2n_cad').on('change',function(e){

    var ac2n = e.target.value;
    $("#ar_cad").prop("disabled", true);
    $('#ar_cad').empty();

    if(ac2n != ''){
        $.get('/ajax-getentidade/' + ac2n, function(data){

            $('#ar_cad').append('<option value="">'+ 'Selecione' +'</option>')
            $.each(data, function(index,ar){
                $("#ar_cad").prop("disabled", false);
                $('#ar_cad').append('<option value="'+ar.id+'">'+ar.nomentidade+'</option>')
            });
        });
    }

});

$('#ar_cad').on('change',function(e){

    var ar = e.target.value;
    $("#endereco_ar_cad").val('');

    $.ajax({

        type: "GET",
        data: {ar:ar},
        url: "/ajax-enderecoEntidade",
        datatype: "json",
        success: function(data) {
            $("#endereco_ar_cad").val(data);
        }

    });

    $.ajax({

        type: "GET",
        data: {entity:ar},
        url: "/ajax-representanteEntidade",
        datatype: "json",
        success: function(data) {
            $("#representante_legal").val(data);
        }

    });
});

$(function() {
    var textareas = $('textarea.clean');
    $.each(textareas, function(key, value) {
        $(this).val($(this).val().replace(/[ ]+/g, ' ').replace(/^[ ]+/m, ''));
    })
})
