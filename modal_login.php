  <style type="text/css">
    
  .marginbottom{

    margin-bottom: 10px;

  }


  </style>


 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
         <form name="login" action="index.php" method="post">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <div class="modal-title img-logo2" style="margin-left: 200px;"></div>
        </div>
        <div class="modal-body">
           
            <div class="row form-inline" style="margin-bottom: 15px;">
              <div class="col-md-8 ">
                 <span class="glyphicon glyphicon-user"></span>
                <input style="width: 300px;" class="form-control" type="text" name="idUsuarioLogin" id="idUsuarioLogin" value="" placeholder="Digite seu Usuário">
              </div>
              
            </div>

            <div class="row form-inline ">
              <div class="col-md-8 ">
                <span class="glyphicon glyphicon-lock fontColor"></span>
                <input style="width: 200px;" class="form-control" type="password" name="idUsuarioLogin" id="idUsuarioLogin" value="" placeholder="Digite sua Senha">
              </div>
              
            </div>


          
        </div>
        <div class="modal-footer">
           <button type="submit" class="btn btn-success">Entrar</button>
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
           
        </div>
          </form>
      </div>
      
    </div>
  </div>


  <!-- Modal cadastro -->
  <div class="modal fade" id="myModalCadastro" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
         <form name="cadastro" id="cadastro" action="exec/cadastraUsuario.php" method="post">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <div class="modal-title img-logo2" style="margin-left: 200px;"></div>
        </div>
        <div class="modal-body">

             <div class="row form-inline marginbottom" >
              <div class="col-md-3">
                <label>Nome </label>
              </div>
              <div class="col-md-8 ">
                
                <input style="width: 300px;" class="form-control" type="text" name="idNomeUsuario" id="idNomeUsuario" value="" placeholder="Digite seu Nome">
              </div>
              
            </div>
             <div class="row form-inline marginbottom">
               <div class="col-md-3">
                <label>Sobrenome</label>
              </div>
              <div class="col-md-8 ">
               
                <input style="width: 300px;" class="form-control" type="text" name="idSobrenomeUsuario" id="idSobrenomeUsuario" value="" placeholder="Digite seu Sobrenome">
              </div>
              
            </div>
           
            <div class="row form-inline marginbottom" >
              <div class="col-md-3">
                <label>E-mail</label>
              </div>
              <div class="col-md-8 ">
                
                <input style="width: 300px;" class="form-control" type="text" name="idUsuarioemail" id="idUsuarioemail" value="" placeholder="Digite seu E-mail">
              </div>
              
            </div>
            <div class="row form-inline marginbottom" >

              <div class="col-md-3">
                <label>Confirme <BR>seu E-mail</label>
              </div>

              <div class="col-md-8 ">
                
                <input style="width: 300px;" class="form-control" type="text" name="idUsuarioemailConfirm" id="idUsuarioemailConfirm" value="" placeholder="Confirme seu E-mail">
              </div>
              
            </div>

            <div class="row form-inline marginbottom">
              <div class="col-md-3">
                <label>Senha</label>
              </div>
              <div class="col-md-8 ">
                
                <input style="width: 200px;" class="form-control" type="password" name="idNewSenha" id="idNewSenha" value="" placeholder="Digite sua Senha">
              </div>
              
            </div>

            <div class="row form-inline marginbottom">
              <div class="col-md-3">
                <label>Confirme <br>sua Senha</label>
              </div>
                <div class="col-md-8 ">
              
                <input style="width: 200px;" class="form-control" type="password" name="idNewSenhaConfirm" id="idNewSenhaConfirm" value="" placeholder="Confirme sua Senha">
             </div>
              
            </div>


          
        </div>
        <div class="modal-footer">
           <button type="button" class="btn btn-success" onclick='fnCadastro()'>Cadastrar</button>
           <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
           
        </div>
          </form>
      </div>
      
    </div>
  </div>
  <script type="text/javascript">

    function fnCadastro() {
  
        email1 = $('#idUsuarioemail').val();
        email2 = $('#idUsuarioemailConfirm').val();
       
        if (email1 ==''){
          alert("informe um e-mail valido!!");
          return false;
        };
        if($('#idNomeUsuario').val() == ''){
          alert("Informe seu Nome!!!");
          return false;
        };

        if($('#idSobrenomeUsuario').val() == ''){
          alert("Informe seu Sobrenome !!!");
          return false;
        };

        if ($('#idNewSenha').val()==''){
            alert("Informe uma senha !!!");
            return false;
        };
        if (email1 !=email2 ) {
          alert("Confirmação de e-mail não confere!!!");
          return false;
        };

        if ($('#idNewSenha').val() != $('#idNewSenhaConfirm').val()){
          alert("Confirmação de Senha Não Confere!!!");
          return false;
        }

        $('#cadastro').submit();
}



    // A $( document ).ready() block.
    $( document ).ready(function() {
      console.log( "ready!" );

    
    });


  </script>