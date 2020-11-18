
  


    <div class="container">
	<div class='container'> <p class="text-secondary"><center><?= $this->session->flashdata("danger") ?></center></p></div>
    
      <form class="form-signin" action="<?php  echo site_url('Login/verify');  ?>" method="post" autocomplete="off">
      
        <h1 class="form-signin-heading text-center" style="font-family: Times New Roman, Georgia, Serif; margin-top: 10px; padding-bottom: 15px; line-height: 75%;">
			Controle de Viaturas CEPI<br>
 			<small style="font-size: 1.8rem;">SISTEMA DE MAPAS DE VIATURAS </small>
 	 	</h1>
         
 		<div class="row">
 
	        <div class="col-md-6" style="margin-bottom: 7px;">
	        
		        <label for="campoLogin" class="sr-only">Matrícula</label>
		        <input type="text" name="login" id="campoLogin" class="form-control input-lg" placeholder="Matrícula" value="" autofocus>
		        
		        <label for="campoSenha" class="sr-only">Senha</label>
		        <input type="password" name="pswd" id="campoSenha" class="form-control input-lg" placeholder="Senha" required style="margin-top: 7px">
		        
	        </div>
	        
	        <div class="col-md-6">
	        
		        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar <i class="fa fa-sign-in fa-lg"></i></button>
		        
		        <a href="http://sentinela.cb.ce.gov.br/v1.6/sentinela_retrieve_pswd/sentinela_retrieve_pswd.php" class="btn btn-lg btn-default btn-block recuperar_senha btn-flat"><i class="fa fa-key"></i> Recuperar senha</a>
	        
	        </div>
        
    </div>
        
        <div class="row" >

 			     <div class="col-xs-12 text-center">
 				      <h3><span class="label label-danger" style="background-color: #ff6600;"><i class="fa fa-key"></i> Use a mesma senha do <strong>Sentinela</strong></span></h3>
 			      </div>
        </div>
        
        <!-- Mensagens e alertas -->
		<div class="row" style="margin-top: 7px">
	   		<div class="col-md-12">
			    		    	</div>	
	   	</div>
		<!-- Fim das mensagens e alertas -->
        
      </form>

    </div> <!-- /container -->
    
    
    <script>
	    $(document).ready(function(){
		    
	    	//$('input[id="campoLogin"]').mask("000.000.000-00", {clearIfNotMatch: true});
	
	    	$("#campoLogin").focus();

	    	$("form").submit(function( event ) {
	    		$("#modal_loading").modal('show');
	    	});
	    		
	    });
    </script>
	
	</div>
	</div>

   