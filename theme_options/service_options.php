<?php

function service_option_customize($wp_customize){

    $wp_customize->add_section('custom_service_section_area' , array(
        'title' => 'Wave Custom serivce options'
    ));

    /** Title Before */

    $wp_customize->add_setting('service_before_title_setting' , array(
        'default' => 'You will get the perfect'
    ));

    $wp_customize->add_control('service_before_title_control' , array(
        'label' => 'Before title' , 
        'section'=> 'custom_service_section_area',
        'settings' => 'service_before_title_setting'
    ));

    /** Title special */

    $wp_customize->add_setting('service_spec_title_setting' , array(
        'default' => 'resolutions'
    ));

    $wp_customize->add_control('service_spec_title_control' , array(
        'label' => 'Special title',
        'section' => 'custom_service_section_area',
        'settings' => 'service_spec_title_setting'
    ));

     /** Title after*/

     $wp_customize->add_setting('service_after_title_setting' , array(
        'default' => 'resolutions'
    ));

    $wp_customize->add_control('service_after_title_control' , array(
        'label' => 'After title',
        'section' => 'custom_service_section_area',
        'settings' => 'service_after_title_setting'
    ));


    /**===========================  Service blog   ========================== */

     /** Title service 1*/

     $wp_customize->add_setting('service__title_service_1_setting' , array(
        'default' => ''
    ));

    $wp_customize->add_control('service__title_service_1_control' , array(
        'label' => 'title service 1',
        'section' => 'custom_service_section_area',
        'settings' => 'service__title_service_1_setting'
    ));

     /** description service 1*/

     $wp_customize->add_setting('service_description_service_1_setting' , array(
        'default' => ''
    ));

    $wp_customize->add_control('service_description_service_1_control' , array(
        'label' => 'description service 1',
        'section' => 'custom_service_section_area',
        'settings' => 'service_description_service_1_setting',
        'type' => 'textarea'
    ));

    /** link service 1*/

     $wp_customize->add_setting('service_link_service_1_setting' , array(
        'default' => ''
    ));

    $wp_customize->add_control('service_link_service_1_control' , array(
        'label' => 'link service 1',
        'section' => 'custom_service_section_area',
        'settings' => 'service_link_service_1_setting',
    ));


    
     /** Title service 2*/

     $wp_customize->add_setting('service__title_service_2_setting' , array(
        'default' => ''
    ));

    $wp_customize->add_control('service__title_service_2_control' , array(
        'label' => 'title service 2',
        'section' => 'custom_service_section_area',
        'settings' => 'service__title_service_2_setting'
    ));

     /** description service 2*/

     $wp_customize->add_setting('service_description_service_2_setting' , array(
        'default' => ''
    ));

    $wp_customize->add_control('service_description_service_2_control' , array(
        'label' => 'description service 2',
        'section' => 'custom_service_section_area',
        'settings' => 'service_description_service_2_setting',
        'type' => 'textarea'
    ));

    /** link service 2*/

     $wp_customize->add_setting('service_link_service_2_setting' , array(
        'default' => ''
    ));

    $wp_customize->add_control('service_link_service_2_control' , array(
        'label' => 'link service 2',
        'section' => 'custom_service_section_area',
        'settings' => 'service_link_service_2_setting',
    ));


    
     /** Title service 3*/

     $wp_customize->add_setting('service__title_service_3_setting' , array(
        'default' => ''
    ));

    $wp_customize->add_control('service__title_service_3_control' , array(
        'label' => 'title service 3',
        'section' => 'custom_service_section_area',
        'settings' => 'service__title_service_3_setting'
    ));

     /** description service 3*/

     $wp_customize->add_setting('service_description_service_3_setting' , array(
        'default' => ''
    ));

    $wp_customize->add_control('service_description_service_3_control' , array(
        'label' => 'description service 3',
        'section' => 'custom_service_section_area',
        'settings' => 'service_description_service_3_setting',
        'type' => 'textarea'
    ));

    /** link service 3*/

     $wp_customize->add_setting('service_link_service_3_setting' , array(
        'default' => ''
    ));

    $wp_customize->add_control('service_link_service_3_control' , array(
        'label' => 'link service 3',
        'section' => 'custom_service_section_area',
        'settings' => 'service_link_service_3_setting',
    ));


    
     /** Title service 4*/

     $wp_customize->add_setting('service__title_service_4_setting' , array(
        'default' => ''
    ));

    $wp_customize->add_control('service__title_service_4_control' , array(
        'label' => 'title service 4',
        'section' => 'custom_service_section_area',
        'settings' => 'service__title_service_4_setting'
    ));

     /** description service 4*/

     $wp_customize->add_setting('service_description_service_4_setting' , array(
        'default' => ''
    ));

    $wp_customize->add_control('service_description_service_4_control' , array(
        'label' => 'description service 4',
        'section' => 'custom_service_section_area',
        'settings' => 'service_description_service_4_setting',
        'type' => 'textarea'
    ));

    /** link service 4*/

     $wp_customize->add_setting('service_link_service_4_setting' , array(
        'default' => ''
    ));

    $wp_customize->add_control('service_link_service_4_control' , array(
        'label' => 'link service 4',
        'section' => 'custom_service_section_area',
        'settings' => 'service_link_service_4_setting',
    ));
}

add_action('customize_register' , 'service_option_customize');