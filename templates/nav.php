<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
<nav class="drawer-nav" role="navigation">
<ul class="drawer-menu">
<li>
<a class="drawer-menu-item" href="<?php echo $home; ?>/about/">
<img src="<?php echo $wp_url; ?>/lib/images/icon_about.png" alt="">
<span>What is a DMO?</span>
</a>
</li>
<li>
<a class="drawer-menu-item" href="<?php echo $home; ?>/charms/">
<img src="<?php echo $wp_url; ?>/lib/images/icon_charm.png" alt="">
<span>The Charm</span>
</a>
</li>
<li>
<a class="drawer-menu-item" href="<?php echo $home; ?>/tours/">
<img src="<?php echo $wp_url; ?>/lib/images/icon_tours.png" alt="">
<span>List Of Tours</span>
</a>
</li>
<li>
<a class="drawer-menu-item" href="<?php echo $home; ?>/model_course/">
<img src="<?php echo $wp_url; ?>/lib/images/icon_tours.png" alt="">
<span>Model Course</span>
</a>
</li>
<li>
<a class="drawer-menu-item" href="<?php echo $home; ?>/events/">
<img src="<?php echo $wp_url; ?>/lib/images/icon_events.png" alt="">
<span>Events</span>
</a>
</li>
<li>
<a class="drawer-menu-item" href="<?php echo $home; ?>/blog/">
<img src="<?php echo $wp_url; ?>/lib/images/icon_blog.png" alt="">
<span>Blog</span>
</a>
</li>
<li class="sp-only">
<a class="drawer-menu-item" href="<?php echo $home; ?>/news/">
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
<a class="crimson b" href="<?php echo $home; ?>/news/">News</a>
<a class="crimson b" href="<?php echo $home; ?>/inquiry/">Inquiry</a>
</div>