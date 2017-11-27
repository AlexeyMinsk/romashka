"use strict";

document.addEventListener('DOMContentLoaded', startScript);

function startScript(){
	
	let miniBasket = document.getElementsByClassName('basket-quantity')[0];
	let basketSum = document.getElementsByClassName('basket_sum')[0].childNodes[0];	
	let inBasket = document.querySelectorAll('[href="#card_in_basket"]');
	let inWish = document.querySelectorAll('[href="#in_wish"]');
	let whishlist = document.getElementsByClassName('counter-whishlist')[0];

	for(let i = 0; i < inBasket.length; i++)	
		inBasket[i].addEventListener('click', clickBuyFn);
	
	for(let i = 0; i < inWish.length; i++)
		inWish[i].addEventListener('click', addWhishListFn);
	
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
	
		let id = event.target.closest('.card_preview').dataset.cardId;
		let myEvent = new CustomEvent('clickBuy', {
			detail:{
				"id": id,
				"src": imagesSrc[id],
				"name": items[id]["NAME"]
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
				"src": imagesSrc[id],
				"name": items[id]["NAME"]
			}
		});
		document.dispatchEvent(myEvent);
	}
	
	function sendToBasket(id){
		
		BX.ajax({
			method: 'POST',
			dataType: 'json',
			url: '/ajax/basket.php',
			data: {
				'ajax_basket': 'Y',
				'item': items[id],
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