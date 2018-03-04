$('#ac1n_decl').on('change',function(e){

    e.preventDefault();

    var ac1n_decl = e.target.value;
    $("#ac2n_decl").prop("disabled", true);
    $('#ac2n_decl').empty();

    if(ac1n_decl != ''){
        $.get('/ajax-entidade_list/' + ac1n_decl, function(data){

            $('#ac2n_decl').append('<option value="">'+ 'Selecione' +'</option>')
            $.each(data, function(index,ac2n){
                $("#ac2n_decl").prop("disabled", false);
                $('#ac2n_decl').append('<option value="'+ac2n.id+'">'+ac2n.nomentidade+'</option>')
            });
        });
    } else {
        $("#ac2n_decl").prop("disabled", true);
    }

});




// $('#ar_cad').on('change',function(e){
//
//     var ar = e.target.value;
//     $("#endereco_ar_cad").val('');
//
//     $.ajax({
//
//         type: "GET",
//         data: {ar:ar},
//         url: "/ajax-enderecoEntidade",
//         datatype: "json",
//         success: function(data) {
//             $("#endereco_ar_cad").val(data);
//         }
//
//     });
//
//     $.ajax({
//
//         type: "GET",
//         data: {entity:ar},
//         url: "/ajax-representanteEntidade",
//         datatype: "json",
//         success: function(data) {
//             $("#representante_legal").val(data);
//         }
//
//     });
// });
//
// $(function() {
//     var textareas = $('textarea.clean');
//     $.each(textareas, function(key, value) {
//         $(this).val($(this).val().replace(/[ ]+/g, ' ').replace(/^[ ]+/m, ''));
//     })
// })
