<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<div class="mv-sub">
<img src="<?php echo $wp_url; ?>/lib/images/mv_tours.png" alt="">
<h2 class="txt-c color-white">List of tours</h2>
</div>

<section class="sec">
<div class="wrap tow-column">

<aside class="sidebar">
<div class="inner category">
<h3 class="crimson">12 Villages and Towns</h3>
<ul>
<?php
$c_terms = get_terms('tour_cat', $args);
foreach ($c_terms as $key => $c_term):
if ($c_term->parent !== 38) {
    continue;
}
$c_term_slug = $c_term->slug;
$c_term_name = $c_term->name;
?>
<li>
<a href="#<?php echo $c_term_slug; ?>"><?php echo $c_term_name; ?></a>
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
$price = get_field('price', $id);
$overview_content = get_field('overview_content', $id);
$limit = 100;
if (mb_strlen($overview_content) > $limit) {
    $content = mb_substr($overview_content, 0, $limit).'...';
} else {
    $content = $overview_content;
}
$args = [
    'parent' => 38
];
$terms = get_terms('tour_cat', $args)[0];
$area_nema = $terms->name;
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
</figure>
<div class="txt">
<h3><?php echo $t; ?></h3>
<p class="price"><?php echo $price; ?></p>
<p class="content"><?php echo $content; ?></p>
</div>
<div class="area">
<span><i class="fas fa-map-marker-alt mr-05 color-secondary"></i><?php echo $area_nema; ?></span>
</div>
</a>
</div>

<?php endwhile; endif; ?>
</div>
</div>

</div>
</section>
<?php get_footer();
