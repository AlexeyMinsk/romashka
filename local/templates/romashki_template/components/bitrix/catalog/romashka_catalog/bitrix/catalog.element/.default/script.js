"use strict";

document.addEventListener('DOMContentLoaded', startScript);

function startScript(){
	
	let miniBasket = document.getElementsByClassName('basket-quantity')[0];
	let basketSum = document.getElementsByClassName('basket_sum')[0].childNodes[0];	
	let inBasket = document.querySelectorAll('[href="#card_in_basket"]');
	let inWish = document.querySelectorAll('[href="#in_wish"]');
	let whishlist = document.getElementsByClassName('counter-whishlist')[0];
	let buyOneClick = document.querySelectorAll('[href="#popup-click"]');
	let minus = document.getElementsByClassName('counter__minus')[0];
	let plus = document.getElementsByClassName('counter__plus')[0];
	let counter = document.getElementsByClassName('counter__inp')[0];
	
	counter.value = 1;
	
	plus.addEventListener("click", function(event){
		
		counter.value = +counter.value + 1;
	});
	
	minus.addEventListener("click", function(event){
		
		counter.value = +counter.value - 1 < 1 ? 1 : +counter.value - 1;
	});
	
	counter.addEventListener('keydown', event => {
		if(!+event.key)
			event.preventDefault();
	});
	
	for(let i = 0; i < inBasket.length; i++)	
	inBasket[i].addEventListener('click', clickBuyFn);
	
	for(let i = 0; i < inWish.length; i++)	
	inWish[i].addEventListener('click', addWhishListFn);
	
	document.addEventListener('click', buyOneClickFn);
	
	document.addEventListener("addWish", function(event){
		
		BX.ajax({
			method: 'POST',
			dataType: 'json',
			url: '/ajax/add-wish.php',
			data: {
				'add_wish': 'Y',
				'item_id': event.detail.id,
				'user_id': event.detail.userId
			},
			onsuccess: function(data){
				whishlist.textContent = data;
			}
		});
	
		event.preventDefault();
	});
	
	function clickBuyFn(event){
		
		let id = event.target.closest('[data-card-id]').dataset.cardId;
		let myEvent = new CustomEvent('clickBuy', {
			detail:{
				"id": id,
				"src": imageSrc,
				"name": item["NAME"]
			}
		}
		);
		document.dispatchEvent(myEvent);
		sendToBasket(id);
	}
	
	function addWhishListFn(event){
		
		let id = event.target.closest('[data-card-id]').dataset.cardId;
		let myEvent = new CustomEvent('addWish', {
			detail:{
				"id": id,
				"userId": userId,
				"src": imageSrc,
				"name": item["NAME"]
			}
		});
		document.dispatchEvent(myEvent);
	}
	
	function buyOneClickFn(event){
		
		let parentBlock = document.getElementById('popup-click');
		let img = parentBlock.getElementsByClassName('popup-click-img')[0];
		let price = parentBlock.getElementsByClassName('popup-click-price')[0];
		let name = parentBlock.getElementsByClassName('popup-click-name')[0];
		
		img.src = imageSrc;
		price.textContent = item["PRICE"] + ' руб.';
		name.textContent = item["NAME"];
	}
	
	function sendToBasket(id){
	
		item["QUANTITY"] = counter.value;
		
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
				if(data.refresh == 'Y'){
					miniBasket.textContent = '(' + data.quantity + ')';
					basketSum.textContent = data.totalPrice;
				}
			}
		});
	}
}