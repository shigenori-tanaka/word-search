<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>word search</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <?php 
            require_once("DBconnect.php");
            require_once("template/tmp.header.php");
        ?>

        <?php $index_DB = $PDO->query("SELECT * FROM words ORDER BY created_at DESC"); ?>
        <article style="width:95%; margin:0 auto; ">
        <?php while($index = $index_DB->fetch()): ?>
            <p style="word-wrap:break-word;"> <?php echo $index["title"]; ?> </p>
            <p style="word-wrap:break-word;"> <?php echo $index["body"]; ?> </p>
            <a class="btn btn-outline-success btn-sm" href="#" role="button" style="margin-right: 10px;">編集</a>
            <a class="btn btn btn-outline-secondary btn-sm" href="#" role="button">削除</a>
            <hr>
        <?php endwhile ?>
        </article>
            
        

    </body>
</html>