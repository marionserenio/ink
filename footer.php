<footer>
    <div class="row">
        <div class="large-12 columns">
            <ul class="bottom-nav">
                <li><a href="#">About</a></li>
                <li><a href="#">Press</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Pricing</a></li>
                <li><a href="#">We're Hiring</a></li>
                <li><a href="#">Affiliates</a></li>
                <li><a href="#">Faq</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
        <div class="large-8 columns">
            <p class="disclaimer">
                <strong>Copyright ©2013 Inklocations.com Corp. All rights reserved </strong><br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut blandit elementum ligula, in 
                facilisis massa. Aenean eget ante tincidunt, adipiscing augue ut, blandit urna. 
                Aliquam
            </p>
        </div>
        <div class="large-4 columns">
            <ul class="social-nav">
                <li><a href="#"><i class="icon-twitter"></i></a></li>
                <li><a href="#"><i class="icon-facebook-squared"></i></a></li>
                <li><a href="#"><i class="icon-gplus-squared"></i></a></li>
            </ul>
        </div>
    </div>
</footer>


        <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo bloginfo('template_directory') ?>/js/vendor/jquery-1.9.1.min.js"><\/script>')</script>-->
        <script src="<?php echo bloginfo('template_directory') ?>/js/vendor/jquery-1.9.1.min.js"></script>
        <script src="<?php echo bloginfo('template_directory') ?>/js/foundation.min.js"></script>
        <script src="<?php echo bloginfo('template_directory') ?>/js/plugins.js"></script>
        <script src="<?php echo bloginfo('template_directory') ?>/js/main.js"></script>
        <script src="<?php echo bloginfo('template_directory') ?>/js/gmap3.min.js"></script>
        <?php   
            if(get_post_type() == 'shops'){
                require_once('js/single-shop-script.php');
            }else{

            }
        ?>
        <script type="text/javascript">
            $(document).foundation();
        </script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    <?php wp_footer(); ?>
    </body>
</html>
