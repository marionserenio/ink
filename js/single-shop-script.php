        <script type="text/javascript">
            var shopaddress =  "<?php echo $street = get_post_meta($post->ID, '_street', true); ?><?php echo $address = get_post_meta($post->ID, '_address', true);?> <?php echo $state = get_post_meta($post->ID, '_state', true); ?> <?php echo $postcode = get_post_meta($post->ID, '_postcode', true); ?> <?php echo $country = get_post_meta($post->ID, '_country', true); ?>";

            $('.shop-map').gmap3({
             map: {
                options: {
                  maxZoom: 14 
                }  
             },
             marker:{
                address: shopaddress,
                options: {
                 icon: new google.maps.MarkerImage(
                   "<?php echo bloginfo('template_directory') ?>/img/map_icon_big.png",
                   new google.maps.Size(48, 53 , "px", "px")
                 )
                }
             }
            },
            "autofit" );
            </script>