$(function () {
	var imag=$('section.album a');
	imag.click(function(){
		$('div.dark').css({
			display:'block',
			'background-image': 'url('+$(this).attr('href')+')'
		}).animate({
			opacity:1
		},500).click(function(){
			$(this).animate({
				opacity : 0
			},400,'ease-out',function(){
				$(this).css({display : 'none'});
			})
		})
		//$('div.dark div.imgtext').html($('span.hidden',this).html);
		// $('span.hidden').css{
		// 	display:'block'
		// }.animate({
		// 	opacity:1
		// },500);
		// $('div.dark div.imgtext').css{
		// 	display:'block'
		// }.animate({
		// 	opacity:1
		// },500);
		return false;
	});
})