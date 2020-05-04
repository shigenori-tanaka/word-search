<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>word search</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="stylesheet2.css">
    </head>
    <body>
        <?php 
            require_once("DBconnect.php");
            require_once("template/tmp.header.php");

            $delete_DB = $PDO->prepare("DELETE FROM words WHERE id=?");
            $delete_DB-> execute(array($_GET["id"]));
        ?>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2 style="color:red;">-- delete completed!! --</h2>
                    <a class="btn btn-outline-success my-2 my-sm-0" href="index.php" role="button">一覧に戻る</a>
                </div>
            </div>
        </div>

    </body>
</html>