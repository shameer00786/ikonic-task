<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"> <!-- Optional: Link to your style.css -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php wp_footer(); ?>
</body>
</html>
