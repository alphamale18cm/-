<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Board</title>
</head>
<body>
    <table width="800" border="1" >
		<tr>
			<th>번호</th>
			<th>제목</th>
			<th>작성자</th>
            <th>추천</th>
            <th>조회수</th>
		</tr>
        <tbody>
        <?php
                    include "lib.php";

                    if(!$_SESSION["user"]) {
                        ?>
                        <script>
                            location.href="login.php";
                        </script>
                        <?php
                    }

                    $sql = "select * from post order by idx desc";
                    $result = mysqli_query($connect,$sql);

                    while($data = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td> <?= $data["idx"] ?> </td>
                    <td> <a href="read.php?idx=<?= $data["idx"]?>"><?= $data["title"] ?></a> </td>
                    <td> <?= $data["id"] ?> </td>
                    <td> <?= $data["like_post"] ?> </td>
                    <td><?=$data["view"] ?></td>
                </tr>
            <?php
                    }
            ?>
        </tbody>
    </table>
    <a href="create.php"><button>글쓰기</button></a>
</body>
</html>