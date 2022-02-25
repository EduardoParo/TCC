<!--Section Titulo-->		
<div class="container">
	<div class="row">
					
		<div class="col-md-12 mt-2 mb-0">
			<h1 class="display-8 text-center text-success"> Lista Idéias</h1>				
		</div>
					
	</div>
</div>

<div class="container">
    <div class="row border-bottom mb-4">
    	<div class="col-md-3 mb-4 mt-2 ">
    		<button id="btnRegistrar" class="btn btn-success"><i class="fa fa-plus"></i></button>
        </div>
		
		<div class="col-md-9 mt-3">
			<div class="input-group input-group-xs ">
            	<input type="text" id="pesquisar"placeholder="Pesquisar" class="form-control">
            	<div class="input-group-addon">
            		<button id="btnPesquisar" type="button" class="btn btn-primary">
            			 <i class="fas fa-search"></i>
           			</button>
            	</div>
            </div>
		</div>
	</div>					
    
	<!--Section Tabela de Dados-->
    <div class="container bg-white mt-4">
        <div class="row">
           
            <div class="table-responsive  " >
                <table id= "tabelaDados" class="table table-bordered" >
                    
                </table>
            </div>
                      
        </div>
    </div>
</div>		
<?php
        //Extremamente importante
            echo $this->oView->aDados;
            require_once "../app/view/app/modal/cadastro.php";
        
    ?>
        
          

      