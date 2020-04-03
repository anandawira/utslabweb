<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./asset/style/dashboard.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5fd5318cab.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div id="jumbotron">
            <i style="font-size: 80px;" class="fas fa-film"></i>
            <h1>VIDEO CENTER<br>ONLINE</h1>
        </div>
    </header>

    <main>
        <aside>
            <nav>
                <div id="navlinks">
                    <a href="dashboard.php"><p>Home</p></a>
                    <a href="#"><p>New Movie</p></a>
                    <a href="#"><p>Comedy</p></a>
                    <a href="#"><p>Horror</p></a>
                    <a href="#"><p>Thriller</p></a>
                    <a href="#"><p>Romantic</p></a>
                </div>
            </nav>
        </aside>
        <div id="content">
            <?php
                if(isset($_GET['page'])){
                    
                    if($_GET['page'] == "add"){
                        include("./page/add_movie.php");
                    }else if($_GET['page'] == "edit"){
                        $_GET['id']=$_GET['id'];
                        include("./page/edit_movie.php");
                    }else if($_GET['page'] == "view"){
                        $_GET['id']=$_GET['id'];
                        include("./page/view_movie.php");
                    }
                }else{
                    include("./page/table_movie.php");
                }
	        ?>
        </div>
    </main>
    <footer>
        <p>&copy; Copyright 2020, Ananda Wiradharma</p>
    </footer>
</body>
</html>