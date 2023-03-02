
<?php
/*
Created by : Beatrice Bjorn
For : Projekt - CMS - webbdesign för CMS, DT197G
Last updated : 2022-07-11
*/
?>
<?php
/*
Template Name: kontakt-sida
*/
?>
<!-- This includes the header for the website -->
<?php get_header(); ?>

        <div class="container">
       <!-- Adds the wordpress function so that a header image can be set straight from wordpress -->
            <div class="underImg"  style="background-image: url(<?php header_image(); ?>);"></div>
        </div>

     <!-- A post from the category "kontakt" is collected throough the loop
   and the content of the post which in this case is a contact form is printed to the screen-->
    <?php
      query_posts('category_name=kontakt');
        if(have_posts()){
                    while(have_posts()){
                        the_post();
                            ?>
                            <h1 class="contact-h1">Kontakta oss gärna!</h1>
                            <div class="contact-block">
                               <?php the_content() ?>
                            </div>
                            <?php   
                        }
                    }
                ?>
        <!-- Adds the footer to the website -->
        <?php get_footer(); ?>