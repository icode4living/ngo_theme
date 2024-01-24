<?php
if(is_front_page()):
    get_header( 'home' );
    endif;
    ?>
<!--background blur-->
<div class="dark-bg"></div>
<section class="main">
<div class="container">
   <div class="grid-3 about wow bounceInUp" >
    <div class="card-lg dotted">
        <div class="img-section rounded">
            <img src="<?php echo get_theme_file_uri('./assets/img/jpof.jpg') ?>" alt="JOHN PAUL OKONMA  foundation NGO founder">
        </div>
        <div class="text-area">
            <p>Make each new week count by helping someone or just making someone smile</p>

        </div>
    </div>
    <div class="white-card">
        <img src="<?php echo get_theme_file_uri('./assets/img/mission.jpg') ?>" alt="JOHN PAUL OKONMA Foundation mission">
        <div class="text-area">
            <h2>Our Mission</h2>
            <p> Our primary objective is to uplift the underprivileged 
                 and bring joy to their lives</p>
                <a href="#" class="/about-us">Learn More</a>
        </div>
    </div>
    <div class="white-card">
       <img src="img/man.jpg" alt="..">
        <div class="text-area">
            <h2>Our Story</h2>

            <p>The JOHN PAUL OKONMA Foundation is a distinguished nonprofit 
                organization dedicated to positively impacting the lives of people in Nigeria and Africa as a whole.  </p>
                <a href="/about-us" class="read-more">Learn More</a>
        </div>
    </div>
   
    
    </div>
    <div class="items-container">
    <?php
    //The Query
    $args4 = array('category_name'=>'causes',
'order'=>'ASC','posts_per_page'=>3);
    $the_query = new WP_Query($args4);

   ?>
    <?php  if(have_posts()):while($the_query->have_posts()):$the_query->the_post(); ?>   

        <h1 class="center lg-text"><span class="first-word">Recent</span>  Causes</h1>
        <div class="grid-3">
      
 
 <?php if ( has_post_thumbnail()): ?>
    <div class="article-card relative">
                <img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title()?>">

                <div class="card-content">
                    <!--<div class="progress-bar">
                        <div class="progress-primary" style="--var:25%" role="progressbar">
                        </div>
                    </div>-->
                    <h2><?php the_title()?></h2>
                    <p><?php the_excerpt() ?> </p>
                        <a href="<?php the_permalink()?>" class="read-more top-btn"><i class="fa-regular fa-heart"></i> Support Us</a>

                </div>
            </div>
            <?php 
            endif;
  endwhile;
endif;?>
           
            
</div>
<?php wp_reset_postdata(); ?>
</section>
<div class="img-bg">
<div class="content-area">
    <h1>Our Vision</h1>
    <p>A world where no one dies again of hunger, 
        lack of medical care, and unjust hardship. </p>
</div>
<button class="play-btn" title="Play video"><i class="fa-solid fa-play"></i></button>
</div>
<div class="container-2">
<div class="review-container">
    <?php $recent_comments = get_comments( array(
        'number'=> 3, //number of comment,
        'status' => 'approve', //publish approved coment only
        'post_status'=> 'publish' // limit to published comment,

        
    ) );?>
    <?php if($recent_comments): ?>
<h1 class="lg-text center">What People<span class="first-word"> Say</span></h1>
<?php foreach((array) $recent_comments as $comment):?>
<div class="review-slide">
    <p><?php $comment->comment_content($comment->comment_post_ID )?></P>
    <small><?php $comment->comment_author( $comment->comment_post_ID ) ?></small>
</div>
<?php 
endforeach;
endif; ?>

<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>

</div>
<?php wp_reset_postdata(); ?>

</div>
<h1 class="lg-text center">Meet Our <span class="first-word">Volunteers</span> </h1>
    <p class="center">We firmly believe in the power of compassion and unity.
        </p>
<!-- <h1 class="lg-text">Volunteers</h1>-->
<div class="flex-container">
    <div class="grid-2">
    <div class="img-box">
                    <img src="<?php echo get_theme_file_uri('./assets/img/okonma_cynthia.jpg') ?>" 
                    alt="Okonma Cynthia">
                </div>
                <div class="img-box">
                    <img src="<?php echo get_theme_file_uri('./assets/img/jpof.jpg') ?>" alt="John Paul Okonma">
                </div>
                <div class="img-box">
                    <img src="<?php echo get_theme_file_uri('./assets/img/volunteer2.jpg') ?>" 
                    alt="John Paul Okonma Foundation Volunteer">
                </div>
        <!--
        <?php/* $query_images_args = array(
        'post_type' => 'attachment',
        'category_name' => 'volunteers',
        'post_mime_type' => 'image',
        'post_status' => 'inherit',
        'posts_per_page' =>4,
        'meta_key' => '_wp_attachment_image_alt',
        'orderby' => '_wp_attachment_image_alt',
        'order' => 'ASC',

        );
        $query_images =  new WP_Query($query_images_args );
        if($query_images ->have_posts()):
            while($query_images->have_posts()):
                $query_images->the_post();
                */
        ?>
        <div class="img-box">

            <img src="<?php /*
            $parsed= parse_url(wp_get_attachment_image_url($query_images->ID)); 
            $url=dirname($parsed['path']).'/' . rawurlencode(basename($parsed['path']));*/?>" alt="..">
           -->
        </div>
       <?php/* endwhile;
       endif;*/
       ?>
        </div>
        <?php //wp_reset_postdata(); ?>

<div class="value-list">

        <ul>
        <li><i class="fa-solid fa-check"></i> We are one of the best in humanitarian assistance</li>

<li><i class="fa-solid fa-check"></i> We are compassionate about the needy</li>
<li><i class="fa-solid fa-check"></i> We are proud agents of transformation</li>
<li><i class="fa-solid fa-check"></i> We are passionate about giving back to the community</li>
        </ul>
        <p>We are a reputable (NGO), based in the Delta state of the 
            Southern region of Nigeria with energetic professionals
             from all walks of life pulling resources together for laudable projects targeted at the 
            most vulnerable of our immediate communities to the rest of Africa.
        </p>
<a class="read-more" href="/join-us">Become a Volunteer</a>
</div>

</div>
<div class="items-container">
<?php if ( has_post_thumbnail()): ?>

<h1 class="lg-text center"><span class="first-word">Recent</span> News &amp; Events </h1>
<div class="grid-3">
<?php 
    $args1 = array('order'=>'ASC','posts_per_page'=>3,
  'orderby'=> 'title');
    $the_query1 =  new WP_Query($args1);
    ?>
    <?php while($the_query1->have_posts()): $the_query1-> the_post(); ?>
    <div class="article-card">
        <img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title() ?>">
        <div class="card-content">
            <!--<div class="progress-bar">
                <div class="progress-primary" style="--var:25%" role="progressbar">
                </div>
            </div>-->
            <h2><?php the_title() ?></h2>
            <p><?php the_excerpt() ?> </p>
                <a href="<?php the_permalink() ?>" class="read-more">
                <i class="fa-regular fa-heart"></i> Read More</a>

        </div>
    </div>

   
</div>
</div>
<?php 

endwhile;
endif; 
 
?>
        <?php get_footer();?>