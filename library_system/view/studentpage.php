<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Student Dashboard - Library System</title>

  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: "Segoe UI", Arial, sans-serif;
      background-color: #fdfdfd;
    }

    /* --- Sidebar --- */
    .sidebar {
      position: fixed;
      top: 0;
      left: 0;
      width: 250px;
      height: 100%;
      background-color: #24412f;
      color: white;
      padding: 20px;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
    }

    .sidebar h2 {
      margin-bottom: 20px;
      line-height: 1.4;
    }

    .sidebar button {
      background-color: #335c42;
      color: white;
      border: none;
      border-radius: 20px;
      padding: 10px;
      margin: 8px 0;
      font-size: 16px;
      cursor: pointer;
      transition: 0.3s;
    }

    .sidebar button:hover {
      background-color: #3f7553;
    }

    /* --- Top bar --- */
    .topbar {
      position: fixed;
      top: 0;
      right: 0;
      left: 250px;
      height: 60px;
      background-color: #ffffff;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
      display: flex;
      justify-content: flex-end;
      align-items: center;
      padding: 0 20px;
    }

    .logout-btn {
      background-color: #24412f;
      color: white;
      border: none;
      border-radius: 20px;
      padding: 8px 16px;
      cursor: pointer;
      font-size: 15px;
      transition: 0.3s;
    }

    .logout-btn:hover {
      background-color: #335c42;
    }

    /* --- Main content --- */
    .main-content {
      margin-left: 250px;
      margin-top: 70px;
      padding: 20px;
    }

    .card-container {
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
    }

    .card {
      flex: 1;
      min-width: 250px;
      background-color: #ccf9d5;
      border-radius: 10px;
      padding: 0;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
    }

    .card-header {
      background-color: #24412f;
      color: white;
      padding: 10px;
      border-radius: 10px 10px 0 0;
      font-weight: bold;
      text-align: center;
    }

    .card-body {
      padding: 30px;
      text-align: center;
      font-size: 20px;
      color: #24412f;
    }

    @media (max-width: 768px) {
      .sidebar {
        width: 200px;
      }

      .topbar {
        left: 200px;
      }

      .card-container {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <h2>Welcome to Library System!<br>User</h2>
    <button href="/view/borrowpage.php">Borrow</button>
    <button href="reservepage.php">Reservation</button>
    <button href="penaltypage.php"> Penalties </button>
  </div>

  <!-- Top bar with logout -->
  <div class="topbar">
    <form action="logout.php" method="post">
      <button type="submit" class="logout-btn">Logout</button>
    </form>
  </div>

  <!-- Main content -->
  <div class="main-content">
    <div class="card-container">
      <div class="card">
        <div class="card-header">Total Books Borrowed</div>
        <div class="card-body">3</div>
      </div>

      <div class="card">
        <div class="card-header">Total Book Reservation</div>
        <div class="card-body">2</div>
      </div>

      <div class="card">
        <div class="card-header">Total Penalties</div>
        <div class="card-body">₱50</div>
      </div>
    </div>
  </div>

</body>
</html>
