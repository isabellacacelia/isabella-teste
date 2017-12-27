<?php get_header(); ?>
<main>
	<section class="banner">
		<div class="container">
			<h1>Como ganhar dinheiro diante
			das variações do Dólar?
			Um guia estratégico para tempos
			de incertezas.</h1>
			<p>Preencha seu email abaixo que <br>
			te enviaremos o relatório gratuito</p>

			<div class="envia">
				<input required placeholder="seunome@seuprovedor.com.br" type="mail">
				<a href="mailto:teste@teste.com.br" class="btn">Receber</a>
			</div>

			<div class="scroll-down hide-mobile">
				<a href="#conheca-empiricus"><i class="fa fa-2x fa-angle-down" aria-hidden="true"></i></a>
			</div>
		</div>
	</section>
	<section class="cinza">
		<div class="container">
			<h2>Por que baixar esse relatório?</h2>
			<p>A Empiricus é totalmente independente e tem o mais alto grau de compromisso com o leitor. </p>
			<p>Em 2013, recomendamos aos nossos leitores que comprassem Dólar, na época cotado a
			R$1,90. Em 2014, já falávamos que ele chegaria a R$4,00 quando ninguém acreditava ser possível.</p>
			<p>Saiba agora como você deve se posicionar em relação à moeda norte-americana nos próximos meses.</p>
		</div>
	</section>
	<div class="container">
		<section>
			<?php
				if ( have_posts() ) {
					while ( have_posts() ) {
						the_post();
			?>
			<h2><?php the_title(); ?></h2>
			<div><?php the_content(); ?></div>
			<?php
					}
				}
			?>
			<div class="txtcenter">
				<a href="#" class="btn"><i class="fa-icon fa fa-2x fa-angle-up" aria-hidden="true"></i> Voltar ao topo</a>
			</div>
		</section>
	</div>
	<section id="conheca-empiricus" class="rosa">
		<div class="container">
			<div class="col-6">
				<h2>Conheça a empiricus</h2>
				<p>Fundada em 2009, a <strong>Empiricus Research</strong> é a primeira consultoria independente de investimentos do <strong>Brasil</strong> que oferece conteúdo gratuito e educativo para todos os tipos de investidores.</p>
				<div class="txtleft">
					<a href="http://bit.ly/2BU7OiD" target="_blank" class="btn">Saiba mais</a>
				</div>
			</div>
			<div class="col-6">
				<img class="hide-mobile" src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="Empiricus">
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>