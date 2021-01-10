<?php
require('config/db.php');

$id = $_GET['id'];
$query = "SELECT * FROM `post` WHERE id = $id";
$result = mysqli_query($conn, $query);
$post = mysqli_fetch_assoc($result);
mysqli_free_result($result);
mysqli_close($conn);
?>

<?php include('inc/header.php') ?>
<div class="container mt-5">
	<?php include('inc/errors.php'); ?>
	<h1>Post #<?php  echo $id; ?></h1>
	<div class="jumbotron">
		<h3><?php echo $post['title']; ?></h3>
		<p class="lead"><?php echo $post['body']; ?></p>
		<hr class="my-4">
	</div>
</div>
<?php include('inc/footer.php') ?>