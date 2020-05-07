<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>word search</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <?php 
            require_once("../DBconnect.php");
            require_once("tmp.headerResult.php");
        ?>
        <!-- category "HTML&CSS"を取得 -->
        <?php $htmlDB = $PDO->query("SELECT * FROM words WHERE category='HTML&CSS' "); ?>
        <!-- ここまで category "HTML&CSS"を取得 -->
        <article style="width:95%; margin:0 auto; ">
            <?php while($html = $htmlDB->fetch()): ?>
                <p style="word-wrap:break-word;"> <?php echo htmlspecialchars($html["title"]); ?> </p>
                <p style="word-wrap:break-word; white-space: pre-wrap;" > <?php echo htmlspecialchars($html["body"]); ?> </p>
                <p> <?php echo $html["category"]; ?> </p>
                <a class="btn btn-outline-success btn-sm" href="../edit.php?id=<?php echo $html["id"] ?>" role="button" style="margin-right: 10px;">編集</a>
                <form action="../delete.php?id=<?php echo $html["id"] ?>" onsubmit="return confirm_test()" method="POST" style="display:inline-block;">
                    <button class="btn btn-outline-secondary btn-sm" type="submit">削除</button>
                </form>
                <hr>
            <?php endwhile ?>
        </article>

        <script>
            function confirm_test() {
            var select = confirm("本当に削除しますか？\n「OK」で削除\n「キャンセル」で中止");
            return select;
            }
        </script>
    </body>
</html>