/* Jquery.js */
// even while click

$('.page-scroll').on('click', function(e) {

	// get content href
	
	var href=$(this).attr('href');
	
	var elementujuan=$(href);
	
	//move scroll
	
	$('html,body').animate({
	scrollTop:elementujuan.offset().top-50
	},1250,'easeInOutExpo');
	
	e.preventDefault();
	//console.log(elemenhref.offset().top);
	
	

});


// parallax

// jumbotron
$(window).on('load',function() {
	$('.jumbotron').addClass('show');
	$('.jumbotron p').addClass('show');
	$('.jumbotron h1').addClass('show');
	//$('.img-circle').addClass('show');
	
	
});

// about

$(window).on('load',function() {
	$('.pkiri').addClass('pmuncul');
	$('.ptengah').addClass('pmuncul');
	$('.pkanan').addClass('pmuncul');
	
});




$(window).scroll(function(){

	//jumbotron
	
	var wScroll= $(this).scrollTop();
	
	$('.jumbotron img').css({
		'transform' : 'translate(0px,'+wScroll/4+'%)'
	});
	
	$('.jumbotron h1').css({
		'transform' : 'translate(0px,'+wScroll/2+'%)'
	});
	
	$('.jumbotron p').css({
		'transform' : 'translate(0px,'+wScroll/1.2+'%)'
	});
	
	
	//portofolio
	if(wScroll > $('.portofolio').offset().top-250){
	
		$('.portofolio .thumbnail').each(function (i){
		
			setTimeout(function(){
				$('.portofolio .thumbnail').eq(i).addClass('show');
			},150*(i+1));
		
		});
	
		//$('.portofolio .thumbnail').addClass('show');
	}
	

});

