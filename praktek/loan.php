<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
</head>
<body>
	<ul>
		<li><a href="index.php">Book</a> </li>
		<li><a href="loan.php">Loan</a> </li>
	</ul>
	<a href="add_loan.php">add</a>
    <table border="1px">
        <tr>
            <td>No</td>
            <td>Name</td>
            <td>Private Number</td>
            <td>E-Mail</td>
            <td>Date</td>
            <td>Book</td>
            <td>action</td>
        </tr>
        <?php 
		include 'conn.php';
		$no = 1;
		$data = mysqli_query($mysqli_connect,"select * from loan");
		while($d = mysqli_fetch_array($data)){
			?>
        <tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['name']; ?></td>
				<td><?php echo $d['private_number']; ?></td>
				<td><?php echo $d['email']; ?></td>
				<td><?php echo $d['date']; ?></td>
				<td><?php echo $d['id_book']; ?></td>
				<td>
					<a href="update_loan.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="d_book.php?id=<?php echo $d['id']; ?>">DELETE</a>
				</td>
			</tr>
			<?php 
		}
		?>
    </table>    
</body>
</html>