<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'Localhost', 'it63070224_itf', 'Kaozaa0089', 'it63070224_itf', 3306);
if (!$conn)
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$ID = $_POST['ID'];
$sql = "SELECT * FROM db_exam WHERE ID='$ID'";
$res = mysqli_query($conn, $sql);
$comment = mysqli_fetch_array($res);
?>
    <div class="container">
        <h1>Edit Data</h1>
        <form action="update.php" method="post" class="mt-4">
            <input type="hidden" name="ID" value=<?php echo $comment['ID'];?>>            
            <div class="form-group">
                <label for="inputHeight">Height</label>
                <?php
                    echo '<input type="text" name="height" id="inputHeight" class="form-control" placeholder="Edit height" value="'.$comment["height"].'">'
                ?>
            </div>
            <div class="form-group">
                <label for="inputWeight">Weight</label>
                <?php
                    echo '<input type="text" name="weight" id="inputWeight" class="form-control" placeholder="Edit weight" value="'.$comment["weight"].'">'
                ?>
            </div>
            <div class="mt-4">
                <button type="submit" class="btn btn-primary mr-1">Save</button>
                <a role="button" class="btn btn-secondary" href="show.php">Back</a>
            </div>
        </form>
    </div>
<?php
mysqli_close($conn);
?>
</body>
</html>
