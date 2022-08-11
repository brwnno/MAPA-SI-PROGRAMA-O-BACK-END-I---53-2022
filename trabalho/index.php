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
			<li><a href="#" title="Home" alt="Home">Home</a></li>
				<li><a href="#" title="Cardapio" alt="Cardápio">Cardápio</a></li>
				<li><a href="#" title="Quemsomos" alt="Quem somos">Quem somos</a></li>
			</ul>
		</nav>
	</header>
	
	<main>
	<div class="main_cta">
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
				foreach($marmitas as $key => $value){
			?>
			<article class="item">
				<a href="pagina2.php?id=<?=$value['id'];?>"><img class="img" src=<?=$value['imagem'];?>></a>
				<h2><?=$value['nome'];?></h2>
				<p><?=substr($value['ingredientes'], 0, 150);?>...</p>
				<a href="pagina2.php?id=<?=$value['id'];?>"><button class="btn">Veja mais</button></a>
			</article>
			<?php
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