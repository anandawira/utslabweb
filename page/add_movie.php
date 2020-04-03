<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./asset/style/add_movie.css">
</head>
<body>
    <div id="addMovie">
        <h2>Add Movie</h2>
        <form method="post" action="./page/add_movie_script.php">
            <table>
                <tr>
                    <td>Categori</td>
                    <td><input type="text" name="category" required></td>
                </tr>
                <tr>
                    <td>Title</td>
                    <td><input type="text" name="title" required></td>
                </tr>
                <tr>
                    <td>Detail</td>
                    <td><textarea name="detail" rows="3" required></textarea></td>
                </tr>
                <tr>
                    <td>Posted By</td>
                    <td><input type="text" name="postby"required></td>
                </tr>
                <tr>
                    <td>Photo</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td align="right"><button type="submit">SAVE</button></td>
                </tr>
            </table>
        </form>
    </div>
    
</body>
</html>