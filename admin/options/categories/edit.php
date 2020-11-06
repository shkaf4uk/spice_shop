<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';

    include $_SERVER['DOCUMENT_ROOT'] . '/admin/parts/header.php';

	if (isset($_POST["id"]) && isset($_POST["title"])) {

		$sql_e = "UPDATE categories SET id = '" . $_POST["id"] . "', title = '" . $_POST["title"] . "' WHERE categories. `id` = '" . $_GET["id"] . "'";	
		var_dump($sql_e);
			if ($conn -> query($sql_e)) {
				echo "<h2>Category edited</h2>";
			  	header('Location: /admin/categories.php');
			} else {
				echo "<h2>Error</h2>";
			}

	} 
?>

<?php
if (isset($_GET["id"]) ) {
	$sql = "SELECT * FROM categories WHERE id=" . $_GET["id"];
	$result = $conn -> query($sql);
    $row = mysqli_fetch_assoc($result);


}
?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/admin">Главная</a></li>
    <li class="breadcrumb-item"><a href="/admin/categories.php">Categories</a></li>
    <li class="breadcrumb-item">Edit</li>
  </ol>
</nav>
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit category</h4>
            </div>
            <div class="card-body">
                <form method="POST">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Id</label>
                                <input name = "id" type="text" class="form-control" value="<?php  echo $row["id"]  ?>">
                            </div>
                        </div>
                    </div>
                   
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Title</label>
                                <input name = "title" type="text" class="form-control" value="<?php  echo $row["title"]  ?>">
                            </div>
                        </div>
                    </div>
                    
                    <button name="submit" value="1" type="submit" class="btn btn-success btn-fill pull-right">Edit category</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>

