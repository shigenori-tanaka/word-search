
<nav class="navbar sticky-top navbar-expand-lg navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="../index.php" style="font-size:25px; font-style:italic;">Programming Word Search</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="../input.php">Create New</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">category</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="HTML&CSS.php">HTML & CSS</a>
                    <a class="dropdown-item" href="PHP.php">PHP</a>
                    <a class="dropdown-item" href="mysql.php">MySQL</a>
                    <a class="dropdown-item" href="bootstrap.php">bootstrap</a>
                    <a class="dropdown-item" href="Heroku.php">Heroku</a>
                    <a class="dropdown-item" href="other.php">その他</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">sort</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="asc.php">昇順</a>
                    <a class="dropdown-item" href="desc.php">降順</a>
                    <a class="dropdown-item" href="#">日付昇順</a>
                    <a class="dropdown-item" href="#">日付降順</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="../search.php" method="POST">
            <input class="form-control mr-sm-2" type="search" name="search" placeholder="タイトルで検索" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>