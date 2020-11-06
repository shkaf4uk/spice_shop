var siteURL = "http://spice_shop.local/";

// Добавляем товар в корзину
function addToBasket (btn_add_basket) {
	let ajax = new XMLHttpRequest();
		ajax.open("POST", siteURL + "/modules/basket/add_basket.php", false);
		ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		ajax.send("id=" + btn_add_basket.dataset.id);

	let countBasketHeader = document.querySelector('.count_basket_header');
	let number = parseInt(countBasketHeader.innerHTML) + 1;
	countBasketHeader.innerHTML = number;
}


// Удаление товара из корзины
function deleteProductBasket(obj, id){
	//выбрали сумму одного типа товара
	let sum = parseInt(obj.parentNode.parentNode.cells[4].innerText);
	let totalPriceBasket = document.querySelector('.total_price_basket');
	let str = totalPriceBasket.innerHTML;
	//отняли от общей суммы сумму удаленного товара
	let totalPrice = parseInt(str.replace(/[^\d]/g, '')) - sum;
		totalPriceBasket.innerHTML = "Итого: " + totalPrice + "грн";

	//Изменение отображения количества в корзине header.php 
	let colDelete = obj.parentNode.parentNode.cells[3].childNodes[1].childNodes[3].attributes[1].value;
	let countBasketHeader = document.querySelector('.count_basket_header');
	let number = parseInt(countBasketHeader.innerHTML) - colDelete;
		countBasketHeader.innerHTML = number;

	let ajax = new XMLHttpRequest();
		ajax.open("POST", siteURL + "/modules/basket/delete.php", false );
		ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		ajax.send("id=" + id);

		//удалить строку с товаром 
		obj.parentNode.parentNode.remove();


}


// Обновление модального окна корзины при наведении на карзину в header.php 
function checkCart(elem){
	let ajax = new XMLHttpRequest();
		ajax.open("POST", siteURL + "/modules/modal_basket/cart_modal.php", false );
		ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		ajax.send();
	let response = ajax.response;
	let cart = document.querySelector('.cart-modal');
	cart.innerHTML = response ;
}


function SelectValue(event) {
	console.dir(event);
}