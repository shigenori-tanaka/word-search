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
        <!-- header -->
        <?php require_once("template/tmp.header.php") ?>
        <!-- end header -->

        <!-- 入力欄 -->
        <div class="container">
            <div class="row">
                <div class="col text-center">
                <!-- row 中央寄せ -->
                    <form action="input_DB.php" method="POST">
                        <h3>タイトル</h3>
                        <input class="input" type="text" name="title" required>
                        <h3>内容</h3>
                        <textarea name="body" required></textarea>
                        <h3>カテゴリ</h3>
                        <select class="input-category" name="category">
                            <option value="HTML&CSS">HTML & CSS</option>
                            <option value="php">php</option>
                            <option value="mysql">mysql</option>
                            <option value="bootstrap">bootstrap</option>
                            <option value="Heroku">Heroku</option>
                            <option value="その他">その他</option>
                        </select>
                        <button type="submit" class="btn btn-outline-success btn-sm">登録</button>
                        <a class="btn btn-outline-primary btn-sm" href="#" role="button">一覧に戻る</a>
                    </form>
                </div>
            </div>
        </div>
        <!-- end 入力欄 -->

    </body>
</html>