(function ($) {

    $.fn.pickList = function (options) {
        var opts = $.extend({}, $.fn.pickList.defaults, options);

        this.fill = function () {
            var option = '';

            $.each(opts.data, function (key, val) {
                option += '<option data-id=' + val.id_permissao + '>' + val.tx_nome_permissao + '</option>';
            });
            this.find('.pickData').append(option);
        };

        this.controll = function () {
            var pickThis = this;

            pickThis.find(".pAdd").on('click', function () {
                var p = pickThis.find(".pickData option:selected");
                p.clone().appendTo(pickThis.find(".pickListResult"));
                p.remove();
            });

            pickThis.find(".pAddAll").on('click', function () {
                var p = pickThis.find(".pickData option");
                p.clone().appendTo(pickThis.find(".pickListResult"));
                p.remove();
            });

            pickThis.find(".pRemove").on('click', function () {
                var p = pickThis.find(".pickListResult option:selected");
                p.clone().appendTo(pickThis.find(".pickData"));
                p.remove();
            });

            pickThis.find(".pRemoveAll").on('click', function () {
                var p = pickThis.find(".pickListResult option");
                p.clone().appendTo(pickThis.find(".pickData"));
                p.remove();
            });
        };

        this.getValues = function () {
            var objResult = [];
            this.find(".pickListResult option").each(function () {
                objResult.push({
                    id: $(this).data('id'),
                    text: this.text
                });
            });
            return objResult;
        };

        this.init = function () {
            var pickListHtml =
                "<div class='row'>" +
                "  <div class='col-sm-5'>" +
                "      <h4>Permissões Disponíveis</h4>"+
                "	 <select class='form-control pickListSelect pickData' multiple></select>" +
                " </div>" +
                " <div class='col-sm-2 pickListButtons'>" +
                "	<button  class='pAdd btn btn-primary btn-sm btn-block'>" + opts.add + "</button>" +
                "      <button  class='pAddAll btn btn-primary btn-sm btn-block'>" + opts.addAll + "</button>" +
                "	<button  class='pRemove btn btn-primary btn-sm btn-block'>" + opts.remove + "</button>" +
                "	<button  class='pRemoveAll btn btn-primary btn-sm btn-block'>" + opts.removeAll + "</button>" +
                " </div>" +
                " <div class='col-sm-5'>" +
                "      <h4>Permissões já atribuidas</h4>"+
                "    <select id='pickListResult' class='form-control pickListSelect pickListResult' multiple></select>" +
                " </div>" +
                "</div>";

            this.html(pickListHtml);

            this.fill();
            this.controll();
        };

        this.init();
        return this;
    };

    $.fn.pickList.defaults = {
        add: 'Adicionar',
        addAll: 'Adicionar Todos',
        remove: 'Remover',
        removeAll: 'Remover Todos'
    };

}(jQuery));

var pick;

$('#select_perfil').change(function () {
    var id_perfil = $('#select_perfil').val();

    if(id_perfil !== '--'){

        $.get('gerenciar-acessos/permissao/listar/'+id_perfil, function (data) {
            pick = $('#pickList').pickList({
                data: data
            });
        });

        $.get('gerenciar-acessos/permissao/perfil/listar/'+id_perfil, function (data) {
            var opt = '';
            $.each(data, function (key, val) {
                opt += '<option data-id=' + val.id_permissao + '>' + val.tx_nome_permissao + '</option>';
            });

            $('.pickListResult').append(opt);
        });

    }

});


$("#getSelected").click(function() {
    var id_perfil = $('#select_perfil').val();
    var dados = pick.getValues();
    console.log('Permissoes selecionadas');
    console.log(dados);
    $.get('gerenciar-acessos/permissao/perfil/salvar',{'permissoes': dados, 'id_perfil': id_perfil},  function (retorno) {
        mensagemComRefresh('Sucesso', 'As permissoões foram atribuídas com sucesso!', 'success', 3000);
    });

});