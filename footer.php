<?php
/*
Created by : Beatrice Bjorn
For : Projekt - CMS - webbdesign för CMS, DT197G
Last updated : 2022-07-11
*/
?>

<!-- The code in this file makes the footer on the website -->
</main>
    <hr class="yellow-hr">
    <footer>
        <p>Gillar du oss här på Hoppet? <br />
            Gå då gärna in och följ oss på sociala medier!</p>
        <div class="social">
            <!-- The php-block "get_template_directory_uri();" creates the right path to the image through wordpress  -->
            <img class="mediaIcons" width="50" height="50" alt="facebook logotyp" src="<?= get_template_directory_uri(); ?>/images/facebook.png">
            <img class="mediaIcons" width="50" height="50" alt="instagram logotyp" src="<?= get_template_directory_uri(); ?>/images/insta.png">
            <img class="mediaIcons" width="50" height="50" alt="twitter logotyp" src="<?= get_template_directory_uri(); ?>/images/twitter.png"><br />
        </div>

<div class="deskFooter">
    <!-- "get_home_url();" creates a link to the front page of the website-->
       <a href="<?= get_home_url(); ?>" class="footerLinks">Start</a>

        <a href="about.html" class="footerLinks">Boende</a>

        <a href="news.html" class="footerLinks">Information</a>

      <a href="news.html" class="footerLinks">Kontakt</a><br />
</div>
<div class="mobileFooter">
    <!-- "get_home_url();" creates a link to the front page of the website -->
       <p><a href="<?= get_home_url(); ?>" class="footerLinks">Start</a></p>

        <p><a href="https://studenter.miun.se/~bebj2100/writeable/wordpress/boende/" class="footerLinks">Boende</a></p>

        <p><a href="https://studenter.miun.se/~bebj2100/writeable/wordpress/ridning/" class="footerLinks">Ridning</a></p>

        <p> <a href="https://studenter.miun.se/~bebj2100/writeable/wordpress/om-oss/" class="footerLinks">Om Oss</a></p>

     <p> <a href="https://studenter.miun.se/~bebj2100/writeable/wordpress/kontakta-oss/" class="footerLinks">Kontakt</a></p><br />
</div>
    <!-- "get_home_url();" creates a link to the front page of the website and "get_template_directory_uri();" 
    creates the right path to the image through wordpress-->
        <a href="<?= get_home_url(); ?>"><img class="footer-logo" width="130" height="90" alt="logotype"
                src="<?= get_template_directory_uri(); ?>/images/logo.svg"></a><br />
        <p>&copy; 2022 Beatrice Björn</p>

    </footer>

    <!-- "get_template_directory_uri();" creates the right path to the JavaScript-file through wordpress-->
    <script src="<?= get_template_directory_uri(); ?>/js/main.js"></script>

    <!-- This tills wordpress that this file is the footer for the website -->
    <?php wp_footer(); ?>
</body>

</html>