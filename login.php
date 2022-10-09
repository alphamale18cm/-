<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>
	<div class="sign-up">
		<h1>Login</h1>
		<form method="post">
			<label for = "id">Id</label>
			<input type="text" name="Id" id = "id">
			<label for = "password">Password</label>
			<input type="password" name="Password" id = "password">
			
			<button type="submit" name="submit" value="로그인">로그인</button>
		</form>
	</div>
</body>
</html>
<?php 
    include "lib.php";

    if (isset($_POST['submit'])) {
        $id = $_POST['Id'];
        $password = $_POST['Password'];

        $sql = "select * from user where id='$id' and password='$password'";
        $result = mysqli_query($connect,$sql);
		$data = mysqli_fetch_array($result);

        if($data) {
            ?>
			<script>
				alert("Success");
				location.href="board.php";
			</script>
		<?php
            $_SESSION['user'] = $id;
        ?>
        <script>
            
        </script>
        <?php
        } else {
            ?>
			<script>
				alert("Error");
			</script>
			<?php
        }
    }
?>