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
	$data = mysqli_query($mysqli_connect,"select * from loan where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update_function.php">
			<table>
				<tr>			
					<td>Name</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="name" value="<?php echo $d['name']; ?>">
					</td>
				</tr>
				<tr>
					<td>Private Number</td>
					<td><input type="number" name="private_number" value="<?php echo $d['private_number']; ?>"></td>
				</tr>
                <tr>
					<td>E-Mail</td>
					<td><input type="text" name="email" value="<?php echo $d['email']; ?>"></td>
				</tr>
                <tr>
					<td>Date</td>
					<td><input type="date" name="date" value="<?php echo $d['date']; ?>"></td>
				</tr>
                <tr>
                    <td>Book Tittle</td>
                    <td><select name="id_book" id="id_book">
                            <?php
                            include 'conn.php';
                            $data = mysqli_query($mysqli_connect, "select * from book");
                            while ($d = mysqli_fetch_array($data)) {
                            ?>
                                <option value="<?php echo $d['id']; ?>"><?php echo $d['tittle']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </td>
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