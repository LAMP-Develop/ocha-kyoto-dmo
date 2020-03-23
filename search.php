<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();

if (isset($_GET['s'])) {
    $word = $_GET['s'];
} else {
    $word = '';
}

get_header(); ?>

<div class="mv-sub">
<img src="<?php echo $wp_url; ?>/lib/images/mv_tours.png" alt="">
<h2 class="txt-c color-white">Search：<?php echo $word; ?></h2>
</div>

<section class="sec">
<div class="wrap tow-column">

<aside class="sidebar">
<div class="inner category">
<h3 class="crimson">Blog category</h3>
<ul>
<?php
$args = [
    'parent' => 1,
    'hide_empty' => 0,
];
$categories = get_categories($args);
foreach ($categories as $key => $cat):
?>
<li>
<a href="<?php echo $home.'/blog/'.$cat->slug; ?>"><?php echo $cat->cat_name; ?></a>
</li>
<?php endforeach; ?>
</ul>
</div>
</aside>

<div class="main">
<div class="tours-lists">
<?php
if (have_posts()): while (have_posts()): the_post();
$t = get_the_title();
$id = get_the_ID();
$p = get_the_permalink();
$type = get_post_type();
if ($type == 'post') {
    $type_name = 'Blog';
} elseif($type == 'events') {
    $type_name = 'Event';
} elseif($type == 'gallery') {
    $type_name = 'Photo gallery';
} elseif($type == 'model_course') {
    $type_name = 'Addnl. Itineraries';
} elseif($type == 'news') {
    $type_name = 'News';
} elseif($type == 'tours') {
    $type_name = 'Tour';
}
$overview_content = get_field('overview_content', $id);
$limit = 100;
if (mb_strlen($overview_content) > $limit) {
    $content = mb_substr($overview_content, 0, $limit).'...';
} else {
    $content = $overview_content;
}
if (has_post_thumbnail()) {
    $i = get_the_post_thumbnail_url(get_the_ID(), 'large');
} else {
    $i = $wp_url.'/lib/images/no-img.png';
}
?>

<div class="card">
<a href="<?php echo $p; ?>">
<figure>
<img src="<?php echo $i; ?>" alt="<?php echo $t; ?>">
<span class="category-name"><?php echo $type_name; ?></span>
</figure>
<div class="txt">
<h3><?php echo $t; ?></h3>
</div>
</a>
</div>

<?php endwhile; ?>
<?php else: ?>
<p>No result.</p>
<?php endif; ?>
</div>
<?php if (function_exists('wp_pagenavi')) {
    wp_pagenavi();
} ?>
</div>

</div>
</section>
<?php get_footer();
