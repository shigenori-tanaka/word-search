<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>word search</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body>
        <?php 
            require_once("DBconnect.php");
            require_once("template/tmp.header.php");
        ?>
        <?php $search = $PDO->query("SELECT * FROM words WHERE title = 'エディット' "); 
             
        ?>            
        

        <?php while($searchArray = $search->fetch()): ?>
            <p><?php echo $searchArray["title"]; ?></p>
            <p><?php echo $searchArray["body"]; ?></p>
            <p><?php echo $searchArray["category"]; ?></p>
            <hr>
        <?php endwhile; ?>
    </body>
</html>



