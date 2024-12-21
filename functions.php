<?php
function db_connect() {
    $host = 'localhost';
    $user = 'root'; // Default user for local servers
    $password = ''; // Default password is empty
    $dbname = 'blog';

    $conn = new mysqli($host, $user, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

function get_all_posts() {
    $conn = db_connect();
    $sql = "SELECT * FROM posts ORDER BY created_at DESC";
    $result = $conn->query($sql);
    $conn->close();

    return $result;
}

function get_post($id) {
    $conn = db_connect();
    $sql = "SELECT * FROM posts WHERE id=$id";
    $result = $conn->query($sql);
    $conn->close();

    return $result->fetch_assoc();
}

function create_post($title, $content) {
    $conn = db_connect();
    $sql = "INSERT INTO posts (title, content) VALUES ('$title', '$content')";
    $conn->query($sql);
    $conn->close();
}

function update_post($id, $title, $content) {
    $conn = db_connect();
    $sql = "UPDATE posts SET title='$title', content='$content' WHERE id=$id";
    $conn->query($sql);
    $conn->close();
}

function delete_post($id) {
    $conn = db_connect();
    $sql = "DELETE FROM posts WHERE id=$id";
    $conn->query($sql);
    $conn->close();
}
?>
