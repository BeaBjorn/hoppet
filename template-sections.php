
<?php
/*
Created by : Beatrice Bjorn
For : Projekt - CMS - webbdesign för CMS, DT197G
Last updated : 2022-07-11
*/
?>
<?php
/*
Template Name: Grönt info-block och "läs mer"-spalter
*/
?>
<!-- This includes the header for the website -->
<?php get_header(); ?>

        <div class="container">
             <!-- Adds the wordpress function so that a header image can be set straight from wordpress -->
            <div class="underImg"  style="background-image: url(<?php header_image(); ?>);"></div>
        </div>


        <section class="single-green-block">

        <?php
            if(have_posts()){
                while(have_posts()){
                    the_post();
                    ?>
                    <h1><?php the_title(); ?></h1>
                    <span><?php the_content(); ?></span>
                    <?php
                }
            }
        ?>
        </section>

        <section class="green-blocks-sec">

           
            <?php
            /*the loop is used to loop through any posts that contain any feautured images and prints the 
            title, the feautured image, a small part of the content of the post twith a link to the full version of the post. */
            if(have_posts()){
                    while(have_posts()){
                        the_post();

                        if(has_post_thumbnail()){
                            ?>
                             <article class="green-blocks">
                            <h2 class="white-h2"><?php the_title() ?></h2>
                              <span><?php the_post_thumbnail('green-block-small'); ?></span>
                                <?php the_excerpt() ?>
                                <a href="<?php the_permalink(); ?>" class="green-block-btn">Mer info . . . </a>
                                </article>
                            <?php   
                        }
                    }
                }
            ?>
        </section>
        <!-- Adds the footer to the website -->
        <?php get_footer(); ?>