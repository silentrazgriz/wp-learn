<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
    <header id="header" role="banner">
        <section id="branding">
            <div id="site-title"><?php if (is_front_page() || is_home() || is_front_page() && is_home()) {
                    echo '<h1>';
                } ?><a href="<?php echo esc_url(home_url('/')); ?>"
                       title="<?php echo esc_html(get_bloginfo('name')); ?>"
                       rel="home"><?php echo esc_html(get_bloginfo('name')); ?></a><?php if (is_front_page() || is_home() || is_front_page() && is_home()) {
                    echo '</h1>';
                } ?></div>
            <div id="site-description"><?php bloginfo('description'); ?></div>
        </section>
        <nav id="menu" role="navigation" class="navbar navbar-default navbar-fixed-bottom">
            <section class="row">
                <div class="col-lg-2 text-center">
                    <img src="http://lorempixel.com/120/60"/>
                </div>
                <div class="col-lg-8 text-center">
                    <form class="form-inline">
                        <div class="form-group">
                            <label for="age">Usia anda</label>
                            <input type="text" class="form-control" id="age" value="18"/>
                        </div>
                        <div class="form-group">
                            <label for="gender">tahun, jenis kelamin</label>
                            <select class="form-control" id="gender">
                                <option value="male" selected>Laki-laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-default">Solusi Proteksi</button>
                    </form>
                </div>
                <div class="col-lg-2">

                </div>
            </section>
        </nav>
    </header>
    <div id="container">