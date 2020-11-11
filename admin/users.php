<?php

    $page = "users";

    include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';

    include $_SERVER['DOCUMENT_ROOT'] . '/admin/parts/header.php';
    
?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/admin">Главная</a></li>
    <li class="breadcrumb-item">Users</li>
  </ol>
</nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card strpied-tabled-with-hover">
                <div class="card-header ">
                    <h4 class="card-title">Users</h4>

                </div>
                <div class="card-body table-full-width table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Address</th>
                        </thead>
                        <tbody>
                            <?php

                                $sql_u = "SELECT * FROM users";
                                $result_u = $conn -> query($sql_u);
                                while ($row_u = mysqli_fetch_assoc($result_u)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row_u ["id"] ?></td>
                                            <td><?php echo $row_u ["name"] ?></td>
                                            <td><?php echo $row_u ["phone"] ?></td>
                                            <td><?php echo $row_u ["email"] ?></td>
                                            <td><?php echo $row_u ["address"] ?></td>
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