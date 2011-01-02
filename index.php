<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php bloginfo('name'); ?> <?php wp_title('-'); ?></title>
<?php wp_head();?>
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.8.2r1/build/reset/reset-min.css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css"  />
</head>
<body>
  <?php get_header(); ?>
  <div id="copyContainer">
  <!-- <div id="first_Column">
  	<h1>Header</h1>
      <p>Some content goes here</p>

  </div> -->
  <div id="Second_Column">
    <?php if (have_posts()) {
      while (have_posts()) {
        the_post();
    ?>
    <h1><?php the_title(); ?></h1>
		<hr/>
		<?php the_content(); }}?>
    
    <div class="clearall"></div>
  </div>
  </div><!-- container close -->
  <?php get_footer();?>
</body>
</html>