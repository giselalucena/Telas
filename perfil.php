<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
   <html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
       <head>
       		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<title>Modelo Transitional UTF</title>	
			    <link rel="stylesheet" type="text/css" href="estilos_photoshoot.css"> 
				<style type="text/css">
				  @import url(css/estilos_photoshoot.css);
				</style>
       </head>
       <body>
	
    <!-- Principal -->
	<div id="conteudo"> <div id="barra_titulo"></div>
		<!-- Caixa da esquerda -->
		<div id="cad_esquerda">
			 <a href="inicio.php"><img src="images/Logo_cadastro.png" alt="" /></a>
		</div>
		<div id="cad_direita">
        <img src="images/photos.png" alt="" />
        </div>
		
		
        
		<div class="clear"></div>
        <div id="barra-titulo"></div>

     
                <div id="cadastro">
                <div class="titulo_c">Configurações de Perfil</div>
       
			    <div id="cdireita">
                  <div class="engloba_form">
                    <form method="post" action="">
                        Nome<br> 
                        <input type="text" autocomplete="off" name="nome" class="campo_1"  value="Nome" onfocus="if(this.value='Nome') this.value='';" onBlur="if(this.value=='') this.value='Nome';">
                        <input type="text" autocomplete="off" name="sobrenome" class="campo_1" value="Sobrenome" onfocus="if(this.value='Sobrenome') this.value='';" onBlur="if(this.value=='') this.value='Sobrenome';">
                        <br>Login<br>
                        <input type="text" autocomplete="off" name="login" class="campo_1">
                        <br>Crie uma senha<br>
                        <input type="password" autocomplete="off" name="senha" class="campo_2">
                        <br>Confirme sua senha<br>
                        <input type="password" autocomplete="off" name="confirmacao" class="campo_2">
                        <input type="button" name="entrar" id="botao_cadastro" value="Continuar">
                    </form>
                  </div>  
				  </div>
				  
				  <div id="login_direita">
                  <div class="engloba_form">
                    <div id="foto_perfil"></div>
					<form method="post" action="">
					<input type="file" name="img_perfil">
					</form>
                  </div>  
				  </div>
				  <div class="clear"></div>
                </div>
          
          
          <div class="clear"></div>
	</div>
    
	
	<footer>
		<ul>
			<li><a href="#">Sobre nós</a></li>
			<li><a href="#">Suporte</a></li>
			<li><a href="#">Privacidade</a></li>
			<li><a href="#">Termos</a></li>
			<li><a href="#">Desenvolvedores</a></li>
			<li>&copy; 2013 Photoshoot</li>
		</ul>
	</footer>
	
</body>
</html>