<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
</main>
<!-- メインコンテンツ終了 -->
<!-- フッター -->
<footer>
<img class="max" src="<?php echo $wp_url; ?>/lib/images/foot_top.png" alt="">
<div class="foot-links sec">
<div class="wrap">
<a href="http://www.kyoto-uji-kankou.or.jp/" target="_blank">
<img src="<?php echo $wp_url; ?>/lib/images/foot_link1.png" alt="">
</a>
<a href="http://www.city.yawata.kyoto.jp/yawata-story/index.html" target="_blank">
<img src="<?php echo $wp_url; ?>/lib/images/foot_link3.png" alt="">
</a>
<a href="https://ujitawara-kyoto.com/" target="_blank">
<img src="<?php echo $wp_url; ?>/lib/images/foot_link7.png" alt="">
</a>
<a href="http://wazukanko.com/" target="_blank">
<img src="<?php echo $wp_url; ?>/lib/images/foot_link9.png" alt="">
</a>
</div>
</div>
<img class="max" src="<?php echo $wp_url; ?>/lib/images/foot_middle.png" alt="">
<div class="sec">
<div class="wrap">
<div class="address">
<div>
<a href="<?php echo $home; ?>">
<img src="<?php echo $wp_url; ?>/lib/images/logo.png" alt="<?php bloginfo('name'); ?>">
</a>
<p class="mt-1 mb-1">Kyoto Yamashiro Regional Promotion Agency
<br>2 Fl. Keihan Uji Building, 7-8 Uji Ogata, Uji City, Kyoto 611- 0021 Japan</p>
<p>TEL：0774-25-3239　E-mail：dmo@ochanokyoto.jp</p>
</div>
<div>
<div class="sns txt-r">
<a href="https://www.facebook.com/ochanokyoto/" target="_blank"><i class="fab fa-facebook-f"></i></a>
<a href="https://www.instagram.com/ochanokyotodmo/" target="_blank"><i class="fab fa-instagram"></i></a>
</div>
<p class="txt-r">©2020 Ocha no Kyoto DMO All Rights Reserved.</p>
<p class="txt-r">
<a class="mr-05" href="<?php echo $home; ?>/privacy-policy/"><small>Privacypolicy</small></a>
<a class="mr-05" href="<?php echo $home; ?>/website-terms-of-use/"><small>Website terms</small></a>
<a href="<?php echo $home; ?>/photo-gallery-terms-of-use/"><small>Photo gallery terms</small></a>
</p>
</div>
</div>
</div>
</div>
</footer>
<!-- フッター終了 -->

<?php if (is_post_type_archive('gallery') || is_tax('gallery_cat')): ?>
<a class="download-btn" href="<?php echo $home; ?>/download-form/">
<span class="counts">0</span>
<span class="ttl crimson">Download</span>
</a>
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>