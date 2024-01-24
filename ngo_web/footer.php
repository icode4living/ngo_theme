<footer>
            <div class="footer-container">
                <div class="grid-4">
    <div class="footer-items">
    <h2>Useful Links</h2>
    <ul>
    <?php $page = get_pages(array('orderby'=>'name',
'order'=>'ASC'));
foreach($pages as $page):

?>
<?php  
    $page_id = get_cat_ID( $page->name );
  $page_link = get_category_link( $page_id ); ?>
        <li class="footer-link"><a href="<?php echo esc_url( $page_link ); ?>" title="<?php echo $page->name; ?>">
        <?php echo $page->name; ?></a></li>
        <?php endforeach ?>
    </ul>
    </div>
    <div class="footer-items">
        <h2>Reach Out to Us</h2>
        <ul>
            <li class="footer-link"><a href="tel:33000444">33000444</a></li>
            <li class="footer-link"><a href="mailto:mail@excample.com">Mail@example.com</a></li>
            <li class="footer-link"> 18, Sir Emmanuel Okonkwo Street, 
                    Off Old Anwai Road, Asaba</li>
        </ul>
        </div>
        <div class="footer-items">
            <h2>Reach Out to Us</h2>
            <ul>
                <li class="social"><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                <li class="social"><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li class="social"><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                <li class="social"><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
    
                </ul>
                </div>
                <div class="footer-items">
                    <h2>Newsletter</h2>
                    <p>Be the first to know about our programs and events</p>
                    <form class="news-letter">
                        <input class="input" type="email" name="email" placeholder="Enter your Email">                    <button>I'm in</button>
    
                    </form>
                </div>
            </div>
            </div>
            <div class="copy-right">
                &copy; 2024
            </div>
        </footer>
    
       
        <?php wp_footer(); ?>

    </body>
    
    </html>
