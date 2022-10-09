<?php
    include "lib.php";

    if (isset($_POST['submit'])) {
        $title = $_POST['title'];
        $contents = $_POST['contents'];
        $id = $_SESSION['user'];
        
        
        $sql = "insert into post (title,contents,id) values('$title','$contents','$id')";
        $result = mysqli_query($connect,$sql);
        if ($result) {
            ?>
            <script>
                location.href="board.php";
            </script>
            <?php
        }
        
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
</head>
<body>
<div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" placeholder="Enter your Name" name="title" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Contents</label>
                <input type="text" class="form-control" placeholder="Enter your Password"
                name="contents" autocomplete="off" style="height:100px;">
            </div>
            파일 : <input type="file" name="file">
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>