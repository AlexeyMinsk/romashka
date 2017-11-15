document.addEventListener('DOMContentLoaded', startScript);

function startScript(){
	
	let minusArr = document.getElementsByClassName('counter__minus');
	let plusArr = document.getElementsByClassName('counter__plus');
	let counterArr = document.getElementsByClassName('counter__inp');
	let delayButtonArr = document.getElementsByClassName('icon-bag');
	let deleteButtonArr = document.getElementsByClassName('icon-trash');
	let deleteXArr = document.getElementsByClassName('deleteX');
	let itemSumArr = document.getElementsByClassName('item-sum');
	let resultSumElem = document.getElementsByClassName('sum-result')[0];
	let itemQuantity = document.getElementsByClassName('item-quantity')[0];
	let cargoCost = document.getElementsByClassName('cargo-cost')[0];
	let orderSum = document.getElementsByClassName('result-order-sum')[0];
	let formOrder = document.forms.order;
	let formPayment = document.forms.payment;
	let illustrationOrder = document.getElementsByName('illustration-order')[0];
	let miniBasketasketSum = document.getElementsByClassName('basket_sum')[0].childNodes[0];
	
	const CARGO_LIMIT = 1000;
	const CARGO_PRICE = 300;
	
	changeSumResult();
	changeitemQuantity();

	for(let i = 0; i < counterArr.length; i++){
		
		counterArr[i].value = items[i]["QUANTITY"];
		
		plusArr[i].addEventListener("click", function(event){
			
			let counter = this.closest('.counter').getElementsByClassName('counter__inp')[0];
			counter.value = +counter.value + 1;
			let dataElemId = this.closest('[data-elem-id]');
			changeSum(dataElemId);
			changeSumTd(dataElemId.dataset.elemId, counter.value);
			
			sendAjax(getParentDataset(counter, "[data-elem-id]", "elemId"), counter.value);
			return false;
		});
		minusArr[i].addEventListener("click", function(event){
			
			let counter = this.closest('.counter').getElementsByClassName('counter__inp')[0];
			counter.value = +counter.value - 1 < 1 ? 1 : +counter.value - 1;
			let dataElemId = this.closest('[data-elem-id]');
			changeSum(dataElemId);
			changeSumTd(dataElemId.dataset.elemId, counter.value);
			sendAjax(getParentDataset(counter, "[data-elem-id]", "elemId"), counter.value);
			return false;
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
			if(counterTr)
			counterTr.parentNode.removeChild(counterTr);
			changeSumResult();
			changeitemQuantity();
			return false;
		}
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
		
		formOrder.addEventListener("change", changeForm);
		formPayment.addEventListener("change", changeForm);
		
		function changeForm(event){
			
			let targetName = event.target.name;
			
			if(conformity[targetName]){
				conformity[targetName](this[targetName].value);
			}
		}
	}
	
	function changeSumTd(elemId, val){
		
		let counterTd = document.querySelector("[data-counter-td='" + elemId + "']");
		if(counterTd)
		counterTd.textContent = val;
	}
	
	function sendAjax(id, val){//обновляет корзину
		
		BX.ajax({
			method: 'POST',
			dataType: 'json',
			url: '/ajax/forBasket.php',
			data: {
				'ID': id,
				'VALUE': val
			},
			onsuccess: function (data){
				//console.log('success!');
			}
		});
	}
	
	function getParentDataset(elem, parentSelector, data){		
		return elem.closest(parentSelector).dataset[data];
	}
	
	function changeSum(parent){//изменение сумму на элементк
		
		let price = parseFloat(parent.querySelector('.item-price').textContent); 
		let quantity = parseFloat(parent.querySelector('.counter__inp').value);
		let itemSum = parent.querySelector('.item-sum');
		itemSum.textContent = price * quantity + " руб.";
		document.querySelector("[data-sum-td='" + parent.dataset.elemId + "']").textContent = itemSum.textContent;
		changeSumResult();
	}
	
	function changeSumResult(){//измененить общую сумму
		
		let sum = 0;
		for(i = 0; i < itemSumArr.length; i++){
			let tempStr = itemSumArr[i].textContent.replace(" ", "");
			sum += parseFloat(tempStr);
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
	
	function changeitemQuantity(){//изменить общее кол-во товаров
		
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