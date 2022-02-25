	<!---Menu Superior-->
	<div class="menuSup">
		<!--Barra de Navegacao superior-->
		<nav class="navbar navbar-expand-md navbar-light p-0">
			
			<div id='abrirMenu' class="btn-Sup">
				
					<i class="fas fa-bars"></i>
				
			</div>
			<!-- Logo -->
			<a href="" class="navbar-brand">
				<h4 class="text text-success">DevIdeias</h4>  
			</a>
	
			<div class="container">
				<div class="collapse navbar-collapse">

					<ul class="navbar-nav ml-auto ">
						<li class="nav-item">
							<div class="nav-link text-success mr-2">  
								<b class="text-center p-5">Bem Vindo </b>
								<?= $this->oView->aUsuario['nome'] ?>
							</div>					
						</li>

						<li class="nav-item dropdown">
							<a href="" class="nav-link dropdown-toggle text-white" 
							data-toggle="dropdown">Desconectar</a>
							<div class="dropdown-menu">
								<a href="/sair" class="dropdown-item">Sair</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	
	</div>
	<div class="menuLateral">

		<ul>
			<li><a href="/home"><i class="fas fa-qrcode">			</i></a></li>
			<li><a href="/lista"><i class="fas fa-stream">			</i></a></li>
			<li><a href="#"><i class="far fa-question-circle">	</i></a></li>
		</ul>
	</div>

	<!--Secao
	---------------------------------------------------->
	  <section id='conteudoHome'>

   
        <?= $this->req_View() ?>
        
	  
	  		<!--Footer
    	 --------------------------------------------------->
    	 <footer class="mt-5 mb-4">
    	   <!--Container Footer-->
    	   <div class="container">
    	     <!--Linha Row-->
    	     <div class="row border-top">

    	   
    	       <div class="col-md-12 d-flex justify-content-center mt-4">
    	         <a href="" class="btn btn-outline-dark ml-2 bg-success">
    	           <i class="fab fa-facebook"></i>
    	         </a>

    	          <a href="" class="btn btn-outline-dark ml-2 bg-success">
    	           <i class="fab fa-youtube"></i>
    	         </a>

    	          <a href="" class="btn btn-outline-dark ml-2 bg-success">
    	           <i class="fab fa-twitter"></i>
    	         </a>
    	          <a href="" class="btn btn-outline-dark ml-2 bg-success">
    	           <i class="fab fa-instagram"></i>
    	         </a>
    	       </div>

    	       
    	     </div><!--Fim da Row Linha-->
    	   </div><!--Fim Cointainer-->   
      </footer>
    	

	</section>