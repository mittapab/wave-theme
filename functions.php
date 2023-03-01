<?php
require get_template_directory() . '/theme_options/brain_options.php';  

function scripts_styles_theme(){

    //styles
    wp_enqueue_style('wp-style', get_stylesheet_uri(), array(), '1.0.0');
    wp_enqueue_style( 'gg-fn', '//fonts.googleapis.com',array() , '1.0');
    wp_enqueue_style( 'gs-gg-fn', '//fonts.gstatic.com',array() , '1.0');
    wp_enqueue_style( 'gg-fn-fm', '//fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Satisfy&display=swap',array() , '1.0');
    wp_enqueue_style( 'wave-bsb', get_theme_file_uri('/assets/css/wave-bsb.css'), array() , '1.0');
    

    //scripts
    wp_enqueue_script('wave-script' , get_theme_file_uri('/assets/vendor/jquery/jquery-3.6.0.min.js') , array() , '1.0.0' , true);
    wp_enqueue_script('wave-load-script' , get_theme_file_uri('/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') , array() , '1.0.0' , true);
    wp_enqueue_script('wave-iso-script' , get_theme_file_uri('/assets/vendor/isotope/isotope.pkgd.min.js') , array() , '1.0.0' , true);
    wp_enqueue_script('wave-packery-script' , get_theme_file_uri('/assets/vendor/isotope/packery-mode.pkgd.min.js') , array() , '1.0.0' , true);
    wp_enqueue_script('wave-boot-script' , get_theme_file_uri('/assets/vendor/bootstrap/bootstrap.bundle.min.js') , array() , '1.0.0' , true);

    //Javascript Files: Controllers 
    wp_enqueue_script('wave-control-script' , get_theme_file_uri('/assets/controller/project-2.js') , array() , '1.0.0' , true);
    wp_enqueue_script('wave-glo-script' , get_theme_file_uri('/assets/controller/global.js') , array() , '1.0.0' , true);

}

add_action('wp_enqueue_scripts' , 'scripts_styles_theme');


/** =====================  Add admin menu ================================ */

add_action('admin_menu','wave_theme_option');

function wave_theme_option(){
   add_menu_page('theme-options' , 'W theme option' , 'manage_options','theme-options', 'wave_custom_theme','dashicons-admin-customizer');
}

function wave_custom_theme(){ ?>
    
      <div>
        <h1>Theme options Panel</h1>
        <span><?php   settings_errors();  ?></span>
        <form method="post" action="options.php">
            <?php  settings_fields('section');   
                   do_settings_sections('theme-options');
                   submit_button('บันทึก');
            ?>
        </form>
      </div>

<?php }

/** setting options */

function theme_options_setting(){

    //step #1
    add_settings_section('section','', null, 'theme-options' , array());

    //step #2
    add_settings_field( 'chennel_name', 'Chennel Name', 'display_chennel_name', 'theme-options' , 'section',array());

    //step #3
    register_setting( 'section', 'chennel_name',  array());
}

add_action('admin_init' , 'theme_options_setting');

   //step #4
function display_chennel_name(){ ob_start(); ?>
     
     <label>Name :</label>
     <input type="text" name="chennel_name" value="<?php  echo get_option('chennel_name'); ?>" id="chennel_name">

<?php  echo ob_get_clean(); }


