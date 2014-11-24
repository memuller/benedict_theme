<?php
/**
 * Enqueue scripts and stylesheets
 *
 * Enqueue stylesheets in the following order:
 * 1. /theme/assets/css/main.min.css
 * 2. /child-theme/style.css (if a child theme is activated)
 *
 * Enqueue scripts in the following order:
 * 1. jquery-1.9.1.min.js via Google CDN
 * 2. /theme/assets/js/vendor/modernizr-2.6.2.min.js
 * 3. /theme/assets/js/main.min.js (in footer)
 */

add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style('main_css', get_stylesheet_directory_uri() . '/assets/main.min.css', false, '0f54c2bdf9e64e457f6f3c705f8e16cd');

  wp_register_script('main_scripts', get_stylesheet_directory_uri() . '/assets/main.min.js', array('jquery'), 'bcb921d6edcb3e11902567d4d1fd6cc8', false);
  wp_enqueue_script( 'main_scripts');
});
if (defined('GOOGLE_ANALYTICS_ID')) {
  add_action('wp_footer', function(){ ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', '<?php echo GOOGLE_ANALYTICS_ID; ?>', 'auto');
  ga('send', 'pageview');

</script>
  <?php }, 20);
} ?>