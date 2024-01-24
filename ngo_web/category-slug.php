<?php get_header() ?>
<div class="news-container grey-bg">

<?php if(have_posts()):while(have_posts()): the_post();?>
            <div class="article-container">
            <h1><?php the_title()?></h1>

                <div class="article-img">
                    <img src="<?php the_post_thumbnail_url() ?>" 
                    alt="<?php the_title() ?>">
                </div>
                <div class="excerpt main-article">

                    <p><?php the_excerpt() ?></p>
                </div>
            </div>
            <?php 
endwhile;
endif;
?>
</div>
<?php get_footer() ?>