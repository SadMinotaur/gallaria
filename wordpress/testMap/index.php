<?php get_header(); ?>

    <div class="contentList" id="content">
    <div id="googleMap" style="width:100%;height:400px;"></div>

            <script>
                function myMap() {
                var mapProp= {
                center:new google.maps.LatLng(51.508742,-0.120850),
                zoom:5,
            };
                var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
            }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBAW-jhU3cDuMag9hPsPyjg2EfKLv_Yvuw&callback=myMap"></script>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        
    <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
	<?php get_footer(); ?>    
</div>
<?php endif; ?>

