<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();

if (isset($_GET['tour_name'])) {
    $tour_name = $_GET['tour_name'];
}

if (isset($_GET['area'])) {
    $area_name = $_GET['area'];
}

get_header(); ?>
<section class="sec lower-layer-wrap">
<div class="wrap lower-layer">
<h2 class="page-ttl crimson"><?php echo get_the_title(); ?></h2>

<div class="select-tour">
<div class="ttl">
<h3>Selected tour</h3>
</div>
<div class="inner">
<h4><?php echo $tour_name; ?></h4>
<p><span class="meta-small">Area</span><?php echo $area_name; ?></p>
</div>
</div>

<?php the_content(); ?>
</div>
</section>
<?php get_footer();