<?php
    include "lib.php";

    if(isset($_GET['idx'])) {
        $idx = $_GET['idx'];
        $sql = "select * from post where idx=$idx";

        $result = mysqli_query($connect,$sql);
        $data = mysqli_fetch_array($result);

        if(!isset($_COOKIE['view'.$idx])) {
            $view = $data['view'] + 1;
		    $sql = "UPDATE post set view='$view' WHERE idx='$idx'";
		    mysqli_query($connect,$sql);
            setcookie('view'.$idx,$idx,time() + 3600);
        }
        
    }
    else {
        die("idx 값을 넣어주세요 :)");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title'] ?></title>
</head>
<body>
    <div class="container">
        <h1>PHP 게시판</h1>
        <p><strong>번호 : <?= $data['idx'] ?></strong></p>
        <p><strong>제목 : <?= $data['title'] ?></strong> </p>
        <p><strong>내용 : <?= $data['contents'] ?></strong> </p>

        <a href="delete.php?idx=<?= $data['idx'] ?>"><strong>Delete</strong></a>
        <a href="like.php?idx=<?= $data['idx'] ?>"><strong>Like</strong></a>
    </div>
</body>
</html>