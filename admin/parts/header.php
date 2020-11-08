<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="/admin/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/admin/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Admin
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="/admin/assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="/admin/assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="/admin/assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item <?php if ($page == "home"){echo 'active' ; } ?>">
           <a class="nav-link" href="/admin">
                <i class="material-icons">home</i>
                <p>Home</p>
            </a>
          </li> 
          <li class="nav-item <?php if ($page == "categories"){echo 'active' ; } ?>">
              <a class="nav-link" href="/admin/categories.php">
                  <i class="material-icons">article</i>
                  <p>Categories</p>
              </a>
          </li>
          <li class="nav-item <?php if ($page == "products"){echo 'active' ; } ?>">
              <a class="nav-link" href="/admin/products.php">
                  <i class="material-icons">shopping_basket</i>
                  <p>Products</p>
              </a>
          </li>
          <li class="nav-item <?php if ($page == "users"){echo 'active' ; } ?>">
              <a class="nav-link" href="/admin/users.php">
                  <i class="material-icons">account_circle</i>
                  <p>Users</p>
              </a>
          </li>
          <li class="nav-item <?php if ($page == "orders"){echo 'active' ; } ?>">
              <a class="nav-link" href="/admin/orders.php">
                  <i class="material-icons">content_paste</i>
                  <p>Orders</p>
              </a>
          </li>
          <li class="nav-item <?php if ($page == "suggestions"){echo 'active' ; } ?>">
              <a class="nav-link" href="/admin/suggestions.php">
                  <i class="material-icons">question_answer</i>
                  <p>Suggestions</p>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#">
                  <i class="material-icons">vpn_key</i>
                  <p>Log out</p>
              </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <div class="content">
        <div class="container-fluid">