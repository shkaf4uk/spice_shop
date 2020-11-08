<?php

    $page = "orders";

    include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';

    include $_SERVER['DOCUMENT_ROOT'] . '/admin/parts/header.php';

?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/admin">Главная</a></li>
    <li class="breadcrumb-item">Orders</li>
  </ol>
</nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card strpied-tabled-with-hover">
                <div class="card-header ">
                    <h4 class="card-title">Orders</h4>
                    <!--<a href = "options/categories/add.php" type="submit" class="btn btn-primary m-2">Add category</a>-->

                </div>
                <div class="card-body table-full-width table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Products</th>
                            <th>Всего</th>
                            <th>Статус</th>
                            <th>Настройки</th>
                        </thead>
                        <tbody>
                            <?php

                                $sql = "SELECT * FROM orders";
                                $result = $conn -> query($sql);

                                while ($row = mysqli_fetch_assoc($result)) {
                                	$sql_user = "SELECT * FROM users WHERE id = " . $row ["user_id"];

								    $result_user = $conn -> query($sql_user);
								    $user = mysqli_fetch_assoc($result_user);
								    $basket = json_decode($row["products"], true);
                                    ?>
                                        <tr>
                                            <td><?php echo $user ["id"] ?></td>
                                            <td><?php echo $user ["name"] ?></td>
                                            <td><?php echo $user ["email"] ?></td>
                                            <td><?php echo $user ["phone"] ?></td>
                                            <td><?php echo $user ["address"] ?></td>
                                            <td>
                                                <?php for ($i = 0; $i < count($basket["basket"]); $i++) { 
                                                    $sql_p = "SELECT * FROM products WHERE id = ". $basket["basket"][$i]["product_id"];
                                                    $result_p = $conn->query($sql_p);

                                                    $product = mysqli_fetch_assoc($result_p);

                                                    echo $product["title"] . ' - ' . $basket["basket"][$i]["count"] . ' - ' . $basket["basket"][$i]["count"] * $product["costs"] . 'грн;' . '<br>';

                                                } ?>
                                                
                                            </td>
                                            <td><?php echo $row ["total_price"] ?></td>
                                            <td id="status#<?php echo $row['id'] ?>"><?php echo $row ["status"] ?></td>
                                                <td><button id="changeProductStatus" onclick="changeStatus(this,<?php echo $row["id"]?>)" type="button" class="btn btn-success">Send to client</button></td>
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