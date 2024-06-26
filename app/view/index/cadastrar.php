<header>
  <!--Nav Menu -->
  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <!--<img src="logo.png" width="30" height="30" class="  d-inline-block align-top" alt="">-->
      DevIdeias
    </a>
  </nav>
</header>

<div class="container">
  <div class="d-flex justify-content-center mt-5">
    <div class="card" style="width: 36rem;">
      <div class="card-body">

        <div class="row">
          <div class="col">
            <h2>Crie sua conta</h2>
          </div>
        </div>

        <div class="row">
          <div class="col">
            
            <form action="/incluirUsr" method="post">
              <div class="form-group">
                <input type="text"  value= "<?= $this->oView->aUsuario['nome'] ?>" name='nome' class="form-control" placeholder="Nome">
              </div>
              
              <div class="form-group">
                <input type="text" value=  "<?= $this->oView->aUsuario['email'] ?>" name='email'  class="form-control" placeholder="E-mail">
              </div>

              <div class="form-group">
                <input type="password"  value= "<?= $this->oView->aUsuario['senha'] ?>" class="form-control"  name='senha' placeholder="Senha">
              </div>
              
              <div class="mt-4 mb-4">
                <small class="form-text">
                  Ao inscrever-se, você concorda com os Termos de Serviço e com as Políticas de Privacidade, incluindo o Uso de Cookies. Outras pessoas poderão encontrar você pelo e-mail ou número de telefone fornecido · Opções de Privacidade
                </small>
              </div>
              <button type="submit" class="btn btn-success btn-block">Inscrever-se</button>
              <a href="/" class="btn btn-info btn-block">Voltar ao iniciar</a>

              <?php   if($this->oView->lErro) {   ?>
                       <small class="form-text text-danger">
                          *Erro ao tentar realizar cadastro,
                          Verifique se os campos fotam preenchidos corretamente.
                        </small>
             <?php } ?>
            
            </form>

          </div>
        </div>

      </div>
    </div>
  </div>
</div>