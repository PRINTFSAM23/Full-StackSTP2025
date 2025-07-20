<style>
    body {
      margin: 0;
      padding: 0;
      overflow-x: hidden;
      font-family: 'Segoe UI', sans-serif;
    }

    .sidebar {
      position: fixed;
      top: 0;
      left: 0;
      height: 100vh;
      width: 220px;
      background-color: #f9f9ff;
      border-right: 1px solid #eee;
      padding-top: 30px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.03);
    }

    .sidebar .logo {
      text-align: center;
      margin-bottom: 40px;
    }

    .sidebar .logo img {
      width: 40px;
      border-radius: 12px;
    }

    .sidebar .logo h5 {
      margin-top: 10px;
      font-size: 16px;
      color: #444;
      font-weight: 600;
    }

    .sidebar a {
      display: flex;
      align-items: center;
      padding: 12px 20px;
      color: #555;
      text-decoration: none;
      font-size: 14px;
      transition: all 0.2s ease;
      border-radius: 10px;
      margin: 4px 12px;
    }

    .sidebar a:hover {
      background-color: #e7e0ff;
      color: #6a1b9a;
    }

    .sidebar a i {
      margin-right: 12px;
      font-size: 15px;
    }

    .sidebar .dropdown-menu {
      background-color: #f5f5fc;
      border: none;
      margin-left: 20px;
    }

    .sidebar .dropdown-menu li a {
      color: #666;
      font-size: 13px;
      padding: 6px 16px;
    }

    .sidebar .dropdown-menu li a:hover {
      background-color: #e0d4f7;
      color: #4a148c;
      border-radius: 8px;
    }

    .main-content {
      margin-left: 220px;
      padding: 20px;
    }

    .no-bullets {
      list-style-type: none;
      padding-left: 0;
    }

</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

<div class="container-fluid">


  <div class="row">
    <div class="col-sm-2 background">
      <div class="sidebar">
        <div class="logo">
          <img src="images/logo.png" alt="Florify Logo">
          <h5>Florify Admin</h5>
        </div>

        <a href="dashboard.php"><i class="fas fa-home"></i> Dashboard</a>

        <div class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fas fa-user"></i> Users</a>
          <ul class="dropdown-menu no-bullets">
          <li><a href="view_user.php"><i class="fas fa-users"></i> View Users</a></li>
          <li><a href="add_user.php"><i class="fas fa-user-plus"></i> Add New Users</a></li>
          </ul>

        </div>

        <a href="#"><i class="fas fa-box"></i> Orders</a>

        <div class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fas fa-tags"></i> Products</a>
          <ul class="dropdown-menu no-bullets">
            <li><a href="view_products.php"><i class="fas fa-eye"></i> View Products</a></li>
            <li><a href="add_products.php"><i class="fas fa-plus-square"></i> Add New Products</a></li>
          </ul>
        </div>

        <a href="#"><i class="fas fa-box-open"></i> Orders</a>
        <a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
      </div>
    </div>

    <div class="col-sm-10">
