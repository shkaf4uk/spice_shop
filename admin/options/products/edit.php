<?php

    include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';

    include $_SERVER['DOCUMENT_ROOT'] . '/admin/parts/header.php';

	if (isset($_POST["title"]) && isset($_POST["description"]) && isset($_POST["content"]) && isset($_POST["category_id"]) ) {

        $image = "assets/images/products_images/" . $_POST["image"];

		$sql_e = "UPDATE products SET title = '" . $_POST["title"] . "', description = '" . $_POST["description"] . "', content = '" . $_POST["content"] . "' , mass = '" . $_POST["mass"] . "', costs = '" . $_POST["price"] . "', image = '" . $image . "', category_id = '" . $_POST["category_id"] . "'  WHERE products. `id` = '" . $_GET["id"] . "'";	
		
            
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

    $sql_с = "SELECT * FROM categories WHERE id= " . $row["category_id"];
    $result_с = $conn -> query($sql_с);
    $category = mysqli_fetch_assoc($result_с);
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
                                <input name = "content" type="text" class="form-control" value ="<?php  echo $row["content"]  ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Mass</label>
                                <input name = "mass" type="text" value ="<?php  echo $row["mass"] ?>" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Price</label>
                                <input name = "price" type="text" class="form-control" value ="<?php  echo $row["costs"]  ?>">
                            </div>
                        </div>
                    </div>
                    <div class="custom-file">
                        <label>Image</label></br>
                        <img  style="width: 50px"src="<?php echo "http://tw.local/" . $row["image"] ?>"></br>
                        </br>
                        <input name="image" value="<?php echo "http://tw.local/" . $row["image"] ?>" type="file" id="customFile"></br>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Category</label>
                                <select name = "category_id" class="form-control">
                                	<option value = "<?php  echo  $category["id"]  ?>"><?php  echo  $category["title"]  ?></option>
                                	<?php
										$sql_сat = "SELECT * FROM categories";
                                		$result_сat = $conn -> query($sql_сat);
                                		while ($row_сat = mysqli_fetch_assoc($result_сat)) {
                                			echo "<option value = '" . $row_сat ["id"] . "' >" . $row_сat ["title"] ."</option>";
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

