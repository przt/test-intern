<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form input</title>
</head>

<body>
    <table>
        <form method="post" action="loan_process.php">
            <table>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Private Number</td>
                    <td><input type="number" name="private_number"></td>
                </tr>
                <tr>
                    <td>E-Mail</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>Date</td>
                    <td><input type="date" name="date"></td>
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
                    <td><input type="submit" value="submit"></td>
                </tr>
            </table>
        </form>
    </table>

</body>

</html>