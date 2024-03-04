$(document).ready(function(){
    
    //For isotope
    
    $('.main_filter').isotope({
    // options
    itemSelector: '.item',
    layoutMode: 'fitRows'
    });
    
    $('.btnn').click(function(){
        $('.btnn').removeClass('active');
        $(this).addClass('active');
        
        var selector = $(this).attr('data-filter');
        $('.main_filter').isotope({
            filter: selector
        });
        
        return false;
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
