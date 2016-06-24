 $(document).ready(function(){     
     
    $('.mobileMenuIcon').on('click', function(e){ 
        $(".mainMenuBlock").animate({"right":"15px"}, "slow");
        
        $(".mobileMenuIcon").hide();
        $(".mobileMenuIconClose").show();
    });
    
    $('.mobileMenuIconClose').on('click', function(e){ 
        $(".mainMenuBlock").animate({"right":"-300px"}, "slow");
        
        $(".mobileMenuIcon").show();
        $(".mobileMenuIconClose").hide();
    });     
     
    $('.top-banner .bxslider').bxSlider({
        mode: 'fade',
        easing: 'easeOutElastic',
        auto: true,
        autoControls: true,
        autoControls: false,
        pager: false,
        controls: false,
        speed: 1000
        
    });
    
    /* Animations on scroll */
    $('.top-banner').waypoint(function(direction) {
        $('.top-banner').addClass('animated pulse');
    }, {
        offset: '70%'
    });
    
    $('.home-posts').waypoint(function(direction) {
        $('.home-posts').addClass('animated pulse');
    }, {
        offset: '100%'
    });
    
     $('.review-block').addClass('animated fadeIn');
    
    
 });