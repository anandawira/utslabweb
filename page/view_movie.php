<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./asset/style/view_movie.css">
</head>
<body>
<div id="viewMovie">
<?php
        include 'koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi,"select * from movie where id='$id'");
        while($d = mysqli_fetch_array($data)){
		?>
            <h2><?php echo $d['title']; ?> (<?php echo $d['category']; ?>) (<?php echo $d['date']; ?>)</h2>
            <h3>Posted By: <?php echo $d['posted_by']; ?></h3>
            <p><?php echo $d['detail']; ?></p>
            
            <!-- <form method="post" action="./page/add_movie_script.php">
                <table>
                    <tr>
                        <td>Categori</td>
                        <td>
                            <input type="hidden" name="id" value="<?php echo $d['id']; ?>">        
                            <input type="text" name="category" value="<?php echo $d['category']; ?>" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Title</td>
                        <td><input type="text" name="title" value="<?php echo $d['title']; ?>" required></td>
                    </tr>
                    <tr>
                        <td>Detail</td>
                        <td><textarea name="detail" rows="3" required><?php echo $d['detail']; ?></textarea></td>
                    </tr>
                    <tr>
                        <td>Posted By</td>
                        <td><input type="text" name="postby" value="<?php echo $d['posted_by']; ?>" required></td>
                    </tr>
                    <tr>
                        <td>Photo</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td align="right"><button type="submit">SAVE</button></td>
                    </tr>
                </table> -->
            </form><?php 
            }
            ?>
</div>

</body>
</html>