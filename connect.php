<?php
$host = "dpg-d0e74ch5pdvs73aqmnr0-a.oregon-postgres.render.com";
$port = "5432";
$dbname = "logistic2";
$user = "logistic2_user";
$password = "RnOMkUBoAX06KJ7crw3mBgl68pN3ISyf";

try {
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname;";
    $pdo = new PDO($dsn, $user, $password);

    $sql = "SELECT id, name, email, info FROM user_info";
    $stmt = $pdo->query($sql);

    echo "<table border='1' cellpadding='8'>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Service</th></tr>";

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $service = explode(" -", $row['info'])[0];
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$service}</td>
              </tr>";
    }

    echo "</table>";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

<h1>Tables</h1>
<?php

// * tables
$query = $pdo->query("SELECT table_name FROM information_schema.tables WHERE table_schema = 'public'");

while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    echo $row['table_name'] . "<br>";
}
?>

<!-- <h1>user_info, cant unhash this unfortunately</h1> -->
<?php

// select * from user_info 
// $query = $pdo->query("SELECT * FROM user_info");

// Loop, display each row
// while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
//     echo "ID: " . $row['id'] . "<br>";
//     echo "Name: " . $row['name'] . "<br>";
//     echo "Email: " . $row['email'] . "<br>";
//     echo "Password: " . $row['password'] . "<br>";
//     echo "Info: " . $row['info'] . "<br>";
//     echo "Bid: " . $row['bid'] . "<br>";
//     echo "<hr>";  // line to separate output
// }
?>


<h1>frame wikipedia(example)</h1>
<div style="padding: 5%;">
  <!-- <iframe src="https://www.wikipedia.org" width="100%" height="500px"></iframe> -->
  <iframe src="https://www.wikipedia.org" width="100%" height="400px"></iframe>
</div>
<h1>Public domain</h1>
<div style="padding: 5%;">
  <!-- <iframe src="https://www.wikipedia.org" width="100%" height="500px"></iframe> -->
  <iframe src="https://logistics-2-kft6.onrender.com" width="100%" height="300px"></iframe>
</div>
<h1>user domain</h1>
<div style="padding: 5%;">
  <!-- <iframe src="https://www.wikipedia.org" width="100%" height="500px"></iframe> -->
  <iframe src="https://logistics-1-0er9.onrender.com" width="100%" height="300px"></iframe>
</div>
<h1>admin domain</h1>
<div style="padding: 5%;">
  <!-- <iframe src="https://www.wikipedia.org" width="100%" height="500px"></iframe> -->
  <iframe src="https://admin-domain.onrender.com" width="100%" height="300px"></iframe>
</div>

<?php
$host = "dpg-d0e74ch5pdvs73aqmnr0-a.oregon-postgres.render.com";
$port = "5432";
$dbname = "logistic2";
$user = "logistic2_user";
$password = "RnOMkUBoAX06KJ7crw3mBgl68pN3ISyf";

    try {
        $dsn = "pgsql:host=$host;port=$port;dbname=$dbname;";
        $pdo = new PDO($dsn, $user, $password);

        // Get the first user ordered by primary key (assume id)
        $sql = "SELECT * FROM user_info ORDER BY id ASC LIMIT 1";
        $stmt = $pdo->query($sql);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            echo "<h2>User Details</h2>";
            echo "ID: " . $row['id'] . "<br>";
            echo "Name: " . $row['name'] . "<br>";
            echo "Email: " . $row['email'] . "<br>";
            echo "Password: " . $row['password'] . "<br>";
            echo "Info: " . $row['info'] . "<br>";
            echo "Bid: " . $row['bid'] . "<br>";

            // If 'img' is a path or URL
            // echo "<img src='" . $row['img'] . "' width='300' alt='User Image'><br>";
        } else {
            echo "No user found.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    ?>

    <h1>Image > migrate again to store blob instead</h1>


<?php
$host = "dpg-d0e74ch5pdvs73aqmnr0-a.oregon-postgres.render.com";
$port = "5432";
$dbname = "logistic2";
$user = "logistic2_user";
$password = "RnOMkUBoAX06KJ7crw3mBgl68pN3ISyf";

try {
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname;";
    $pdo = new PDO($dsn, $user, $password);

    $sql = "SELECT * FROM approved_procurement ORDER BY id DESC";
    $stmt = $pdo->query($sql);

    echo "<table border='1' cellpadding='8'>";
    echo "<tr><th>ID</th><th>PRC Request ID</th><th>Supplier ID</th><th>Agreement Text</th><th>Offer Price</th></tr>";

    // table output as a row
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['prc_request_id']}</td>
                <td>{$row['supplier_id']}</td>
                <td>{$row['agreement_text']}</td>
                <td>{$row['offer_price']}</td>
              </tr>";
    }

    echo "</table>";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
