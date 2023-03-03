<?php  get_header();  ?>

<?php 
$menu_wave = get_option('menu_wave');

    if(isset($menu_wave['home'])){
      get_template_part('template_part/brain'); 
    } 
?>
  <!-- Main -->
  <main id="main">
    
   <?php 
   
   
   if(isset($menu_wave['service'])){
    get_template_part('template_part/services');
    get_template_part('template_part/call_to_action');   
   } 

   if(isset($menu_wave['portfolio'])){
    get_template_part('template_part/portfolios');
   } 

   if(isset($menu_wave['about'])){
    get_template_part('template_part/about');
   } 

   if(isset($menu_wave['team'])){
    get_template_part('template_part/team');
   } 

   if(isset($menu_wave['pricing'])){
    get_template_part('template_part/price');
    get_template_part('template_part/testimonail'); 
   } 

   if(isset($menu_wave['blog'])){
    get_template_part('template_part/blog');
   } 
   
   if(isset($menu_wave['contact'])){
    get_template_part('template_part/contact');
   } 
   
   
   
   

  
 
   
    ?>


  </main>

<?php  get_footer();  ?>

