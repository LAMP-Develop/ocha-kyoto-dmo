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
<?php get_template_part('templates/nav'); ?>
</div>
</header>
<!-- ヘッダー終了 -->

<!-- メインコンテンツ -->
<main>