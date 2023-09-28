<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="stylehomepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
    <div class="datetime">
        <span id="current-time"></span>
        <span id="current-date"></span>
     </div>
     
           <div class="wrapper">
              <input type="checkbox" id="btn" hidden>
              <label for="btn" class="menu-btn">
              <i class="fas fa-bars"></i>
              <i class="fas fa-times"></i>
              </label>
              <nav id="sidebar">
                 <div class="title">
                    ตัวเลือกทำรายการ
                 </div>
                 <ul class="list-items">
                    <li><a href="http://localhost/project/Homepage.php"><i class="fas fa-home"></i>หน้าแรก</a></li>
                    <li><a href="http://localhost/project/index.php"><i class="fas fa-sliders-h"></i>จัดการคลังสินค้า</a></li>
                    <li><a href="#"><i class="fas fa-address-book"></i>Services</a></li>
                    <li><a href="#"><i class="fas fa-cog"></i>Settings</a></li>
                    <li><a href="#"><i class="fas fa-stream"></i>Features</a></li>
                    <li><a href="#"><i class="fas fa-user"></i>About us</a></li>
                    <li><a href="#"><i class="fas fa-globe-asia"></i>เปลี่ยนภาษา</a></li>
                    <li><a href="#"><i class="fas fa-envelope"></i>ติดต่อผู้ดูแลระบบ</a></li>
                 
                 </ul>
              </nav>
           </div>
    <header>
        <h1>ยินดีต้อนรับสู่</h1>
        <h2>หน้ารายการแสดงผล</h2>
    </header>
    
    <main>
        
        <section class="cards">
            <div class="card">
                <h1> จำนวนรายการสินค้าที่มี </h1>
                <p><?php include 'display_total_items.php'; ?></p>
            </div>
            
            <div class="card">
                <h2>คำสั่งซื้อทั้งหมด</h2>
                <p> - </p>
            </div>
        </section>

    <div class="menu-list">
    <table class="menu-table">
        <thead>
        <tbody>รายการสินค้าที่มี</tbody>
         <thead>
         <tr>
         <th>ID</th>
         <th>Name</th>
         <th>Quantity</th>
         <th>Price</th>
         <th>From</th>
         <th>Date&Time</th>
         </thead>
        <tr><?php include 'fetch_data_home.php'; ?></tr>
    </table>
    </div>
    </main>

    <div class="latest-product-card">
    <?php
    // Include the database connection script
    include 'database.php';

    // Query the database to fetch the latest product data (e.g., select data from inventory table)
    $sql = "SELECT * FROM inventory ORDER BY date DESC LIMIT 1";
    $result = $conn->query($sql);

    // Display the latest product data in the Latest Product Card
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo '<h2>สินค้าล่าสุด</h2>';
        echo '<p>ID: ' . $row['id'] . '</p>';
        echo '<p>Name: ' . $row['name'] . '</p>';
        echo '<p>Quantity: ' . $row['quantity'] . '</p>';
        echo '<p>Price: ' . $row['price'] . '</p>';
        echo '<p>From: ' . $row['from_location'] . '</p>';
        echo '<p>Date&Time: ' . $row['timestamp'] . '</p>';
        // เพิ่มข้อมูลเพิ่มเติมตามความต้องการ
    } else {
        echo 'No latest product found.';
    }

    // Close the database connection
    $conn->close();
    ?>
</div>

    


    <footer>
        <p>&copy; STEVIA TECHNEW (THAILAND) COMPANY LIMITED</p>
    </footer>
    <script src="javascript.js"></script>
    <script src="้homescript.js"></script>
</body>
</html>
