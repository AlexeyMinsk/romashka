//функции работы с cookie
function getCookie(name) {
	var matches = document.cookie.match(new RegExp(
		"(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
	));
		return matches ? matches[1] : undefined;
}
	
function checkUnique(cookieStr, cookieName) {
		
	if(!cookieStr && cookieName)
		return true;
		
	let cookieArr = cookieStr.split(',');
	for(let i = 0; i < cookieArr.length; i++){
		if(cookieArr[i] == cookieName)
			return false;
	}
	return true;
}
	
function setCookies(cookies, compareNum){
		
	if(!cookies && !compareNum && cookies !== ""){
		return false;
	}else if(!cookies && compareNum){
		document.cookie = 'compareNums=' + compareNum;
		return true;
	}else if(!compareNum && (cookies || cookies === "") ){
		document.cookie = 'compareNums=' + cookies;
		return true;
	}else if(compareNum && checkUnique(cookies, compareNum)){
		document.cookie = 'compareNums=' + compareNum + ',' + cookies;
		return true;
	}
}
	
function deleteCookies(cookies, cookieName){
			
	if(!cookies || !cookieName)
		return false;
		
	let cookieArr = cookies.split(',');
	
	for(let i = 0; i < cookieArr.length; i++){
		if(cookieArr[i] == cookieName){	
			cookieArr.splice(i, 1);
			setCookies(cookieArr.join(','));
			return true;
		}
	}
	return false;
}
//end