$(document).ready(function(){
	
	
	
	x=false
	
	setTimeout(function(){
		$(".block").animate({
			'top':'0'
		},1000)
	})
	
	
	
	
	$(".menu").click(function(){
		
		
		name= $(this).attr("name")
		
		if($(this).hasClass('menu_click') || $(".pages").is (":animated")){
			return false
		}
		
		$(".menu_click").removeClass()
		$(this).addClass("menu_click")
		
		
			$('.carousel').animate({
				'left':'100vw'
			},500,function(){
				$('.pages').load(name+'.html')
				$('.pages').css({
				'display':'none'
				})
				
			
			
				$('.pages').slideDown(700)
				
				
			})
		
		x=true
			
	
	
	})
	
	
	
	$("#logo").click(function(){
		
		if(x==true){
			$(".menu_click").removeClass()
			$('.carousel_my').css({
				'height':'665px'
					
				})
			
			$('.carousel').css({
					'left':'-100vw'
				})
			$('.pages').css({
				"display":"none"
			})
				
				
			
			
			$(".carousel").animate({
				'left':'0'
			},500)
			x=false
			
		}
		
		
	
	})
	
	
	$(".m1").click(function(){
		$('.carousel_my').css({
			'height':'1020px'
				
			})
	}) 
	
	$(".m2").click(function(){
		$('.carousel_my').css({
			'height':'2670px'
				
			})
	}) 
	
	$(".m3").click(function(){
		$('.carousel_my').css({
			'height':'668px'
				
			})
	}) 
	
	$(".m4").click(function(){
		$('.carousel_my').css({
			'height':'400px'
				
			})
	}) 
	
	$(".m5").click(function(){
		$('.carousel_my').css({
			'height':'487px'
				
			})
	}) 
	
	
	$(".chek").click(function(){
		$(".personal-info-agree-hint").toggle()
	})
	
	
	
	
	
	
	
	
})