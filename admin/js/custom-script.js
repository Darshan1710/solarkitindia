(function($){
    $.fn.autoComplete = function(options){
        var o = $.extend({}, $.fn.autoComplete.defaults, options);

        // public methods
        if (typeof options == 'string') {
            this.each(function(){
                var that = $(this);
                if (options == 'destroy') {
                    $(window).off('resize.autocomplete', that.updateSC);
                    that.off('blur.autocomplete focus.autocomplete keydown.autocomplete keyup.autocomplete');
                    if (that.data('autocomplete'))
                        that.attr('autocomplete', that.data('autocomplete'));
                    else
                        that.removeAttr('autocomplete');
                    $(that.data('sc')).remove();
                    that.removeData('sc').removeData('autocomplete');
                }
            });
            return this;
        }

        return this.each(function(){
            var that = $(this);
            // sc = 'suggestions container'
            that.sc = $('<div class="autocomplete-suggestions '+o.menuClass+'"></div>');
            that.data('sc', that.sc).data('autocomplete', that.attr('autocomplete'));
            that.attr('autocomplete', 'off');
            that.cache = {};
            that.last_val = '';

            that.updateSC = function(resize, next){
                that.sc.css({
                    top: that.offset().top + that.outerHeight(),
                    left: that.offset().left,
                    width: that.outerWidth()
                });
                if (!resize) {
                    that.sc.show();
                    if (!that.sc.maxHeight) that.sc.maxHeight = parseInt(that.sc.css('max-height'));
                    if (!that.sc.suggestionHeight) that.sc.suggestionHeight = $('.autocomplete-suggestion', that.sc).first().outerHeight();
                    if (that.sc.suggestionHeight)
                        if (!next) that.sc.scrollTop(0);
                        else {
                            var scrTop = that.sc.scrollTop(), selTop = next.offset().top - that.sc.offset().top;
                            if (selTop + that.sc.suggestionHeight - that.sc.maxHeight > 0)
                                that.sc.scrollTop(selTop + that.sc.suggestionHeight + scrTop - that.sc.maxHeight);
                            else if (selTop < 0)
                                that.sc.scrollTop(selTop + scrTop);
                        }
                }
            }
            $(window).on('resize.autocomplete', that.updateSC);

            that.sc.appendTo('body');

            that.sc.on('mouseleave', '.autocomplete-suggestion', function (){
                $('.autocomplete-suggestion.selected').removeClass('selected');
            });

            that.sc.on('mouseenter', '.autocomplete-suggestion', function (){
                $('.autocomplete-suggestion.selected').removeClass('selected');
                $(this).addClass('selected');
            });

            that.sc.on('mousedown click', '.autocomplete-suggestion', function (e){
                var item = $(this), v = item.data('val');
                if (v || item.hasClass('autocomplete-suggestion')) { // else outside click
                    that.val(v);
                    o.onSelect(e, v, item);
                    that.sc.hide();
                }
                return false;
            });

            that.on('blur.autocomplete', function(){
                try { over_sb = $('.autocomplete-suggestions:hover').length; } catch(e){ over_sb = 0; } // IE7 fix :hover
                if (!over_sb) {
                    that.last_val = that.val();
                    that.sc.hide();
                    setTimeout(function(){ that.sc.hide(); }, 350); // hide suggestions on fast input
                } else if (!that.is(':focus')) setTimeout(function(){ that.focus(); }, 20);
            });

            if (!o.minChars) that.on('focus.autocomplete', function(){ that.last_val = '\n'; that.trigger('keyup.autocomplete'); });

            function suggest(data){
                var val = that.val();
                that.cache[val] = data;
                if (data.length && val.length >= o.minChars) {
                    var s = '';
                    for (var i=0;i<data.length;i++) s += o.renderItem(data[i], val);
                    that.sc.html(s);
                    that.updateSC(0);
                }
                else
                    that.sc.hide();
            }

            that.on('keydown.autocomplete', function(e){
                // down (40), up (38)
                if ((e.which == 40 || e.which == 38) && that.sc.html()) {
                    var next, sel = $('.autocomplete-suggestion.selected', that.sc);
                    if (!sel.length) {
                        next = (e.which == 40) ? $('.autocomplete-suggestion', that.sc).first() : $('.autocomplete-suggestion', that.sc).last();
                        that.val(next.addClass('selected').data('val'));
                    } else {
                        next = (e.which == 40) ? sel.next('.autocomplete-suggestion') : sel.prev('.autocomplete-suggestion');
                        if (next.length) { sel.removeClass('selected'); that.val(next.addClass('selected').data('val')); }
                        else { sel.removeClass('selected'); that.val(that.last_val); next = 0; }
                    }
                    that.updateSC(0, next);
                    return false;
                }
                // esc
                else if (e.which == 27) that.val(that.last_val).sc.hide();
                // enter or tab
                else if (e.which == 13 || e.which == 9) {
                    var sel = $('.autocomplete-suggestion.selected', that.sc);
                    if (sel.length && that.sc.is(':visible')) { o.onSelect(e, sel.data('val'), sel); setTimeout(function(){ that.sc.hide(); }, 20); }
                }
            });

            that.on('keyup.autocomplete', function(e){
                if (!~$.inArray(e.which, [13, 27, 35, 36, 37, 38, 39, 40])) {
                    var val = that.val();
                    if (val.length >= o.minChars) {
                        if (val != that.last_val) {
                            that.last_val = val;
                            clearTimeout(that.timer);
                            if (o.cache) {
                                if (val in that.cache) { suggest(that.cache[val]); return; }
                                // no requests if previous suggestions were empty
                                for (var i=1; i<val.length-o.minChars; i++) {
                                    var part = val.slice(0, val.length-i);
                                    if (part in that.cache && !that.cache[part].length) { suggest([]); return; }
                                }
                            }
                            that.timer = setTimeout(function(){ o.source(val, suggest) }, o.delay);
                        }
                    } else {
                        that.last_val = val;
                        that.sc.hide();
                    }
                }
            });
        });
    }

    $.fn.autoComplete.defaults = {
        source: 0,
        minChars: 3,
        delay: 150,
        cache: 1,
        menuClass: '',
        renderItem: function (item, search){
            // escape special characters
            search = search.replace(/[-\/\\^$*+?.()|[\]{}]/g, '\\$&');
            var re = new RegExp("(" + search.split(' ').join('|') + ")", "gi");
            return '<div class="autocomplete-suggestion" data-val="' + item + '">' + item.replace(re, "<b>$1</b>") + '</div>';
        },
        onSelect: function(e, term, item){}
    };
}(jQuery));





$(function(){
 $("input.imgurl").on("click",function(evt){
  modal = $("#modal");
  modal.html("");
  winHeight = $(window).innerHeight()-70;
    
$('<iframe>', {
   src: './fileman/index.html?integration=custom&type=files&txtFieldId=txtSelectedFile',
   id:  'myFrame',
   frameborder: 1,
   width : "100%",
   height : winHeight
 }).appendTo('#modal');
   
 modal.modal('open');	
 });

 });

 

$(document).ready(function(){
  
	 
$("#autocomplete-input").keyup(function(){
		$.ajax({
		type: "POST",
		url: "data.php",
		data:'search='+$(this).val(),
		beforeSend: function(){
		},
		success: function(data){
			$(".autocomplete-content").show();
			$(".autocomplete-content").html('<ul class="col s12 m3">'+data+'</ul>');
			
		},
		afterSend: function(){
			$("#autocomplete-input").css("background","#333");
		},
		});
	});
	
$(".autocomplete-content").hover(
  function () {
    $(this).show();
  }, 
  function () {
    $(this).hide();
  }
);

$(".orderpol input[type='checkbox']").click(function(){
	if($(".orderpol td input[type='checkbox']:checked").length>0) {
	$(".orderpol tr.clikcheck").show();} else {$(".orderpol tr.clikcheck").hide();}
	
})



 		
$('#chkall').change(function() {
    var checkboxes = $('ul.products-grid').find(':checkbox');
    if ($(this).is(':checked')) {
      checkboxes.prop('checked', true);
    } else {
      checkboxes.prop('checked', false);
    }
});





$('input.x_text').on('input',function(e){
  $("#v"+$(this).attr('id')).attr('checked', true);
  $('#SendEdPar').attr("disabled", false);
});

$('#set_baleni').on('click',function(){
   
 var href='?set_img_aj=' +  $("#img_baleni").val();
    $.ajax({
        type: 'POST',
        url: href,
        success: function(data) {
            mymodal(data);
        }
    });
    $('#modal').modal('open');
    $('#modal').modal({
        complete: function() { 
             $('#modal').html("");
        }
    });
   
   return false;
   
});
 $( "[data-toggle]" ).on( "click", function () {
 var href=this.href;
    $.ajax({
        type: 'POST',
        url: href,
        success: function(data) {
            mymodal(data);
        }
    });
    $('#modal').modal('open');
    $('#modal').modal({
        complete: function() { 
             $('#modal').html("");
        }
    });
   
   return false;
   
});

 $('#search_text').keyup(function(){
 
  // Search text
  var text = $(this).val();
 
  // Hide all content class element
  $('.collapsible.find').hide();

  // Search and show
  $('.collapsible.find:contains("'+text+'")').show();
 
 });

/*
$("#autocomplete-input").keyup(function(){
		$.ajax({
		type: "POST",
		url: "data.php",
		data:'search='+$(this).val(),
		beforeSend: function(){
		},
		success: function(data){
			$(".autocomplete-content").show();
			$(".autocomplete-content").html('<ul class="col s12 m3">'+data+'</ul>');
			
		},
		afterSend: function(){
			$("#autocomplete-input").css("background","#FFF");
		},
		});
	});
	
	
$("#auto_add").keyup(function(){
            source: function(request,response) {
                $.ajax({
                    url: ".data.php",
                    type: "POST",
                    dataType: "json",
                    data: { add_pol_obj:'true',hledej: request.term },
                    success: function (data) {
                    response($.map(data, function (item) {
                            return { label: item.nazev, value: item.code, cena: item.cena,vyrobce:item.vyrobce };
                        }))
                     }
                })
            },
            select: function(event, ui) {
            var ul = $("#ulTest");
            var li = $("<li class='li-style'></li>")
            .append($("<input type='text' name='kod[]' value='" + ui.item.value + "' />" 
            + "<input class='nazev' type='text' name='nazev[]' value='" + ui.item.vyrobce + "' />"
            + "<input class='cena' type='text' name='cena[]' value='" + ui.item.cena + "' />"
             + "<input class='sleva' type='text' name='sleva[]' value='' placeholder='0 %'>"
            + "<input class='pocet' type='text' name='pocet[]' value='1'>"
           + "<input class='suma' type='text' name='suma[]' value='"+ ui.item.cena +"'/>"
                ));
        li.appendTo(ul);
        $("#auto_add").val("");
            return false;
            }
        });

*/



});


function mymodal(data){
$("#modal").html('<div class="modal-body center">' + data + '</div>');

}	
	
$(function($) {
    $.fn.clickToggle = function(func1, func2) {
        var funcs = [func1, func2];
        this.data('toggleclicked', 0);
        this.click(function() {
            var data = $(this).data();
            var tc = data.toggleclicked;
            $.proxy(funcs[tc], this)();
            data.toggleclicked = (tc + 1) % 2;
        });
        return this;
    };





  $(".numbers-row").append('<div class="inc button"><i class="material-icons md-18">add_circle_outline</i></div><div class="dec button"><i class="material-icons md-18">remove_circle_outline</i></div>');

  $(".button").on("click", function() {

    var $button = $(this);
    var oldValue = $button.parent().find("input").val();

    if ($button.text() == "+") {
  	  var newVal = parseFloat(oldValue) + 1;
  	} else {
	   // Don't allow decrementing below zero
      if (oldValue > 0) {
        var newVal = parseFloat(oldValue) - 1;
	    } else {
        newVal = 0;
      }
	  }

var id = $button.parent().find("input").attr("id");

$.ajax({
  type: "POST",
  url: "produkt_edit.php?sklad_id=" + id + "&newvalue=" + newVal,
  success: function() {
    $button.parent().find("input").val(newVal);
  }
});  
});  
	
   





  });

  
  
