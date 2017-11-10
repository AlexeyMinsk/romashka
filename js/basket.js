"use strict";

document.addEventListener("DOMContentLoaded", function(){
	
	let inBasketObj = {};
	
	let inBasketElements = document.querySelectorAll('[href="#card_in_basket"]');
	
	for(let i = 0; i < inBasketElements.length; i++)
	    inBasketElements[i].addEventListener('click', inBasketClick);
	
	function inBasketClick(event){
		
		let target = event.target;
		let cardPreview = target.closest(".card_preview");
		console.log(cardPreview);
	}
});