var siteURL = "http://tw.local/admin/";

btnChangeStatus = document.querySelector("#changeProductStatus");

function changeStatus(obj, id) {

		// Создаём ajax запрос

		var ajax = new XMLHttpRequest();

			// открываем его

			ajax.open("POST", siteURL + "options/status/change-status.php", false);

			// Устанавливаем значение

			ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

			// Выполняем запрос

			ajax.send("id=" + id);

			var btnStatus = document.getElementById("status#"+id);

			console.dir(btnStatus);

			btnStatus.innerText = "Sent";

}