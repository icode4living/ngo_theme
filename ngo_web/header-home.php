<!DOCTYPE html> 
<html lang="en">
    <head>
    <meta charset="<?php language_attributes();?> ">
    <meta name="description" content="JOHN PAUL OKONMA Foundation is a 
    nonprofit and nonpolitical organization to help the people of Nigeria and Africa at large">
<meta name="viewport" content="width=device-width">
<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
crossorigin="anonymous" referrerpolicy="no-referrer" />
       <!-- <link rel="stylesheet" href="css/style.css">  
        <link rel="stylesheet" href="css/mobile.css">-->

        <title>Index</title>
      <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" 
        referrerpolicy="no-referrer"></script>-->
        <?php wp_head();?>
    </head>
<body>
    <header>
        <div class="top-nav-container">
<div class="top-nav">
<div class="logo">
    <a href="/">
            <img src="<?php echo get_theme_file_uri('./assets/img/logo.svg') ?>" alt="Logo" />
        </a>
        </div>
        <div class="contact-section">
            <ul>
                <li class="nav-item">
                    <i class="fa fa-phone"></i>
                    <a href="tel:+2348064624882">
                    +234 806 462 4882
                    </a>
                </li>
                <li class="nav-item">
                    <i class="fa-regular fa-envelope"></i>
                    <a href="mailto:info@johnpaulokonmafdn.org">
                    info@johnpaulokonmafdn.org
                    </a>
                </li>
                <li class="nav-item">
                    <i class="fa-solid fa-location-dot"></i>
                    <a>
                    18, Sir Emmanuel Okonkwo Street, 
                    Off Old Anwai Road, Asaba
                    </a>
                </li>
            </ul>
        </div>
</div>
      </div>  
        </div>
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
        <div class="caption-text">
            <h1>The John Paul Okonma Foundation</h1>
            <p>
            Empowering individuals to become self-sufficient and 
            positively impacting the lives of people
            </p> 
            <div class="link-btn-group">
                <a href="/donate" class="primary-btn">Donate Now</a>
                <a href="/join-us" class="primary-btn">Join Us</a>
            </div>
        </div>
       
        <div class="grid-container">
           
            <div class="sm-grid">
                <i class="fa-solid fa-heart-pulse"></i>                
                <h2>Medical Outreach</h2>
                <p>We organize medical outreach programs that provide free healthcare services</p>

            </div>
            <div class="sm-grid
            ">
                <i class="fa-solid fa-person-dress"></i>               
                 <h2>Empowerment of the Poorest</h2>
                 <p>We actively supports initiatives that uplift
                     the most vulnerable members of society</p>
            </div>
            
            <div class="sm-grid">
                <i class="fa-solid fa-graduation-cap"></i>                
                <h2>Education Support </h2>
                <p>Our foundation is dedicated to supporting education initiatives
                    .</p>
            </div>
        </div>
    </header>
    <!--background blur-->
    <div class="dark-bg"></div>