
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Controle Operacional Diário">
    <meta name="author" content="">
    <meta name="supported-color-schemes" content="light only">
    <link rel="icon" href="https://sentinela.cb.ce.gov.br/operacional/images/favicon.ico">

    <title>Controle Viaturas CEPI</title>

    <!-- Bootstrap core CSS -->
    <link href="https://sentinela.cb.ce.gov.br/operacional/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
     <!-- Bootstrap core CSS -->
    <link href="https://sentinela.cb.ce.gov.br/operacional/assets/bootstrap/css/bootstrap-theme.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="https://sentinela.cb.ce.gov.br/operacional/assets/bootstrap/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="https://sentinela.cb.ce.gov.br/operacional/assets/bootstrap/css/sticky-footer-navbar.css" rel="stylesheet">

      <!-- DATATABLES -->
    	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

	

    
    <!-- Custom styles for this template -->
    <link href="https://sentinela.cb.ce.gov.br/operacional/assets/bootstrap/css/signin.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link href="https://sentinela.cb.ce.gov.br/operacional/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="https://sentinela.cb.ce.gov.br/operacional/assets/bootstrap/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- JQuery -->
    <script src="https://sentinela.cb.ce.gov.br/operacional/assets/jquery/jquery-3.2.1.min.js"></script>
    <script src="https://sentinela.cb.ce.gov.br/operacional/assets/jquery/jquery.mask.min.js"></script>
    
    <!-- Bootstrap core JavaScript -->
    <script src="https://sentinela.cb.ce.gov.br/operacional/assets/bootstrap/js/bootstrap.min.js"></script>
    
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="https://sentinela.cb.ce.gov.br/operacional/assets/bootstrap/js/ie10-viewport-bug-workaround.js"></script>
    
    <style type="text/css">
         .topo, #topo{
           background-image: url('https://sentinela.cb.ce.gov.br/operacional/images/bg_top.jpg') !important;
           background-color: #009C49 !important;
        }
        .zoom {
	overflow: hidden;
}

.zoom img {
	max-width: 100%;
	-moz-transition: all 0.3s;
	-webkit-transition: all 0.3s;
	transition: all 0.3s;
  
}

.zoom:hover img {
	-moz-transform: scale(1.1);
	-webkit-transform: scale(1.1);
	transform: scale(1.1);
}

.icons {
    max-width:200px;
    max-height:100px;
    width: auto;
    height: auto;
    margin-left:50px;
    margin-top:10px;
   
     
}
.icon-title{
  margin-left:30px;
  font-size:20px;
  margin-top:8px;
   
}
 
 
    </style>

    
  </head>

  



  <body> 
  <div class="modal" id="modal_loading" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         <h3 class="modal-title" id="myModalLabel"><span class="label label-primary">Aguarde</span></h3>
      </div>
      <div class="modal-body">
          <div class="text-center" style="padding-top: 50px; padding-bottom: 50px;">
            <h4>Processando...</h4>
        <img src="https://sentinela.cb.ce.gov.br/operacional/images/preloader_3.gif">
      </div>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="modalSobre" tabindex="-1" role="dialog" aria-labelledby="modalSobre" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button>
        <h4 class="modal-title">
        	Controle de Viaturas CEPI       </h4>
      </div>
      <div class="modal-body">
			<p><strong>Objetivo:</strong></p>
			<p class="text-justify">
			
				Proporcionar ao Comando de Bombeiros da Capital uma ferramenta de fácil utilização, que permita o cadastro de informações padronizadas acerca dos serviços operacionais e que possibilite consultas ágeis, proporcionando aos gestores da instituição uma melhor visão para planejamento, adequação e tomada de decisões.
			
			</p>
      </div>
      <div class="modal-footer">
      
		<div class="col-md-6 text-left" style="color:#888">
			
		</div>
		      
		<div class="col-md-6 text-right">
			<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>      
		</div>
      </div>
    </div>
  </div>
</div>

	<div class="header">
	
	    <!--  Topo -->
	    <div class="row hidden-xs" id="topo">
	
	        <div id="topo_center">
	
	            <div class="col-lg-2 visible-lg text-center">
					<?php 
					date_default_timezone_set('America/Fortaleza');
					echo date('d/m/y'); ?>    </div>
	
	            <div class="col-sm-12 col-md-10 col-lg-10">
	
	            </div>
	
	        </div>
	
	        <div class="visible-sm visible-md visible-lg text-right" style="position: absolute; top: 0px; right: 0px;">
	            <div id="topo_right" class="text-right"></div>
	        </div>
	
	    </div>
	    <!-- Fim do Topo -->
	    
	    
	     <!--  Topo mobile-->
	    <div class="row visible-xs-block topo" id="topo">
	       <img class="img-responsive" src="https://sentinela.cb.ce.gov.br/operacional/images/logomar cbmce texto governo do estado 2019.redimensionado.png" style="max-height: 73px; z-index: 1; position: absolute; left: 23px; top: 27px;">
	    </div>
	    <!-- Fim do Topo mobile -->
	    
	
	    <!--  Logo -->
	    <div class="row visible-md visible-lg" style="background-color: #FFF;">
	
	        <div class="col-md-6 col-lg-6">
	            <img src="https://sentinela.cb.ce.gov.br/operacional/images/cabecalho_aplicacao.png" style="max-height: 76px;">
	        </div>
	
	        <div class="col-sm-12 col-md-6 col-lg-6 text-right" id="logo_right" style="padding-right:25px;">
	
	        </div>
	
	    </div>
	    <!-- Fim do Logo -->
	
	</div>
       
  
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
           
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        
        <!-- 
          <a class="navbar-brand" href="https://sentinela.cb.ce.gov.br/operacional/">SGP-AESP</a>
           -->
           
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          
          <?php 
          if(isset($_SESSION['userLogado'])){
              echo ' 
              
              <ul class="nav navbar-nav navbar-right">
                <li>'.anchor('login/logout', '<i class="fa fa-sign-out" aria-hidden="true"></i> SAIR</a></li>');';
              </ul>';
          }   else{
            echo '
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#modalSobre" data-toggle="modal"><i class="fa fa-question-circle fa-lg" aria-hidden="true"></i> Sobre</a></li>
            </ul>';
          }
          ?>
         
        </div><!--/.nav-collapse -->
        
      </div>
    </nav>
    
    