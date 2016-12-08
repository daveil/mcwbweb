$(document).ready(function(){
	function getHExt(){
		var w =$('#hospital-exterior').width();
		var h =$('#hospital-exterior').height();
		var o =$('#hospital-exterior').offset();
		var t =  o.top;
		var l =  o.left;
		var params = {
			'position':'absolute',
			'z-index':3,
			'background-color':'black',
			'height':h,
			'width':w,
			'top':t,
			'left':l,
		};
		return params;
	}
	$('#video-preload').remove();
	$('#take-a-tour').click(function(e){
		e.preventDefault();
		var params = getHExt();
		params.opacity=1;
		$('#exterior-frame').css(params);
		$('#hospital-exterior').css({'opacity':0});
		$('#blind').show().css({'opacity':0});
		$('section').addClass('animate');
		setTimeout(function(){
			$('#blind').css({'opacity':1});
			$('section').addClass('blur');
			$('body').addClass('fullscreen');
			var ww = $(window).width();
			var wh = $(window).height();
			var w  =  params.width;
				params.left = (ww - w)/2;
			$('#exterior-frame').css(params);
			$('#exterior-frame').html("<video class='animate fast' autoplay width='100%'><source src='video/mwcb-720.mp4' type='video/mp4'></video>");
			params.background='rgba(0,0,0,0.1)';
			params.top-=50;
			params.left-=50;
			var vh = $('#exterior-frame video').height();
			var vw = $('#exterior-frame video').width();
			params.width=vw;
			params.height=vh;
			$('#exterior-frame').css(params);
			$('#exterior-frame video').css({opacity:1});
			
		},1001);
	});
	$('#blind button').click(function(){
		$('#blind').css({'opacity':0});
		$('section').removeClass('blur');
		$('body').removeClass('fullscreen');
		var params = getHExt();
		params.top+=(params.height/4);
		params.left+=(params.width/4);
		params.width/=2;
		params.height/=2;
		params.opacity=0;
		$('#exterior-frame').css(params);
		$('#exterior-frame video').animate({volume: 0}, 1000);
		setTimeout(function(){
			var params = getHExt();
			$('#exterior-frame').css(params)
			$('#hospital-exterior').css({'opacity':1});
		},500);
		setTimeout(function(){
			$('#blind').hide();
			var params = getHExt();
			$('#exterior-frame').css(params).html('');
			
		},1500);
	});
	$.each($('.counter'),function(i,o){
		var value = parseInt($(o).text());
		var height =  $(o).outerHeight()*0.77;
		var offset = (value * height)*-1;
		var html='<div class="animate" style="top:'+offset+'px;" data-offset="'+offset+'">';
		for(var ctr = value;ctr>0;ctr-=1){
			if(ctr<10) ctr='0'+ctr;
			html+='<span>'+ctr+'</span>';
		}
		html+='</div>';
		$(o).html(html);
	});
	$('.section').waypoint({
	  handler: function(direction) {
		var id = this.element.id;
		if(direction=='up'){
			$('.section').removeClass('active');
			$('#intro').addClass('active');
			$.each($('.counter .animate'),function(i,o){
				var offset = $(o).data('offset');
				$(o).css({top:offset+'px'});
			});
			
		}
		
		switch(direction){
			case 'down':
				$('#'+id).addClass('active');
			break;
			case 'up':
				$('#'+id).prev().addClass('active');
			break;
		}
		if(id=='team'||id=='services' && direction=='down'){
			$('.counter .animate').css({top:'0px'});
			
		}
		
	  },offset:606
	});
	var exterior = $('#intro img.exterior');
		if(exterior){
			var height = exterior.height();
			$('#tagline-wrapper').css({'height':height+'px','overflow':'hidden'});
			$('#side-pic').css({'height':height+'px'});
		}
	$.each($('ul.slideshow'),function(i,o){
		
		$(o).append($(o).find('li:first-child').clone());
		var len = $(o).find('li').length;
		var height = $(o).find('li:first-child>img').height()+1;
		$(o).find('li>img').height(height);
		 $(o).attr('data-count',0);
		setInterval(function(){
				var count =   parseInt($(o).attr('data-count'));
				var offset = (height*(count%len)*-1);
				$(o).css({'margin-top':offset+'px'});
				if(count==0)
					$(o).addClass('animate')
				count++;
				if(count==len+1){
					$(o).css({'margin-top':'0px'});
					$(o).removeClass('animate');
					count=0;
				}
				 $(o).attr('data-count',count);
		},4000);
		//
	});
	
});