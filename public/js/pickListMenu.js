(function ($) {

    $.fn.pickListMenu = function (options) {
        var opts = $.extend({}, $.fn.pickListMenu.defaults, options);

        this.fill = function () {
            var option = '';

            $.each(opts.data, function (key, val) {
                // console.log('val:  ' + val);
                option += '<option data-id=' + val.id_menu + '>' + val.tx_nome_menu + '</option>';
            });
            this.find('.pickDataMenu').append(option);
        };

        this.controll = function () {
            var pickThis = this;

            pickThis.find(".pAdd").on('click', function () {
                var p = pickThis.find(".pickDataMenu option:selected");
                p.clone().appendTo(pickThis.find(".pickListMenuResult"));
                p.remove();
            });

            pickThis.find(".pAddAll").on('click', function () {
                var p = pickThis.find(".pickDataMenu option");
                p.clone().appendTo(pickThis.find(".pickListMenuResult"));
                p.remove();
            });

            pickThis.find(".pRemove").on('click', function () {
                var p = pickThis.find(".pickListMenuResult option:selected");
                p.clone().appendTo(pickThis.find(".pickDataMenu"));
                p.remove();
            });

            pickThis.find(".pRemoveAll").on('click', function () {
                var p = pickThis.find(".pickListMenuResult option");
                p.clone().appendTo(pickThis.find(".pickDataMenu"));
                p.remove();
            });
        };

        this.getValues = function () {
            var objResult = [];
            this.find(".pickListMenuResult option").each(function () {
                objResult.push({
                    id_menu: $(this).data('id'),
                    tx_nome_menu: this.text
                });
            });
            return objResult;
        };

        this.init = function () {
            var pickListMenuHtml =
                "<div class='row'>" +
                "  <div class='col-sm-5'>" +
                "      <h4>Menus Disponíveis</h4>"+
                "	 <select class='form-control pickListMenuSelect pickDataMenu' multiple></select>" +
                " </div>" +
                " <div class='col-sm-2 pickListMenuButtons'>" +
                "	<button  class='pAdd btn btn-primary btn-sm btn-block'>" + opts.add + "</button>" +
                "      <button  class='pAddAll btn btn-primary btn-sm btn-block'>" + opts.addAll + "</button>" +
                "	<button  class='pRemove btn btn-primary btn-sm btn-block'>" + opts.remove + "</button>" +
                "	<button  class='pRemoveAll btn btn-primary btn-sm btn-block'>" + opts.removeAll + "</button>" +
                " </div>" +
                " <div class='col-sm-5'>" +
                "      <h4>Menus já atribuidos</h4>"+
                "    <select id='pickListMenuResult' class='form-control pickListMenuSelect pickListMenuResult' multiple></select>" +
                " </div>" +
                "</div>";

            this.html(pickListMenuHtml);

            this.fill();
            this.controll();
        };

        this.init();
        return this;
    };

    $.fn.pickListMenu.defaults = {
        add: 'Adicionar',
        addAll: 'Adicionar Todos',
        remove: 'Remover',
        removeAll: 'Remover Todos'
    };

}(jQuery));


var pickMenu;

$('#select_perfil_menu').change(function () {
    var id_perfil = $('#select_perfil_menu').val();

    if(id_perfil != '--'){
        $.get('gerenciar-acessos/menu-lateral/listar/'+id_perfil, function (data) {
            pickMenu = $('#pickListMenu').pickListMenu({
                data: data
            });
        });

        $.get('gerenciar-acessos/menu-lateral/perfil/listar/'+id_perfil, function (data) {
            var opt = '';
            $.each(data, function (key, val) {
                opt += '<option data-id=' + val.id_menu + '>' + val.tx_nome_menu + '</option>';
            });

            $('.pickListMenuResult').append(opt);
        });
    }

});




$("#getMenuSelected").click(function() {
    var id_perfil = $('#select_perfil_menu').val();

    if(id_perfil != '--'){
        var menus = pickMenu.getValues();

        $.get('gerenciar-acessos/menu-lateral/perfil/salvar',{'menus': menus, 'id_perfil': id_perfil},  function (retorno) {
            console.log('retorno do salvar');
            console.log(retorno);
            mensagemComRefresh('Sucesso', 'Os Menus foram atribuídos com sucesso!', 'success', 3000);
        });
    }

});