<?php  

    include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';

    include $_SERVER['DOCUMENT_ROOT'] . '/admin/parts/header.php';

	if (isset($_POST["title"]) && isset($_POST["description"]) && isset($_POST["content"]) && isset($_POST["image"]) && isset($_POST["cat_id"]) ) {
        $image = "assets/images/products_images/" . $_POST["image"];

		$sql = "INSERT INTO products (title, description, content, mass, image, costs, cat_id ) VALUES ('" . $_POST["title"] . "','" . $_POST["description"] . "', '" . $_POST["content"] . "' , '" . $_POST["mass"] . "' , '" . $image . "' , '" . $_POST["price"] . "' , '" . $_POST["cat_id"] . "')";		
		

			if ($conn -> query($sql)) {
				echo "<h2>Product added</h2>";
			  	header('Location: /admin/products.php');
			} else {
				echo "<h2>Error</h2>";
			}

	}


?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/admin">Главная</a></li>
    <li class="breadcrumb-item"><a href="/admin/products.php">Products</a></li>
    <li class="breadcrumb-item">Add</li>
  </ol>
</nav>
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add new product</h4>
            </div>
            <div class="card-body">
                <form method="POST">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Title</label>
                                <input name = "title" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                   
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Description</label>
                                <input name = "description" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Content</label>
                                <input name = "content" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Mass</label>
                                <input name = "mass" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Price</label>
                                <input name = "price" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="custom-file">
                        <label>Image</label></br>
                        <input name="image" type="file" id="customFile"></br>
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
                    <button name="submit" value="1" type="submit" class="btn btn-success btn-fill pull-right">Add product</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>
            
