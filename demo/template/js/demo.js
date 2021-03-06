 

//fixed-nav
$(document).on("scroll",function(){
	if($(document).scrollTop()>20){ 
		$("header").removeClass("large").addClass("small");
	}
	else{
		$("header").removeClass("small").addClass("large");
	}
});


//search
 $(function(){
     $(".attr-nav").each(function(){  
                $(".search", this).on("click", function(e){
                    e.preventDefault();
                    $(".top-search").slideToggle();
                });
            });
            $(".input-group-addon.close-search").on("click", function(){
                $(".top-search").slideUp();
            })
  })

$(function( ) {
	setInterval(function(){
		if($(".animated-circles").hasClass("animated")){
			$(".animated-circles").removeClass("animated");
		}else{
			$(".animated-circles").addClass('animated');
		}
	},3000);
});
//back-top
$(function(){
	$(window).scroll(function(){
		var _top = $(window).scrollTop();
		if(_top>300){
			$('.back_top').fadeIn(600);
		}else{
			$('.back_top').fadeOut(600);
		}
	});
	$(".back_top").click(function(){
		$("html,body").animate({scrollTop:0},500);
	});
});



 //fixed inquiry
$(document).ready(function(){

    $("#floatShow").bind("click",function(){
	
        $("#onlineService").animate({
            height:"show", 
            opacity:"show"
        }, "normal" ,function(){
            $("#onlineService").show();
        });
		
        $("#floatShow").attr("style","display:none");
        $("#floatHide").attr("style","display:block");
		
        return false;
    });
	
    $("#floatHide").bind("click",function(){
	
        $("#onlineService").animate({
            height:"hide", 
            opacity:"hide"
        }, "normal" ,function(){
            $("#onlineService").hide();
        });
		
        $("#floatShow").attr("style","display:block");
        $("#floatHide").attr("style","display:none");
		
        return false;
    });
  
});


 
// fixed service
$(function() {
	$(".online_section").hover(function() {
		$(".online_section").css("right", "0");
		$(".online_section .online_code").css('height', '160px');
	}, function() {
		$(".online_section").css("right", "-220px");
		$(".online_section .online_code").css('height', '40px');
	});
});


$(function(){
	$('.autoplay1').slick({
		infinite: true,
		speed: 1500,
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed:3000,
		pauseOnHover:true,
		dots:true,
		responsive: [
		{
		  breakpoint:480,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed:3000,
			dots:true,
		  }
		},
		
	]
	})
})
 
$(function(){
	$('.autoplay2').slick({
		infinite: true,
		speed: 1500,
		slidesToShow: 2,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed:3000,
		pauseOnHover:false,
		dots:true,
		responsive: [
		{
		  breakpoint: 992,
		  settings: {
		    slidesToShow:2,
		    slidesToScroll: 1,
		    autoplay: true,
		    autoplaySpeed:3000,
	        infinite: true,
		    dots:true,
			}
		},
		{
		  breakpoint:768,
		  settings: {
			slidesToShow: 2,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed:3000,
			dots:true,
		  }
		},
		{
		  breakpoint: 480,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed:3000,
			dots:true,
		  }
		}
	]
	})
})
 
$(function(){
	$('.autoplay6').slick({
		infinite: false,
		speed: 1500,
		slidesToShow: 6,
		slidesToScroll: 1,
		autoplay: false,
		autoplaySpeed:3000,
		pauseOnHover:false,
		dots:true,
		responsive: [
		{
		  breakpoint: 1300,
		  settings: {
		    slidesToShow:5,
		    slidesToScroll: 1,
		  	infinite: false,
		  	autoplay: false,
			}
		},
		{
		  breakpoint:992,
		  settings: {
			slidesToShow: 4,
			slidesToScroll: 1,
			 infinite: false,
		  	autoplay: false,
		  }
		},
		{
		  breakpoint:768,
		  settings: {
			slidesToShow: 3,
			slidesToScroll: 1,
			 infinite: false,
		  	autoplay: false,
		  }
		},
		{
		  breakpoint: 580,
		  settings: {
			slidesToShow: 2,
			slidesToScroll: 1,
			 infinite: false,
		  	autoplay: false,
		  }
		},
		{
		  breakpoint:321,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
			 infinite: false,
		  	autoplay: false,
		  }
		}
		
	]
	})
})
 
$(function(){
	$('.autoplay4').slick({
		infinite: true,
		speed: 1500,
		slidesToShow: 4,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed:3000,
		pauseOnHover:false,
		dots:true,
		responsive: [
		{
		  breakpoint: 992,
		  settings: {
		    slidesToShow:3,
		    slidesToScroll: 1,
		    autoplay: true,
		    autoplaySpeed:3000,
	        infinite: true,
		    dots:true,
			}
		},
		{
		  breakpoint:768,
		  settings: {
			slidesToShow: 2,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed:3000,
			dots:true,
		  }
		},
		{
		  breakpoint: 480,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed:3000,
			dots:true,
		  }
		}
	]
	})
})
 
  //categories tab
 $(document).ready(function () {
        $(".cate_img ul li").hover(function () {
            $(".cate_img ul li").removeClass("current");
            $i = $(this).index();
            $(this).addClass("current");
            top1 = -$i * 466;
            $(".cate_ul ul").stop(true, false).animate({"top": top1},0);
        });
    });


 
 
 