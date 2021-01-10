<?php
	$conn = mysqli_connect('localhost', 'root', 'root', 'post_db');

	if(mysqli_connect_errno()){
		$error = "Failed to connect database: ".mysqli_connect_errno();
	}