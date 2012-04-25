document.documentElement.id = 'js';
var ie/*@cc_on=1@*/;

$(function(){

	// Equal Columns

	if ( $( '#index' ).length ) {
		var main = $( '#main' ), aside = $( '#aside' );
		if ( aside.height() > main.height() ) main.height( aside.height() + 5 );
	}

	// User Module

	$( 'dl.module-user ul a' ).
		click(
			function(){
				$( 'dl.module-user' ).
					removeClass( 'module-user-current' );
				$( 'dl.module-' + $( this ).attr( 'rel' )).
					addClass( 'module-user-current' ).
					find( 'input[type=text]:first' ).
						focus();
				return false;
			}
		);

	// Table

	if ( ie ) $( 'div.content-article table tr:even' ).css( 'background', '#EBF7FB' );

	// Darkbox

	(function(c){c.fn.darkbox=function(){function j(){clearInterval(m);d.css({"background-position":"24px 24px",overflow:""})}function e(){j();d.stop();k.animate({opacity:0},p,function(){b.removeClass(q);l.unbind("error",n).attr("src","")})}function o(a){if((27===a.which||32===a.which)&&0===c("div.darkbox:hidden").length)a.preventDefault(),e()}function n(){j();b.addClass("darkbox-error");setTimeout(e,r)}c('<div class="darkbox"><div class="darkbox-shadow"></div><div class="darkbox-canvas"><img alt=""><div class="darkbox-button" title="Close"></div></div></div>').appendTo("body");var p=100,r=800,q="darkbox-on darkbox-done darkbox-loaded darkbox-error",s=/mac/i.test(navigator.platform)?"darkbox-button-left":"darkbox-button-right",b=c("div.darkbox"),k=b.children("div.darkbox-shadow"),d=b.children("div.darkbox-canvas"),l=d.children("img"),t=d.children("div.darkbox-button"),m=0,i=0;k.css({opacity:0}).click(e);t.addClass(s).click(e);l.load(function(){j();var a=c(this),h=1,f=a.width(),g=a.height(),h=b.width(),e=b.height();if(0===f&&0===g)setTimeout(function(){a.load()},10);else{if(f>h-50||g>e-50)h=Math.min((h-50)/f,(e-50)/g),f=Math.round(f*h),g=Math.round(g*h);b.addClass("darkbox-loaded");d.animate({width:f,height:g,marginLeft:-f/2+"px",marginTop:-g/2+"px",opacity:1},400,function(){b.addClass("darkbox-done")})}});c(document).keypress(o).keydown(o);this.click(function(a){a.preventDefault();a=c(this);b.addClass("darkbox-on");d.css({width:"",marginLeft:"",height:"",marginTop:"",opacity:0.5});m=setInterval(function(){d.css("background-position","24px "+(24-56*i)+"px");i=7<=i?0:i+1},90);l.one("error",n).css({width:"",height:""}).attr("src",a.attr("href")).attr("alt",a.attr("title"));k.animate({opacity:0.6},200)});return this}})(jQuery);

	$('a[rel=darkbox]').darkbox();

});
