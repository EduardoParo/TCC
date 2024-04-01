
    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
    </style>

<header>
  <!--Nav Menu -->
  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <!--<img src="logo.png" width="30" height="30" class="  d-inline-block align-top" alt="">-->
      DevIdeias
    </a>
  </nav>
</header>

<section>
  <!--Container-->
  <div class="container">
    <!--Row-->
    <div class="row">

      <div class="card-login">
        <div class="card">
          <div class="card-header">
            Login
          </div>

          <div class="card-body">
            <!--Formulario-->
            <form action="/autenticar" method="post">
              
              <div class="form-group">
                <input name="email" type="email" class="form-control" placeholder="E-mail">
              </div>

              <div class="form-group">
                <input name="senha" type="password" class="form-control" placeholder="Senha">
              </div>

              <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>

              <?php
                    //ISSET Verifica se o parametro ja sofreu alguma alteração
                    if(isset($_GET['login']) && $_GET['login'] == 'erro'){
                     // print_r($_GET);
                      echo "<div class = 'text-danger pb-3'>";
                      echo "Usuário ou Senha Inválidos";
                      echo "</div>";
                    }                          
                  ?>
            </form>

            <a href="/cadastrar"> Cadastrar</a>
          
          </div>
        </div>
      </div>
</section>