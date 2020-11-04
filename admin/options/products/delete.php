<?php  

	include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';

	if (isset($_GET["id"])) {
		
		$sql = "DELETE FROM products WHERE id = " . $_GET["id"];

		if (mysqli_query($conn, $sql)) {
			header("Location: /admin/products.php");
		} else {
			echo "<h2>Error</h2>";
		}
	}

?>