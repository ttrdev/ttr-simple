<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
    <title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Архив блога <?php } ?> <?php wp_title(); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/static/css/app.css">
</head>
<body <?php body_class(); ?>>
<div class="wrapper">
<div class="wrapper__inner">
    <header class="header i-container i-flex i-flex_justify_gorizontal i-flex_align_center">
        <div class="header__logo">
            <div class="logo">
                <a href="/" class="logo__link">Site logo</a>
            </div>
        </div>
        <div class="header__activity">
            <div class="activity">Description</div>
        </div>
        <?php
            $menu_name = 'main';
            $locations = get_nav_menu_locations();
            $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
            $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
        ?>
        <?php if ( $menuitems > 0 ) : ?>
        <div class="header__menu">
    <nav class="menu">
      <ul class="menu__list i-flex">
        <?php
        $count = 0;
        $submenu = false;
        foreach( $menuitems as $item ):
          $link = $item->url;
          $title = $item->title;
          if ( !$item->menu_item_parent ):
            $parent_id = $item->ID;
            ?>
            <li class="menu__item">
              <a href="<?php echo $link; ?>" class="menu__link">
                <?php echo $title; ?>
              </a>
            <?php endif; ?>
            <?php if ( $parent_id == $item->menu_item_parent ): ?>
              <?php if ( !$submenu ): $submenu = false; ?>
                <ul class="menu__sub-list menu-sub">
                <?php endif; ?>
                <li class="menu-sub__item">
                  <a href="<?php echo $link; ?>" class="menu-sub__link"><?php echo $title; ?></a>
                </li>
                <?php if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ): ?>
                </ul>
                <?php $submenu = false; endif; ?>
              <?php endif; ?>
              <?php if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id ): ?>
              </li>                           
              <?php $submenu = false; endif; ?>
              <?php $count++; endforeach; ?>
            </ul>
          </nav>
        </div>
        <?php endif; ?>
        <div class="header__contacts">
            <div class="contacts">
                <a href="tel:+1233333" class="contacts__phone">123-33-33</a>  
            </div>
        </div>
    </header>

    

