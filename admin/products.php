<?php

    $page = "products";

    include $_SERVER['DOCUMENT_ROOT'] . '/HTML/configs/db.php';

    include $_SERVER['DOCUMENT_ROOT'] . '/admin/parts/header.php';
    
?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/admin">Главная</a></li>
    <li class="breadcrumb-item">Products</li>
  </ol>
</nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card strpied-tabled-with-hover">
                <div class="card-header ">
                    <h4 class="card-title">Products</h4>
                    <a href = "options/products/add.php" type="submit" class="btn btn-primary m-2">Add product</a>

                </div>
                <div class="card-body table-full-width table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Options</th>
                        </thead>
                        <tbody>
                            <?php
                                
                                $sql = "SELECT * FROM products";
                                $result = $conn -> query($sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $sql_c = "SELECT * FROM categories WHERE id = " . $row ["category_id"];
                                    $result_c = $conn -> query($sql_c);
                                    $row_c = mysqli_fetch_assoc($result_c);
                                ?>
                                        <tr>
                                            <td><?php echo $row ["id"] ?></td>
                                            <td><?php echo $row ["title"] ?></td>
                                            <td><?php echo $row ["description"] ?></td>
                                            <td><?php echo $row_c ["title"] ?></td>
                                            <td><?php echo $row ["costs"] ?></td>
                                            <td><img  style="width: 50px"src="<?php echo $row ["image"] ?>"></td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href = "options/products/edit.php?id=<?php echo $row ["id"] ?>" type="button" class="btn btn-secondary">Edit</a>
                                                    <a href = "options/products/delete.php?id=<?php echo $row ["id"] ?>"type="button" class="btn btn-secondary">Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php

                                }

                            ?> 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

<?php

    include $_SERVER['DOCUMENT_ROOT'] . '/admin/parts/footer.php';

?>