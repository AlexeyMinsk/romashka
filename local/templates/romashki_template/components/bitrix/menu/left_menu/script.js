"use strict";
document.addEventListener('DOMContentLoaded', pageLoadFn);

function pageLoadFn(){
	
	let icons = document.getElementsByClassName('icon_menu__caret');
	
	for(let i = 0; i < icons.length; i++){

		icons[i].addEventListener('click', event => {
			//console.log('click');
			//return false;
		});
	}
}
