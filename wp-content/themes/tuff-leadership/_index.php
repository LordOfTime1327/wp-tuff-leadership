<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <!-- <link rel="stylesheet" href="css/style.css" /> -->
    <?php wp_head() ?>
  </head>
  <body>

  <?php $path = get_template_directory_uri(); ?>

    <section id="top" class="wrapper wrapper_double">
      
      <div class="container container_double">
        <div class="registration">
          <a href="#registration" class="registration__link">Registration</a>
        </div>

       
        <div class="info">
          <span class="info__place">Kiev, Lukyanovsky lane 6, Beetroot</span>
          <span class="info__date">September 20-21 + October 18-19</span>
        </div>

        <div class="caption">
          <span class="caption__title">
            tuff<span class="caption__dot"></span
            ><span class="caption__secondTitle">leadership trainig</span>
          </span>

          <p class="caption__text">
            4 days of tough training in the mindset and abilities needed for
            more self-managing employees and teams.
          </p>

          <div class="caption__snake">
              <embed src="<?php echo $path?>/i/snake.svg" type="">
          </div>
        </div>

        <a href="#second" class="scroll">
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

    <section class="wrapper" id='second'>
      <div class="container">
          <div class="registration">
            <a href="#registration" class="registration__link">Registration</a>
          </div>
        

          <div class="main">
            <div class="text">
              <p class="text__title">
                Tuff Leadership Training is a Swedish company that specialises
                in:
              </p>

              <ul class="list">
                <li class="list__item">
                  Training managers and employees – Step 1 (leading
                  individuals), Step 2 (leading groups), and The Human Element
                  (personal transformation)
                </li>
                <li class="list__item">
                  Shifting working climates – from dysfunctional to working,
                  from working to flourishing
                </li>
                <li class="list__item">
                  Self-management – supporting companies in introducing or
                  developing self-managing teams
                </li>
              </ul>

              <p class="text__link">
                Go to
                <a href="#" class="text__link_bg"
                  >www.tuffleadershiptraining.com</a
                >
                for more information.
              </p>
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
          <video src="#" controls="controls" class="video__box"></video>
         
        </section>

        </div>
        </div>
      </section>

    <section class="wrapper_milk">
      <div class="container container_normal container_milk">
        <div class="paragraph">
          <div class="paragraph__item">
            <div class="boxImg">
              <img src="<?php echo $path?>/i/one.png" class="boxImg__img" alt="" />
            </div>
            <p class="paragraph__caption">
              Coaching mindset / Empowerment
            </p>
            <p class="paragraph__description">
              to find your best way of being empowering, discovering the nature
              of adult-adult conversations and relating to employees as
              partners.
            </p>
          </div>

          <div class="paragraph__item">
            <div class="boxImg">
              <img src="<?php echo $path?>/i/two.png" class="boxImg__img" alt="" />
            </div>
            <p class="paragraph__caption">
              Having conversations that catalyse responsibility, development and
              commitment
            </p>
            <p class="paragraph__description">
              to explore a way of leading that unleashes people’s full capacity
              through different kinds of conversations.
            </p>
          </div>

          <div class="paragraph__item">
            <div class="boxImg">
              <img src="<?php echo $path?>/i/three.png" class="boxImg__img" alt="" />
            </div>
            <p class="paragraph__caption">
              An individual journey of insights
            </p>
            <p class="paragraph__description">
              trying on new mindsets and behaviours, shifting from an automatic
              way of being, to a way of being that’s more coaching and comes
              from self-awareness.
            </p>
          </div>
        </div>
      </div>
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
          <div class="coaches__item coaches_first">
            <div class="photo">
              <img src="<?php echo $path?>/i/coach-one.png" alt="" class="photo__img-one" />
              <img src="<?php echo $path?>/i/dots.png" alt="" class="photo__dots">
            </div>
            <div class="text">
              <p class="text__name">
                <span >
                    <embed class="text__snake" src="<?php echo $path?>/i/snake.svg" type="">

                </span> Lisa Grill</p>
              <p class="text__info">
                Lisa is an experienced Tuff coach and trainer with a background
                in learning and development. Her specialism is self-managing
                teams and organisations and she writes for publications like the
                Corporate Rebels, and hosts the Leadermorphosis podcast,
                interviewing thought leaders and self-management practitioners
                from around the world.
              </p>
            </div>
          </div>

          <div class="coaches__item coaches_second">
            <div class="photo photo_right">
              <img src="<?php echo $path?>/i/coach-two.png" alt="" class="photo__img-two" />
              <img src="<?php echo $path?>/i/stripes.png" alt="" class="photo__stripes">
            </div>
            <div class="text text_left">
              <p class="text__name">
                Vera Budean</p>
              <p class="text__info text__info_left">
                Vera is a change facilitator and training consultant with 10+
                years experience in multi-cultural environments with leading
                international organisations. She mainly works with tech
                companies, helping create conditions for business agility,
                shared sense of purpose, self-management and high-performance
                culture. TEAL enthusiast, excellent at compiling different
                perspectives and paradigms.
              </p>
            </div>
          </div>
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
                  <p class="date__info">September 20-21 + <br > October 18-19</p>
                  <img src="<?php echo $path?>/i/whiteDots.png" alt="" class="date__dots">
                  <p class="date__price">Price €590</p>
              </div>
            </div>

            

            <div class="course-description">
              <p class="course-description__question">What can I get out 
                  of participating in the training?</p>
              <div class="course-description__snake">
                <embed src="<?php echo $path?>/i/snake.svg" type="">
              </div>
              <p class="course-description__answer">Participants leave the course with the courage and self-awareness to have totally different conversations with their employees or colleagues that draw out the motivation, responsibility, and development in their teams.
                </p>
              </div>

            <div class="content">
              <div class="content__text">
                <p class="content__text_first">The course consists of four days of intensive training, facilitated by one of our certified leadership trainers. It begins with two consecutive days where you learn the basics of a coaching leadership mindset and its core abilities. After putting these new abilities into practice back at work, you return for the last two days which deepen the training. Included in the price is a 30-minute coaching conversation with a Tuff coach one month after you complete the course.</p>
                <p class="content__text_second">The overall theme is a coaching mindset, which translates into different kinds of conversations such as feedback conversations, coaching conversations and relationship conversations. You’ll get a wealth of new tools and practices that you can apply directly. The training is based on a methodology developed by TUFF over more than twenty years and promises to deliver lasting results.</p>  
              </div>
              <div class="content__caption">Content overview</div>
            </div>

            <div class="slider">
              <div class="slider__item">
                <img src="<?php echo $path?>/i/slider-img1.jpg" alt="slider-img1" class="slider__img">
              </div>
              <div class="slider__item">
                <img src="<?php echo $path?>/i/slider-img2.jpg" alt="slider-img2" class="slider__img">
              </div>
              <div class="slider__item">
                <img src="<?php echo $path?>/i/slider-img3.png" alt="slider-img3" class="slider__img">
              </div>
              <div class="slider__item">
                <img src="<?php echo $path?>/i/slider-img4.jpg" alt="slider-img4" class="slider__img">
              </div>
              <div class="slider__item">
                <img src="<?php echo $path?>/i/slider-img5.jpg" alt="slider-img5" class="slider__img">
              </div>
            </div>

            <div class="discover">
              <p class="discover__caption">You will discover <span class="discover__dot"></span></p>
              <ul class="discover-list">
                <li class="discover-list__item">How to be a catalyst for your employees/colleagues taking more responsibility and ownership for the business </li>
                <li class="discover-list__item">How to avoid defaulting to solving problems, giving advice, and being solely responsible so others can step into their power</li>
                <li class="discover-list__item">How to have difficult conversations in a way that empowers others</li>
                <li class="discover-list__item">How to have effective feedback conversations that lead to real shifts</li>
                <li class="discover-list__item">Your leadership strengths and blind spots</li>
              </ul>
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

               <div class="testimonials-box__item">
                 <div class="flag">
                  <img src="<?php echo $path?>/i/whiteDots.png" alt="" class="testimonials-box__dots">
                   <embed src="<?php echo $path?>/i/britain.svg" type="" class="testimonials-box__flag">
                 </div>
                 <div class="testimonialsText">
                   <p class="testimonialsText__caption">Antonia Gineva, 
                      Legal and Compliance Officer at EM Bonds, 
                      England</p>
                    <p class="testimonialsText__info">Therese is an experienced Tuff coach and trainer and is also an accredited facilitator in, among other things, The Human Element and Motivational Interviewing. She has a natural capacity to relate to and challenge managers with an engineering background like hers.</p>
                 </div>
                </div>

               <div class="testimonials-box__item">
                  <div class="flag">
                  <img src="<?php echo $path?>/i/whiteDots.png" alt="" class="testimonials-box__dots">

                    <embed src="<?php echo $path?>/i/sweden.svg" type="" class="testimonials-box__flag">
                  </div>
                  <div class="testimonialsText">
                    <p class="testimonialsText__caption" class="testimonials-box__flag">Richard Kronfält,
                        Global Head of Delivery at Alite International,
                        Sweden
                        </p>
                     <p class="testimonialsText__info">I would recommend Tuff Leadership Training to any company that aspires to be a modern, Agile organisation, and to all managers and leaders</p>
                  </div>
                </div>

                <div class="testimonials-box__item">
                    <div class="flag">
                      <img src="<?php echo $path?>/i/whiteDots.png" alt="" class="testimonials-box__dots">

                      <embed src="<?php echo $path?>/i/portugal.svg" type="" class="testimonials-box__flag">
                    </div>
                    <div class="testimonialsText">
                      <p class="testimonialsText__caption">Dunia Reverter, Group Head of Customer and
                          Operational Efficiency at Arrow Global Group Plc
                          International
                           
                          Portugal</p>
                       <p class="testimonialsText__info">Distinguishing the “soft side,” how being “tough” can be an act of kindness. A framework to be more intentional about the conversations I have.</p>
                    </div>
                  </div>
               
             </div>

             <div class="sony">
                <img src="<?php echo $path?>/i/sony.png" alt="" class="sony__img">
                <div class="sony-info">
                  <p class="sony-info__caption">Eva Lorentzon, 
                      formerly Learning & Development Specialist at Sony Mobile
                      (now at King, also a Tuff customer)</p>
                      <p class="sony-info__text">What I mostly appreciate about Tuff Leadership Training is their hands-on, practical training that makes a difference in behaviour immediately. They are also excellent partners to HR and always very generous with sharing material, thoughts and the research they work with.Tuff is always on my top three list because they are very passionate about contributing to better workplaces by breaking traditional mindsets about leaders and employees and instead empower everyone to be responsible and contribute.</p>
                </div>
              </div>

             <footer class="footer">
                <div id="contact" class="footer__contact">
                  <div class="contact">
                    <span class="contact__caption">contact</span>
                    <address class="contact__item">Kyiv, UBI Conference Hall</address>
                    <time class="contact__item"> March 2-3 + March 23-24</time>
                    <a href="mailto: info@tuffledarskapstraning.se" class="contact__item contact__item_email">info@tuffledarskapstraning.se</a>
                    <a href="tel:0961511515" class="contact__item contact__item_telOne">(096) 151 15 15</a>
                    <a href="tel:0961511515" class="contact__item contact__item_telTwo">(096) 151 15 15</a>
                  </div>
        
                  <div class="follow">
                    <span class="follow__caption">follow</span>
        
                    <div class="follow__box">
                        <a href="#" class="follow__item follow_fb">
                          <img src="<?php echo $path?>/i/fb.svg" alt="">  
                        </a>
        
                        <a href="#" class="follow__item follow_inst">
                         <img src="<?php echo $path?>/i/in.svg" alt="">  
                        </a>
                            
                        <a href="#" class="follow__item follow_tw">
                          <img src="<?php echo $path?>/i/tw.svg" alt="">            
                        </a>
                    </div>
                  </div>
        
                  <div class="logo logo_footer">
                    <embed src="<?php echo $path?>/i/logo.svg" type="">
                  </div>
                </div>
        
                <div class="footer__formBox">

                  <a name="registration"></a>

                  <p class="footer__formCaption">Get in touch</p>

                  <form class="footerForm" action="sendEmail.php"  method="post">
                    <input name="name" type="text" id="formName" class="footerForm__item footerForm__item_name" placeholder="Your Name" required autocomplete="off">
                    <input name="email" type="email" id="formEmail" class="footerForm__item footerForm__item_email" placeholder="Your e-mail" required autocomplete="nope">
                    <input name="message" type="text" class="footerForm__item footerForm__item_msg" placeholder="Your message" autocomplete="off">
                    <button type="submit" class="footerForm__submit">Send</button>
                  </form>
                </div>
               </footer>
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
              <menu class="menuBox">
                <menuitem><a href="#top" class="menuBox__link">Home</a></menuitem>
                <menuitem><a href="#approach" class="menuBox__link">Approach</a></menuitem>
                <menuitem><a href="#coach" class="menuBox__link">The coaches</a></menuitem>
                <menuitem><a href="#testimonials" class="menuBox__link">Testimonials</a></menuitem>
                <menuitem><a href="#contact" class="menuBox__link menuBox__link_last">Contact</a></menuitem>
              </menu>
            </div>

          <div class="details">
            <div class="menuContact">
                <span class="menuContact__caption">Details</span>
                <address class="menuContact__item">Kyiv, UBI Conference Hall</address>
                <time class="menuContact__item"> March 2-3 + March 23-24</time>
                <a href="mailto: info@tuffledarskapstraning.se" class="menuContact__item menuContact__item_email">info@tuffledarskapstraning.se</a>
                <a href="tel:0961511515" class="menuContact__item menuContact__item_telOne">(096) 151 15 15</a>
                <a href="tel:0961511515" class="menuContact__item menuContact__item_telTwo">(096) 151 15 15</a>
              </div>
    
              <div class="menuFollow">
                <span class="menuFollow__caption">follow</span>
    
                <div class="menuFollow__box">
                    <a href="#" class="menuFollow__item menuFollow_fb">
                      <img src="<?php echo $path?>/i/fb.svg" alt="">
                    </a>
    
                    <a href="#" class="menuFollow__item menuFollow_inst">
                      <img src="<?php echo $path?>/i/in.svg" alt="">
                    </a>
                        
                    <a href="#" class="menuFollow__item menuFollow_tw">
                      <img src="<?php echo $path?>/i/tw.svg" alt="">
                    </a>

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
