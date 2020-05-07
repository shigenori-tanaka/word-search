<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>word search</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="stylesheet/stylesheet.css">
    </head>
    <body>
        <?php 
            require_once("DBconnect.php");
            require_once("template/tmp.header.php");
        ?>
        <?php $search = $PDO->query("SELECT * FROM words WHERE title LIKE '%{$_POST["search"]}%' "); ?>            
        
        <article style="width:95%; margin:0 auto; ">
            <?php while($searchArray = $search->fetch()): ?>
                <p style="word-wrap:break-word;"> <?php echo htmlspecialchars($searchArray["title"]); ?> </p>
                <p style="word-wrap:break-word; white-space: pre-wrap;" > <?php echo htmlspecialchars($searchArray["body"]); ?> </p>
                <a class="btn btn-outline-success btn-sm" href="edit.php?id=<?php echo $searchArray["id"] ?>" role="button" style="margin-right: 10px;">編集</a>
                <form action="delete.php?id=<?php echo $searchArray["id"] ?>" onsubmit="return confirm_test()" method="POST" style="display:inline-block;">
                    <button class="btn btn-outline-secondary btn-sm" type="submit">削除</button>
                </form>
            <?php endwhile; ?>
        </article>
    </body>
</html>



