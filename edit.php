<?php
$title = "Edit Post - My Blog";
include 'header.php';
include 'functions.php';

$id = $_GET['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    update_post($id, $_POST['title'], $_POST['content']);
    header('Location: index.php');
}

$post = get_post($id);
?>

<main>
    <h2>Edit Your Post</h2>
    <form method="POST">
        <input type="text" name="title" value="<?php echo $post['title']; ?>" required><br>
        <textarea name="content" required><?php echo $post['content']; ?></textarea><br>
        <button type="submit">Update</button>
    </form>
</main>

<?php include 'footer.php'; ?>
