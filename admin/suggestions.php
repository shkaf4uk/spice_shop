<?php

    $page = "suggestions";

    include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';

    include $_SERVER['DOCUMENT_ROOT'] . '/admin/parts/header.php';
    
?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/admin">Главная</a></li>
    <li class="breadcrumb-item">Suggestions</li>
  </ol>
</nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card strpied-tabled-with-hover">
                <div class="card-header ">
                    <h4 class="card-title">Products</h4>
                </div>
                <div class="card-body table-full-width table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                        </thead>
                        <tbody>
                            <?php
                                
                                $sql = "SELECT * FROM suggestion";
                                $result = $conn -> query($sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                        <tr>
                                            <td><?php echo $row ["id"] ?></td>
                                            <td><?php echo $row ["name"] ?></td>
                                            <td><?php echo $row ["email"] ?></td>
                                            <td><?php echo $row ["message"] ?></td>
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