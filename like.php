<?php
    include "lib.php";

	$idx = $_GET['idx'];

	$query = "SELECT * FROM post WHERE idx='$idx'";
	$result = mysqli_query($connect,$query);
	$data = mysqli_fetch_array($result);

	$like = $data['like_post'] + 1;

	$query = "UPDATE post set like_post='$like' WHERE idx = '$idx'";

	mysqli_query($connect,$query);
?>
<script>
    location.href="board.php";
</script>