<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?=$veriler[0]->adi?></title>

	<meta name="keywords" content="<?=$veriler[0]->keywords?>">

    <meta name="description" content="<?=$veriler[0]->aciklama?>">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/price-range.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/animate.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/main.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url()?>assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url()?>assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url()?>assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?=base_url()?>assets/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="<?=base_url()?>/home/"><i class="fa fa-phone"></i><?=$veriler[0]->tel?></a></li>
								<li><a href="<?=base_url()?>/home/"><i class="fa fa-envelope"></i><?=$veriler[0]->email?></a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="https://www.linkedin.com/in/talhadengiz/"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://www.linkedin.com/in/talhadengiz/"><i class="fa fa-instagram"></i></a></li>
								
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
									<a href="<?=base_url()?>/home/"><img src="<?=base_url()?>uploads/logo.png" alt="" /></a>
						        </div>
						<div class="btn-group pull-right">
							
							
						
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="<?=base_url()?>/home/uyepanel"><i class="fa fa-user"></i> Kullanıcı</a></li>
								
								<li><a href="<?=base_url()?>/home/sepetim"><i class="fa fa-crosshairs"></i> Ödeme</a></li>
								<li><a href="<?=base_url()?>/home/sepetim"><i class="fa fa-shopping-cart"></i> Sepet</a></li>
								<?php
								if(!$this->session->uye_session)
								{
									?>
								<li><a href="<?=base_url()?>/home/uyelik"><i class="fa fa-lock"></i> Giriş</a></li>
								<?php
								} else {
									?>
									<li><a href="<?=base_url()?>/home/uyepanel"><?=$this->session->uye_session["email"]?>
								     </a></li>
								<?php
								}
								?>
								<li><a href="<?=base_url()?>home/cikis_yap"><i class="fa fa-lock"></i>Çıkış</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="<?=base_url()?>/home/" class="active">Anasayfa</a></li>
								<li class="dropdown"><a href="<?=base_url()?>/home/">Kategori<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="<?=base_url()?>home/kategori1/1">Gitarlar</a></li>
										<li><a href="<?=base_url()?>home/kategori1/2">Sazlar</a></li>
										<li><a href="<?=base_url()?>home/kategori1/3">Yaylılar</a></li>
										<li><a href="<?=base_url()?>home/kategori1/4">Davullar</a></li>
										<li><a href="<?=base_url()?>home/kategori1/5">Piyanolar</a></li>
                                    </ul>
                                </li> 
								 
								
								<li><a href="<?=base_url()?>home/iletisim">İletişim</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">

							<form class="navbar-form" role="search"  action="<?=base_url()?>home/search" method="POST">
							<input type="text" name="sorgu" placeholder="Arama"/>
							
						    </form>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->