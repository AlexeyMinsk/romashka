!function () {
    'use strict';
    // Переключение табов по кнопке Далее
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

document.addEventListener("DOMContentLoaded", startScript);
document.addEventListener("changeInBasket", setMiniBasketData);
document.addEventListener("clickBuy", function(event){
	
	let inBasket = document.getElementById("card_in_basket");
	let popupImg = inBasket.querySelector(".mg-popup-img");
	let popupName = inBasket.querySelector(".card_preview__lnk");
	
	popupImg.src = event.detail.src;
	popupName.textContent = event.detail.item["NAME"];
	sendToBasket(event.detail.item);
});

let elementsCollection = {
	miniBasket: {}, 
	basketSum: {}
}


document.addEventListener("addWish", function(event){
	
	let inWish = document.getElementById("in_wish");
	let popupImg = inWish.getElementsByClassName("in-wish-popup-img")[0];
	let popupName = inWish.getElementsByClassName("in-wish-popup-text")[0];
	
	popupImg.src = event.detail.src;
	popupName.textContent = event.detail.name;
	
	let promise = new Promise(function(resolve, reject){
		
		if(userId == 0){
			
			BX.ajax({
				method: 'POST',
				dataType: 'json',
				url: '/ajax/auth.php',
				data: {
					'create_user': 'Y',
					'romashka_user': userId
				},
				onsuccess: function (data){
					resolve({"userId": data});
					if(+data)
						setCookie('romashka_user', data, {expires: 8400});
				}
			});
		}
		else{
			resolve({"userId": event.detail.userId});
		}
	});
	
	promise.then(result => {
		
		BX.ajax({
			method: 'POST',
			dataType: 'json',
			url: '/ajax/add-wish.php',
			data: {
				'add_wish': 'Y',
				'item_id': event.detail.id,
				'user_id': result.userId
			},
			onsuccess: function(data){
				let whishlist = document.getElementsByClassName('counter-whishlist')[0];
				if(whishlist)
					whishlist.textContent = data;
			}
		});
	});
	event.preventDefault();
});

function startScript(){
	
	elementsCollection.miniBasket = document.getElementsByClassName('basket-quantity')[0];
	elementsCollection.basketSum = document.getElementsByClassName('basket_sum')[0].childNodes[0];
	
	document.forms.registration.addEventListener('submit', function(event){
		
		let formData = new FormData(this);
		let xhr = new XMLHttpRequest();
		xhr.open('POST', '/ajax/reg.php');
		xhr.send(formData);
		
		xhr.onload = function (){
			if(+this.responseText)
				setCookie('romashka_user', this.responseText, {expires: 8400});
		}
		
		$.magnificPopup.close();
		event.preventDefault();
	});
	
	document.forms.auth.addEventListener('submit', function(event){
		
		let formData = new FormData(this);
		let xhr = new XMLHttpRequest();
		xhr.open('POST', '/ajax/auth.php');
		xhr.send(formData);
		
		xhr.onload = function (){
			if(+this.responseText)
				setCookie('romashka_user', this.responseText, {expires: 8400});
		}
		
		$.magnificPopup.close();
		event.preventDefault();
	});
	
	refreshMiniBasket();
	refreshWishlist();
}

function refreshMiniBasket(){//обновить конзину при загрузке страницы

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

function refreshWishlist(){//обновить список желаний при загрузке страницы
	
	if(userId){
		BX.ajax({
			method: 'POST',
			dataType: 'json',
			url: '/ajax/add-wish.php',
			data: {
				'get_wish': 'Y',
				'user_id': userId
			},
			onsuccess: function (data){
				document.getElementsByClassName('counter-whishlist')[0].textContent = data;
			}
		});
	}
}

function setMiniBasketData(event){//при изменении корзины
	
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
	
	function timeShift(elementsCollection, detail){//ожидать загрузки документа для обновления мини корзины
		
		setTimeout(documentReady, 100);
		
		function documentReady(){
			
			if(document.readyState == 'interactive' || document.readyState == 'complete'){
				if(detail.quantity)
				elementsCollection.miniBasket.textContent =  '(' + detail.quantity + ')';
				else
				elementsCollection.basketSum.textContent = detail.sum;
			}
			else{
				setTimeout(documentReady, 100);
			}
		}
	}
}

function sendToBasket(item){
	
	BX.ajax({
		method: 'POST',
		dataType: 'json',
		url: '/ajax/basket.php',
		data: {
			'ajax_basket': 'Y',
			'item': item,
			'refresh_mini_bask': 'Y'
		},
		onsuccess: function (data){
			
			//if(+data['user_id'])
			//	setCookie('romashka_user', data['user_id'], {expires: 8400});
			
			if(data.refresh == 'Y'){
				elementsCollection.miniBasket.textContent = '(' + data.quantity + ')';
				elementsCollection.basketSum.textContent = data.totalPrice;
			}
		}
	});
}