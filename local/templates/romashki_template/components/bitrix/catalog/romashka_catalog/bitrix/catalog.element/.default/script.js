"use strict";

document.addEventListener('DOMContentLoaded', startScript);

function startScript(){
	
	let inBasket = document.querySelectorAll('[href="#card_in_basket"]');
	let inWish = document.querySelectorAll('[href="#in_wish"]');
	let whishlist = document.getElementsByClassName('counter-whishlist')[0];
	let minus = document.getElementsByClassName('counter__minus')[0];
	let plus = document.getElementsByClassName('counter__plus')[0];
	let counter = document.getElementsByClassName('counter__inp')[0];
	let addDecorElem = document.querySelectorAll('[data-decor]');
	let decor = false;
	let decorPrice = false;
	
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
	
	for(let i = 0; i < addDecorElem.length; i++){
		addDecorElem[i].addEventListener("click", function(event){
			
			decor = this.dataset.decor;
			decorPrice = this.querySelector('[data-decor-price]').dataset.decorPrice;
			
		});
	}
	
	function clickBuyFn(event){
		
		let id = event.target.closest('[data-card-id]').dataset.cardId;
		let decorProps = 'N';
		let decPrice = 0;
		
		if(decor){
			decorProps = {
				'NAME': "Оформление",
				'CODE': "DECOR",
				'VALUE': decor,
				'SORT': "500"
			}
			decPrice = {
				'NAME': "Цена оформления",
				'CODE': "DECOR_PRICE",
				'VALUE': decorPrice,
				'SORT': "500"
			}
		}

		let myEvent = new CustomEvent('clickBuy', {
			detail:{
				"src": imageSrc,
				"item": item,
				"DECOR": decorProps,
				"DECOR_PRICE": decPrice
			}
		});
		document.dispatchEvent(myEvent);
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

}