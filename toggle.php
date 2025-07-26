<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "UPDATE users SET status = 1 - status WHERE id = $id";
    $conn->query($sql);
}
