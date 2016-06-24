<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<link rel="shortcut icon" href="./favicon.ico">
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	
	

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    
    <div class="full-content-block">
        
        <div class="left-sidebar">
            <div class="logo">
<!--                <a href="<?php echo home_url(); ?>">
                    logo
                </a>-->
            </div>
            
             <div class="mainMenuBlock">
                <?php 

                    wp_nav_menu( array(
                        //'menu' => 'Main Menu',
                        'container_class' => 'main_menu', 
                        'theme_location' => 'main-menu' 
                    ) );
                ?>
            </div>
            
            
            <div class="review-block">               
                
                <div class="clearfix">
                    <div class="image pull-left">
                        
                        <section class="hight-light-tmp">
           
                                <div class="book-today-hightlight">

                                    <div class="book-hightlight">
                                        <ul class="bk-list clearfix">
                                            <li style="">
                                                <div class="bk-book book-2 bk-bookdefault" style="">
                                                    <div class="bk-front">
                                                        <div class="bk-cover" style="background-image: url(<?php echo bloginfo('template_directory');?>/images/front.jpg);">                                            
                                                        </div>
                                                    </div>
                                                    <div class="bk-back">
                                                        <div class="page-header">
                                                            <img  src="<?php echo bloginfo('template_directory');?>/images/back.jpg" class="attachment-Page Header" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="bk-right" style=""></div>
                                                    <div class="bk-left" style="">                                       
                                                        <h2><span>Cracking The Code</span></h2>
                                                    </div>
                                                </div>
                                                <div class="bk-info detail-book-action" style="">
                                                    <div class="flip-book">
                                                        <button class="bk-bookback">Flip to back</button>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                    </div>

                                </div>

                        </section>
                        
                        
                        
                        <!--<img class="header-logo" src="<?php echo bloginfo('template_directory'); ?>/images/book.png" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>"/>-->
                        <!--<img class="img-circle" src="<?php echo bloginfo('template_directory'); ?>/images/forUpload/reviewPic1.png" />-->
                    </div>
                    <div class="author-meta">
                        <div class="name">Jack Schwager                        
                            <span class=""> author of Hedge Fund Market Wizards</span>
                        </div>
                        
                        <div class="text">
                            “Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            Nulla rhoncus libero sit amet gravida dignissim. ”
                        </div>
                        
                    </div>
                </div>
                
            </div>
            
            <div class="social-icons">
                <a href="#" class="fa-social">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="#" class="fa-social">
                    <i class="fa fa-linkedin"></i>
                </a>
            </div>
            
        </div>
        
        <div class="right-content">
    
    
    
    
        
       