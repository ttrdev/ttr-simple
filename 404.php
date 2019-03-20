<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
    <title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Архив блога <?php } ?> <?php wp_title(); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/static/css/app.css">
</head>
<body>
<div class="nf">
    <div class="nf__note">404 PAGE NOT FOUND</div>
</div>
</body>
</html>