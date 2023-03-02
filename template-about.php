
<?php
/*
Created by : Beatrice Bjorn
For : Projekt - CMS - webbdesign för CMS, DT197G
Last updated : 2022-07-11
*/
?>
<?php
/*
Template Name: Om oss 
*/
?>
<!-- This includes the header for the website -->
<?php get_header(); ?>

        <div class="container">
<!-- Adds the wordpress function so that a header image can be set straight from wordpress -->
            <div class="underImg"  style="background-image: url(<?php header_image(); ?>);"></div>
        </div>

        
<?php
    /* The loop is used to loop through any posts in the category "about", it prints the title and the content of the post to the website */    
      query_posts('category_name=about');
                if(have_posts()){
                    while(have_posts()){
                        the_post();
                            ?>
                            <section class="single-green-block">
                            <h1 class="about-h2"><?php the_title() ?></h1>
                                <span><?php the_content() ?></span>
                            </section>
                        <?php   
                    }
                }
            ?>

<h2 class="vilka-ar-vi">Vi som jobbar här</h2>

            <?php
            /* A query is made to only get posts from the category "vilka-ar-vi" and the loop is used to print the
               author and the content of the posts to the screen. The date and the time when the post was published is also displayed on the screen*/
            query_posts('category_name=vilka-ar-vi');
                        if(have_posts()){
                    while(have_posts()){
                        the_post();
                            ?>
                            
                            <div class="contact-block-staff">
                            <h3 class="contact-h3"><?php the_author() ?></h3>
                               <span><?php the_content() ?></span> <br/>
                                <b>Publicerad : <?= get_the_date(); ?> Kockan <?= get_the_time(); ?></b>

                    </div>
                            <?php   
                        }
                    }  
            ?>
<!-- includes the footer to the page -->
        <?php get_footer(); ?>