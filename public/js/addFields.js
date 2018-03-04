$(document).ready(function() {
    var max_fields      = 10;
    var wrapper         = $(".input_fields_wrap");
    var add_button      = $(".add_field_button");

    var x = 2;
    $(add_button).click(function(e){
        e.preventDefault();
        if(x < max_fields){
            x++;

            $(wrapper).append('<div class="form-group" id="agr_'+ x +'">' +
                '<div><label for="agr_' + x + '" class="col-md-4 control-label">Nome do Agente de Registro '+ x +':</label></div>' +
                '<div class="col-md-8"><div class="form-group"><input id="agr_'+ x +'" type="text" class="form-control" name="agr_'+ x +'" value="" >' +
                '</div></div></div>' +
                '<div class="form-group" id="cpf_'+ x +'">' +
                '<div><label for="cpf_' + x + '" class="col-md-4 control-label">CPF do Agente de Registro '+ x +':</label></div>' +
                '<div class="col-md-8"><div class="form-group"><input id="cpf_'+ x +'" type="text" class="form-control" name="cpf_'+ x +'" value="" >' +
                '</div></div></div>');
        }
    });

    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault();
        $('label[for=agr_'+ x +']').detach();
        $('label[for=cpf_'+ x +']').detach();
        $(this).parent('div').detach();
        $('#cpf_'+ x +'').detach();

        x--;
    })
});