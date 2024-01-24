
        <?php get_header(); ?>
        <div class="dark-bg"></div>
        <div class="main">
<div class="news-container grey-bg">
    <div class="flex-container">
        <!--Blog goes here-->
        

        <div class="blog-container">
        <?php if(have_posts()):while(have_posts()): the_post();?>
            <div class="article-container">

                <div class="article-img">
                    <img src="<?php the_post_thumbnail_url() ?>" 
                    alt="<?php the_title() ?>">
                </div>
                <div class="excerpt">
                    <h1><?php the_title()?></h1>

                    <p><?php the_excerpt() ?></p>
                        <a href="<?php the_permalink() ?>" class="continue-reading">Continue Reading</a>
                </div>
            </div>
        
        </div>
     
        <div class="side-bar">
        <?php get_search_form(); ?>
            <div class="tags">
                <h2>Tags</h2>
                
                    <?php $tag_list = get_the_tag_list('<ul> <li class="tag-link"></li></ul>');
                    if($tag_list && ! is_wp_error($tag_list )){
                        $tag_list;
                    }
                    ?>
              
            

            </div>
        </div>
    </div>
    <?php 
endwhile;
endif;
?>
</div>
</div>
<?php get_footer();?>
       