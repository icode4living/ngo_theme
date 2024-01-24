<!DOCTYPE html> 
<html lang="en">
    <head>
    <meta charset="<?php language_attributes();?> ">
    <meta name="viewport" content="width=device-width">
<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
crossorigin="anonymous" referrerpolicy="no-referrer" />
      <!--  <link rel="stylesheet" href="css/style.css">  
        <link rel="stylesheet" href="css/blog.css">  

        <link rel="stylesheet" href="css/mobile.css">
        <title>Blog</title>-->
      <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" 
        referrerpolicy="no-referrer"></script>-->
        <?php wp_head();?>

    </head>
<body>
    <div>
      <!-- <div class="top-nav-container">
<div class="top-nav">
<div class="logo">
    <a href="/index.html">
            <img src="/images/logo.png" alt="Logo" />
        </a>
        </div>
        <div class="contact-section">
            <ul>
                <li class="nav-item">
                    <i class="fa fa-phone"></i>
                    <a href="tel:095678999">
                        905678899999
                    </a>
                </li>
                <li class="nav-item">
                    <i class="fa-regular fa-envelope"></i>
                    <a href="mailto:info@example.com">
                        info@example.com
                    </a>
                </li>
                <li class="nav-item">
                    <i class="fa-solid fa-location-dot"></i>
                    <a href="mailto:info@example.com">
                        Xyz road, Ibadan Oyo state
                    </a>
                </li>
            </ul>
        </div>
</div>
      </div>  
        </div>
    -->
        <div class="main-nav" id="main-nav">
            <i class="fa-solid fa-xmark close-btn" id="close-btn"></i>
            <div class="m-btn">
                <i class="fa-solid fa-bars open-menu"></i>
            </div>
            <ul class="main-nav-container">
    <li class="link-item"><a href="/">Home</a></li>
    <?php $page = get_pages(array('orderby'=>'name',
'order'=>'ASC'));
foreach($pages as $page):

?>

<?php  
    $page_id = get_cat_ID( $page->name );
  $page_link = get_category_link( $page_id ); ?>
    <li class="link-item"><a href="<?php echo esc_url( $page_link ); ?>"
    title="<?php echo $page->name; ?>"><?php echo $page->name; ?></a>
</li>
<?php endforeach ?>



</ul>
        </div>
        
        </div>
        
        <div class="dark-bg"></div>