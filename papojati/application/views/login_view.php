<article class = "row justify-content-center mt-5">
	<div class = "col-4">
		<div class="text-center">
			<img class ="mx-auto d-block" src="<?=base_url()?>/res/logo.jpg" width = 400px height = 200px alt="logo do site">
			<h1>PAPO JATI</h1>
		</div>
		<form action="<?=site_url("login/logar")?>" method = "POST">
			<div class="form-group mt-4">
				<input type="text" class="form-control" name = "login" placeholder="Nome de usuário">
			</div>
			<button href = "<?=site_url("chat")?>" type="submit" class="btn btn-primary w-100">Entrar</button>
		</form>
		<?php
			if(!empty($erro)){
				echo 	'<div class="alert alert-danger mt-3" role="alert">
							Tu não logou
						</div>';
			}
		?>
	</div>
</article>