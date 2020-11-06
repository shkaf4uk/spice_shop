<?php

    include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';

    include $_SERVER['DOCUMENT_ROOT'] . '/admin/parts/header.php';

	if (isset($_POST["title"]) && isset($_POST["description"]) && isset($_POST["content"]) && isset($_POST["cat_id"]) ) {

		$sql_e = "UPDATE products SET title = '" . $_POST["title"] . "', description = '" . $_POST["description"] . "', content = '" . $_POST["content"] . "' , category_id = '" . $_POST["cat_id"] . "'  WHERE products. `id` = '" . $_GET["id"] . "'";	
		
			if ($conn -> query($sql_e)) {
				echo "<h2>Product edited</h2>";
			  	header('Location: /admin/products.php');
			} else {
				echo "<h2>Error</h2>";
			}

	} 
?>

<?php
if (isset($_GET["id"]) ) {
	$sql = "SELECT * FROM products WHERE id=" . $_GET["id"];
	$result = $conn -> query($sql);
    $row = mysqli_fetch_assoc($result);


}
?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/admin">Главная</a></li>
    <li class="breadcrumb-item"><a href="/admin/products.php">Products</a></li>
    <li class="breadcrumb-item">Edit</li>
  </ol>
</nav>
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit product</h4>
            </div>
            <div class="card-body">
                <form method="POST">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Title</label>
                                <input name = "title" type="text" class="form-control" value ="<?php  echo $row["title"]  ?>">
                            </div>
                        </div>
                    </div>
                   
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Description</label>
                                <input name = "description" type="text" class="form-control" value ="<?php  echo $row["description"]  ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Content</label>
                                <input name = "content" type="text" class="form-control" value ="<?php  echo $row["description"]  ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Category</label>
                                <select name = "cat_id" class="form-control">
                                	<option value = "0">Не выбрано</option>
                                	<?php
										$sql = "SELECT * FROM categories";
                                		$result = $conn -> query($sql);
                                		while ($row = mysqli_fetch_assoc($result)) {
                                			echo "<option value = '" . $row ["id"] . "' >" . $row ["title"] ."</option>";
										}
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button name="submit" value="1" type="submit" class="btn btn-success btn-fill pull-right">Edit product</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>

