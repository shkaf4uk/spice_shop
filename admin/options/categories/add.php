<?php  

    include $_SERVER['DOCUMENT_ROOT'] . '/HTML/configs/db.php';

    include $_SERVER['DOCUMENT_ROOT'] . '/admin/parts/header.php';

	if (isset($_POST["id"]) && isset($_POST["title"])) {
        $sql = "INSERT INTO `categories` (`id`, `title`) VALUES ('" . $_POST["id"] . "', '" . $_POST["title"] . "')";
		var_dump($sql);

			if ($conn -> query($sql)) {
				echo "<h2>Category added</h2>";
			  	header('Location: http://tw.local/admin/categories.php');
			} else {
				echo "<h2>Error</h2>";
			}

	}

?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/admin">Главная</a></li>
    <li class="breadcrumb-item"><a href="/admin/categories.php">Categories</a></li>
    <li class="breadcrumb-item">Add</li>
  </ol>
</nav>
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add new category</h4>
            </div>
            <div class="card-body">
                <form method="POST">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Id</label>
                                <input name = "id" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                   
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Title</label>
                                <input name = "title" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <button name="submit" value="1" type="submit" class="btn btn-success btn-fill pull-right">Add Category</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>