 <section id="form">
          
            <br>
            <br>
            <div class="form-row">
             <div class="form-group col-md-6">
              <br>
              <div style="text-align: center">
            
              <?php
                  /* Recebemos os parâmetro no começo do script  */
                  $name = ( isset($_POST['name']) ) ? $_POST['name'] : null;
                  $email = ( isset($_POST['mail']) ) ? $_POST['mail'] : null;
                  /* A partir deste ponto podemos utilizar as variáveis  */
                  $texto = "Obrigado,";
              ?>
              <h3>
               <?php echo $texto ?></h3><h4 style="font-weight: bold;"><?php echo $name.'.'; ?></h4>
               <h4>Sua mensagem foi enviada com êxito!</h4><img src="/public/img/svg/ok.svg" class="img-fluid img-responsive" style="width:150px; height: 160px;" />
                  <h4 style="text-align: center">Responderemos o mais breve possível para o e-mail informado abaixo:</h4><h5 h4 style="font-weight: bold;"><?php echo $email;?></h5>
              </div>
            </div>
            <div class="form-group col-md-6" 
            style="
            display: flex;
             
            width:550px; 
            height: 450px; 
            margin-top: 1px;
            ">
              <img src=" /public/img/atendente.png"></img>
            </div>
   </section>