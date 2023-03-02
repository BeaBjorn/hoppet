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
            <!-- The php-block "get_template_directory_uri();" creates the right path to the image through wordpress  -->
            <img class="indexImg" alt="black and white inage of horse" src="<?= get_template_directory_uri(); ?>/images/front_horse.jpg">
            <!-- Checks if any information has been posted to the widget area and displays the information if available-->
            <?php if(is_active_sidebar('yellow-puff')) : ?>
            <div class="puff"><?php dynamic_sidebar('yellow-puff'); ?></div>
            <div class="mobile-puff"><?php dynamic_sidebar('yellow-puff'); ?></div>
            <?php endif; ?>

            <h1>Välkommen till oss på Hoppet</h1>
            <h2 class="h2-index">Ett stall i hjärtat av Dalarna</h2>
        </div>

        <hr />

        <section class="green-blocks-sec">

            <article class="green-blocks">
            <!-- This php-block uses query_posts to only display posts from the category "startsidan-ridning" 
            and is set to display one post only.  -->    
            <?php
            query_posts('category_name=info-ridning&posts_per_page=1');
            /* The if-statement checks if there are any posts and a while loop is used to loop through all the posts available
               The second if-statement checks if theres a featured image in the post. If there is an image in the post the post 
               is displayed on the website.
               "the_title" prints the title of the post, "the_post_thumbnail" prints the featured image in the post, "the_excerpt" 
               prints a small part of the main text of the post with a link to the full version of the post underneath. */    
            if(have_posts()){
                    while(have_posts()){
                        the_post();

                        if(has_post_thumbnail()){
                            ?>
                            <h3><?php the_title() ?></h3>
                                <span><?php the_post_thumbnail('green-block-small'); ?></span>
                                <?php the_excerpt() ?>
                                <a href="https://studenter.miun.se/~bebj2100/writeable/wordpress/ridning/" class="green-block-btn">Mer Info . . . </a>
                            <?php   
                        }
                    }
                }
            ?>


            </article>

            <article class="green-blocks">
            <?php
            /* "wp_reset_query" resets the query previously made so that all posts in all categorys is available again. */
            wp_reset_query();
            /* This php-block uses query_posts to only display posts from the category "startsidan-boende" 
            and is set to display one post only.  */    
                  query_posts('category_name=info-boende&posts_per_page=1');
            /* The if-statement checks if there are any posts and a while loop is used to loop through all the posts available
               The second if-statement checks if theres a featured image in the post. If there is an image in the post the post 
               is displayed on the website.
               "the_title" prints the title of the post, "the_post_thumbnail" prints the featured image in the post, "the_excerpt" 
               prints a small part of the main text of the post with a link to the full version of the post underneath. */  
            if(have_posts()){
                while(have_posts()){
                    the_post();
                    ?>
                    <h3><?php the_title() ?></h3>
                    <span><?php the_post_thumbnail('green-block-small'); ?></span>
                        <?php the_excerpt() ?>
                        <a href="https://studenter.miun.se/~bebj2100/writeable/wordpress/boende/" class="green-block-btn">Mer Info . . . </a>
                    <?php
                }
            }
        ?>
            </article>
            <!-- Checks if any information has been posted to the widget area and displays the information if available-->
            <?php if(is_active_sidebar('purple-puff')) : ?> 
                 <?php dynamic_sidebar('purple-puff'); ?>
            <?php endif; ?>

        </section>

        <hr class="yellow-hr">
        <h4 class="h4-index">Nyheter</h4>
        <section class="latestNews">
       
                <?php 
                /* "wp_reset_query" resets the query previously made so that all posts in all categorys is available again. */
                     wp_reset_query();
                /* This php-block uses query_posts to only display posts from the category "startsidan-boende" 
                and is set to display one post only.  */        
                     query_posts('category_name=nyheter-event-poster&posts_per_page=3');
               /* The if-statement checks if there are any posts and a while loop is used to loop through all the posts available
               The second if-statement checks if theres a featured image in the post. If there is an image in the post the post 
               is displayed on the website.
               "the_title" prints the title of the post, "the_post_thumbnail" prints the featured image in the post, "the_excerpt" 
               prints a small part of the main text of the post with a link to the full version of the post underneath. */  
               if(have_posts()){
                   while(have_posts()){
                       the_post();
                       if(has_post_thumbnail()){
                ?>

                <div>   
                <h6 class="h6-green"><?php the_title(); ?></h6>
                <!-- "the_author" prints the name of the person who published the post -->
                    <p class="bold-reviews">Skriven av : <?php the_author(); ?></p>
                <!-- "get_the_date" prints the date when the post was published and "get_the_time" prints the time when the post was published-->    
                    <p class="bold-reviews">Datum : <?= get_the_date(); ?> , Klockan <?= get_the_time(); ?></p><br /><br />
                        <span><?php the_post_thumbnail('green-block-small'); ?></span>
                            <?php the_excerpt(); ?>
                        <span>
                            <!-- "the_permalink" links to the full version of the post -->
                            <a class="readMoreNews" href="<?php the_permalink(); ?>">Läs mer..</a>
                       </span>
                </div>
                <?php 
                }                   
              }
            }
         ?>

        </section>


        <hr class="yellow-hr">
        <h5 class="h4-index">Omdömmen</h5>
        <section class="reviews">
            <div>
                <h6 class="h6-yellow">Toppenläger</h6>
                <p class="bold-reviews">Namn : Johanna Lööv</p>
                <p class="bold-reviews">Datum : 2022-15-08</p><br /><br />
                <p> deserunt consequuntur expedita.nt consequuntur expedita.et doloribus dolores, dicta dignissimos
                    blanditiis eum accusantiumLorem, ipsum dolor sit amet consectetur adipisicing elit. Rem natus
                    molestiaea.</p>
            </div>
            <div>
                <h6 class="h6-yellow">Bra för alla typer av ryttare</h6>
                <p class="bold-reviews">Namn : Anders Larsson</p>
                <p class="bold-reviews">Datum : 2021-10-06</p><br /><br />
                <p> deserunt consequuntur expedita.nt consequuntur expedita.et doloribus dolores, dicta dignissimos
                    blanditiis eum accusantiumLorem, ipsum dolor sit amet consectetur adipisicing elit. Rem natus
                    m\
                    odit error quis deleniti ut
                    deserunt consequuntur expedita.</p>
            </div>
            <div>
                <h6 class="h6-yellow">Ville inte åka hem</h6>
                <p class="bold-reviews">Namn : Amanda Lindquist</p>
                <p class="bold-reviews">Datum : 2021-15-03</p><br /><br />
                <p> deserunt consequuntur expedita.nt consequuntur expedita.et doloribus dolores, dicta dignissimos
                    \uma.</p>
            </div>
        </section>

        <!-- includes the footer of the website -->
        <?php get_footer(); ?>