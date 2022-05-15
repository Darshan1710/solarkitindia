AOS.init({ debounceDelay: 150, 
  throttleDelay: 199,
   once: true
});

       $(function() {
    $('#action_send').click(function() {  
    	$('.error').remove();
		var email = $('#email').val();
		var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
		if (!(filter.test(email))) {
			$('#email').css('border', '1px solid red');
			$('#email').before("<div class='error red-text'>Email Invalid</div>");
			$('#email').focus();
			return false;
		}
		var name = $('#name').val();
		if(name.length == 0 ) {
			$('#name').css('border', '1px solid red');
			$('#name').before("<div class='error red-text'>Name Invalid</div>");
			$('#name').focus();
			return false;
		}
		
		if($('#priv:checked').length == 0){
    	    $('#priv').css('border', '1px solid red');
			$('#priv').before("<div class='error red-text'>Please select at least one checkbox</div>");
			$('#priv').focus();
			return false;
		}
		
		$.ajax({
			type: "post",
			data: {email_address:email,email_name:name},
			success: function(data)
			{
				$('.abhijitscript div').remove();
				$('.abhijitscript').html(data);
			
			}
		});
		
		return false;
	});
	
	$( "#email, #name, #priv, #privacy" ).keyup(function() {
	   var co = $(this).val();
	   if(co.length == 0)
	   {
		$('.error').remove();
	   }
	});
	
  	   	
       	
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
&& location.hostname == this.hostname) {

      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - 300 //offsets for fixed header
        }, 1000);
        return false;
      }
    }
  });
  //Executed on page load with URL containing an anchor tag.
  if($(location.href.split("#")[1])) {
      var target = $('#'+location.href.split("#")[1]);
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - 300 //offset height of header here too.
        }, 1000);
        return false;
      }
    }
});

        
$(document).ready(function(){
    $('.parallax').parallax();
    $('.sidenav').sidenav();
    $('.materialboxed').materialbox();
    $(".dropdown-trigger").dropdown({ hover: true, constrainWidth: false });
     $('.collapsible').collapsible();
     $('#modal').modal();
    
      
 });
      
      
      
 function gtag_mail() {
 	var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {'send_to': 'AW-706963799/QHpnCJP7sMwBENfSjdEC','event_callback': callback});
  }
 function gtag_partner() {
 	var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {'send_to': 'AW-706963799/UGwYCMra6MkBENfSjdEC','event_callback': callback});
  }
function gtag_request() {
	var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {'send_to': 'AW-706963799/8gAACLvF2skBENfSjdEC','event_callback': callback});
}
 	 
	 
 var MyCookie = {
        Write:function(name,value,days) {
                var D = new Date();
                D.setTime(D.getTime()+86400000*days)
                document.cookie = escape(name)+"="+escape(value)+
                        ((days == null)?"":(";expires="+D.toGMTString()))
                return (this.Read(name) == value);
        },
        Read:function(name) {
                var EN=escape(name)
                var F=' '+document.cookie+';', S=F.indexOf(' '+EN);
                return S==-1 ? null : unescape(        F.substring(EN=S+EN.length+2,F.indexOf(';',EN))        );
        }
}
  
var Win_true=false;

function load_modal(){
	var data="Solar-kit.in";
         $("#modal").html('<div class="modal-content">'+data+'</div>');
         $('.modal').modal('open');
         $('#modal').modal({ complete: function() { $('#modal').html("");  }  });
         MyCookie.Write('Win','no',365); 
}
     
  $(window).on("scroll", function() {
  	       
      if(MyCookie.Read("Win")!="start" && MyCookie.Read("Win")!="no" && Win_true) {
         if ($(window).scrollTop() >= 600 ) {
         MyCookie.Write('Win','start',365);
         load_modal()
	         }
      }


  });
  
