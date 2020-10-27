<?php get_header(); ?>

<video class="video" src="" controls alt="Your browser does not support the video tag."></video> 
                <div class="shareLabel">
                    <table>
                        <tr>
                            <th class="leftTh"><p>Audax, castus axonas inciviliter attrahendam de teres.</p></th>
                            <th class="rightTh"><i class="fas fa-link"> 70</i><i class="fas fa-heart"> 150</i><i
                                    class="fas fa-share-alt"></i></th>
                        </tr>
                    </table>
                </div>
                <div class="changeView">
                    <div class="changeViewText">Change view :
                        <button class="changeViewButtonsLeft" onclick="listView()"><i class="fas fa-align-justify"></i>
                        </button>
                        <button class="changeViewButtonsRight" onclick="gridView()"><i class="fas fa-th-large"></i>
                        </button>
                    </div>
                </div> 
    <div class="contentList" id="content">
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="contentBlock">
            <div class="mainRectangle" id="mainRectangle">
                <div class="videoCircle"><img
                            src="<?php echo get_template_directory_uri(); ?>/insideCircle.6f213a87.png"
                            alt="video icon"></div>
                <img class="image" src="<?php echo get_template_directory_uri(); ?>/preview.c45163be.png" alt="Preview">
                <div class="descriptionList">
                    <div class="topTextDescList"><?php the_title(); ?></div>
                    <div class="lineList"><i class="fas fa-heart"> 150</i><i class="fa fa-clone"> 30</i><i
                                class="fas fa-clock"> 2 days ago</i></div>
                    <div class="bottomTextDescList"><?php the_content(); ?>
                    </div>
                    <button class="rightBottomButtonList"><i class="fas fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
	<?php get_footer(); ?>    
</div>
<?php endif; ?>
