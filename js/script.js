$(document).ready(function(){
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
	$.each($('ul.slideshow'),function(i,o){
		$(o).append($(o).find('li:first-child').clone());
		var len = $(o).find('li').length;
		var height = $(o).find('li:first-child>img').height();
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