<?php 
    include "lib.php";

    if (isset($_POST['submit'])) {
        $id = $_POST['Id'];
        $password = $_POST['Password'];

        $sql = "insert into user (id,password) values('$id','$password')";
        $result = mysqli_query($connect,$sql);

        if($result) {
            ?>
            <script>
                alert("회원가입 성공 !");
                location.href="login.php";
            </script>
            <?php
        } else {
            ?>
            <script>
                alert("회원가입 실패!");
                
            </script>
            <?php
        }
    }
?>
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
			
			<button type="submit" name="submit" value="로그인">회원가입</button>
		</form>
	</div>
</body>
</html>