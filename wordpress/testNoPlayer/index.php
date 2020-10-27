<?php get_header(); ?>

    <div class="contentList" id="content">
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        
    <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
	<?php get_footer(); ?>    
</div>
<?php endif; ?>

