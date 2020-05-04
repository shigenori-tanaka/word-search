<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>word search</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body>
        <?php 
            require_once("DBconnect.php");
            require_once("template/tmp.header.php");

            $edit_DB = $PDO->prepare("SELECT * FROM words WHERE id=?");
            $edit_DB-> execute(array($_GET["id"]));
            $edit = $edit_DB->fetch();
        ?>
        <!-- 入力欄 -->
        <div class="container">
            <div class="row">
                <div class="col text-center">
                <!-- row 中央寄せ -->
                    <h2 style="color:lightgreen;">-- Edit --</h2>
                    <form action="input_DB.php" method="POST">
                        <h3>タイトル</h3>
                        <input class="input" type="text" name="title" value="<?php echo $edit['title']?>">
                        <h3>内容</h3>
                        <textarea name="body"><?php echo $edit['body']?></textarea>
                        <h3>カテゴリ</h3>
                        <select class="input-category" name="category"?>">
                            <option><?php echo $edit['category']?></option>
                            <option value="HTML&CSS">HTML & CSS</option>
                            <option value="php">php</option>
                            <option value="mysql">mysql</option>
                            <option value="bootstrap">bootstrap</option>
                        </select>
                        <button type="submit" class="btn btn-outline-success btn-sm">登録</button>
                        <a class="btn btn-outline-secondary btn-sm" href="#" role="button">削除</a>
                        <a class="btn btn-outline-primary btn-sm" href="index.php" role="button">一覧に戻る</a>
                    </form>
                </div>
            </div>
        </div>
        <!-- end 入力欄 -->


