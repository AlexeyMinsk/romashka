"use strict";
document.addEventListener('DOMContentLoaded', pageLoadFn);

function pageLoadFn(){
	
	let menuList = document.querySelectorAll('.aside_menu-2__list>li a');
	
	for(let i = 0; i < menuList.length; i++){

		menuList[i].addEventListener('click', event => {
			if(event.target.tagName == 'I')
				event.preventDefault();
		});
	}
} 
