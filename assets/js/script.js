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

	//Промежуточная цена в форме оформления заказа
	let formSubTotalPrice = document.querySelector('.form__sub__total__price');
		formSubTotalPrice.innerText = totalPrice + "грн";

	//итоговая цена в форме оформления заказа
	let formTotalPrice = document.querySelector('.form__total__price');
		formTotalPrice.innerText = totalPrice + "грн";

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


//Выбор способа доставки в форме оформления заказа
function SelectValue(chose) {
	let shippingTotal = document.querySelector('.shipping__total');
	let shippingPrice = document.querySelector('.shipping__price');

	if (chose.value == 1){
		shippingTotal.innerHTML = "Доставка: " + "<b>" + "Новая почта" + "</b>" ;
		shippingPrice.innerHTML = 40 + "грн";
	} else if (chose.value == 2){
		shippingTotal.innerHTML = "Доставка: " + "<b>" + "УКРПОЧТА" + "</b>";
		shippingPrice.innerHTML = 30 + "грн";
	} else if (chose.value == 3){
		shippingTotal.innerHTML = "Доставка: " + "<b>" + "ИН ТАЙМ" + "</b>";
		shippingPrice.innerHTML = 35 + "грн";
	} else {
		shippingTotal.innerHTML = "Доставка: " + "<b>" + "Самовывоз" + "</b>";
		shippingPrice.innerHTML = 0 + "грн";
	}

	let totalPriceBasket = document.querySelector('.total_price_basket');
	let str = totalPriceBasket.innerHTML;
	let totalPrice = parseInt(str.replace(/[^\d]/g, ''));

	//Промежуточная цена в форме оформления заказа
	let formSubTotalPrice = document.querySelector('.form__sub__total__price');

	//Итоговая цена в форме при выборе доставки
	let formTotalPrice = document.querySelector('.form__total__price');
		formTotalPrice.innerText = parseInt(formSubTotalPrice.innerText) + parseInt(shippingPrice.innerHTML) + "грн";

	//записали в скрытый инпут значение
	let inputTotalPrice = document.querySelector(".input_total_price");
	inputTotalPrice.value = formTotalPrice.innerText;
}


// ПРОМО-КОД
let formPromoCod = document.querySelector('#form_promo_cod');

if (formPromoCod != null) {
	formPromoCod.onsubmit = function (event) {
		event.preventDefault();
		let promo = 1;

		let inputPromoCod = document.querySelector('.input_promo_cod');
		if (inputPromoCod.value == "promo95" || inputPromoCod.value == "spice95"){
			promo = 0.95;
		} else if (inputPromoCod.value == "promoVIP" || inputPromoCod.value == "spiceVIP"){
			promo = 0.90;
		}

		//общая цена в корзине
		let totalPriceBasket = document.querySelector('.total_price_basket');
		let str = totalPriceBasket.innerHTML;
		let totalPrice = parseInt(str.replace(/[^\d]/g, ''));
		let shippingPrice = document.querySelector('.shipping__price');

		//Промежуточная цена в форме оформления заказа
		let formSubTotalPrice = document.querySelector('.form__sub__total__price');
			formSubTotalPrice.innerText = parseInt(totalPrice*promo) + "грн";

		//Итоговая цена в форме оформления заказа
		let formTotalPrice = document.querySelector('.form__total__price');
			formTotalPrice.innerText = parseInt(formSubTotalPrice.innerText) + parseInt(shippingPrice.innerHTML) + "грн";

		//записали в скрытый инпут значение
		let inputTotalPrice = document.querySelector(".input_total_price");
		inputTotalPrice.value = formTotalPrice.innerText;
	}	
} 
