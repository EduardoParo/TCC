<script src="/_js/cadastro.js"></script>
   <!-- Section MODAL
      ----------------------------------------------------------->  
      <?php
        //file_exists("_js/cadastro.js")
      ?>    
      
      <!-- Modal -->
        <div class="modal fade" id="telaModal" tabindex="       -1" role="dialog" aria-labelledby="             exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" id='Modal' role="document">
            <!--Container-->
                <div class="modal-content">
                    <header>
                        <div id="titulo_modal_div" class="modal-header      text-success">
                            <h5 class="modal-title" id="titulo_modal">Visualizar</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </header>
                    <!--Seção Formulario nesses casos a Row vem depois do Formulario
                    ----------------------------------------------------------------------------------------->
                    
                        <div id="conteudo_modal" class="modal-body">

                            <!--Formulario
                             ----------------------------------------->
                            <form form action="" id="formReg" method="post">
   
                                <!--Linhas
                                  ------------------->
                                <div class="row form-group ">

                                    <label class="col-sm-2 control-label">Data:</label>

                                    <div class="col-sm-10 ">
                                        <div class="input-group input-group-sm ">
                                            <div class="input-group-addon p-2">
                                                 <i class="fas fa-calendar-alt"></i>
                                            </div>
                                            <input class="form-control" type="date" value="2011-08-19" id="dData" name="dData" required >
                                        </div>
                                    </div>
                                </div>

                                 <!--Linhas
                                  ------------------->
                                  <div class="row form-group">

                                    <label class="col-sm-2 control-label">Titulo:</label>

                                    <div class="col-sm-10">
                                        <div class="input-group input-group-sm ">
                                            <div class="input-group-append  p-2">
                                                <i class="far fa-file"></i>
                                            </div>
                                            <input type="text" id="cTitulo" name="cTitulo" placeholder="Titulo" class="form-control" required>
                                        </div>
                                    </div>
                                </div>


                               <!--Linhas
                                  ------------------->
                                <div class="row form-group">

                                    <label class="col-sm-2 control-label">Assunto:</label>

                                    <div class="col-sm-10">
                                        <div class="input-group input-group-sm ">
                                            <div class="input-group-append  p-2">
                                                <i class="far fa-file-code"></i>
                                            </div>
                                            <input type="text" id="cAssunto" name="cAssunto" placeholder="Assunto" class="form-control" required>
                                        </div>
                                    </div>
                               </div>     

                                <!--Linhas
                                ------------------->
                                <div class="row form-group ">

                                    <label class="col-sm-12 control-label">Descrição: 
                                        <i class="fas fa-book-open"></i>
                                    </label>

                                    <div class="col-sm-12 ">
                                        <div class="input-group input-group-sm ">
                                            <textarea class="form-control" id='cDescricao' name="cDescricao" rows="3"></textarea>
                                        </div>
                                    </div>
                                    
                                </div>       

                            </form>

                        </div>
          
                    <div class="modal-footer">
      		        <button type="button" id="btn_inc_modal" 		class="btn btn-secondary bg-success" 		data-dismiss="modal" ><i class="fa fa-save"></i></button>
      		        <button type="button" id="btn_voltar_modal" 		class="btn btn-secondary bg-danger" 		data-dismiss="modal"><i class="fa fa-times"></i></button>
					
      		      </div>

      		    </div>
      		</div>
        </div>
	

    