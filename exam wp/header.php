<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <title><?php bloginfo('name'); wp_title(); ?></title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>
<body>
<div class="wrapper">
    <header class="h-page">
        <div class="container clearfix">
            <div class="header-block">
                <div class="logo">
                    <img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="BusinessPlus" />
                </div>
                <div class="phone-block">
                    <div class="phone-icon">
                        <img src="<?php bloginfo('template_url'); ?>/img/phone_icon.png" alt="Our Phone" />
                    </div>
                    <span class="number">123123</span>
                </div>
                <nav class="menu-nav">
                    <ul class="menu">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Pages</a></li>
                        <li><a href="#">Contact us</a></li>
                    </ul>
                </nav>
                <div class="business">
                    <p class="welcome">Welcome to</p>
                    <p class="business-plus">Business plus</p>
                    <p class="business-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry
                        Lorem Ipsum has been the industry's standard dummy text ever.</p>
                    <div class="readmore-btn"><a href="#">Read More</a></div>
                </div>
            </div>
        </div>
    </header>
