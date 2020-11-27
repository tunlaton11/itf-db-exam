<html>

<head>
    <title>DB exam 63070224</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
<style>
h1 {text-align: center;}
</style>
    <?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'Localhost', 'it63070224_itf', 'Kaozaa0089', 'it63070224_itf', 3306);
if (!$conn)
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM db_exam');
?>
    <div class="container">
        <h1>DB exam 63070224</h1>
        <table class="table table-bordered table-success">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Height</th>
                    <th scope="col">Weight</th>
                    <th scope="col">Bmi</th>
                    <th scope="col">Action</th></tr>
            </thead>
            <?php
while($row = mysqli_fetch_array($res))
{
?>
            <tbody>
                <tr>
                    <td><?php echo $row['name'];?>
    </div>
    </td>
    <td><?php echo $row['height'];?></td>
    <td><?php echo $row['weight'];?></td>
    <td><?php echo $row['bmi'];?></td>
<td>
                    <div class="d-inline">                        
                        <form action="edit_form.php" method="post" class="d-inline">
                            <input type="hidden" name="ID" value=<?php echo $row['ID'];?>>
                            <button type="submit" class="btn btn-sm btn-danger mb-1">Update</button>
                        </form>
                    </div>
                </td>

    </tr>
    </tbody>
    <?php
}
mysqli_close($conn);
?>
    </table>
    <div class="text-center">
        <a href="form.html" class="btn btn-primary">Insert</a>
    </div>
    </div>
</body>

</html>