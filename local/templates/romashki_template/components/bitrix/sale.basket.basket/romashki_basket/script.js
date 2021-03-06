document.addEventListener('DOMContentLoaded', startScript);

function startScript(){
	
	let parentTr = document.querySelectorAll('[data-elem-id]');
	let minusArr = document.getElementsByClassName('counter__minus');
	let plusArr = document.getElementsByClassName('counter__plus');
	let counterArr = document.getElementsByClassName('counter__inp');
	let delayButtonArr = document.getElementsByClassName('icon-bag');
	let deleteButtonArr = document.getElementsByClassName('icon-trash');
	let deleteXArr = document.getElementsByClassName('deleteX');
	let itemsPrice = document.getElementsByClassName('item-sum');
	let itemsDecorPrice = document.getElementsByClassName('item-price');
	let resultSumElem = document.getElementsByClassName('sum-result')[0];
	let itemQuantity = document.getElementsByClassName('item-quantity')[0];
	let cargoCost = document.getElementsByClassName('cargo-cost')[0];
	let orderSum = document.getElementsByClassName('result-order-sum')[0];
	let illustrationOrder = document.getElementsByName('illustration-order')[0];
	let miniBasketasketSum = document.getElementsByClassName('basket_sum')[0].childNodes[0];
	let orderTabButtons = document.querySelectorAll('[href="#order"]');
	
	const CARGO_LIMIT = 1000;
	const CARGO_PRICE = 300;
	
	changeItemQuantity();

	for(let i = 0; i < parentTr.length; i++){
		
		counterArr[i].value = items[i]["QUANTITY"];
		changeSum(parentTr[i]);
		plusArr[i].addEventListener("click", function(event){
			
			let counter = this.closest('.counter').getElementsByClassName('counter__inp')[0];
			counter.value = +counter.value + 1;
			changeSum(parentTr[i]);
			changeOrderItemCounter(parentTr[i].dataset.elemId, counter.value);
			
			sendAjax(getParentDataset(counter, "[data-elem-id]", "elemId"), counter.value);
			return false;
		});
		
		minusArr[i].addEventListener("click", function(event){
			
			let counter = this.closest('.counter').getElementsByClassName('counter__inp')[0];
			counter.value = +counter.value - 1 < 1 ? 1 : +counter.value - 1;
			changeSum(parentTr[i]);
			changeOrderItemCounter(parentTr[i].dataset.elemId, counter.value);
			sendAjax(getParentDataset(counter, "[data-elem-id]", "elemId"), counter.value);
			return false;
		});
		
		counterArr[i].addEventListener("keydown", function(event){
			if(!+event.key)
				event.preventDefault();
		});
		
		delayButtonArr[i].addEventListener("click", function(event){
			
			sendAjax(getParentDataset(this, "[data-elem-id]", "elemId"), "DELAY");
			return false;
		});
		
		deleteButtonArr[i].addEventListener("click", deleteBasketElem);
		deleteXArr[i].addEventListener("click", deleteBasketElem);
		
		function deleteBasketElem (event){
			
			let parent = event.target.closest('[data-elem-id]');
			let counterTr = document.querySelector("[data-counter-td='" + parent.dataset.elemId + "']").parentNode;
			sendAjax(getParentDataset(this, "[data-elem-id]", "elemId"), "DELETE");
			parent.parentNode.removeChild(parent);
			if(counterTr){
				counterTr.parentNode.removeChild(counterTr);
			}
			changeSumResult();
			changeItemQuantity();
			return false;
		}
	}
	
	for(let i = 0; i < orderTabButtons.length; i++){
	
		orderTabButtons[i].addEventListener('click', function(event){
			
			let formReady = true;
			let orderMess = document.getElementsByClassName('big_label')[0];
			for(let i = 0; i < document.forms.order.elements.length; i++){
			
				if(document.forms.order.elements[i].required && !document.forms.order.elements[i].value){
					formReady = false;
					break;
				}
			}
			if(formReady){
				orderMess.textContent = 
					"Ваш заказ сформирован, пожалуйста проверьте все данные перед подтверждением заказа";
					
				if(orderMess.classList.contains('user-order-message'))
					orderMess.classList.remove('user-order-message');
			}
			else{
				orderMess.textContent = 
					"Не заполнены все обязательные(помечены звёздочкой) поля формы!";
					
				if(!orderMess.classList.contains('user-order-message'))
					orderMess.classList.add('user-order-message');
			}
		});
	}
	
	bindingForm();
	
	function bindingForm(){//связать формы заполняемые пользователями и результ. вывод
		
		let conformity = {
			'addr': function(val){
				let addr = illustrationOrder.querySelector("[name='full-addr']");
				addr.textContent = val;
			},
			'date': function(val){
				let date = illustrationOrder.querySelector("[name='illustration-date']");
				date.textContent = val;
			},
			'pay': function(val){
				
				let delivery = illustrationOrder.querySelector("[name='delivery-method']");
				let payment = illustrationOrder.querySelector("[name='payment-method']");
				
				switch(val){
					
					case '1':
					delivery.textContent = "Курьером";
					payment.textContent = "Наличные/пластиковая карта курьеру при доставке";
					break;
					case '2':
					delivery.textContent = "Самовывоз";
					payment.textContent = "Наличные/пластиковая в магазине";
					break;
					case '3':
					delivery.textContent = "Курьером";
					payment.textContent = "Наличные/пластиковая карта курьеру при доставке";
					break;
					default:
					delivery.textContent = "";
					payment.textContent = "";
					break;
				}
			}
		}
		
		document.forms.order.addEventListener("change", changeForm);
		document.forms.payment.addEventListener("change", changeForm);
		
		function changeForm(event){
			
			let targetName = event.target.name;
			
			if(conformity[targetName]){
				conformity[targetName](this[targetName].value);
			}
		}
	}
	
	function changeOrderItemCounter(elemId, val){
		
		let counterTd = document.querySelector("[data-counter-td='" + elemId + "']");
		if(counterTd)
			counterTd.textContent = val;
	}
	
	function sendAjax(id, action){//обновляет корзину
		
		BX.ajax({
			method: 'POST',
			dataType: 'json',
			url: '/ajax/forBasket.php',
			data: {
				'ID': id,
				'VALUE': action
			},
			onsuccess: function (data){
				//console.log('success!');
			}
		});
	}
	
	function getParentDataset(elem, parentSelector, data){		
		return elem.closest(parentSelector).dataset[data];
	}
	
	function changeSum(parent){//изменение сумму на элементах

		let itemPriceElem = parent.querySelector('.item-price');
		let quantity = parseFloat(parent.querySelector('.counter__inp').value);
		let decorPriceElem = parent.querySelector('.item-sum');
		itemPriceElem.textContent = itemPriceElem.dataset.itemPrice * quantity + " руб.";
		decorPriceElem.textContent = decorPriceElem.dataset.decorePrice * quantity + " руб.";
		
		document.querySelector("[data-sum-td='" + parent.dataset.elemId + "']").textContent
			= (+itemPriceElem.dataset.itemPrice + +decorPriceElem.dataset.decorePrice) * quantity + " руб.";
		
		changeSumResult();
	}
	
	function changeSumResult(){//измененить общую сумму
		
		let sum = 0;

		for(i = 0; i < itemsPrice.length; i++){
			sum = sum + parseFloat(itemsDecorPrice[i].textContent) + parseFloat(itemsPrice[0].textContent);
		}
		resultSumElem.textContent = sum + " руб.";
		
		cargoCost.textContent = sum < CARGO_LIMIT ? CARGO_PRICE : 0;
		orderSum.textContent = sum + +cargoCost.textContent;
		initEvent("changeInBasket", {
			detail:{
				"sum": sum
			}
		});
	}
	
	function changeItemQuantity(){//изменить общее кол-во товаров
		
		itemQuantity.textContent = counterArr.length;
		tempObj = {
			"quantity": itemQuantity.textContent
		};
		
		if(counterArr.length < 1){
			miniBasketasketSum.textContent = 0;
			tempObj.sum = 0;
		}
		
		initEvent("changeInBasket", {
			detail: tempObj
		});
	}
	
	function initEvent(eventName, objDetail){
		
		let e = new CustomEvent(eventName, objDetail);
		document.dispatchEvent(e);
	}
}