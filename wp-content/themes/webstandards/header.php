<!DOCTYPE HTML>
<html lang="ru-RU">
<head>
	<title><?php wp_title('—',true,'right'); ?><?php bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="Российское сообщество разработчиков «Веб-стандарты»">
	<meta name="keywords" content="веб-стандарты, вст, wst, web standards, wsd, wstdays, web standards days, wsg, web standards group, wsg russia, xhtml, html, html5, css, css3, svg, canvas, микроформаты, microformats">
	<link rel="stylesheet" href="http://static.web-standards.ru/s/screen.css">
	<!--[if lt IE 9]><link rel="stylesheet" href="http://static.web-standards.ru/s/ie.css"><![endif]-->
	<link rel="icon" sizes="16x16" href="http://static.web-standards.ru/i/favicon.ico">
	<link rel="apple-touch-icon" href="http://static.web-standards.ru/i/favicon.png">
	<link rel="alternate" type="application/rss+xml" title="Все публикации" href="http://web-standards.ru/feed/">
<?php	if ( is_category() ) : foreach ( get_the_category() as $cat ) : ?>
	<link rel="alternate" type="application/rss+xml" title="<?php echo $cat->cat_name; ?>" href="http://web-standards.ru/category/<?php echo $cat->category_nicename; ?>/feed/">
<?php	endforeach; else : ?>
	<link rel="alternate" type="application/rss+xml" title="Новости" href="http://web-standards.ru/category/news/feed/">
<?php	endif; ?>
	<link rel="edituri" type="application/rsd+xml" title="RSD" href="http://web-standards.ru/xmlrpc.?rsd">
</head>
<body id="<?php get_page_type() ?>">
	<!--noindex-->
	<ul class="skipto">
		<li><a href="#content" accesskey="c">Перейти к содержанию</a> ↓</li>
		<li><a href="#sidebar" accesskey="n">Перейти к навигации</a> ↓</li>
	</ul>
	<!--/noindex-->
	<div id="page">
		<div id="header" class="vcard">
			<div class="logotype">
<?php	if ( is_home() ) : ?>
				<img src="http://static.web-standards.ru/i/logo-head.gif" alt="Логотип" class="logo">
<?php	else : ?>
				<a href="/"><img src="http://static.web-standards.ru/i/logo-head.gif" alt="Логотип" class="logo"></a>
<?php	endif; ?>
			</div>
			<div class="heading">
<?php	if ( is_home() ) : ?>
				<h1 class="fn org"><?php bloginfo('name'); ?></h1>
<?php	else : ?>
				<h3 class="fn org"><a href="/" class="url"><?php bloginfo('name'); ?></a></h3>
<?php	endif; ?>
				<p class="note"><?php bloginfo('description'); ?></p>
			</div>
			<form action="http://yandex.ru/sitesearch" method="get" class="form form-secondary form-search">
				<fieldset>
					<legend>
						<label for="search-text">Поиск</label>
					</legend>
					<input type="hidden" name="site" value="web-standards.ru">
					<input type="search" name="text" id="search-text" placeholder="Что-нибудь" class="text">
					<input type="submit" title="Найти" value="Найти" class="submit">
				</fieldset>
			</form>
		</div>
		<div id="body">
			<div id="content">
<?php	if( is_home() ) : ?>
				<div id="intro" class="content content-secondary">
                    <?php get_static( 'index-announce' ); ?>
				</div>
<?php	endif; ?>
