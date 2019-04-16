<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <?php
    wp_head();
    ?>
    <title>Gabaritando</title>
    <link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/css/min/reset.css">
    <link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/css/min/grid.css">
    <link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/css/min/swiper.min.css">
    <link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/css/min/fonts.css">
    <link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/css/min/style.css">
    <link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/css/min/media.css">
  </head>
  <body>
    <header class="main-header" >
        
      <div id="containerHeader" class="col-xs-12 col-md-12 hidden-xs">
        <div class="logo">
          <a href="./">
            
          <img src="<?=get_template_directory_uri()?>/assets/images/logo/logo.png" alt="">
          </a>
        </div>
        <!-- Desktop -->
        <div class="outerMenuDesk ">
          <nav class="cliArea">
            <a href="https://gabaritando.myedools.com/users/sign_in ">
              <i class="fa fa-user-circle"></i><span>Área do Cliente</span>
            </a>
          </nav>
          <nav class="menu">
            <ul class="main">
              <li><a href="">Diferenciais</a></li>
              <li><a href="">Depoimentos</a></li>
              <li><a href="">Planos e Preços</a></li>
              <li><a href="http://eugabaritandoenem.com.br/#opniao">Professores</a></li>
              <li><a href="">Blog</a></li>
              <li><a href="">Contato</a></li>
            </ul>
            <ul class="sociais">
              <li>
                <a href="https://facebook.com/eugabaritandoenem"><i class="fa fa-facebook" aria-hidden="true"> </i></a>
              </li>
              <li><a href="https://www.instagram.com/eugabaritandoenem/"><i class="fa fa-instagram" aria-hidden="true"> </i></a></li>
              <li><a href="https://www.youtube.com/channel/UCoHdAfpgOR-5oBUujXYjyhg"><i class="fa fa-youtube-play" aria-hidden="true"> </i></a></li>
            </ul>
          </nav>
        </div>
      </div>
            <div class="menu-mobile hidden-md">
              <div class="overlay"></div>
        <div class="header-menu">
          <div class="logo">
            <img src="<?=get_template_directory_uri()?>/assets/images/logo/logo-gabaritando-mobile.jpg" alt="logo gabaritando">
          </div>
          <div class="burger">
            <div class="burger-item"></div>
            <div class="burger-item"></div>
            <div class="burger-item"></div>
          </div>
        </div>
        
          <nav class="master-content-menu-mobile">
            <span class="menu-title">
            </span>
            <ul>
              <li><a href="#">Diferenciais</a></li>
              <li><a href="#">Depoimentos</a></li>
              <li><a href="#">Planos e preços</a></li>
              <li><a href="#">Professores</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Contato</a></li>
            </ul>
          </nav>
      </div>
      <section id="slideHome">
        <div class="container">
          <div class="swiper-container swiper_banner">
            <div class="swiper-wrapper">
              <div class="slide model-1 swiper-slide ">
                <span class="title">Estude pelo<br> <b class="ye
                  llow">Computador, <br> Celular ou Tablet </b></span>
                <ul>
                  <li><span><b class="yellow">03</b> novos vídeos por semana;</span></li>
                  <li><span><b class="yellow">05</b> monitorias;</span></li>
                  <li><span><b class="yellow">05</b> simulados por mês!</span></li>
                </ul>
                <div class="controller">
                  <div class="control left banner" data-direction="left" data-current-slide="0" >&lt;</div>
                  <div class="control right banner"  data-direction="right" data-current-slide="0" >&gt;</div>
                </div>
              </div>
              <div class="slide model-2 swiper-slide ">
                <div class="outer-slide">
                  <div class="box-slide-model">
                      <img src="<?=get_template_directory_uri()?>/assets/images/titulos/50.png" alt="">
                  </div>
                </div>
               <div class="controller">
                  <div class="control left banner" data-direction="left" data-current-slide="0" >&lt;</div>
                  <div class="control right banner"  data-direction="right" data-current-slide="0" >&gt;</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </header>