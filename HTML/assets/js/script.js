var siteURL = "http://spice_shop.local/";

// Добавляем товар в корзину
function addToBasket (btn_add_basket) {
	// Создаем аякс запрос для метода POST
	var ajax = new XMLHttpRequest();
		ajax.open("POST", siteURL + "/HTML/modules/basket/add_basket.php", false);
		ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		ajax.send("id=" + btn_add_basket.dataset.id);

	// Возвращает объект Object
	// var response = JSON.parse(ajax.response);
	// console.log(response);
}


// Удаление товара из корзины
function deleteProductBasket(obj, id){

	var ajax = new XMLHttpRequest();
		ajax.open("POST", siteURL + "/HTML/modules/basket/delete.php", false );
		ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		ajax.send("id=" + id);

		//удалить строку с товаром 
		obj.parentNode.parentNode.remove();
}