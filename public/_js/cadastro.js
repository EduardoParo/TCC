/*------------------------------------------------------------------
    Funçao Gravar 
--------------------------------------------------------------------*/
function gravarRegistro(nId = null) {
    let oId_Usr = $('#nId_Usr  ');
    let oData = $('#dData    ');
    let oTitulo = $('#cTitulo  ');
    let oAssunto = $('#cAssunto ');
    let oDescricao = $('#cDescricao');
    let lOk = false;

    $("#btn_inc_modal").prop("disabled", false);

    if (nId == null) {
        $.post('/incluirIdeia',
            {
                nId_Usr: oId_Usr.val(),
                dData: oData.val(),
                cTitulo: oTitulo.val(),
                cAssunto: oAssunto.val(),
                cDescricao: oDescricao.val()
            },
            function (retorno) {
                parent.location.reload();
            }
        );

    } else {
        //Caso Seja Alteração chamar a Rota Inlcluir porem passando o ID
        $.post('/incluirIdeia',

            {
                nId: nId,
                nId_Usr: oId_Usr.val(),
                dData: oData.val(),
                cTitulo: oTitulo.val(),
                cAssunto: oAssunto.val(),
                cDescricao: oDescricao.val()

            },
            function (retorno) {
                parent.location.reload();
            }
        );

    }

}

/*-----------------------------------------------------------------
    Funçao Editar Retorna os dados dos campos do Registro Selecionado
--------------------------------------------------------------------*/
function Editar(nIdReg = null) {
    let nId = nIdReg;
    let oData = $('#dData    ');
    let oTitulo = $('#cTitulo  ');
    let oAssunto = $('#cAssunto ');
    let oDescricao = $('#cDescricao     ');

    $.post('/viewIdeia', { nId: nId }, function (retorno) {
        if (retorno != null) {

            //Inicializa Modal
            $('#telaModal').modal('show');

            //Habilita Botao alterar
            $("#btn_inc_modal").prop("disabled", false);

            //Montagem do botão Alterar registros
            $('#titulo_modal').html('Alterar');
            $("#btn_inc_modal").click(function () {
                gravarRegistro(nId);
            });

            //Retornar os dados do Registro selecionado
            let aDados = JSON.parse(retorno);

            oData.val(aDados[0].ideia_data);
            oTitulo.val(aDados[0].ideia_titulo);
            oAssunto.val(aDados[0].ideia_assunto);
            oDescricao.val(aDados[0].ideia_descricao);


        } else {
            alert("Resultado nulo");
        }
    });

}

/*-----------------------------------------------------------------
   Funçao Editar Retorna os dados dos campos do Registro Selecionado
--------------------------------------------------------------------*/
function Visualizar(nIdReg = null) {
    let nId = nIdReg;
    let oData = $('#dData    ');
    let oTitulo = $('#cTitulo  ');
    let oAssunto = $('#cAssunto ');
    let oDescricao = $('#cDescricao     ');


    $.post('/viewIdeia', { nId: nId }, function (retorno) {
        if (retorno != null) {

            //Inicializa Modal
            $('#telaModal').modal('show');
            $("#btn_inc_modal").prop("disabled", true);
            //Retornar os dados do Registro selecionado
            let aDados = JSON.parse(retorno);

            oData.val(aDados[0].ideia_data);
            oTitulo.val(aDados[0].ideia_titulo);
            oAssunto.val(aDados[0].ideia_assunto);
            oDescricao.val(aDados[0].ideia_descricao);


        } else {
            alert("Resultado nulo");
        }
    });

}


/*----------------------------------------------------------------
   Funçao Deletar
--------------------------------------------------------------------*/
function Deletar(nId, cTitulo) {
    cBkp = $('#Modal').html();
    //Iniciar Modal
    showModal();

    $('#titulo_modal').html('Excluir');
    $('#titulo_modal_div').addClass('modal-header text-danger');

    $('#conteudo_modal').html('Tem certeza que deseja excluir o item : ' + nId);

    $('#btn_voltar_modal').html('Não');
    $('#btn_voltar_modal').addClass('btn btn-secondary bg-danger');
         //Ação do botão Voltar
         $("#btn_voltar_modal").click(function() {
            //parent.location.reload();
            $('#titulo_modal').html('Visualizar');
            $('#telaModal').modal('hide');
            $('#Modal').html(cBkp);
        });

    //Botao confirmar para Excluir o Registro
    $('#btn_inc_modal').html('Sim');
    $('#btn_inc_modal').addClass('btn btn-secondary bg-success');
    $('#btn_inc_modal').click(function () {

        $.post('/delIdeia', { nId: nId }, function (retorno) {
            if (retorno != null) {
                let aDados = JSON.parse(retorno);
                window.location.reload();
            }
        });
    })
}
