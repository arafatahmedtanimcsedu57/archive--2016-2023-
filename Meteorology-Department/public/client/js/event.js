$(document).ready(function(){
    
    //For slick marquee slider
    
    $('.main_marquee').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: false,
    autoplay: true,
    pauseOnHover: false,
    pauseOnFocus: false,
    autoplaySpeed: 3000,
    speed: 2000,
    responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerPadding: '40px',
        slidesToShow: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]    
        
});
    
    
});


//for sticky menu

$(function(){
    $dis = $(".menu_padd").offset().top;
    
    $(".top").click(function(){
        $("html,body").animate({
            
            scrollTop:0
            
        },1000)
        
    });
    
    $(window).scroll(function(){
        
        
        $scrolling = $(this).scrollTop();
        
        if($scrolling > $dis){
            
            $(".menu_padd").addClass("fixed");
        }
        
        else{
            
            $(".menu_padd").removeClass("fixed");
        }
        
        if($scrolling >= 500){
            $(".top").fadeIn();
        }
        
        else{
            $(".top").fadeOut();
        }
        
    });
       
});
