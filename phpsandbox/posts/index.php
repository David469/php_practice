<?php
require('config/db.php');

$query = 'SELECT * FROM `post`';
$result = mysqli_query($conn, $query);
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);
?>

<?php include('inc/header.php') ?>
<div class="container mt-5">
	<?php include('inc/errors.php'); ?>
	<h1>Posts</h1>
	<?php foreach($posts as $post) { ?>
		<div class="jumbotron">
			<h3><?php echo $post['title']; ?></h3>
			<p class="lead"><?php echo $post['body']; ?></p>
			<hr class="my-4">
			<a class="btn btn-primary btn-lg" href="post.php?id=<?php echo $post['id'] ?>" role="button">Learn more</a>
		</div>
	<?php } ?>
</div>
<?php include('inc/footer.php') ?>