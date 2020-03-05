<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section class="sec lower-layer-wrap">
<div class="wrap lower-layer">
<h2 class="page-ttl crimson"><?php echo get_the_title(); ?></h2>
<h3 class="txt-c">Your reservation has been successfully completed.</h3>
<p class="txt-c">We have received your reservation. An e-mail has been sent to the e-mail address provided.</p>
<div class="btn txt-c mt-2">
<a class="crimson" href="<?php echo $home; ?>/">TOP</a>
</div>
</div>
</section>
<?php get_footer();