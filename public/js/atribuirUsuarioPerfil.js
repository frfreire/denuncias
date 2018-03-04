$(document).ready(function () {

    $('#select_perfil_user').change(function () {
        var id_perfil = $('#select_perfil_user').val();

        if(id_perfil != '--'){
            $('#nome_usuario').keyup(function () {
                var param = document.getElementById('nome_usuario');

                if(param.value.length > 2){
                    $('#selecionar_todos_usuarios').css('display', 'block'); //Mostrar opção de marcar todas

                    $.get('gerenciar-acessos/usuario/listar/'+id_perfil+'/', {q: param.value}, function (data) {
                        var html = '';
                        $.each(data, function (key, valor) {
                            html +=     '   <li class="list-group-item">'
                                +      '   Nome:' + valor.tx_nome_pessoa + '  E-mail: '+ valor.tx_email_pessoa
                                +      '       <div class="material-switch pull-right">'
                                +      '           <input id="'+valor.id_usuario+'" name="usuario[]" type="checkbox" value="'+valor.id_usuario+'">'
                                +      '               <label for="'+valor.id_usuario+'" class="label-success"></label>'
                                +      '       </div>'
                                +      '   </li>'
                        });

                        $('#lista_usuario').html(html);
                        $('#total_usuarios').html('Total de Usuários: '+data.length);
                    });
                }
            });
        }

    });

    /*
     * Função responsável por marcar todos os usuários listados na pesquisa.
     */
    $('#marcar_todos').change(function () {
        if($('#marcar_todos').is(':checked')){
            $("input[type=checkbox][name='usuario[]']").each(function(){
                $(this).prop('checked', true);
            });
        }else{
            $("input[type=checkbox][name='usuario[]']:checked").each(function(){
                $(this).prop('checked', false);
            });
        }

    });

    //Atribuir o nome do botão salvar
    $('#atribuir_perfil_user').change(function () {
        var atribuir_perfil_user = document.getElementById('atribuir_perfil_user');
        var texto = atribuir_perfil_user.options[atribuir_perfil_user.selectedIndex].text;
        $('#nome_botao_atribuir_perfil').html('Atribuir perfil: '+ texto);
    });
});



function atribuirUsrPerfil() {
    var atribuir_perfil = document.getElementById('atribuir_perfil_user').value;
    var id_perfil = $('#select_perfil_user').val();
    var usuarios_array = new Array();

    $("input[type=checkbox][name='usuario[]']:checked").each(function(){
        usuarios_array.push($(this).val());
    });

    if(validarAtribuirPerfil(usuarios_array, id_perfil, atribuir_perfil))
    {
        $.ajax({
            type: 'GET',
            url: 'gerenciar-acessos/usuario/perfil/salvar',
            data: {'usuarios': usuarios_array, 'id_perfil': atribuir_perfil},
            beforeSend: function () {
                $('#loader').css('display', 'block');
            },
            success: function () {
                $('#loader').css('display', 'none');
                mensagemComRefresh('Sucesso', 'Os usuários foram atribuídos com sucesso!', 'success', 3000);
            },
            error: function () {
                $('#loader').css('display', 'none');
                mensagemComAnimacao('Falha!', 'Ocorreu um erro, tente novamente!', 'error');
            }
        })
    }

};

/**
 * Função responsável por validar todos os campos da aba
 * "atribuir perfil a usuário" antes de enviar ao servidor
 */
function validarAtribuirPerfil(usuarios, id_perfil, id_atribuir_perfil) {

    if($.isEmptyObject(usuarios))
    {
        mensagemFechaSozinha('Atenção!', 'Por favor, Selecione o usuário', 4000);
        return false;
    }
    else if(id_atribuir_perfil == '--')
    {
        mensagemFechaSozinha('Atenção!', 'Por favor, Selecione o perfil que deseja atribuir ao usuário', 4000);
        $('#atribuir_perfil_user').focus();
        return false;
    }
    else if(id_atribuir_perfil == id_perfil)
    {
        mensagemFechaSozinha('Atenção!', 'Por favor, Selecione um perfil diferente do já atribuido para o usuário!', 4000);
        $('#atribuir_perfil_user').focus();
        return false;
    }
    else
    {
        return true;
    }

};