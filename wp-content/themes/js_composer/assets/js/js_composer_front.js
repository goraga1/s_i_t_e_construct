document.documentElement.className+=' js_active ';document.documentElement.className+='ontouchstart'in document.documentElement?' vc_mobile ':' vc_desktop ';(function(){var prefix=['-webkit-','-o-','-moz-','-ms-',""];for(var i in prefix){if(prefix[i]+'transform'in document.documentElement.style)document.documentElement.className+=" vc_transform ";}})();jQuery(window).load(function(){});var vc_js=function(){vc_twitterBehaviour();vc_toggleBehaviour();vc_tabsBehaviour();vc_accordionBehaviour();vc_teaserGrid();vc_carouselBehaviour();vc_slidersBehaviour();vc_prettyPhoto();vc_googleplus();vc_pinterest();vc_progress_bar();vc_plugin_flexslider();vc_google_fonts();window.setTimeout(vc_waypoints,1500);};jQuery(document).ready(function($){window.vc_js();});if(typeof window['vc_plugin_flexslider']!=='function'){function vc_plugin_flexslider($parent){var $slider=$parent?$parent.find('.wpb_flexslider'):jQuery('.wpb_flexslider');$slider.each(function(){var this_element=jQuery(this);var sliderSpeed=800,sliderTimeout=parseInt(this_element.attr('data-interval'))*1000,sliderFx=this_element.attr('data-flex_fx'),slideshow=true;if(sliderTimeout==0)slideshow=false;this_element.is(':visible')&&this_element.flexslider({animation:sliderFx,slideshow:slideshow,slideshowSpeed:sliderTimeout,sliderSpeed:sliderSpeed,smoothHeight:true});});}}if(typeof window['vc_twitterBehaviour']!=='function'){function vc_twitterBehaviour(){jQuery('.wpb_twitter_widget .tweets').each(function(index){var this_element=jQuery(this),tw_name=this_element.attr('data-tw_name');tw_count=this_element.attr('data-tw_count');this_element.tweet({username:tw_name,join_text:"auto",avatar_size:0,count:tw_count,template:"{avatar}{join}{text}{time}",auto_join_text_default:"",auto_join_text_ed:"",auto_join_text_ing:"",auto_join_text_reply:"",auto_join_text_url:"",loading_text:'<span class="loading_tweets">loading tweets...</span>'});});}}if(typeof window['vc_googleplus']!=='function'){function vc_googleplus(){if(jQuery('.wpb_googleplus').length>0){(function(){var po=document.createElement('script');po.type='text/javascript';po.async=true;po.src='https://apis.google.com/js/plusone.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(po,s);})();}}}if(typeof window['vc_pinterest']!=='function'){function vc_pinterest(){if(jQuery('.wpb_pinterest').length>0){(function(){var po=document.createElement('script');po.type='text/javascript';po.async=true;po.src='http://assets.pinterest.com/js/pinit.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(po,s);})();}}}if(typeof window['vc_progress_bar']!=='function'){function vc_progress_bar(){if(typeof jQuery.fn.waypoint!=='undefined'){jQuery('.vc_progress_bar').waypoint(function(){jQuery(this).find('.vc_single_bar').each(function(index){var $this=jQuery(this),bar=$this.find('.vc_bar'),val=bar.data('percentage-value');setTimeout(function(){bar.css({"width":val+'%'});},index*200);});},{offset:'85%'});}}}if(typeof window['vc_waypoints']!=='function'){function vc_waypoints(){if(typeof jQuery.fn.waypoint!=='undefined'){jQuery('.wpb_animate_when_almost_visible:not(.wpb_start_animation)').waypoint(function(){jQuery(this).addClass('wpb_start_animation');},{offset:'85%'});}}}if(typeof window['vc_toggleBehaviour']!=='function'){function vc_toggleBehaviour(){jQuery(".wpb_toggle").unbind('click').click(function(e){if(jQuery(this).next().is(':animated')){return false;}if(jQuery(this).hasClass('wpb_toggle_title_active')){jQuery(this).removeClass('wpb_toggle_title_active').next().slideUp(500);}else{jQuery(this).addClass('wpb_toggle_title_active').next().slideDown(500);}});jQuery('.wpb_toggle_content').each(function(index){if(jQuery(this).next().is('h4.wpb_toggle')==false){jQuery('<div class="last_toggle_el_margin"></div>').insertAfter(this);}});}}if(typeof window['vc_tabsBehaviour']!=='function'){function vc_tabsBehaviour($tab){jQuery(function($){$(document.body).off('click.preview','a')});var $call=$tab||jQuery('.wpb_tabs, .wpb_tour'),ver=jQuery.ui&&jQuery.ui.version?jQuery.ui.version.split('.'):'1.10',old_version=parseInt(ver[0])==1&&parseInt(ver[1])<9;$call.each(function(index){var $tabs,interval=jQuery(this).attr("data-interval"),tabs_array=[];$tabs=jQuery(this).find('.wpb_tour_tabs_wrapper').tabs({show:function(event,ui){wpb_prepare_tab_content(event,ui);},beforeActivate:function(event,ui){ui.newPanel.index()!==1&&ui.newPanel.find('.vc_pie_chart:not(.vc_ready)');},activate:function(event,ui){wpb_prepare_tab_content(event,ui);}}).tabs('rotate',interval*1000);jQuery(this).find('.wpb_tab').each(function(){tabs_array.push(this.id);});jQuery(this).find('.wpb_tabs_nav a').click(function(e){e.preventDefault();if(jQuery.inArray(jQuery(this).attr('href'),tabs_array)){if(old_version){$tabs.tabs("select",jQuery(this).attr('href'));}else{$tabs.tabs("option","active",jQuery(jQuery(this).attr('href')).index()-1);}return false;}});jQuery(this).find('.wpb_prev_slide a, .wpb_next_slide a').click(function(e){e.preventDefault();if(old_version){var index=$tabs.tabs('option','selected');if(jQuery(this).parent().hasClass('wpb_next_slide')){index++;}else{index--;}if(index<0){index=$tabs.tabs("length")-1;}else if(index>=$tabs.tabs("length")){index=0;}$tabs.tabs("select",index);}else{var index=$tabs.tabs("option","active"),length=$tabs.find('.wpb_tab').length;if(jQuery(this).parent().hasClass('wpb_next_slide')){index=(index+1)>=length?0:index+1;}else{index=index-1<0?length-1:index-1;}$tabs.tabs("option","active",index);}});});}}if(typeof window['vc_accordionBehaviour']!=='function'){function vc_accordionBehaviour(){jQuery('.wpb_accordion').each(function(index){var $tabs,interval=jQuery(this).attr("data-interval"),active_tab=!isNaN(jQuery(this).data('active-tab'))&&parseInt(jQuery(this).data('active-tab'))>0?parseInt(jQuery(this).data('active-tab'))-1:false,collapsible=active_tab===false||jQuery(this).data('collapsible')==='yes';$tabs=jQuery(this).find('.wpb_accordion_wrapper').accordion({header:"> div > h3",autoHeight:false,heightStyle:"content",active:active_tab,collapsible:collapsible,navigation:true,activate:vc_accordionActivate,change:function(event,ui){if(jQuery.fn.isotope!=undefined){ui.newContent.find('.isotope').isotope("layout");}vc_carouselBehaviour(ui.newPanel);}});});}}if(typeof window['vc_teaserGrid']!=='function'){function vc_teaserGrid(){var layout_modes={fitrows:'fitRows',masonry:'masonry'}
jQuery('.wpb_grid .teaser_grid_container:not(.wpb_carousel), .wpb_filtered_grid .teaser_grid_container:not(.wpb_carousel)').each(function(){var $container=jQuery(this);var $thumbs=$container.find('.wpb_thumbnails');var layout_mode=$thumbs.attr('data-layout-mode');$thumbs.isotope({itemSelector:'.isotope-item',layoutMode:(layout_modes[layout_mode]==undefined?'fitRows':layout_modes[layout_mode])});$container.find('.categories_filter a').data('isotope',$thumbs).click(function(e){e.preventDefault();var $thumbs=jQuery(this).data('isotope');jQuery(this).parent().parent().find('.active').removeClass('active');jQuery(this).parent().addClass('active');$thumbs.isotope({filter:jQuery(this).attr('data-filter')});});jQuery(window).bind('load resize',function(){$thumbs.isotope("layout");});});}}if(typeof window['vc_carouselBehaviour']!=='function'){function vc_carouselBehaviour($parent){var $carousel=$parent?$parent.find(".wpb_carousel"):jQuery(".wpb_carousel");$carousel.each(function(){var $this=jQuery(this);if($this.data('carousel_enabled')!==true&&$this.is(':visible')){$this.data('carousel_enabled',true);var carousel_width=jQuery(this).width(),visible_count=getColumnsCount(jQuery(this)),carousel_speed=500;if(jQuery(this).hasClass('columns_count_1')){carousel_speed=900;}var carousele_li=jQuery(this).find('.wpb_thumbnails-fluid li');carousele_li.css({"margin-right":carousele_li.css("margin-left"),"margin-left":0});jQuery(this).find('.wpb_wrapper:eq(0)').jCarouselLite({btnNext:jQuery(this).find('.next'),btnPrev:jQuery(this).find('.prev'),visible:visible_count,speed:carousel_speed}).width('100%');var fluid_ul=jQuery(this).find('ul.wpb_thumbnails-fluid');fluid_ul.width(fluid_ul.width()+300);jQuery(window).resize(function(){var before_resize=screen_size;screen_size=getSizeName();if(before_resize!=screen_size){window.setTimeout('location.reload()',20);}});}});if(window.Swiper!==undefined){jQuery('.swiper-container').each(function(){var $this=jQuery(this),my_swiper,max_slide_size=0,options=jQuery(this).data('settings');if(options.mode==='vertical'){$this.find('.swiper-slide').each(function(){var height=jQuery(this).outerHeight(true);if(height>max_slide_size)max_slide_size=height;});$this.height(max_slide_size);$this.css('overflow','hidden');}jQuery(window).resize(function(){$this.find('.swiper-slide').each(function(){var height=jQuery(this).outerHeight(true);if(height>max_slide_size)max_slide_size=height;});$this.height(max_slide_size);});my_swiper=jQuery(this).swiper(jQuery.extend(options,{onFirstInit:function(swiper){if(swiper.slides.length<2){$this.find('.vc_arrow-left,.vc_arrow-right').hide();}else if(swiper.activeIndex===0&&swiper.params.loop!==true){$this.find('.vc_arrow-left').hide();}else{$this.find('.vc_arrow-left').show();}},onSlideChangeStart:function(swiper){if(swiper.slides.length>1&&swiper.params.loop!==true){if(swiper.activeIndex===0){$this.find('.vc_arrow-left').hide();}else{$this.find('.vc_arrow-left').show();}if(swiper.slides.length-1===swiper.activeIndex){$this.find('.vc_arrow-right').hide();}else{$this.find('.vc_arrow-right').show();}}}}));$this.find('.vc_arrow-left').click(function(e){e.preventDefault();my_swiper.swipePrev();});$this.find('.vc_arrow-right').click(function(e){e.preventDefault();my_swiper.swipeNext();});my_swiper.reInit();});}}}if(typeof window['vc_slidersBehaviour']!=='function'){function vc_slidersBehaviour(){jQuery('.wpb_gallery_slides').each(function(index){var this_element=jQuery(this);var ss_count=0;if(this_element.hasClass('wpb_slider_nivo')){var sliderSpeed=800,sliderTimeout=this_element.attr('data-interval')*1000;if(sliderTimeout==0)sliderTimeout=9999999999;this_element.find('.nivoSlider').nivoSlider({effect:'boxRainGrow,boxRain,boxRainReverse,boxRainGrowReverse',slices:15,boxCols:8,boxRows:4,animSpeed:sliderSpeed,pauseTime:sliderTimeout,startSlide:0,directionNav:true,directionNavHide:true,controlNav:true,keyboardNav:false,pauseOnHover:true,manualAdvance:false,prevText:'Prev',nextText:'Next'});}else if(this_element.hasClass('wpb_flexslider')&&1==2){}else if(this_element.hasClass('wpb_image_grid')){var isotope=this_element.find('.wpb_image_grid_ul');isotope.isotope({itemSelector:'.isotope-item',layoutMode:'fitRows'});jQuery(window).load(function(){isotope.isotope("layout");});}});}}if(typeof window['vc_prettyPhoto']!=='function'){function vc_prettyPhoto(){try{jQuery('a.prettyphoto, .gallery-icon a[href*=".jpg"]').prettyPhoto({animationSpeed:'normal',padding:15,opacity:0.7,showTitle:true,allowresize:true,counter_separator_label:'/',hideflash:false,deeplinking:false,modal:false,callback:function(){var url=location.href;var hashtag=(url.indexOf('#!prettyPhoto'))?true:false;if(hashtag)location.hash="!";},social_tools:''});}catch(err){}}}if(typeof window['vc_google_fonts']!=='function'){function vc_google_fonts(){return;}}function getColumnsCount(el){var find=false,i=1;while(find==false){if(el.hasClass('columns_count_'+i)){find=true;return i;}i++;}}var screen_size=getSizeName();function getSizeName(){var screen_size='',screen_w=jQuery(window).width();if(screen_w>1170){screen_size="desktop_wide";}else if(screen_w>960&&screen_w<1169){screen_size="desktop";}else if(screen_w>768&&screen_w<959){screen_size="tablet";}else if(screen_w>300&&screen_w<767){screen_size="mobile";}else if(screen_w<300){screen_size="mobile_portrait";}return screen_size;}function loadScript(url,$obj,callback){var script=document.createElement("script")
script.type="text/javascript";if(script.readyState){script.onreadystatechange=function(){if(script.readyState=="loaded"||script.readyState=="complete"){script.onreadystatechange=null;callback();}};}else{}script.src=url;$obj.get(0).appendChild(script);}function wpb_prepare_tab_content(event,ui){var panel=ui.panel||ui.newPanel,$pie_charts=panel.find('.vc_pie_chart:not(.vc_ready)'),$carousel=panel.find('[data-ride="vc_carousel"]'),$ui_panel,$google_maps;vc_carouselBehaviour();vc_plugin_flexslider(panel);$pie_charts.length&&jQuery.fn.vcChat&&$pie_charts.vcChat();$carousel.length&&jQuery.fn.carousel&&$carousel.carousel('resizeAction');$ui_panel=panel.find('.isotope');$google_maps=panel.find('.wpb_gmaps_widget');if($ui_panel.length>0){$ui_panel.isotope("layout");}if($google_maps.length&&!$google_maps.is('.map_ready')){var $frame=$google_maps.find('iframe');$frame.attr('src',$frame.attr('src'));$google_maps.addClass('map_ready');}if(panel.parents('.isotope').length){panel.parents('.isotope').each(function(){jQuery(this).isotope("layout");});}}var vc_accordionActivate=function(event,ui){var $pie_charts=ui.newPanel.find('.vc_pie_chart:not(.vc_ready)'),$carousel=ui.newPanel.find('[data-ride="vc_carousel"]');if(jQuery.fn.isotope!=undefined){ui.newPanel.find('.isotope').isotope("layout");}vc_carouselBehaviour(ui.newPanel);vc_plugin_flexslider(ui.newPanel);$pie_charts.length&&jQuery.fn.vcChat&&$pie_charts.vcChat();$carousel.length&&jQuery.fn.carousel&&$carousel.carousel('resizeAction');if(ui.newPanel.parents('.isotope').length){ui.newPanel.parents('.isotope').each(function(){jQuery(this).isotope("layout");});}}