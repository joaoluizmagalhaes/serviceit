    <head>
        <meta charset="utf-8">
        <title>Bootstrap, from Twitter</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Le styles -->
        <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <?php wp_enqueue_script("jquery"); ?>
        <?php wp_head(); ?>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script>
    </head>
    <body>
        <div class="main-page">
	        <div class="banner-publicidade sticky">
	        	<img class="hidden-xs hidden-sm" src="<?php bloginfo('template_url'); ?>/images/banner.jpg">
	        	<img class="hidden-md hidden-lg" src="<?php bloginfo('template_url'); ?>/images/banner-mobile.jpg">
	        </div>
            <header class="header-large sticky hidden-xs hidden-sm">            
                <div class="logo">
                    <a href="index.php" class="link-logo"></a>                
                </div>
                <div class="menu">
                    <nav class="main-nav">
                        <ul class="nav">
                            <li><a href="#" id="carros" class="control carros">Carros </a></li>
                            <li><a href="#" id="testes" class="control testes">Testes </a></li>
                            <li><a href="#">Notícias </a></li>
                            <li><a href="#">Auto-Serviço </a></li>
                            <li><a href="#">Guia de Compras </a></li>
                            <li><a href="#">Tabela Fipe </a></li>
                            <li><a href="#">Assine </a></li>
                        </ul>
                    </nav>
                    <div class="search-form">
                        <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
                            <input type="text" size="18" placeholder="pesquisar" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
                            <input type="submit" id="searchsubmit" value="" />
                        </form>
                    </div>
                </div> 
                <div id="hidden-divs">
	            <div class="sub-menu carros" id="div-carros">
	                <div class="container-fluid">
	                    <div class="row">
	                        <div class="col-md-2 col-lg-2">
	                            <button class="todos-carros">Ver todos os carros</button>
	                        </div>
	                        <div class="col-md-2 col-lg-2">
	                            <ul class="lista-carros">
	                                <li class="item-lista-carros">Audi</li>
	                                <li class="item-lista-carros">Bentley</li>
	                                <li class="item-lista-carros">BMW</li>
	                                <li class="item-lista-carros">Chevrolet</li>
	                            </ul>
	                        </div>
	                        <div class="col-md-2 col-lg-2">
	                             <ul class="lista-carros">
	                                <li class="item-lista-carros">Chrysler</li>
	                                <li class="item-lista-carros">Chevrolet</li>
	                                <li class="item-lista-carros">Dodge</li>
	                                <li class="item-lista-carros">Ferrari</li>
	                            </ul>
	                        </div>
	                        <div class="col-md-2 col-lg-2">
	                             <ul class="lista-carros">
	                                <li class="item-lista-carros">Fiat</li>
	                                <li class="item-lista-carros">For</li>
	                                <li class="item-lista-carros">Honda</li>
	                                <li class="item-lista-carros">Hyundai</li>
	                            </ul>
	                        </div>
	                        <div class="col-md-2 col-lg-2">
	                             <ul class="lista-carros">
	                                <li class="item-lista-carros">Jac Motors</li>
	                                <li class="item-lista-carros">Jaguar</li>
	                                <li class="item-lista-carros">Jeep</li>
	                                <li class="item-lista-carros">Kia</li>
	                            </ul>
	                        </div>
	                        <div class="col-md-2 col-lg-2">
	                             <ul class="lista-carros">
	                                <li class="item-lista-carros">Lamborguini</li>
	                                <li class="item-lista-carros">Mercedez-Benz</li>
	                                <li class="item-lista-carros">Mitsubishi</li>
	                                <li class="item-lista-carros">Wolkswagen</li>
	                            </ul>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="sub-menu testes" id="div-testes">
	                <div class="container-fluid">
	                    <div class="row">
	                        <div class="col-md-2 col-lg-1.5">
	                            <ul class="lista-teste">
	                                <li class="itens-lista-teste">Ver tudo de testes </li>
	                                <li class="itens-lista-teste">Comparativos</li>
	                                <li class="itens-lista-teste">Impressões</li>
	                                <li class="itens-lista-teste">Longa duração</li>
	                                <li class="itens-lista-teste">Tudo de psits</li>
	                            </ul>
	                        </div>
	                        <div class="col-md-2 col-lg-2 teste-destaque">
	                           <img src="<?php bloginfo('template_url'); ?>/images/focus.jpg">
	                           <h4 class="teste-destaque-title">Ford Focus Fastback Titnium Plus</h4>
	                        </div>
	                        <div class="col-md-2 col-lg-2 teste-destaque">
	                            <img src="<?php bloginfo('template_url'); ?>/images/a6.jpg">
	                           <h4 class="teste-destaque-title">Audi A6 2.0 TFSI</h4>
	                        </div>
	                        <div class="col-md-2 col-lg-2 teste-destaque">
	                            <h4 class="teste-destaque-title">Ford EcoSport 1.6 Powershift</h4> 
	                            <p class="teste-destaque-text">EcoSport ganha motor 1.6 atrelado à transmissão automatizada de 6...</p>
	                        </div>
	                        <div class="col-md-2 col-lg-2 teste-destaque">
	                            <img src="<?php bloginfo('template_url'); ?>/images/q3.jpg">
	                           <h4 class="teste-destaque-title">Audi Q3 1.4</h4> 
	                        </div>
	                        <div class="col-md-2 col-lg-2 teste-destaque">
	                            <img src="<?php bloginfo('template_url'); ?>/images/bmw.jpg">
	                           <h4 class="teste-destaque-title">BMW 420i Cabriolet</h4> 
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>              
            </header>
            <header class=" header-small hidden-md hidden-lg">
            	<div class="container-fluid">
            		<div class="row">
            			<div class="col-xs-3 col-sm-2 buttons-small">
            				<img src="<?php bloginfo('template_url'); ?>/images/search-small.png" alt="">
            			</div>
            			<div class="col-xs-6 col-sm-8 logo">
            				<a href="index.php" class="link-logo"></a>  
            			</div>
            			<div class="col-xs-3 col-sm-2 buttons-small">
            				<a href="#" id="menu-small-open"><img id="menu-small-icon" src="<?php bloginfo('template_url'); ?>/images/menu-small.png" alt=""></a>
            			</div>
            		</div>
            	</div>
            </header>
            <div class="hidden-menu hidden-md hidden-lg">
            	<ul>
            		<li><a href="#">Carros</a></li>
            		<li><a href="#">Testes</a></li>
            		<li><a href="#">Notícias</a></li>
            		<li><a href="#">Auto-Serviço</a></li>
            		<li><a href="#">Guia de Compras</a></li>
            		<li><a href="#">Tabela Fipe</a></li>
            	</ul>
            </div>
            
	        <div id="menu-small" class="sub-header hidden-xs hidden-sm">
            	<ul >
            		<li>+Acessados</li>
            		<li>Salão do Automóvel</li>
            		<li>Renegade</li>
            		<li>Novo Sandero</li>
            		<li>Novo Fox</li>
            		<li>Novo Ka</li>
            		<li>HB20</li>
            		<li>Duster</li>
            		<li>Golf</li>
            		<li>Corolla</li>
            		<li>Civic</li>
            		<li>|A-Z|</li>
            	</ul>
            	
            </div>
       