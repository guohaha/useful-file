<style type="text/css">


/*按钮的点击效果*/
.hvr-push {
  -webkit-animation-name: hvr-push;
  animation-name: hvr-push;
  -webkit-animation-duration: 0.25s;
  animation-duration: 0.25s;
}

/*
 *@name hvr-push
 *@className bounce animated
 *@cssCode true
 *@editionLink codepen.io
 *@author Dan Eden
 *@source Animate.css
 *@sourceUrl http://daneden.github.io/animate.css/
 *@issues https://github.com/daneden/animate.css/issues
 *@license MIT
 */
@-webkit-keyframes hvr-push {
  50% {
    -webkit-transform: scale(0.95);
    transform: scale(0.95);
  }

  100% {
    -webkit-transform: scale(1);
    transform: scale(1);
  }
}

@keyframes hvr-push {
  50% {
    -webkit-transform: scale(0.95);
    transform: scale(0.95);
  }

  100% {
    -webkit-transform: scale(1);
    transform: scale(1);
  }
}	
</style>

<?php 







 ?>
 <script type="text/javascript">
 $(document).ready(function(){
 	//loading 
    setTimeout(function(){
      jQuery(".loading_dengdai").css("display", "none");
    }, 2000);
  
     jQuery('.class').click(function(){
      jQuery('.class').addClass('hvr-push');
        setTimeout(function(){
          jQuery('.class').removeClass('hvr-push');          
        }, 300);
             setTimeout(function(){
             jQuery('.class').css('display','block');
        }, 300); 
     });


     jQuery('.startup-ljzs').click(function(){
        // 点击效果
      jQuery('.startup-ljzs').addClass('hvr-push');
        setTimeout(function(){
          jQuery('.startup-ljzs').removeClass('hvr-push');          
        }, 300);
             setTimeout(function(){
             jQuery('.startup').css('display','none'); 
              
                     // jQuery('.swiper-container').css('display','block');
        scaleW=window.innerWidth/320;
        scaleH=window.innerHeight/480;
        var resizes = document.querySelectorAll('.resize');
          for (var j=0; j<resizes.length; j++) {
           resizes[j].style.width=parseInt(resizes[j].style.width)*scaleW+'px';
       resizes[j].style.height=parseInt(resizes[j].style.height)*scaleH+'px';
       resizes[j].style.top=parseInt(resizes[j].style.top)*scaleH+'px';
       resizes[j].style.left=parseInt(resizes[j].style.left)*scaleW+'px'; 
          }
      
  var mySwiper = new Swiper ('.swiper-container', {
   direction : 'vertical',
   pagination: '.swiper-pagination',
  //virtualTranslate : true,
   mousewheelControl : true,
   // moveStartThreshold : 10000,
   onlyExternal : true,
   onInit: function(swiper){
   swiperAnimateCache(swiper);
   swiperAnimate(swiper);
    },
   onSlideChangeEnd: function(swiper){
  swiperAnimate(swiper);
    },
  onTransitionEnd: function(swiper){
  swiperAnimate(swiper);
    },
  
  
  watchSlidesProgress: true,

      onProgress: function(swiper){
        for (var i = 0; i < swiper.slides.length; i++){
          var slide = swiper.slides[i];
          var progress = slide.progress;
          var translate = progress*swiper.height/4;  
      scale = 1 - Math.min(Math.abs(progress * 0.5), 1);
          var opacity = 1 - Math.min(Math.abs(progress/2),0.5);
          slide.style.opacity = opacity;
      es = slide.style;
      es.webkitTransform = es.MsTransform = es.msTransform = es.MozTransform = es.OTransform = es.transform = 'translate3d(0,'+translate+'px,-'+translate+'px) scaleY(' + scale + ')';

        }
      },
  
     onSetTransition: function(swiper, speed) {
        for (var i = 0; i < swiper.slides.length; i++){
          es = swiper.slides[i].style;
      es.webkitTransitionDuration = es.MsTransitionDuration = es.msTransitionDuration = es.MozTransitionDuration = es.OTransitionDuration = es.transitionDuration = speed + 'ms';

        }
      },
  
  
  
     }) ;



    // 控制滑动和跳转

    jQuery('#shuiguo1').click(function(){

      window.mySwipe = mySwiper;
      mySwiper.slideTo(1, 0);
      mySwiper.disableMousewheelControl(); //禁止鼠标滑轮控制
      mySwiper.disableKeyboardControl(); //禁止键盘控制
     // mySwiper.enableMousewheelControl();
      // jQuery('.jinzhiyidong').css('z-index','180');
    });  
    jQuery('#shuiguo2').click(function(){
      //移除第一个slide
      // mySwiper.removeSlide(1);
      window.mySwipe = mySwiper;
      mySwiper.slideTo(2, 0);
      mySwiper.disableMousewheelControl(); //禁止鼠标滑轮控制
      mySwiper.disableKeyboardControl(); //禁止键盘控制
     // mySwiper.enableMousewheelControl();
      // jQuery('.jinzhiyidong').css('z-index','180');
    });  
    jQuery('#shuiguo3').click(function(){
            //移除第1.2个slide
      // mySwiper.removeSlide(1);
      // mySwiper.removeSlide(2);
      window.mySwipe = mySwiper;
      // mySwiper.removeSlide([0, 1]); //移除第一个和第二个
      mySwiper.slideTo(3, 0);
      mySwiper.disableMousewheelControl(); //禁止鼠标滑轮控制
      mySwiper.disableKeyboardControl(); //禁止键盘控制
     // mySwiper.enableMousewheelControl();
      // jQuery('.jinzhiyidong').css('z-index','180');
    });  
    jQuery('#shuiguo4').click(function(){
      window.mySwipe = mySwiper;
      mySwiper.slideTo(4, 0);
      mySwiper.disableMousewheelControl(); //禁止鼠标滑轮控制
      mySwiper.disableKeyboardControl(); //禁止键盘控制
     // mySwiper.enableMousewheelControl();
      // jQuery('.jinzhiyidong').css('z-index','180');
      // mySwiper.enableMousewheelControl();
    });
    jQuery('#shuiguo5').click(function(){
      window.mySwipe = mySwiper;
      mySwiper.slideTo(5, 0);
      mySwiper.disableMousewheelControl(); //禁止鼠标滑轮控制
      mySwiper.disableKeyboardControl(); //禁止键盘控制
     // mySwiper.enableMousewheelControl();      
      // jQuery('.jinzhiyidong').css('z-index','180');
      // mySwiper.enableMousewheelControl();
    });  
    jQuery('#shuiguo6').click(function(){
      window.mySwipe = mySwiper;
      mySwiper.slideTo(6, 0);
      mySwiper.disableMousewheelControl(); //禁止鼠标滑轮控制
      mySwiper.disableKeyboardControl(); //禁止键盘控制
     // mySwiper.enableMousewheelControl();      
      // jQuery('.jinzhiyidong').css('z-index','180');
      // mySwiper.enableMousewheelControl();
    });  
    jQuery('#shuiguo7').click(function(){
      window.mySwipe = mySwiper;
      mySwiper.slideTo(7, 0);
      mySwiper.disableMousewheelControl(); //禁止鼠标滑轮控制
      mySwiper.disableKeyboardControl(); //禁止键盘控制
     // mySwiper.enableMousewheelControl();
      // jQuery('.jinzhiyidong').css('z-index','180');
      // mySwiper.enableMousewheelControl();
    });  
    jQuery('#shuiguo8').click(function(){
      window.mySwipe = mySwiper;
      //移除第1.2.3.4.5.6.7个slide
      // mySwiper.removeSlide([1,2,3,4,5,6,7]);
      mySwiper.slideTo(8, 0);
      mySwiper.disableMousewheelControl(); //禁止鼠标滑轮控制
      mySwiper.disableKeyboardControl(); //禁止键盘控制
     // mySwiper.enableMousewheelControl();      
      // jQuery('.jinzhiyidong').css('z-index','180');
      // mySwiper.enableMousewheelControl();
    });
    jQuery('#guanbianniu11').click(function(){
      // mySwiper.enableKeyboardControl();
      window.mySwipe = mySwiper;
      mySwiper.slideTo(0, 0);

      // jQuery('.jinzhiyidong').css('display','none');
      // mySwiper.enableMousewheelControl();
    });

        jQuery('#guanbianniu22').click(function(){
      // mySwiper.enableKeyboardControl();
      window.mySwipe = mySwiper;
      mySwiper.slideTo(0, 0);

      // jQuery('.jinzhiyidong').css('display','none');
      // mySwiper.enableMousewheelControl();
    });

      jQuery('#guanbianniu33').click(function(){
      // mySwiper.enableKeyboardControl();
      window.mySwipe = mySwiper;
      mySwiper.slideTo(0, 0);

      // jQuery('.jinzhiyidong').css('display','none');
      // mySwiper.enableMousewheelControl();
    });

      jQuery('#guanbianniu44').click(function(){
      // mySwiper.enableKeyboardControl();
      window.mySwipe = mySwiper;
      mySwiper.slideTo(0, 0);

      // jQuery('.jinzhiyidong').css('display','none');
      // mySwiper.enableMousewheelControl();
    });


    jQuery('#guanbianniu55').click(function(){
      // mySwiper.enableKeyboardControl();
      window.mySwipe = mySwiper;
      mySwiper.slideTo(0, 0);

      // jQuery('.jinzhiyidong').css('display','none');
      // mySwiper.enableMousewheelControl();
    });

    jQuery('#guanbianniu66').click(function(){
      // mySwiper.enableKeyboardControl();
      window.mySwipe = mySwiper;
      mySwiper.slideTo(0, 0);

      // jQuery('.jinzhiyidong').css('display','none');
      // mySwiper.enableMousewheelControl();
    });

     jQuery('#guanbianniu77').click(function(){
      // mySwiper.enableKeyboardControl();
      window.mySwipe = mySwiper;
      mySwiper.slideTo(0, 0);

      // jQuery('.jinzhiyidong').css('display','none');
      // mySwiper.enableMousewheelControl();
    });       
      jQuery('#aaaaa').click(function(){
      // mySwiper.enableKeyboardControl();
      window.mySwipe = mySwiper;

      mySwiper.slideTo(0, 0);
      // mySwiper.addSlide([1,3,4,5,6,7]);

      // jQuery('.jinzhiyidong').css('display','none');
      // mySwiper.enableMousewheelControl();
    });

mySwiper.disableMousewheelControl(); //禁止鼠标滑轮控制


        }, 300);      

     
     });

 });	

//Swiper 中文网  详细介绍.
 </script>