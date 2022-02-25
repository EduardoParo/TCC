<!--Section Titulo-->		
<div class="container">
	<div class="row">
					
		<div class="col-md-12 mt-2 mb-0">
			<h1 class="display-6 text-center text-success"> Cards Idéias</h1>				
		</div>
					
	</div>
</div>

<div class="container">
    <div class="row border-bottom mb-4">
    	<div class="col-md-3 mb-4 mt-2 ">
    		<button id="btnRegistrar" class="btn btn-success"><i class="fa fa-plus"></i></button>
        </div>
    </div>

    <div class="row">   
        <?php 
        foreach($this->oView->aDados as $item){?>
            <div class="col-md-3">
                <div class="card mt-2">
                    <div id="titulo" class="card-header"><?php echo $item['ideia_titulo'];?></div> 

                    <ul class="list-group list-group-flush">
                        <li id="assunto" class="list-group-item"> Assunto :<?php echo $item["ideia_assunto"];?> </li>
                        <li id="Abrir" class="list-group-item"> 
                            <button type="button" class="btn btn-success btn-sm" onclick="Visualizar(<?php echo $item['ideia_id']?>)"><i class="fa fa-eye"></i></button>
                            <button type="submit" class="btn btn-primary btn-sm" onclick="Editar(<?php echo $item['ideia_id']?>)" ><i class="fa fa-edit"></i></button>
                            <button type="submit" class="btn btn-danger btn-sm" onclick="Deletar(<?php echo $item['ideia_id']?>)"><i class="fa fa-times"></i></button>
                            <button class="btn btn-info btn-sm">Id : <?php echo $item["ideia_id"];?> </button>
                        </li>
                    </ul>
                </div>
            </div>
        <?php } ?>

    </div>
</div>
<?php
        //Extremamente importante
         //   echo $this->oView->aDados;
            require_once "../app/view/app/modal/cadastro.php";
        
    ?>