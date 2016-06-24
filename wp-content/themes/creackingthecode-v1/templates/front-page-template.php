<?php
/**
 * Template Name: Front Page Template
 */
get_header();
?>

<div class="top-banner">
    <ul class="bxslider">
      <li>
          <img src="<?php bloginfo('template_directory'); ?>/images/forUpload/homebanner.jpg" />
           <div class="banner-abs-content">
                <div class="text">Get Your Dream Clients Now</div>
                <div class="line"></div>
                <div class="button">
                    <a href="#" class="start-btn">Start here</a>
                </div>
            </div>
      </li>
      <li>
          <img src="<?php bloginfo('template_directory'); ?>/images/forUpload/homebanner.jpg" />
           <div class="banner-abs-content">
               <div class="text">Designed <br/>For<br/> Success</div>
                <div class="line"></div>
                <div class="button">
                    <a href="#" class="start-btn">Start here</a>
                </div>
            </div>
      </li>
    </ul>   
</div>

<div class="row home-posts">
    
    <div class="col-md-4">
        <div class="image">
            <img src="<?php bloginfo('template_directory'); ?>/images/forUpload/postPic1.png" />
        </div>
        <div class="content">
            <h1><a href="#">Joy for Life</a></h1>
            <div class="line"></div>
            <div class="text">
                Buy 1 book and WIN food voucher.
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="image">
            <img src="<?php bloginfo('template_directory'); ?>/images/forUpload/postPic2.png" />
        </div>
        <div class="content">
            <h1><a href="#"> Designed For Success</a></h1>
            <div class="line"></div>
            <div class="text">
                Buy 5 books and Win Ferrari t-shirts.
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="image">
            <img src="<?php bloginfo('template_directory'); ?>/images/forUpload/postPic3.png" />
        </div>
        <div class="content">
            <h1><a href="#">Spoil Yourself</a></h1>
            <div class="line"></div>
            <div class="text">
                Buy 10 books and WIN month Gym + Spa package.
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>