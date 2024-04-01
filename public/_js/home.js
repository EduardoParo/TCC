
/*Ao inicializar a pagina realizar a montagem da tabela de Registros
 ----------------------------------------------------------------------*/
$(document).ready(function () {
    CriarTabela();
})

 /* Funcao mostrar Modal
 ----------------------------------------------------------------------*/
 function showModal(){
    //Inicialisa o modal
    $('#telaModal').modal('show');
    // Limpa os inputs
    $('input, textarea').val(''); 
 }

 /* Funcao mostrar Modal
 ----------------------------------------------------------------------*/
$(document).on("click","#btnRegistrar",function(){
    let oData = $('#dData    ');
    let oTitulo = $('#cTitulo  ');
    let oAssunto = $('#cAssunto ');
    let oDescricao = $('#cDescricao     ');
    let cBkp = $('#Modal').html();

    //Iniciar Modal
    showModal()
    $("#btn_inc_modal").prop("disabled", false);
    //Montagem do Botao Registrar
    $('#titulo_modal').html('Registrar');
    $('#titulo_modal_div').addClass('modal-header text-success');
    
     //Ação do botão Registrar
     $("#btn_inc_modal").click(function() {
        gravarRegistro();
    });

    //Montagem do Botao Voltar
    //$('#btn_voltar_modal').html('voltar');
    $('#btn_voltar_modal').addClass('btn btn-secondary bg-danger');

     //Ação do botão Voltar
     $("#btn_voltar_modal").click(function() {
        //parent.location.reload();
        cBkp = $('#Modal').html();
        oData.val('');
        oTitulo.val('');
        oAssunto.val('');
        oDescricao.val('');
        $('#titulo_modal').html('Visualizar');
        $('#telaModal').modal('hide');
        $('#Modal').html(cBkp);
    });
})

    /*Mostrar Tabela de Dados
==================================================================*/
function CriarTabela() {
    //aLista é definido no PHP 
    let aColunas = [{ "sTitle": "Id"                , "data": "ideia_id"          , "bSortable": true                     },
                    { "sTitle": "Data"              , "data": "ideia_data"        , "bSortable": true                     },
                    { "sTitle": "Titulo"            , "data": "ideia_titulo"      , "bSortable": true                     },
                    { "sTitle": "Assunto"           , "data": "ideia_assunto"     , "bSortable": true , "sWidth": "15%"   },
                    { "sTitle": "Descrição"         , "data": "ideia_descricao"   , "bSortable": true                     },
                    { "sTitle": "Ações"             , "data": null        , render: function (data, type, row){

                        
                        let botoes = '<div>'
                        botoes += '<button type="submit" class="btn btn-primary btn-sm" onClick="Editar('+ row.ideia_id +')">'
                        botoes += '<span class="icon fa fa-edit"></span></button>'
                        botoes += '<button type="submit" class="btn btn-danger  btn-sm" onclick="Deletar('+ row.ideia_id +')" >'
                        botoes += '<span class="icon fas fa-times"> </span></button>'

                        botoes += '</div>'
                        
                        return botoes

                    }, "sWidth": "10%"}];


    $('#tabelaDados').DataTable({
        "data":  aLista,
        "aoColumns": aColunas,
        "responsive": true,
        "bLengthChange": false,
        "bFilter": true,
        "bSort": true,
        "bInfo": true,
        "sDom": "tIipr",
        "bPaginate": true,


    });
}
   
/*--------------------------------------------------------------
    Pesquisar Registros
-----------------------------------------------------------------*/
$(document).on("keyup","#pesquisar",function(){

    var tb = $('#tabelaDados').DataTable();
    tb.search(this.value).draw();
    tb.draw();

})


