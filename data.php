<!DOCTYPE html>
<?php
//koneksi ke database
include "./koneksi.php";

//query untuk menampilkan data dari tabel user
$query = "SELECT * FROM user";
$result = mysqli_query($conn, $query);

//menampilkan data ke dalam tabel
if(mysqli_num_rows($result) > 0){
  $rows = array();
  while($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
  }
} else {
  $rows = null;
}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data USER</title>
	<body>
<div class="container">
	<h1 class="text-center my-5">DATA USERS</h1>

	<?php if($rows): ?>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>ACTION</th>
					<th>AVATAR</th>
					<th>NAME</th>
					<th>EMAIL</th>
					<th>PHONE</th>
					<th>ROLE</th>
				</tr>
			</thead>
			<tbody>
			<a href="refresh.php" class="btn btn-primary">INPUT USERr</a>
				<?php $no = 1; foreach($rows as $row): ?>
					<tr>
						<td><?php echo $no; ?></td>
						<td>
							
						<td><img src='uploads/<?php echo $row['avatar']; ?>' width='50'></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td><?php echo $row['phone']; ?></td>
						<td><?php echo $row['role']; ?></td>
					</tr>
                    <?php $no++; ?>
				<?php endforeach; ?>
			</tbody>
		</table>
	<?php else: ?>
		<p class = "text-center;">Kosong</p>
	<?php endif; ?>
</div>
</body>

</html>