(function($) {

$(document).ready(function() {


 //Hover map point adds class to TEXT/TITLE
$("a.map-point.austin").hover(
  function () { $("li.austin").addClass('hover'); }, 
  function () { $("li.austin").removeClass('hover'); }
);

$("a.map-point.san-antonio").hover(
  function () { $("li.san-antonio").addClass('hover'); }, 
  function () { $("li.san-antonio").removeClass('hover'); }
);

$("a.map-point.mcallen").hover(
  function () { $("li.mcallen").addClass('hover'); }, 
  function () { $("li.mcallen").removeClass('hover'); }
);

$("a.map-point.mexico-city").hover(
  function () { $("li.mexico-city").addClass('hover'); }, 
  function () { $("li.mexico-city").removeClass('hover'); }
);

$("a.map-point.monterrey").hover(
  function () { $("li.monterrey").addClass('hover'); }, 
  function () { $("li.monterrey").removeClass('hover'); }
);

$("a.map-point.queretaro").hover(
  function () { $("li.queretaro").addClass('hover'); }, 
  function () { $("li.queretaro").removeClass('hover'); }
);

$("a.map-point.ciudad-juarez").hover(
  function () { $("li.ciudad-juarez").addClass('hover'); }, 
  function () { $("li.ciudad-juarez").removeClass('hover'); }
);

$("a.map-point.reynosa").hover(
  function () { $("li.reynosa").addClass('hover'); }, 
  function () { $("li.reynosa").removeClass('hover'); }
);

$("a.map-point.matamoros").hover(
  function () { $("li.matamoros").addClass('hover'); }, 
  function () { $("li.matamoros").removeClass('hover'); }
);

$("a.map-point.tijuana").hover(
  function () { $("li.tijuana").addClass('hover'); }, 
  function () { $("li.tijuana").removeClass('hover'); }
);

$("a.map-point.guadalajara").hover(
  function () { $("li.guadalajara").addClass('hover'); }, 
  function () { $("li.guadalajara").removeClass('hover'); }
);
  
  
 //Hover Link TEXT/TITLE adds class to map point 
$("li.austin").hover( 
	function () { $("a.map-point.austin").addClass('hover'); }, 
	function () { $("a.map-point.austin").removeClass('hover');  }
  					);
  
$("li.san-antonio").hover(
  function () { $("a.map-point.san-antonio").addClass('hover'); }, 
  function () {  $("a.map-point.san-antonio").removeClass('hover'); }
  						);
  
$("li.mcallen").hover(
  function () { $("a.map-point.mcallen").addClass('hover');}, 
  function () { $("a.map-point.mcallen").removeClass('hover');}
 					 );
  
$("li.mexico-city").hover(
  function () { $("a.map-point.mexico-city").addClass('hover'); }, 
  function () { $("a.map-point.mexico-city").removeClass('hover'); }
  						);
  
$("li.monterrey").hover(
  function () { $("a.map-point.monterrey").addClass('hover'); }, 
  function () { $("a.map-point.monterrey").removeClass('hover'); }
 						 );
  
$("li.queretaro").hover(
  function () { $("a.map-point.queretaro").addClass('hover'); }, 
  function () {  $("a.map-point.queretaro").removeClass('hover');}
						  );
  
$("li.ciudad-juarez").hover(
  function () { $("a.map-point.ciudad-juarez").addClass('hover'); }, 
  function () { $("a.map-point.ciudad-juarez").removeClass('hover'); }
						  );
  
$("li.reynosa").hover(
  function () { $("a.map-point.reynosa").addClass('hover'); }, 
  function () { $("a.map-point.reynosa").removeClass('hover'); }
  						);
  
$("li.matamoros").hover(
  function () { $("a.map-point.matamoros").addClass('hover'); }, 
  function () { $("a.map-point.matamoros").removeClass('hover'); }
  						);
  
$("li.tijuana").hover(
  function () { $("a.map-point.tijuana").addClass('hover'); }, 
  function () { $("a.map-point.tijuana").removeClass('hover'); }
 						 );
$("li.guadalajara").hover(
  function () { $("a.map-point.guadalajara").addClass('hover'); }, 
  function () { $("a.map-point.guadalajara").removeClass('hover'); }
 						 );



 $(".commentlist li").addClass("panel panel-default");
	$(".comment-reply-link").addClass("btn btn-default");

  	/*
	"Hovernav" navbar dropdown on hover
	Delete this segment if you don't want it, and delete the corresponding CSS in bst.css
	Uses jQuery Media Query - see http://www.sitepoint.com/javascript-media-queries/
	*/
	var mq = window.matchMedia('(min-width: 768px)');
  if (mq.matches) {
    $('ul.navbar-nav li').addClass('hovernav');
  } else {
  	$('ul.navbar-nav li').removeClass('hovernav');
  };
  	/*
	The addClass/removeClass also needs to be triggered on page resize <=> 768px
	*/
  if (matchMedia) {
    var mq = window.matchMedia('(min-width: 768px)');
    mq.addListener(WidthChange);
    WidthChange(mq);
  }
	function WidthChange(mq) {
    if (mq.matches) {
      $('ul.navbar-nav li').addClass('hovernav');
    } else {
      $('ul.navbar-nav li').removeClass('hovernav');
    }
  };

   //Equal Height Divs
  /* var H = $("#footer-content").height();
     $(".item").height(H); */


//for each element that is classed as 'pull-down', set its margin-top to the difference between its own height and the height of its parent
$('.pull-down').each(function() {
    $(this).css('margin-top', $(this).parent().height()-$(this).height())
});

});

})( jQuery );
