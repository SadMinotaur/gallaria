<?php get_header(); ?>

<div class="contentList" id="content">
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="contentBlock">
  <div class="mainRectangle" id="mainRectangle">
  <div class="videoCircle"><img src="<?php echo get_template_directory_uri(); ?>/insideCircle.6f213a87.png" alt="video icon"></div>
  <img class="image" src="<?php echo get_template_directory_uri(); ?>/preview.c45163be.png" alt="Preview">
  <div class="descriptionList">
  <div class="topTextDescList"><?php the_title(); ?></div>
  <div class="lineList"><i class="fas fa-heart"> 150</i><i class="fa fa-clone"> 30</i><i class="fas fa-clock"> 2 days ago</i></div>
  <div class="bottomTextDescList"><?php the_content(); ?>
</div>
<button class="rightBottomButtonList"><i class="fas fa-arrow-right"></i></button>
</div>
</div>
</div>
<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
    <div class="navigation index">
       <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
       <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
    </div><!--end navigation-->
<?php else : ?>
<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>