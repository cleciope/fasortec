<body id="top" class="grey lighten-4">
  <!--Main Navigation-->
  <header>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar" style="background-color: #707B7C ;">
      <div class="container">
        <!-- Brand -->
        <a class="navbar-brand" href="/">
          <img class="logo" src="/res/site/img/logo.png" alt="Intranet">
          <strong class="white-text">Fasortecnologia</strong>
        </a>
        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="nav-link" href="/">Fasortec</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/">Fasortec</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/">Fasortec</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/">Fasortec</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/">Fasortec</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link js-scroll-trigger" href="/#contatos"> Contatos</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Ferramentas
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background: #707B7C ;">
                <a class="dropdown-item" href="/" target="_blank">Fasortec</a>
                <a class="dropdown-item" href="/" target="_blank">Fasortec</a>
                <a class="dropdown-item" href="/" target="_blank">Fasortec</a>
                <a class="dropdown-item" href="/" target="_blank">Fasortec</a>
                <a class="dropdown-item" href="/" target="_blank">Fasortec</a>
                <a class="dropdown-item" href="/">Fasortec</a>
              </div>
            </li>
          </ul>
          <!-- Right -->
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
              <a href="" class="nav-link border border-light rounded waves-effect" target="_blank">
                <i class="fa fa-medkit mr-2"></i>Fasortec
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!--Main Navigation-->
  <main class="mt-5 pt-5 mb-5 pb-3">
    <div class="container ">
      <div class="row">
        <div class="col-md-12">
          <div class="card wow bounceInUp">
            <div class="card-header" style="background-color: #707B7C ;">
              <h3 style="text-align: center; color: aliceblue;">Formulário de contato</h3>
            </div>
            <div class="card-body register-card-body">
              <p class="login-box-msg"></p>
              As informações contida nesse formulário serão enviados para um dos nossos colaboradores.
              <br>
              <p class="login-box-msg" style="color: #b90808;">
                <b>Em breve entraremos em contato!</b>
              </p>
              <hr>
              <form role="form" action="/" method="post">
                <div class="form-group">
                  <label for="nome"><b>Nome</b> </label>
                  <input type="text" class="form-control" placeholder="Digite seu nome completo" id="nome" name="nome_pac">
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="registro"><b>E-mail para contato:</b></label>
                    <input type="email" class="form-control" id="registro" name="registro" placeholder="Digite o e-mail">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="st_cado"><b>Motivo do contato: </b></label>
                    <select required type="text" id="st_cado" name="st_cado" class="form-control">
                      <option disabled selected>Escolha o motivo do contato
                      <option value="informação">Contato</option>
                      <option value="informação">Informação</option>
                      <option value="informação">Sugestão</option>
                      <option value="informação">Elogio</option>
                      <option value="informação">Reclamação</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="desc"><b>Descrição do contato:</b> </label>
                  <textarea id="desc" name="descricao" class="form-control" placeholder="Descrição" rows="5" required></textarea>
                </div>
            </div>
            <!-- /.col -->
            <div class="form-control">
              <button type="submit" class="btn btn-primary btn-block">Enviar</button>
            </div>
            <!-- /.col -->
            </form>
            <!-- /.form-box -->
          </div><!-- /.card -->
        </div>
      </div>
    </div>
    </div>
    </div>
    <!-- /.register-box -->
  </main>