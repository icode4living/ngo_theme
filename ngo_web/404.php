<?php
if(is_front_page()):
    get_header( 'home' );
    endif;
    ?>
  <div class="dark-bg"></div>
  
  <div class="bg-grey">
  <h1>Ooops! You weren't supposed to see this</h1>
<p>The page you are looking for no longer exists.
    Return to the <a href="/">home page</a> and remember: you haven't seen anything.
</p>
<div class="form-search">
    <h2 style="text-align: center;">Try searching</h2>
<?php get_search_form(); ?>

</div>
<h3 class="center">Site Map</h3>
<ul>
    <?php $page = get_pages(array('orderby'=>'name',
'order'=>'ASC'));
foreach($pages as $page):

?>

<?php  
    $page_id = get_cat_ID( $page->name );
  $page_link = get_category_link( $page_id ); ?>
    <li class="center" style=" display:block;list-style:none; padding:8px 12px;"><a href="<?php echo esc_url( $page_link ); ?>"
    title="<?php echo $page->name; ?>"><?php echo $page->name; ?></a>
</li>
<?php endforeach ?>


</ul>
  </div>

<?php get_footer();?>