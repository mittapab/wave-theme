<?php

/** =========================   Customize theme ================================== */

function custom_theme_panel($wp_customize){

    // area
    $wp_customize->add_section('custom_brain_section_area' , array(
        'title' => 'Wave Custom brain options'
    ));
    

    // field

    $wp_customize->add_setting('brain_title_setting' , array(
        'default' => "We provide easy"
    ));

    $wp_customize->add_control('custom_brain_section_control_0' , array(
        'label' => "Add title ",
        'section' => 'custom_brain_section_area',
        'settings' => 'brain_title_setting'
    ));

    $wp_customize->add_setting('brain_spec_title_setting' , array(
        'default' => "conditions"
    ));

    $wp_customize->add_control('custom_brain_section_control_spec' , array(
        'label' => "Add special title ",
        'section' => 'custom_brain_section_area',
        'settings' => 'brain_spec_title_setting'
    ));

    $wp_customize->add_setting('brain_title_2_setting' , array(
        'default' => "startups at affordable rates."
    ));

    $wp_customize->add_control('custom_brain_section_control_0_2' , array(
        'label' => "Add special title ",
        'section' => 'custom_brain_section_area',
        'settings' => 'brain_title_2_setting'
    ));



    $wp_customize->add_setting('brain_button_1_setting' , array(
        'default' => "Online web tutor"
    ));

    $wp_customize->add_control('custom_brain_section_control_1' , array(
        'label' => "Add title button 1",
        'section' => 'custom_brain_section_area',
        'settings' => 'brain_button_1_setting'
    ));

    $wp_customize->add_setting('brain_button_2_setting' , array(
        'default' => "Course Online"
    ));

    $wp_customize->add_control('custom_brain_section_control_2' , array(
        'label' => "Add title button 2",
        'section' => 'custom_brain_section_area',
        'settings' => 'brain_button_2_setting'
    ));

    $wp_customize->add_setting('brain_description_setting' , array(
        'default' => "Course Online .... "
    ));

    $wp_customize->add_control('custom_brain_section_control_3' , array(
        'label' => "Add Description",
        'section' => 'custom_brain_section_area',
        'settings' => 'brain_description_setting' ,
        'type' => 'textarea'
    ));

    $wp_customize->add_setting('brain_image_setting');
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize ,
        'brain_image_control' ,
        array(
             'label' => "upload image" ,
             'settings' => 'brain_image_setting' ,
             'section' => 'custom_brain_section_area'
        )
    ));

    //color
    $wp_customize->add_setting('brain_color_setting');
    $wp_customize->add_control( 
        new WP_Customize_Color_Control( 
        $wp_customize, 
        'link_color', 
        array(
            'label'      => __( 'Background Color', 'Background' ),
            'section'    => 'custom_brain_section_area',
            'settings'   => 'brain_color_setting',
        ) ) 
    );





}

add_action('customize_register', 'custom_theme_panel');