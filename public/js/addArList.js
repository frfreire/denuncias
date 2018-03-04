$(document).ready(function() {

    $('.cnpj').mask('99.999.999/9999-99');


    $('#ac2n_decl').on('change',function(e){

        var wrapper         = $(".ar_wrap");

        var ac2n = e.target.value;
        x = 0;
        e.preventDefault();

        if(ac2n != ''){
            $.get('/ajax-get_arlist/' + ac2n, function(data){

                $(".checkbox").remove();
                $("#ac2n_email_decl").prop("disabled",false);
                $(wrapper).append('<div class="col-md-12 row">');



                if(data != ''){

                    (wrapper).append('<div class="col-md-12"><div class="form-group"><p><label for="chkAll">' +
                        '<input type="checkbox" id="chkAll" name="chkAll" onclick="checkMark(this)"> Selecionar Todas</label>' +
                        '</p></div></div><div></div>');

                    $.each(data, function(index,ar) {
                        if (ar.tp_georeferencia == 0){
                            (wrapper).append('<div class="checkbox col-md-6 text-left" id="div_ar_' + x + '">' +
                                '<p><label for="div_ar_' + x + '"><input type="checkbox" id="ar_decl[]" name="ar_decl[]" value="' + ar.id + '" class="checkMark">' + ar.nomentidade + '</label></p>' +
                                '</div>');
                        }
                    });


                } else {


                        (wrapper).append('<div class="checkbox col-md-10 text-left" >' +
                            '<p>Não encontramos Autoridades de Registro vinculadas a essa Autoridade Certificadora.</p>'  +
                            '</div>');

                }
                if(data != ''){

                    (wrapper).append('<br /><br /><div class="col-md-12 checkbox"><div class="form-group"> <label for="tx_obs" class="col-md-6 control-label">' +
                        'Caso não tenha encontrado alguma AR, digite o nome dela a seguir:</label><div class="col-md-6"><div class="form-group">' +
                        '<input id="tx_obs" type="text" class="form-control" name="tx_obs" value="">' +
                        '</div></div></div></div>' +
                        '<div class="col-md-12"><div class="form-group"><div id="txt_confirm_geo">' +
                        '<br /><p class="text-uppercase font-weight-bold">Declaro que as Autoridades de Registro acima selecionadas já possuem georeferenciamento.</p>'+
                        '</div></div></div>');
                }

                $(wrapper).append('</div>');


            });
        }


    });



});

function checkMark(){
    $('.checkMark').each(
        function(){
            if ($(this).prop( "checked"))
                $(this).prop("checked", false);
            else $(this).prop("checked", true);
        }
    );
}