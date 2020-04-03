<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./asset/style/table_movie.css">
</head>
<body>
    <div id="tableMovie">
        <a href="dashboard.php?page=add"><p>Add New</p></a>

        <table border="1">
		<tr>
			<th>ID</th>
			<th>Date</th>
			<th>Category</th>
			<th>Title</th>
            <th>Detail</th>
            <th>Posted By</th>
            <th>Modification</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from movie");
		while($d = mysqli_fetch_array($data)){
?>
			<tr>
				<td style="text-align: center;"><?php echo $no++; ?></td>
				<td><?php echo $d['date']; ?></td>
				<td><?php echo $d['category']; ?></td>
				<td><?php echo $d['title']; ?></td>
				<td><?php echo $d['detail']; ?></td>
				<td><?php echo $d['posted_by']; ?></td>
				<td>
					<a href="dashboard.php?page=view&id=<?php echo $d['id']; ?>">VIEW</a>
                    <span>|</span>
                    <a href="dashboard.php?page=edit&id=<?php echo $d['id']; ?>">UPDATE</a>
                    <span>|</span>
					<a href="./page/delete_movie_script.php?id=<?php echo $d['id']; ?>">DELETE</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
    </div>
</body>
</html>