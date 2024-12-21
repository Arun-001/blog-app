<?php
$title = "Create New Post - My Blog";
include 'header.php';
include 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    create_post($_POST['title'], $_POST['content']);
    header('Location: index.php');
}
?>

<main>
    <h2>Create a New Post</h2>
    <form method="POST">
        <input type="text" name="title" placeholder="Title" required><br>
        <textarea name="content" placeholder="Content" required></textarea><br>
        <button type="submit">Submit</button>
    </form>
</main>

<?php include 'footer.php'; ?>
