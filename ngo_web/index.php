<?php get_header(); ?>
        <div class="dark-bg"></div>
        <div class="main">
<div class="news-container grey-bg">
<?php if(have_posts()):while(have_posts()): the_post();?>

<?php the_content()?>
</div>
<?php 
endwhile;
endif;
?>
        </div>
        <?php get_footer();?>