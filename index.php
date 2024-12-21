<?php
$title = "Home - My Blog";
include 'header.php';
include 'functions.php';

$posts = get_all_posts();
?>

<main>
    <h2>Welcome to My Blog</h2>
    <?php while ($row = $posts->fetch_assoc()): ?>
        <h3><?php echo $row['title']; ?></h3>
        <p><?php echo $row['content']; ?></p>
        <small><?php echo $row['created_at']; ?></small>
        <br>
        <a href="edit.php?id=<?php echo $row['id']; ?>" class="button">Edit</a>
        <a href="delete.php?id=<?php echo $row['id']; ?>" class="button delete">Delete</a>
        <hr>
    <?php endwhile; ?>
</main>

<?php include 'footer.php'; ?>