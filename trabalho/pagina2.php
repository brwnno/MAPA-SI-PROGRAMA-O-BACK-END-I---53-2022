<?php
	include("dados.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

	<header>
		<nav>
		<img id="log" src="img/chef.png">
			<ul>
				
			<li><a href="index" title="Home" alt="Home">Home</a></li>
				<li><a href="#" title="Cardapio" alt="Cardápio">Cardápio</a></li>
				<li><a href="#" title="Quemsomos" alt="Quem somos">Quem somos</a></li>
			</ul>
		</nav>
	</header>
	
	<main>
	<div >
            <article class="banner">
                <div class="banner_spacer">
                    <header>
                        <h1>NOSSAS MARMITAS</h1>
                        <p>Marmita com cara de prato do dia, mas com um toque diferenciado.</p>
                    </header>
                    
                    <p><a href="#" class="btn">Saiba Mais</a></p>
                </div>
            </article>
        </div>
		<section class="section">
		<?php
                $id = $_GET['id'];
				foreach($marmitas as $key => $value){
                    if($value['id'] == $id){
			?>
			<article class="items">
			<img class="imgs"  src=<?=$value['imagem'];?>>
			<div class="text">
				<h2><?=$value['nome'];?></h2><br>
				<div>
				<h3>Ingredientes:</h3>
				<p><?=$value['ingredientes'];?></p>
				</div>
				<h4>Tamanho: <?=$value['tamanho'];?></h4>
				<h4>R$: <?=$value['preco'];?></h4>
				</div>
			</article>
			<?php
                    }
				}
			?>
		</section>
	</main>

	<footer id="footer">
     <p>
        Bruno de Miranda Coutinho - RA: 21110626-5 . Todos os direitos
        reservados.
     </p>
	</footer>
</body>
</html>