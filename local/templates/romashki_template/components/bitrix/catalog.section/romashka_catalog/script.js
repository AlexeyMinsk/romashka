document.addEventListener('DOMContentLoaded', startScript);

function startScript(){

	let inBasket = document.querySelectorAll('[href="#card_in_basket"]');
	for(let i = 0; i < inBasket.length; i++){
		
		inBasket[i].addEventListener('click', clickBuy);
	}
	
	function clickBuy(event){
		let id = event.target.closest('.card_preview').dataset.cardId;
		let myEvent = new CustomEvent('clickBuy', {
			detail:{
				"src": imagesSrc[id],
				"name": items[id]["NAME"]
				}
			}
		);
		document.dispatchEvent(myEvent);
		sendToBasket(id);
	}
	
	function sendToBasket(id){

		BX.ajax({
			method: 'POST',
			dataType: 'json',
			url: '/catalog/ajax.php',
			data: {
				'ajax_basket': 'Y',
				'item': items[id]
			},
			onsuccess: function (data){
				//console.log('success!');
			}
		});
	}
}