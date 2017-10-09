<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="pt-BR">
<!--<![endif]-->
<head>
<title>Dj Night HTML Template</title>
<meta charset="utf-8" />
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta name="description"  content="Bh vip som e luz"/>
<meta name="keywords" content="Dj, som, iluminacao, aluguel, eventos">
<meta name="author"  content="Magno Alves"/>
<meta name="MobileOptimized" content="320">
<link href="<?php echo base_url('resources/')?>css/main.css" rel="stylesheet" type="text/css"/>
<link rel="shortcut icon" type="image/png" href="<?php echo base_url('resources/')?>images/favicon.jpg"/>
</head>
<body>
<div class="preloader_wrapper">
	<div id="pre_loader">
		<img src="<?php echo base_url('resources/')?>images/loader.gif" alt="">
	</div>
</div>
<div class="dn_header_section header_fix_top">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="dn_navigation_cover">
					<div class="dn_logo">
						<a href="index.html">
							<img src ="<?php echo base_url('resources/')?>images/logo-b.png" width="143px" height="32px" alt="thumb" class="img-responsive">
						</a>
					</div>
					<div class="nav_toggle">
						<span></span>
						<span></span>
						<span></span>
					</div>
					<div class="dn_navigation">
						<ul class="menu">
							<li><a href="index.html">Home</a></li>
							<li><a href="servicos.html">Serviços</a></li>
							<li><a href="pacotes.html">Pacotes</a></li>
							<li><a href="galeria.html">Galeria</a></li>
							<li><a href="contato.html"  class="active">Contato</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="dn_header_banner">
	<div class="black_overlay">
		<div class="container">
			<div class="row">
				<div class="breadcrumb_wrap">
					<div class="banner_heading">
						<h2><span>Contato</span> us</h2>
					</div>
					<ul class="breadcrumbs_menu">
						<li><a href="#">Home</a></li>
						<li>Contato</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="contact_section">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-12 right_pad">
				<div class="contact_form">
					<h4 class="contact_heading">Envie uma mensagem</h4>
					<form>
						<input type="text" name="nome" id="name" placeholder="Nome" class="input_control">
						<input type="email" name="email" id="email" placeholder="Email" class="input_control">
						<input type="text" name="assunto" id="subject" placeholder="Assunto" class="input_control">
						<textarea class="textarea input_control" id="mensagem" placeholder="Mensagem"></textarea>
						<button type="button" class="submit_btn view_m_btn" value="send">Enviar</button>
						<p id="contact_err"></p>
					</form>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 left_pad">
				<div class="contact_address">
					<h4 class="contact_heading">Informações de Contato</h4>
					<div class="address_block">
						<ul>
							<li class="fadeleft wow" data-wow-duration="1.5s">
								<h4>Endereço</h4>
								<div class="add_icon"><i class="fa fa-map-marker"></i></div>
								<div>
									<p>
									NOme da rua, numero , bairro<br/>
									Nome Cidade - Estado</p>
								</div>
							</li>
							<li class="fadeleft wow" data-wow-duration="2s">
								<h4>Telefones</h4>
								<div class="add_icon"><i class="fa fa fa-phone"></i></div>
								<div>
									<p>+55 31 3333-3333</p>
									<p>+55 31 999-999-999</p>
								</div>
							</li>
							<li class="fadeleft wow" data-wow-duration="2.5s">
								<h4>email</h4>
								<div class="add_icon"><i class="fa fa-envelope"></i></div>
								<div>
									<a href="#">contato@bhvipsomeluz.com.br</a>
									<a href="#">atendimento@bhvipsomeluz.com.br</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="dn_section dn_footer_section">
	<div class="container">
		<div class="row">
			<div class="footer_content">
				<div class="footer_icon">
					<a href="#" class="hexa_icon">
						<div class="hexa_inner"><i class="fa fa-facebook"></i></div>
					</a>					
				</div>
				<p> &copy; <a href="http://teqbees.com/">BH Vip Som & Luz</a> 2017 </p>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="<?php echo base_url('resources/')?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url('resources/')?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('resources/')?>js/plugins/animation/wow.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('resources/')?>js/custom.js"></script>
</body>
</html>