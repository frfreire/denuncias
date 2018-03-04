$(document).ready(function () {

    // Mascaras dos campos
    $('#cpf').mask('000.000.000-00');

    $('#usrCpfEmail').keypress(function () {
        $('#usrCpfEmail').unmask();

        var usr = $('#usrCpfEmail').val();

        if($.isNumeric(usr) && usr.length > 9)
        {
            $('#usrCpfEmail').mask('000.000.000-00');
        }
    });

    //mascara para campos de dada, do formulario de oferta
    $('.data-oferta').mask('00/00/0000');

    // Cria as Tabelas com ordenamento, paginacao, pesquisa
    $('#logUsuarios').DataTable({"language": {"url": "/json/datatables-pt-br.json"}});
    $('#visualizaLogUsuarios').DataTable({"language": {"url": "/json/datatables-pt-br.json"}});
    $('#logCursos').DataTable({"language": {"url": "/json/datatables-pt-br.json"}});
    $('#visualizaLogCursos').DataTable({"language": {"url": "/json/datatables-pt-br.json"}});
    $('#listaCursos').DataTable({"language": {"url": "/json/datatables-pt-br.json"}});
    $('#listaOfertaCurso').DataTable({"language": {"url": "/json/datatables-pt-br.json"}});
    $('#listaInscritosOferta').DataTable({"language": {"url": "/json/datatables-pt-br.json"}});
    $('#listaPerfil').DataTable({"language": {"url": "/json/datatables-pt-br.json"}});
    $('#listaPermissao').DataTable({"language": {"url": "/json/datatables-pt-br.json"}});
    $('#listaMenuLateral').DataTable({"language": {"url": "/json/datatables-pt-br.json"}});
    $('#listaSubMenuLateral').DataTable({"language": {"url": "/json/datatables-pt-br.json"}});
    $('#listaCursosRealizados').DataTable({"language": {"url": "/json/datatables-pt-br.json"}});
    $('#listaCursosAndamento').DataTable({"language": {"url": "/json/datatables-pt-br.json"}});
    $('#listaAVA').DataTable({"language": {"url": "/json/datatables-pt-br.json"}});
    $('#listaCursoGestor').DataTable({"language": {"url": "/json/datatables-pt-br.json"}});
    $('#listaTipoOfertaGestor').DataTable({"language": {"url": "/json/datatables-pt-br.json"}});
    $('#listaTematicaCursoGestor').DataTable({"language": {"url": "/json/datatables-pt-br.json"}});


    // Tabelas relacionadas ao perfil ALUNO
    $('#listaComprovanteInscricao').DataTable({"language": {"url": "/json/datatables-pt-br.json"}});


    $('[data-toggle="tooltip"]').tooltip();
    
    // Mostrar/Esconder popover
    $('[data-toggle="popover"]').click(function(){ return false; });
    $('#wrapper').click(function(){ $('[data-toggle="popover"]').popover('hide'); });
    $('[data-toggle="popover"]').popover({
       container: 'body'
    });
    

});