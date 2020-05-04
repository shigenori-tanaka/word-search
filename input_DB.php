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

            $input_DB = $PDO->prepare("INSERT INTO words SET title=?, body=?, category=?, created_at=NOW()");
            $input_DB-> execute(array($_POST["title"], $_POST["body"], $_POST["category"]));
        ?>
        
    </body>
</html>