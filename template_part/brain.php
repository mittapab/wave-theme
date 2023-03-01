  <!-- Hero 2 - Bootstrap Brain Component -->

  <section id="scrollspyHero" class="wave-bg-blue py-5 py-xl-8 py-xxl-10" style="background: <?php  echo get_theme_mod('brain_color_setting');   ?>">
    <div class="container overflow-hidden">
      <div class="row gy-5 gy-lg-0 align-items-lg-center justify-content-lg-between">
        <div class="col-12 col-lg-6 order-1 order-lg-0">
          <h1 class="display-3 fw-bolder mb-3"><?php  echo get_theme_mod('brain_title_setting');   ?> <br><mark class="wave-highlight wave-highlight-blue"><span class="wave-font-hw display-2 text-accent fw-normal"><?php  echo get_theme_mod('brain_spec_title_setting');   ?></span></mark> <?php  echo get_theme_mod('brain_title_2_setting');   ?></h1>
          <p class="fs-4 mb-5"><?php  echo get_theme_mod('brain_description_setting');   ?></p>
          <div class="d-grid gap-2 d-sm-flex">
            <button type="button" class="btn btn-primary btn-2xl rounded-pill px-4 gap-3"><?php  echo get_theme_mod('brain_button_2_setting');    ?></button>
            <button type="button" class="btn btn-outline-primaryx btn-outline-accent btn-2xl rounded-pill px-4"><?php  echo get_theme_mod('brain_button_1_setting');    ?></button>
          </div>
        </div>
        <div class="col-12 col-lg-5 text-center">
          <!-- <img class="img-fluid mask-position-center-center mask-repeat-no-repeat mask-size-auto" loading="lazy" src="<?php echo get_theme_file_uri('/assets/img/hero/hero-home.jpg'); ?>" alt="" style="-webkit-mask-image: url(<?php echo get_theme_file_uri('/assets/img/hero/hero-blob-1.svg'); ?>); mask-image: url(<?php echo get_theme_file_uri('/assets/img/hero/hero-blob-1.svg'); ?>);"> -->
          <?php //echo get_option('chennel_name'); ?>
          <img class="img-fluid mask-position-center-center mask-repeat-no-repeat mask-size-auto" loading="lazy" src="<?php  echo get_theme_mod('brain_image_setting');  ?>" alt="" style="-webkit-mask-image: url(<?php echo get_theme_mod('brain_image_setting');  ?>); mask-image: url(<?php echo get_theme_mod('brain_image_setting');  ?>);">
        </div>
      </div>
    </div>
  </section>
