$(document).ready(function(){
    
    //For slick banner slider
    
    $('.slick_slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 5000,
    nextArrow:$('#full_banner i.nxt'),
    prevArrow:$('#full_banner i.prv'),
    speed: 500,
    fade: true,
    pauseOnHover: false,
    cssEase: 'linear'
  });
    
    
    //For slick new notice slider
    
    $('.slick_newnotice_slider').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 2000,
    speed: 2000,
  });
    
    
    //For slick responsive notice slider
    
    $('.slick_res_notice_slider').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    arrows: false,
    autoplay: true,
    vertical: true,
    verticalSwiping: true,
    touchMove: false,
    pauseOnHover: false,
    pauseOnFocus: false,
    autoplaySpeed: 2000,
    speed: 2000,
  });
    
    
    
    //For slick tab slider
    
    $('.slick_tab_slider').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: false,
    autoplay: true,
    vertical: true,
    verticalSwiping: true,
    autoplaySpeed: 2000,
    speed: 2000,
  });
    
    
    //For slick teacher slider
    
    $('.slick_teacher_slider').slick({
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
    
    
    //counter up
    
    $('.counter').counterUp({
    delay: 15,
    time: 2000
    });

    //for 3D slider
    
      new Vue({
                el: '.showcase_slider',
                data: {
                    slides: 5,
                    autoplay: true
                },
                components: {
                    'carousel-3d': Carousel3d.Carousel3d,
                    'slide': Carousel3d.Slide
                }
            });
    
    
    //js for spyscroll
	
			  $('body').scrollspy({target: ".navbar", offset: 50});   
			  $(".menu_option .menu_link li a").on('click', function(event) {
				if (this.hash !== "") {
				  event.preventDefault();

				  var hash = this.hash;

				  $('html, body').animate({
					scrollTop: $(hash).offset().top
				  }, 1500, function(){

					window.location.hash = hash;
				  });
				}
			  });
    
});

/*end of document.ready function*/

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

// FOR TYPE JS

var TxtRotate = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtRotate.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

  var that = this;
  var delta = 100 - Math.random() * 50;

  if (this.isDeleting) { delta /= 2; }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function() {
    that.tick();
  }, delta);
};

window.onload = function() {
  var elements = document.getElementsByClassName('txt-rotate');
  for (var i=0; i<elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-rotate');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".txt-rotate > .wrap { border-right: 0.04em solid #fff }";
  document.body.appendChild(css);
};

/*For Tab*/

function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

    
    
    
    //js for 3d slider

    
  var Slider = function () {
    var total, $images, $slider, sliderWidth, increment = 120;
    var on = function () {
        $slider = $('.slider');
        $images = $('.slider img');
        sliderWidth = $slider.width();
        total = $images.length;
        position();
    }

    var position = function () {
        var sign, half = $('.active').index(),
            x = 0,
            z = 0,
            zindex, scaleX = 1.3,
            scaleY = 1.3,
            transformOrigin;
        $images.each(function (index, element) {
            scaleX = scaleY = 1;
            transformOrigin = sliderWidth / 2;
            if (index < half) {
                sign = 1;
                zindex = index + 1;
                x = sliderWidth / 2 - increment * (half - index + 1);
                z = -increment * (half - index + 1);
            } else if (index > half) {
                sign = -1
                zindex = total - index;
                x = sliderWidth / 2 + increment * (index - half + 1);
                z = -increment * (index - half + 1);
            } else {
                sign = 0;
                zindex = total;
                x = sliderWidth / 2;
                z = 1;
                scaleX = scaleY = 1.2;
                transformOrigin = 'initial';
            }
            $(element).css({
                'transform': 'translate3d(' + calculateX(x, sign, 300) + 'px, 0,' + z + 'px) scale3d(' + scaleX + ',' + scaleY + ', 1)',
                'z-index': zindex,
                'transform-origin-x': transformOrigin
            });
        });
    };

    var calculateX = function (position, sign, width) {
        switch (sign) {
            case 1:
            case 0:
                return position - width / 2;
            case -1:
                return position - width / 2;
        }
    }

    var imageSize = function () {
        return $slider.width() / 3;
    }

    var recalculateSizes = function () {
        sliderWidth = $slider.width();
        position();
    }

    var clickedImage = function () {
        $('.active').removeClass('active');
        $(this).addClass('active');
        position();
    }

    var addEvents = function () {
        $(window).resize(recalculateSizes);
        $(document).on('click', 'img', clickedImage);
    }

    return {
        init: function () {
            on();
            addEvents();
        }
    };
}();

$(function () {
    var slider = Slider.init();
})
