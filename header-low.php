<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<?php wp_head(); ?>
<?php if (!is_user_logged_in()): ?>
<!-- ここにGAトラッキングタグ -->
<?php endif; ?>
</head>
<body class="drawer drawer--right">
<!-- ヘッダー -->
<header id="header" class="bg-white low">
<div class="inner">
<h1><a href="<?php echo $home; ?>"><img src="<?php echo $wp_url; ?>/lib/images/logo.png" alt="<?php bloginfo('name'); ?>"></a></h1>
<nav class="drawer-nav" role="navigation">
<ul class="drawer-menu">
<li>
<a class="drawer-menu-item" href="<?php echo $home; ?>/about/">
<img src="<?php echo $wp_url; ?>/lib/images/icon_about.png" alt="">
<span>What is a DMO?</span>
</a>
</li>
<li>
<a class="drawer-menu-item" href="<?php echo $home; ?>/">
<img src="<?php echo $wp_url; ?>/lib/images/icon_charm.png" alt="">
<span>The Charm</span>
</a>
</li>
<li>
<a class="drawer-menu-item" href="<?php echo $home; ?>/">
<img src="<?php echo $wp_url; ?>/lib/images/icon_tours.png" alt="">
<span>List Of Tours</span>
</a>
</li>
<li>
<a class="drawer-menu-item" href="<?php echo $home; ?>/">
<img src="<?php echo $wp_url; ?>/lib/images/icon_events.png" alt="">
<span>Events</span>
</a>
</li>
<li>
<a class="drawer-menu-item" href="<?php echo $home; ?>/">
<img src="<?php echo $wp_url; ?>/lib/images/icon_blog.png" alt="">
<span>Blog</span>
</a>
</li>
<li class="sp-only">
<a class="drawer-menu-item" href="<?php echo $home; ?>/">
<span>News</span>
</a>
</li>
<li class="sp-only">
<a class="drawer-menu-item" href="<?php echo $home; ?>/inquiry/">
<span>Inquiry</span>
</a>
</li>
</ul>
</nav>
<button type="button" class="drawer-toggle drawer-hamburger sp-only">
<span class="drawer-hamburger-icon"></span>
</button>
<div class="other-link pc-only">
<a class="crimson b" href="<?php echo $home; ?>/">News</a>
<a class="crimson b" href="<?php echo $home; ?>/inquiry/">Inquiry</a>
</div>
</div>
</header>
<!-- ヘッダー終了 -->

<!-- メインコンテンツ -->
<main>