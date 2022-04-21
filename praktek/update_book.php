<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
<?php
	include 'conn.php';
	$id = $_GET['id'];
	$data = mysqli_query($mysqli_connect,"select * from book where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update_function.php">
			<table>
				<tr>			
					<td>Tittle</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="tittle" value="<?php echo $d['tittle']; ?>">
					</td>
				</tr>
				<tr>
					<td>Author</td>
					<td><input type="text" name="author" value="<?php echo $d['author']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
</body>
</html>