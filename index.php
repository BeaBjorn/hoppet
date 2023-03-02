<?php
/*
Created by : Beatrice Bjorn
For : Projekt - CMS - webbdesign för CMS, DT197G
Last updated : 2022-07-11
*/
?>
<!-- This includes the header for the website -->
<?php get_header(); ?>

        <div class="container">
            <!-- Adds the wordpress function so that a header image can be set straight from wordpress -->
            <div class="underImg"  style="background-image: url(<?php header_image(); ?>);"></div>
        </div>

<!-- the loop is used to loop through any posts that does not contain any feautured images and prints the 
     title and the content of the posts on the website-->
        <section class="single-green-block">
        <?php
            if(have_posts()){
                while(have_posts()){
                    the_post();
                    ?>
                    <h1><?php the_title() ?></h1>
                        <p><?php the_content() ?></p>
                    <?php
                }
            }
        ?>
        </section>

        <section class="green-blocks-sec">
        <!-- the loop is used to loop through any posts that does contain feautured images and prints the 
             title, the image and a short version of the main content of the post with a link to the full post on the website-->
            <?php                
            if(have_posts()){
                    while(have_posts()){
                        the_post();

                        if(has_post_thumbnail()){
                            ?>
                             <article class="green-blocks">
                            <h3><?php the_title() ?></h3>
                              <img class="newsImg" <?php the_post_thumbnail('green-block-image'); ?> >
                                <p><?php the_excerpt() ?></p>
                                <a href="<?php the_permalink(); ?>" class="green-block-btn">Läs mer . . . </a>
                                </article>
                            <?php   
                        }
                    }
                }
            ?>
        </section>

        <!-- Adds the footer to the website -->
        <?php get_footer(); ?>