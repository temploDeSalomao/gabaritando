<?php
	get_header();
?>

<!--  First i have created  everything dynamic, so when im go to deploy have growed a lot of new s**t's. Later i need to deep clean these part -->
<main>
	<div class="container">
		<section class="first-section">
			<header>
				<h1 class="title blue">Gabaritando</h1>
				<span class="shadow-header"></span>
				<div class="arrowLeft"></div>
				<h2 class="sub-title gray answer">Porque estudar com a </h2>
			</header>
			<div class="col-xs-12 col-md-12 hidden-sm front-panel">
				<?php
								$args =array(
								'posts_per_page'   => 8,
								'orderby'          => 'date',
								'order'            => 'ASC',
								'post_type'        => 'whyGabaritando',
								'post_status'      => 'publish'
								);
								$posts = get_posts($args);
								foreach ($posts as $post ) {
				?>
				<article class="col-xs-12 col-md-3">
					<div class="container-imagem">
						<img src="<?=get_the_post_thumbnail_url()?>" alt="">
					</div>
					<h3>
					<?=the_title()?><br>
					<b><?=get_field('subtitulo_negrito')?></b>
					</h3>
					<p><?=$post->post_content?></p>
				</article>
				<?php
				}
				?>
			</div>
			<div class="front-panel mobile hidden-md col-sm-12 pagination-mobile swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="col-sm-6">
							<article>
								<div class="container-imagem">
									<img src="<?=get_bloginfo('url')?>/wp-content/uploads/2019/04/teacher1.jpg" alt="">
								</div>
								<h3>
								Curso<br>
								<b>100% Online</b>
								</h3>
								<p>Estude sem sair de casa: assista ao nosso conteúdo pelo celular ou computador de onde você estiver.</p>
							</article>
						</div>
						<div class="col-sm-6">
							<article>
								<div class="container-imagem">
									<img src="<?=get_bloginfo('url')?>/wp-content/uploads/2019/04/Vector-Smart-Object6.jpg" alt="">
								</div>
								<h3>
								Conteúdo<br>
								<b>Certeiro</b>
								</h3>
								<p>Conte com uma equipe profissional com ampla experiência em cursinhos preparatórios para a prova do ENEM.</p>
							</article>
						</div>
						<div class="col-sm-6">
							<article>
								<div class="container-imagem">
									<img src="<?=get_bloginfo('url')?>/wp-content/uploads/2019/04/Vector-Smart-Object.jpg" alt="">
								</div>
								<h3>
								Aulas<br>
								<b>Gravadas</b>
								</h3>
								<p>Assista às aulas quando e quantas vezes quiser: tenha acesso completo a nossa galeria de videoaulas.</p>
							</article>
						</div>
						<div class="col-sm-6">
							<article>
								<div class="container-imagem">
									<img src="<?=get_bloginfo('url')?>/wp-content/uploads/2019/04/Vector-Smart-Object2.jpg" alt="">
								</div>
								<h3>
								Assista<br>
								<b>Offline</b>
								</h3>
								<p>Carregue os vídeos e assista às aulas mesmo sem estar conectado à internet.</p>
							</article>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="col-sm-6">
							<article>
								<div class="container-imagem">
									<img src="<?=get_bloginfo('url')?>/wp-content/uploads/2019/04/Vector-Smart-Object6-1.jpg" alt="">
								</div>
								<h3>
								Pesquisa de<br>
								<b>Conteúdo</b>
								</h3>
								<p>Encontre facilmente qualquer aula com nossa ferramenta de busca.</p>
							</article>
						</div>
						<div class="col-sm-6">
							<article>
								<div class="container-imagem">
									<img src="<?=get_bloginfo('url')?>/wp-content/uploads/2019/04/Vector-Smart-Object3.jpg" alt="">
								</div>
								<h3>
								Acesso<br>
								<b>rápido</b>
								</h3>
								<p>Acesse nosso conteúdo de forma rápida com poucos cliques.</p>
							</article>
						</div>
						<div class="col-sm-6">
							<article>
								<div class="container-imagem">
									<img src="<?=get_bloginfo('url')?>/wp-content/uploads/2019/04/Vector-Smart-Object7.jpg" alt="">
								</div>
								<h3>
								Material de<br>
								<b>Apoio</b>
								</h3>
								<p>Tenha um material exclusivo desenvolvido por nossa equipe para auxiliar nos estudos.</p>
							</article>
						</div>
						<div class="col-sm-6">
							<article>
								<div class="container-imagem">
									<img src="<?=get_bloginfo('url')?>/wp-content/uploads/2019/04/Vector-Smart-Object10.jpg" alt="">
								</div>
								<h3>
								Assistência<br>
								<b>online</b>
								</h3>
								<p> Disponha de nosso chat on-line para solucionar dúvidas.</p>
							</article>
						</div>
					</div>
				</div>
				
			</div>
			<div class="col-sm-12 hidden-md controlle-mobile swiper-pagination">
			</div>
		</div>
	</div>
</section>
</div>
<div class="reviews">
<div class="container">
	<div class="title-aboutUs">
		<p class="sub-title gray">O que dizem</p>
		<div class="inline">
			<p class="title blue"> Sobre Nós!?</p>
		</div>
	</div>
</div>
<div class="content-reviews hidden-sm">
	<!-- o qu dizem sobre nos -->
	<div class="container container-reviews">
		<?php
					$args =array(
					'posts_per_page'   => 3,
					'orderby'          => 'date',
					'order'            => 'DESC',
					'post_type'        => 'avaliacao',
					'post_status'      => 'publish'
					);
					$posts = get_posts($args);
					foreach ($posts as $post ) {
		?>
		<div class="col-xs-12 col-md-4 out-review">
			<div class="data-review ballon"><?=$post->post_content?></div>
			<div class="author">
				<img src="<?=get_the_post_thumbnail_url()?>" alt="avatar">
				<div class="about-author">
					<p class="name"><?=the_title()?></p>
					<p class="ocuppation"><?=get_field('cargo')?></p>
				</div>
			</div>
		</div>
		<?php
		}
		?>
		<a href="#" class="btn md green uppercase rounded center">Experimente nossas aulas!</a>
	</div>
</div>
<div class="content-reviews mobile hidden-md">
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<div class="container">
					<div class="col-xs-12 col-md-4 out-review">
						<div class="data-review ballon">Minha experiência com o curso gabaritando Enem está sendo incrível, ainda mais pelo fato de ser um curso online que posso realizar na minha própria casa. A didática de estudos superou minhas expectativas por ser bem dinâmica e dar todo suporte necessário ao aluno. Estou muito feliz com a oportunidade e sentido que estarei preparada para os vestibulares</div>
						<div class="author">
							<img src="http://eugabaritandoenem.com.br/new-land/wp-content/uploads/2019/04/AVATA.jpg" alt="avatar">
							<div class="about-author">
								<p class="name">Fernanda Lobo de Cerqueira</p>
								<p class="ocuppation">Ex aluna Gabaritando</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="swiper-slide">
				<div class="container">
					<div class="col-xs-12 col-md-4 out-review">
						<div class="data-review ballon">Professores incríveis, aulas didáticas e de fácil acesso!</div>
						<div class="author">
							<img src="http://127.0.0.1/wordpress/gabaritando/wp-content/uploads/2019/04/AVATA_2.jpg" alt="avatar">
							<div class="about-author">
								<p class="name"><?=the_title()?></p>
								<p class="ocuppation">Ex aluna Gabaritando</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="swiper-slide">
				<div class="container">
					<div class="col-xs-12 col-md-4 out-review">
						<div class="data-review ballon">O curso do Gabaritando conta com uma equipe de professores muito boa; os conteúdos são bem organizados e planejados. As aulas são dinâmicas, objetivas e possuem resolução de exercícios, o que considero essencial para entender como o conteúdo é cobrado nos vestibulares.</div>
						<div class="author">
							<img src="http://127.0.0.1/wordpress/gabaritando/wp-content/uploads/2019/04/AVATA.jpg" alt="avatar">
							<div class="about-author">
								<p class="name">Louisi Manica</p>
								<p class="ocuppation">Ex aluna Gabaritando</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="swiper-pagination-review"></div>
	</div>
</div>
</div>
<div class="ourPlans ">
<div class="container">
	<div class="main-ticket">
		<div class="title-img">
			<img class="hidden-sm" src="<?=get_template_directory_uri()?>/assets/images/titulos/planos&preços.png" alt="Nossos Planos e Preços" title="Nossos Planos e Preços">
			<span class="title hidden-md">
				Confira Nossos
			</span>
			<span class="sub-title hidden-md">Preços e Planos </span>
		</div>
		<div class="container-ticket hidden-sm">
			<div class="col-xs-12 col-md-3 outer-ticket">
				<div class=" ticket">
					<p class="ticket-title blue bold">Enem Completo</p>
					<span class="about-ticket"><b>Mensal</b></span>
					<ul>
						<li><span>Aulas ao vivo;</span></li>
						<li><span>32 Videoaulas / semana;</span></li>
						<li><span>Plano de estudo;</span></li>
						<li><span>Material Didático Semanal;</span></li>
						<li><span>3 monitorias por semana;</span></li>
						<li><span>1 Redação corrigida e comentada / mês;</span></li>
						<li><span>Biblioteca de videoaulas;</span></li>
						<li><span>Reforço redação;</span></li>
						<li><span>4 simulados.</span></li>
					</ul>
					<div class="price">
						<span>por apenas:</span>
						<p class="last-price blue">R$ 48,00</p>
					</div>
				</div>
				<a href="#" class="btn rounded green uppercase center">compre agora</a>
			</div>
			<div class="col-xs-12 col-md-3 outer-ticket">
				<div class=" ticket">
					<p class="ticket-title blue bold">Enem Completo</p>
					<span class="about-ticket"><b>Mensal</b> - Plus</span>
					<ul>
						<li><span>Aulas ao vivo;</span></li>
						<li><span>32 Videoaulas / semana;</span></li>
						<li><span>Plano de estudo;</span></li>
						<li><span>Material Didático Semanal;</span></li>
						<li><span>3 monitorias por semana;</span></li>
						<li><span>1 Redação corrigida e comentada / mês;</span></li>
						<li><span>Biblioteca de videoaulas;</span></li>
						<li><span>Reforço redação;</span></li>
						<li><span>4 simulados;</span></li>
						<li><span>Reforço de exercício;</span></li>
						<li><span>Aprofundamento Exatas e Atualidades;</span></li>
						<li><span class="bold gray">Novidade: Exercícios exclusivos;</span></li>
					</ul>
					<div class="price">
						<span>por apenas:</span>
						<p class="last-price blue">R$ 64,00</p>
					</div>
				</div>
				<a href="#" class="btn rounded green uppercase center">compre agora</a>
			</div>
			<div class="col-xs-12 col-md-3 outer-ticket">
				<div class=" ticket">
					<p class="ticket-title blue bold">Enem Completo</p>
					<span class="about-ticket"><b>Anual</b></span>
					<ul>
						<li><span>Aulas ao vivo;</span></li>
						<li><span>32 Videoaulas / semana;</span></li>
						<li><span>Plano de estudo;</span></li>
						<li><span>Material Didático Semanal;</span></li>
						<li><span>3 monitorias por semana;</span></li>
						<li><span>1 Redação corrigida e comentada / mês;</span></li>
						<li><span>Biblioteca de videoaulas;</span></li>
						<li><span>Reforço redação;</span></li>
						<li><span>4 simulados;</span></li>
					</ul>
					<div class="price">
						<span>por apenas:</span>
						<div class="inline">
							<b>12x&nbsp;</b>
							de&nbsp;
							<p class="last-price blue">R$ 28,16</p>
						</div>
						<span>ou <b>R$ 338,00</b> a vista</span>
					</div>
				</div>
				<a href="#" class="btn rounded green uppercase center">compre agora</a>
			</div>
			<div class="col-xs-12 col-md-3 outer-ticket last">
				<div class=" ticket">
					<p class="ticket-title blue bold">Enem Completo</p>
					<span class="about-ticket"><b>Anual</b></span>
					<ul>
						<li><span>Aulas ao vivo;</span></li>
						<li><span>32 Videoaulas / semana;</span></li>
						<li><span>Plano de estudo;</span></li>
						<li><span>Material Didático Semanal;</span></li>
						<li><span>3 monitorias por semana;</span></li>
						<li><span>1 Redação corrigida e comentada / mês;</span></li>
						<li><span>Biblioteca de videoaulas;</span></li>
						<li><span>Reforço redação;</span></li>
						<li><span>4 simulados;</span></li>
						<li><span>Reforço de exercício;</span></li>
						<li><span>Aprofundamento Exatas e Atualidades;</span></li>
						<li><span class="bold gray">Novidade: Exercícios exclusivos;</span></li>
					</ul>
					<div class="price">
						<span>por apenas:</span>
						<div class="inline">
							<b>12x&nbsp;</b>
							de&nbsp;
							<p class="last-price blue">R$ 34,83</p>
						</div>
						<span>ou <b>R$ 418,00</b> a vista</span>
					</div>
				</div>
				<a href="#" class="btn rounded green uppercase center">compre agora</a>
			</div>
			
		</div>
		<div class="swiper-container-ticket container-ticket hidden-md">
			<div class="swiper-wrapper">
				<div class="swiper-item">
					<div class="col-xs-12 col-md-3 outer-ticket">
						<div class="ticket">
							<p class="ticket-title blue bold">Enem Completo</p>
							<span class="about-ticket"><b>Mensal</b></span>
							<ul>
								<li><span>Aulas ao vivo;</span></li>
								<li><span>32 Videoaulas / semana;</span></li>
								<li><span>Plano de estudo;</span></li>
								<li><span>Material Didático Semanal;</span></li>
								<li><span>3 monitorias por semana;</span></li>
								<li><span>1 Redação corrigida e comentada / mês;</span></li>
								<li><span>Biblioteca de videoaulas;</span></li>
								<li><span>Reforço redação;</span></li>
								<li><span>4 simulados.</span></li>
							</ul>
							<div class="price">
								<span>por apenas:</span>
								<p class="last-price blue">R$ 48,00</p>
							</div>
						</div>
						<a href="#" class="btn rounded green uppercase center">compre agora</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12 hidden-md controlle-mobile swiper-pagination-ticket">
			</div>
		</div>
	</div>
	<div class="bestPlan hidden-xs col-md-12">
		<span>
			Melhor <b>Custo x benefício</b>
		</span>
	</div>
</div>
</div>
<div class="ourTeachers">
<div class="container">
	<section>
		<header>
			<h2 class="sub-title">Conheça Nossos</h2>
			<h3 class="title blue">Profess<span class="apple-letter"></span>res</h3>
		</header>
		<nav class="container-square col-md-12">
			<ul class="">
				<?php
						$args =array(
						'posts_per_page'   => -1,
						'orderby'          => 'date',
						'order'            => 'ASC',
						'post_type'        => 'professor',
						'post_status'      => 'publish'
						);
						$posts = get_posts($args);
						foreach ($posts as $post ) {
				?>
				<li class="square col-xs-3 col-md-2">
					<a href="http://google.com.br">
						<div class="inner-square">
							<img src="<?=get_the_post_thumbnail_url()?>" alt="">
							<span class="hoverEffect">
								
							</span>
						</div>
					</a>
				</li>
				<?php
							}
				?>
			</ul>
			<a class="btn green rounded books uppercase" href="">Experimente nossas aulas!</a>
		</nav>
	</section>
</div>
</div>
<div class="ourNews">
<div class="container">
	<section class="col-sm-12 col-md-8">
		<header>
			<h2>Gabaritando <b>News</b></h2>
		</header>
		<div>
			
			
			
			<?php
			$args =array(
				'posts_per_page'   => 3,
				'orderby'          => 'date',
				'order'            => 'ASC',
				'post_type'        => 'news',
				'post_status'      => 'publish'
			);
			$posts = get_posts($args);
				foreach ($posts as $post ) {
			?>
			<div class="outer-news hidden-sm col-md-4">
				<div class="img-news">
					<img src="<?=get_the_post_thumbnail_url()?>" alt="">
				</div>
				<div class="content-news">
					<span class="post-info">
						<i class="post-date"><?=the_time('j \d\e F \d\e Y')?></i>
						<i class="post-author">Postado por <?php echo $post->post_author != 1 ? $post->post_author : 'Admin' ?>  </i>
					</span>
					<h3 class="post-title"><?=the_title()?></h3>
					<p class="post-content">
						<?php print_r($post->post_content)?>
					</p>
				</div>
			</div>
			<?php
			}
			?>
		</div>
		<div class="outer-news mobile hidden-md">
			<div class="swiper-container-news">
				<div class="swiper-wrapper">
					<div class="swiper-item">
						<div class="img-news">
							<img src="<?=get_the_post_thumbnail_url()?>" alt="">
						</div>
						<div class="content-news">
							<span class="post-info">
								<i class="post-date"><?=the_time('j \d\e F \d\e Y')?></i>
								<i class="post-author">Postado por <?php echo $post->post_author != 1 ? $post->post_author : 'Admin' ?>  </i>
							</span>
							<h3 class="post-title"><?=the_title()?></h3>
							<p class="post-content">
								<?php print_r($post->post_content)?>
							</p>
						</div>
					</div>
					
				</div>
				<div class="col-sm-12 hidden-md controlle-mobile swiper-pagination-news">
				</div>
			</div>
			
		</div>
		
	</section>
	<div class="col-sm-12 col-md-12 hidden-md" >
		<div class="read-posts">
			<a href="#">Ler todos os posts</a>
		</div>
	</div>
	<aside class="col-sm-12 col-md-4">
		<div class="outer-promo">
			<span>Novidades e <br/> <b class="red">Promoções</b> </span>
			<p>Preencha os campos abaixo e receba em seu email nossas últimas dicas, promoções, novidades e conteúdos para turbinar seus estudos!</p>
			<div class="form-newsletter">
				<?=do_shortcode('[contact-form-7 id="74" title="newsletter"]' );?>
			</div>
		</div>
	</aside>
	<div class="col-sm-12 col-md-12 hidden-sm" >
		<div class="read-posts">
			<a href="#">Ler todos os posts</a>
		</div>
	</div>
</div>
</div>
</main>
<?php
	get_footer();
?>