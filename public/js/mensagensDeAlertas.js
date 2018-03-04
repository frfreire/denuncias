/**
 * Created by Alex Alexandre on 20/07/17.
 *
 * Este arquivo irá conter todas as mensagens de alerta para exibir ao usuário,
 * É utilizado um componente javascript chamado sweetAlert. LINK da documentaçao: http://t4t5.github.io/sweetalert/
 *
 * Aqui coloquei as principais funçoes para poder utilizar, verifiquem a documentaçao que ainda tem
 * bastante coisa e outros tipos de mensagens.
 */

/**
 * Tipos possíveis Mensagens
 *
 * Sucesso: success,
 * Erro: error,
 * Atençao: warning,
 * Informaçao: info
 */



/**
 * Uma mensagem simples, com uma animaçao no inicio
 *
 * @param titlo
 * @param mensagem
 * @param tipo ( sucesso, erro, informaçao, etc)
 */
function mensagemComAnimacao(titlo, mensagem, tipo) {
    swal(
        titlo,
        mensagem,
        tipo
    );
};

/**
 * Uma mensagem simples, que fecha sozinha
 *
 * @param titlo
 * @param mensagem
 * @param tempo ( Em milisegundos... Exemplo: 2 segundos: 2000.)
 */
function mensagemFechaSozinha(titlo, mensagem, tempo) {
    swal({
        title: titlo,
        text: mensagem,
        timer: tempo,
        showConfirmButton: false
    });
};



/**
 * Uma mensagem simples, que da um refresh na pagina
 *
 * @param titlo
 * @param mensagem
 * @param tipo ( sucesso, erro, informaçao, etc)
 * @param tempo ( Em milisegundos... Exemplo: 2 segundos: 2000.)
 */
function mensagemComRefresh(titlo, mensagem, tipo, tempo) {
    swal({
        title: titlo,
        text: mensagem,
        type: tipo,
        timer: tempo,
        showConfirmButton: true
    }, function () {
        location.reload();
    });
};