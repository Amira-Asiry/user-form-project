<!DOCTYPE html>
<html>
<head>
  <title>User Form</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js" defer></script>
</head>
<body>

  <form method="POST" action="process.php">
    Name: <input type="text" name="name" required>
    Age: <input type="number" name="age" required>
    <input type="submit" value="Submit">
  </form>

  <br><br>

  <table border="1">
    <tr>
      <th>ID</th><th>Name</th><th>Age</th><th>Status</th><th>Action</th>
    </tr>
    <?php
    include 'db.php';
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['age']}</td>
                <td>{$row['status']}</td>
                <td><button onclick='toggleStatus({$row['id']})'>Toggle</button></td>
              </tr>";
    }
    ?>
  </table>

</body>
</html>
