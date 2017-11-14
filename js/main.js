!function () {
    'use strict';
    // ������������ ����� �� ������ �����
    $('.js_next').on('click', function () {
		var attrHref = $(this).attr('href');
        attrHref = attrHref.substr(1);
        $('.basket_tabs__navigation li a').each(function(){
            $(this).parent('li').removeClass('active');
            var attrId = $(this).attr('href');
            attrId = attrId.substr(1);
            if(attrId == attrHref){
                $(this).parent('li').addClass('active');
			};
		});
	})
    // slider rotation
    if ($('.spritespin').length) {
        $('.spritespin').spritespin({
            source: SpriteSpin.sourceArray('/img/rad_zoom_{frame}.jpg', { frame: [1,34], digits: 3 }),
            width: 370,
            height: 280,
            frames: 34,
            framesX: 6,
            sense: -2,
            renderer: 'image'
		});
	};
	// Main slider
    if ($('.main_carousel').length) {
        $('.main_carousel').owlCarousel({
            loop:true,
            nav:false,
            items:1,
            autoPlay: true,
            autoplayTimeout:4000,
            autoplayHoverPause:true
		});
	};
	// card carousel
    if ($('.card_carousel').length) {
        $('.card_carousel').owlCarousel({
            mouseDrag: false,
            loop:true,
            nav:false,
            items:1,
            animateOut: 'fadeOut',
            URLhashListener:true,
            autoplayHoverPause:true,
            dotsContainer: '.dotsContentCard'
		});
	};
	// Magnific Popup
	var popupInline = $('.open-popup-inline');
	if (popupInline.length) {
		popupInline.magnificPopup({
			type:'inline',
			midClick: true,
			removalDelay: 300,
			callbacks: {
				beforeOpen: function() {
					this.st.mainClass = this.st.el.attr('data-effect');
				}
			}
		});
	};
}();

document.addEventListener('DOMContentLoaded', startScript);
document.addEventListener("changeInBasket", setMiniBasketData);
let elementsCollection = {
	miniBasket: {}, 
	basketSum: {}
}

function startScript(){
	
	elementsCollection.miniBasket = document.getElementsByClassName('basket-quantity')[0];
	elementsCollection.basketSum = document.getElementsByClassName('basket_sum')[0].childNodes[0];
	refreshMiniBasket();
}

function refreshMiniBasket(){//�������� ������� ��� �������� ��������
	
	BX.ajax({
		method: 'POST',
		dataType: 'json',
		url: '/ajax/basket.php',
		data: {
			'refresh_mini_bask': 'Y'
		},
		onsuccess: function (data){
			elementsCollection.miniBasket.textContent = '(' + data.quantity + ')';
			elementsCollection.basketSum.textContent = data.totalPrice;
		}
	});
}

function setMiniBasketData(event){//��� ��������� �������
	
	detail = event.detail;
	
	if(detail.sum){
		if(elementsCollection.basketSum.length)
		elementsCollection.basketSum.textContent = detail.sum;
		else{
			timeShift(elementsCollection, detail);
		}
	}
	if(detail.quantity){
		if(elementsCollection.miniBasket.length)
		elementsCollection.miniBasket.textContent = '(' + detail.quantity + ')';
		else{
			timeShift(elementsCollection, detail);
		}
	}
	
	function timeShift(elementsCollection, objVal){//������� �������� ��������� ��� ���������� ���� �������
		
		setTimeout(documentReady, 100);
		
		function documentReady(){
			
			if(document.readyState == 'interactive' || document.readyState == 'complete'){
				if(objVal.quantity)
				elementsCollection.miniBasket.textContent =  '(' + objVal.quantity + ')';
				else
				elementsCollection.basketSum.textContent = objVal.sum;
				}else{
				setTimeout(documentReady, 100);
			}
		}
	}
}

document.addEventListener("clickBuy", function(event){
	
	let inBasket = document.getElementById("card_in_basket");
	let popupImg = inBasket.querySelector(".mg-popup-img");
	let popupName = inBasket.querySelector(".card_preview__lnk");
	
	popupImg.src = event.detail.src;
	popupName.textContent = event.detail.name;
});