<?php
/*
Created by : Beatrice Bjorn
For : Projekt - CMS - webbdesign för CMS, DT197G
Last updated : 2022-07-11
*/
?>
<!-- gets the header to the website -->
<?php get_header(); ?>


        <section class="green-blocks-sec"> 
            <?php
            /*the loop is used to loop through any posts that contain any feautured images and prints the 
            title, the feautured image, the content, the date and time whe the post was published an who wrote the post*/
            if(have_posts()){
                    while(have_posts()){
                        the_post();
                        if(has_post_thumbnail()){
                            ?>
                             <article class="single-news-block">
                            <h1 class="single-h1"><?php the_title() ?></h1>
                              <div class="single-img"><?php the_post_thumbnail('green-block-large'); ?></div>
                                <span><?php the_content() ?></span>
                                <?php
                                    if(in_category('nyheter-event-poster')) {
                                        ?>
                                        <b class="authorDate">Skriven av : <?= get_the_author(); ?></b><br />
                                        <b class="authorDate">Publicerad : <?= get_the_date(); ?> , Klockan <?= get_the_time(); ?></b>
                                        <?php
                                    }
                                ?>
                                </article>
                            <?php   

                        }
                    }
                }
            ?>
        </section>
        <!-- An if-statement that checks weather the post above belongs to either of the categorys "boende" or "ridning" 
             If the statement is true a query is made to get one post from the category "kontakt"
             The loop is used to print the content of the post which in this case is a contact form -->
        <?php
        if(in_category('boende') || in_category('ridning')){
            query_posts('category_name=bokning&posts_per_page=1');
                    if(have_posts()){
                    while(have_posts()){
                        the_post();
                            ?>
                            <h2 class="contact-h2">Intresserad? Kontakta oss via formuläret nedan!</h2>
                            <div class="contact-block">
                               <?php the_content() ?> 
                            </div>
                            <?php   
                        }
                    }  
                }
            ?>
        <!-- gets the footer for the website -->
        <?php get_footer(); ?>