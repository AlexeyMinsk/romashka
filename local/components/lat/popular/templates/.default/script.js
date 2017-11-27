"use strict";

document.addEventListener('DOMContentLoaded', startScript);

function startScript(){

	let inBasket = document.querySelectorAll('[href="#card_in_basket"]');
	let inWish = document.querySelectorAll('[href="#in_wish"]');

	for(let i = 0; i < inBasket.length; i++)	
		inBasket[i].addEventListener('click', clickBuyFn);
	
	for(let i = 0; i < inWish.length; i++)
		inWish[i].addEventListener('click', addWhishListFn);

	function clickBuyFn(event){
	
		let id = event.target.closest('.card_preview').dataset.cardId;
		let myEvent = new CustomEvent('clickBuy', {
			detail:{
				"src": imagesSrc[id],
				"item": items[id]
			}
		}
		);
		document.dispatchEvent(myEvent);
	}
	
	function addWhishListFn(event){
	
		let id = event.target.closest('[data-card-id]').dataset.cardId;
		let myEvent = new CustomEvent('addWish', {
			detail:{
				"id": id,
				"userId": userId,
				"src": imagesSrc[id],
				"name": items[id]["NAME"],
				"item": items[id]
			}
		});
		document.dispatchEvent(myEvent);
	}
}