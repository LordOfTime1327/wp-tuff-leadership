<?php $path = get_template_directory_uri(); ?>

<section class="wrapper wrapper_milk" id="coach">
      <div class="container container_milk">
        <div class="header">
          <div class="title">
            <a href="#top" class="title__box">
              <img src="<?php echo $path?>/i/tuff.png" class="tuffLogo" alt="" />
            </a>
            <div class="registration registration_third">
              <a href="#registration" class="registration__link">Registration</a>
            </div>
          </div>

          <div>
            <span class="coaches-title">
              Coaches <span class="coaches-title__dot"></span>
            </span>
          </div>
        </div>

        <div class="coaches">
          <?php
            if( have_rows('coach_repeater') ):
            while ( have_rows('coach_repeater') ) : the_row();
          ?>

            <?php
              if( have_rows('left_side_repeater') ):
              while ( have_rows('left_side_repeater') ) : the_row();
            ?>
              <div class="coaches__item">      
                <div class="photo">
                  <img src="<?php the_sub_field('coach_img')?>" alt="one" class="photo__img-one" />
                  <img src="<?php echo $path?>/i/dots.png" alt="" class="photo__dots">
                </div>
                <div class="text">
                  <p class="text__name">
                    <span><embed class="text__snake" src="<?php echo $path?>/i/snake.svg" type=""></span>  
                    <?php the_sub_field('coach_title'); ?> 
                  </p>
                  <p class="text__info"> <?php the_sub_field("coach_text"); ?> </p>
                  </div>
              </div>
            <?php 
            endwhile;
            endif;
            ?>

            <?php
              if( have_rows('right_side_repeater') ):
              while ( have_rows('right_side_repeater') ) : the_row();
            ?>
            <div class="coaches__item">
              <div class="photo photo_right">
                <img src="<?php the_sub_field('coach_img') ?>" alt="two" class="photo__img-two" />
                <img src="<?php echo $path?>/i/stripes.png" alt="" class="photo__stripes">
              </div>
              <div class="text text_left">
                <p class="text__name" ><?php the_sub_field('coach_title'); ?></p>
                <p class="text__info text__info_left"><?php the_sub_field("coach_text"); ?></p>
              </div>
            </div>
            <?php 
            endwhile;
            endif;
            ?>

          <?php
            endwhile;
            endif;
          ?>       

        </div>
      </div>
    </section>