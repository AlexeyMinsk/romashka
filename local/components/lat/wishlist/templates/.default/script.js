"use strict";

document.addEventListener('DOMContentLoaded', startScript);

function startScript(){

	let wishlist = document.querySelectorAll("[data-wishlist-id]");

	for(let i = 0; i < wishlist.length; i++){
		
		wishlist[i].addEventListener('click', deleteWishlistItem);
		wishlist[i].addEventListener('click', wishlistItemToBasket);
	}
}

function deleteWishlistItem(event){

	if(!event.target.classList.contains("icon-trash"))
		return;

	let parent = event.target.closest('[data-wishlist-id]');
	let itemId = parent.dataset.wishlistId;
	
	BX.ajax({
		method: 'POST',
		dataType: 'json',
		url: '/ajax/add-wish.php',
		data: {
			'user_id': userId,
			'item_id': itemId,
			'delete_item': 'Y'
		},
		onsuccess: function (){
			parent.parentNode.removeChild(parent);
			let counterWhishlist = document.getElementsByClassName('counter-whishlist')[0];
			counterWhishlist.textContent = counterWhishlist.textContent - 1;
		}
	});
}

function wishlistItemToBasket(event){
	console.log('click');
	if(!event.target.classList.contains("icon-basket"))
		return;
	
	let parent = event.target.closest('[data-wishlist-id]');
	let itemId = parent.dataset.wishlistId;
	
	BX.ajax({
		method: 'POST',
		dataType: 'json',
		url: '/ajax/basket.php',
		data: {
			'ajax_basket': 'Y',
			'item': items[itemId],
			'refresh_mini_bask': 'Y'
		},
		onsuccess: function (data){
			if(data.refresh == 'Y'){
				let miniBasket = document.getElementsByClassName('basket-quantity')[0];
				let basketSum = document.getElementsByClassName('basket_sum')[0].childNodes[0];	
				miniBasket.textContent = '(' + data.quantity + ')';
				basketSum.textContent = data.totalPrice;
			}
		}
	});
}