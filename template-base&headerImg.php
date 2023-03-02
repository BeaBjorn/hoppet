
<?php
/*
Created by : Beatrice Bjorn
For : Projekt - CMS - webbdesign för CMS, DT197G
Last updated : 2022-07-11
*/
?>
<?php
/*
Template Name: grönt block med headerbild
*/
?>
<!-- This includes the header for the website -->
<?php get_header(); ?>

        <div class="container">
             <!-- Adds the wordpress function so that a header image can be set straight from wordpress -->
            <div class="underImg"  style="background-image: url(<?php header_image(); ?>);"></div>
        </div>

        <section class="green-blocks-sec">
            <?php
          /*the loop is used to loop through any posts that contain any feautured images and prints the 
            title, the feautured image, the content, the date and time whe the post was published an who wrote the post*/
                if(have_posts()){
                    while(have_posts()){
                        the_post();
                        ?>
                             <article class="single-news-block">
                                 <h1 class="white-h2"><?php the_title() ?></h1>
                              <span> <?php the_post_thumbnail('green-block-image'); ?> </span>
                                <span><?php the_content() ?></span>
                                        <b class="authorDate">Skriven av : <?= get_the_author(); ?></b>
                                        <b class="authorDate">Publicerad : <?= get_the_date(); ?> Kockan <?= get_the_time(); ?></b>
                                </article>
                            <?php   
                        }
                    } 
            ?>
        </section>

<!-- gets the footer for the website -->
        <?php get_footer(); ?>