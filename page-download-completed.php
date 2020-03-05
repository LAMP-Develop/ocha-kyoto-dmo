<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section class="sec lower-layer-wrap">
<div class="wrap lower-layer">
<h2 class="page-ttl crimson"><?php echo get_the_title(); ?></h2>
<h3 class="txt-c">Thank you for downloading.</h3>
<p class="txt-c">We have received your reservation. An e-mail has been sent to the e-mail address provided.</p>
<div class="btn txt-c mt-2">
<a class="crimson" href="<?php echo $home; ?>/">TOP</a>
</div>

<div class="download-pic">
<h3 class="txt-c">Download picture</h3>
<div class="download-pics"></div>
</div>

</div>
</section>

<script>
let imgs = new Array();
imgs = sessionStorage.getItem('imgs').split(",");
imgs.forEach(function(val) {
  jQuery('.download-pics').append('<a href="'+val+'" download><img src="'+val+'"></a>');
});
</script>
<?php get_footer();