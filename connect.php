<h4>table: market_userinfo</h4>
<?php
$host = "dpg-d0e74ch5pdvs73aqmnr0-a.oregon-postgres.render.com";
$port = "5432";
$dbname = "logistic2";
$user = "logistic2_user";
$password = "RnOMkUBoAX06KJ7crw3mBgl68pN3ISyf";

try {
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname;";
    $pdo = new PDO($dsn, $user, $password);

    $sql = "SELECT id, name, email, info FROM market_userinfo;";
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
<br>

<h3>Users</h3>
<?php
// select * from user_info 
$query = $pdo->query("SELECT * FROM market_userinfo");

// Loop, display each row, scrollable
echo "<div style='max-height: 400px; overflow-y: auto; width: 70%;'>";

while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    echo "ID: " . $row['id'] . "<br>";
    echo "Name: " . $row['name'] . "<br>";
    echo "Email: " . $row['email'] . "<br>";
    echo "Password: " . $row['password'] . "<br>";
    echo "Info: " . $row['info'] . "<br>";
    echo "Bid: " . $row['bid'] . "<br>";
    echo "<hr>";
}

echo "</div>";



?>

