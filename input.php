<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>word search</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="stylesheet.css">
    </head>
        <body>
        <!-- header -->
        <?php require_once("template/tmp.header.php") ?>
        <!-- end header -->

        <!-- 入力欄 -->
        <div class="container">
            <div class="rowr">
                <div class="col text-center">
                <!-- row 中央寄せ -->
                    <form action="input-do.php" method="POST">
                        <h3>タイトル</h3>
                        <input class="input" type="text" name="title">
                        <h3>内容</h3>
                        <textarea name="body"></textarea>
                        <h3>カテゴリ</h3>
                        <select class="input-category" name="category">
                            <option value="php">php</option>
                            <option value="mysql">mysql</option>
                            <option value="bootstrap">bootstrap</option>
                        </select>
                        <button type="submit" class="btn btn-outline-success my-2 my-sm-0">登録</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- end 入力欄 -->

    </body>
</html>