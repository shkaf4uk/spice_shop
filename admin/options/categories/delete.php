<?php  

	include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';



	if (isset($_GET["id"])) {
		
		$sql = "DELETE FROM categories WHERE id = " . $_GET["id"];

		if (mysqli_query($conn, $sql)) {
			header("Location: /admin/categories.php");
		} else {
			echo "<h2>Error</h2>";
		}
	}

?>