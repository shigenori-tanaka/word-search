<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>word search</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="../stylesheet2.css">
    </head>
    <body>
        <?php 
            require_once("DBconnect.php");
            require_once("template/tmp.header.php");

            $input_DB = $PDO->prepare("INSERT INTO words SET title=?, body=?, category=?, created_at=NOW()");
            $input_DB-> execute(array($_POST["title"], $_POST["body"], $_POST["category"]));
        ?>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2 style="color:lightgreen;">-- Created!! --</h2>
                    <h4>タイトル</h4>
                    <p><?php echo $_POST["title"];?></p>
                    <h4>内容</h4>
                    <p><?php echo $_POST["body"];?></p>
                    <h4>カテゴリ</h4>
                    <p><?php echo $_POST["category"];?></p>
                    <a class="btn btn-outline-primary btn-sm" href="index.php" role="button">一覧に戻る</a>
                </div>
            </div>
        </div>
    </body>
</html>