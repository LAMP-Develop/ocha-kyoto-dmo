<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section class="sec lower-layer-wrap">
<div class="wrap lower-layer">
<h2 class="page-ttl crimson"><?php echo get_the_title(); ?></h2>

<div class="select-tour">
<div class="ttl">
<h3>Selected image</h3>
</div>
<div class="inner select-imgs"></div>
</div>

<?php echo do_shortcode('[contact-form-7 id="256" title="ダウンロードフォーム"]'); ?>
</div>
</section>

<script>
let imgs = new Array();
imgs = sessionStorage.getItem('imgs').split(",");
imgs.forEach(function(val) {
  jQuery('.select-imgs').append('<div class="img" data-src="'+val+'"><img src="'+val+'"><p>× delete</p></div>');
});
</script>

<?php get_footer();