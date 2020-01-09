<?php

function wpb_customize_register($wp_customize)
{
    //Showcase Section
    $wp_customize->add_section('showcase', array(
        'title' => __('Showcase', 'karolnie'),
        'description' => sprintf(__('Options for showcase', 'karolnie')),
        'priority' => 130

    ));
    //image showcase section setting
    $wp_customize->add_setting('showcase_image', array(
        'default' => get_bloginfo('template_directory') . '/images/showcase.jpg',
        'type' => 'theme_mod'
    ));
    //image showcase section control
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'showcase_image', array(
        'label' => __('Showcase Image', 'karolnie'),
        'section' => 'showcase',
        'settings' => 'showcase_image',
        'priority' => 1
    )));
    //heading showcase section setting
    $wp_customize->add_setting('showcase_heading', array(
        'default' => _x('WordPress Theme Dev', 'karolnie'),
        'type' => 'theme_mod'
    ));
    //heading showcase section control
    $wp_customize->add_control('showcase_heading', array(
        'label' => __('Heading', 'karolnie'),
        'section' => 'showcase',
        'priority' => 2
    ));
    //text showcase section setting
    $wp_customize->add_setting('showcase_text', array(
        'default' => _x('Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores accusantium commodi vero porro, sit ipsum, magnam aspernatur eius

    ', 'karolnie'),
        'type' => 'theme_mod'
    ));
    //text showcase section control
    $wp_customize->add_control('showcase_text', array(
        'label' => __('Text', 'karolnie'),
        'section' => 'showcase',
        'priority' => 3
    ));
    //button-url showcase section setting
    $wp_customize->add_setting('btn-url', array(
        'default' => _x('http://test.com', 'karolnie'),
        'type' => 'theme_mod'
    ));
    //button-url showcase section control
    $wp_customize->add_control('btn-url', array(
        'label' => __('Button URL', 'karolnie'),
        'section' => 'showcase',
        'priority' => 4
    ));
    //button-text showcase section setting
    $wp_customize->add_setting('btn-text', array(
        'default' => _x('Read More', 'karolnie'),
        'type' => 'theme_mod'
    ));
    //button-text showcase section control
    $wp_customize->add_control('btn-text', array(
        'label' => __('Button Text', 'karolnie'),
        'section' => 'showcase',
        'priority' => 5
    ));
}

add_action('customize_register', 'wpb_customize_register');
