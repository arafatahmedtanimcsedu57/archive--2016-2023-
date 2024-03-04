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
