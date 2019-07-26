<?php
/*
Template Name: Custome Page
*/
?>

<div>page.php</div>

<?php get_header()?>

<?php $path = get_template_directory_uri(); ?>

<section class="wrapper" id='second'>
  <div class="container">
      <div class="registration">
        <a href="#registration" class="registration__link">Registration</a>
      </div>


      <div class="main">
        <div class="text">
          <?php the_field("list") ?>
        </div>
        <div class="tuff">
          <div class="tuff__snake">
              <embed src="<?php echo $path?>/i/snake.svg" type="">
          </div>
          <span class="tuff__text">tuff</span>
        </div>
      </div>

      <a href="#approach" class="scroll">
        <span class="scroll__arrow">
                <embed src="<?php echo $path?>/i/arrow.svg" type="">
        </span>
        <span class="scroll__text">Scroll</span>
      </a>

      <div class="logo">
          <embed src="<?php echo $path?>/i/logo.svg" type="">
      </div>          
  </div>
</section>

<section class="wrapper wrapper_double" id="approach">
  <div class="container container_normal container_milk">

    <div class="header header_orange">

      <div class="title">
        <a href="#top" class="title__box">
          <img src="<?php echo $path?>/i/tuff.png" class="tuffLogo" alt="" />
        </a>
        <div class="registration registration_third">
          <a href="#registration" class="registration__link">Registration</a>
        </div>
      </div>

    <section class="video">
      <span class="video__caption">
        App roach <span class="video_dot"></span>
      </span>
      <video src="<?php the_field("video"); ?>" controls="controls" class="video__box"></video>
    </section>
  </div>
</section>

<section class="wrapper_milk">
  <div class="container container_normal container_milk">
    <div class="paragraph">
   
      <?php
        if( have_rows('approach_fields') ):
        while ( have_rows('approach_fields') ) : the_row();
      ?>
        <div class="paragraph__item">
          <div class="boxImg">  
            <img src="<?php the_sub_field('img') ?>" class="boxImg__img" alt="" />
          </div>
          <p class="paragraph__caption"> <?php the_sub_field('title'); ?> </p>
          <p class="paragraph__description"> <?php the_sub_field("text"); ?> </p>
        </div>

      <?php
        endwhile;
        endif;
      ?>

    </div>
  </div>
</section>
      </section>

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

<section class=" wrapper wrapper_milk" id="discover">
  <div class="container">
      <div class="header">
          <div class="title">
            <a href="#top" class="title__box">
              <img src="<?php echo $path?>/i/tuff.png" class="tuffLogo" alt="" />
            </a>
            <div class="registration registration_third">
              <a href="#registration" class="registration__link">Registration</a>
            </div>
          </div>
          <div class="date">
              <p class="date__info"><?php the_field('date') ?></p>
              <img src="<?php echo $path?>/i/whiteDots.png" alt="" class="date__dots">
              <p class="date__price">Price <?php the_field('price') ?></p>
          </div>
        </div>

        

        <div class="course-description">
          <p class="course-description__question"><?php the_field('question') ?></p>
          <div class="course-description__snake">
            <embed src="<?php echo $path?>/i/snake.svg" type="">
          </div>
          <p class="course-description__answer"><?php the_field('answer') ?></p>
          </div>

        <div class="content">
          <div class="content__text">
            <p class="content__text_first"><?php the_field('content_wys') ?></p>
          </div>
          <div class="content__caption"><?php the_field('content_title') ?></div>
        </div>

          <?php 
            $images = get_field('slider');
            if( $images ): ?>
                <div class="slider">
                <?php foreach( $images as $image ): ?>
                  <div class="slider__item">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="slider__img">
                  </div>
                  <?php endforeach; ?>
                </div>
            <?php endif; ?>

        <div class="discover">
          <p class="discover__caption">You will discover <span class="discover__dot"></span></p>
            <?php the_field('discover_wys') ?>
        </div>
      </div>
</section>

<section class="wrapper wrapper_milk" id="testimonials">
  <div class="container">
      
      <div class="header">
          <div class="title">
            <a href="#top" class="title__box">
              <img src="<?php echo $path?>/i/tuff.png" class="tuffLogo" alt="" />
            </a>
            <div class="registration registration_third">
              <a href="#registration" class="registration__link">Registration</a>
            </div>
          </div>
        </div>         

       <div class="testimonials">
         <div class="testimonials-box">
          <p class="testimonials-box__caption"><span class="testimonials-box__qout">&#10077;</span> Testimonials</p>


          <?php
            if( have_rows('flag_repeater') ):
            while ( have_rows('flag_repeater') ) : the_row();
          ?>    
          <div class="testimonials-box__item">
             <div class="flag">
              <img src="<?php echo $path?>/i/whiteDots.png" alt="" class="testimonials-box__dots">
               <img src="<?php the_sub_field('img') ?>" class="testimonials-box__flag">
             </div>
             <div class="testimonialsText">
               <p class="testimonialsText__caption"><?php the_sub_field("title") ?></p>
                <p class="testimonialsText__info"><?php the_sub_field('text') ?></p>
             </div>
          </div>
          <?php
            endwhile;
            endif;
          ?>  
         </div>

         <!-- sony block -->
            <?php
              if( have_rows('company_repeater') ):
                  while ( have_rows('company_repeater') ) : the_row();?>
                  <div class="sony">
                    <img src="<?php the_sub_field('company_img'); ?>" alt="" class="sony__img">
                    <div class="sony-info">
                      <p class="sony-info__caption"><?php the_sub_field('company_title') ?></p>
                      <p class="sony-info__text"><?php the_sub_field("company_text") ?></p>
                    </div>
                  </div>
                  <?php endwhile;
              endif;
              ?>

              <?php get_footer() ?>

       </div>
  </div>
</section>

<div class="wrapper wrapper_white menuPage" id="menu">
  <div class="container containerRel">

        <div class="close" id='close'>
          <img src="<?php echo $path?>/i/close.png" alt="" class="close__img">
        </div>


    <div class="menuBlock">  
      
      <div class="menuBlock__item">
      
        <div class="menuBlock__caption">menu</div>
          <!-- <menu class="menuBox">
            <menuitem><a href="#top" class="menuBox__link">Home</a></menuitem>
            <menuitem><a href="#approach" class="menuBox__link">Approach</a></menuitem>
            <menuitem><a href="#coach" class="menuBox__link">The coaches</a></menuitem>
            <menuitem><a href="#testimonials" class="menuBox__link">Testimonials</a></menuitem>
            <menuitem><a href="#contact" class="menuBox__link menuBox__link_last">Contact</a></menuitem> -->
            <?php wp_nav_menu( [
              'theme_location' => '',
              'menu' => 'main menu', 
              'container' => 'nav', 
              'container_class' => 'menuBox', 
              'container_id' => '',
              'menu_class' => 'has-submenu', 
              'menu_id' => '',

            ] ); ?>
          <!-- </menu> -->
        </div>

      <div class="details">
        <div class="menuContact">
            <span class="menuContact__caption">Details</span>
            <address class="menuContact__item"><?php the_field("place") ?></address>
            <time class="menuContact__item"><?php the_field("date") ?></time>
            <?php if( have_rows('contacts_repeater') ): ?>
                  <?php while( have_rows('contacts_repeater') ): the_row(); ?>
                      <?php if( have_rows('email_repeater') ): ?>
                      <?php while( have_rows('email_repeater') ): the_row();
                        $email = get_sub_field('email');
                      ?>
                        <a href="mailto: <?php echo $email ?>" class="menuContact__item menuContact__item_email"><?php echo $email ?></a>
                      <?php endwhile; ?>
                      <?php endif; ?>

                      <?php if( have_rows('phone_repeater') ): ?>
                      <?php while( have_rows('phone_repeater') ): the_row();
                        $phone = get_sub_field('phone'); 
                      ?>
                        <a href="mailto: <?php echo $phone ?>" class="menuContact__item menuContact__item_tel"><?php echo $phone ?></a>
                      <?php endwhile; ?>
                      <?php endif; ?>
                  <?php endwhile; ?>
                <?php endif; ?>
          </div>

          <div class="menuFollow">
            <span class="menuFollow__caption">follow</span>

            <div class="menuFollow__box">
            <?php
              if( have_rows('icon_repeater') ):
                while ( have_rows('icon_repeater') ) : the_row();?>
                  <a href="<?php the_sub_field('soc_link'); ?>" target="_blank" class="follow__item">
                    <img src="<?php the_sub_field('soc_img'); ?>" alt="" class="follow__img">  
                  </a>
            <?php 
            endwhile;
            endif;
            ?>
            </div>
          </div>
     </div>
    </div>
  </div>
</div>

<menu class="menu" id="menuBtn">
    <menuitem class="menu__text">me</menuitem>
    <menuitem class="menu__text">nu</menuitem>
</menu>

<?php wp_footer() ?>

</body>
</html>