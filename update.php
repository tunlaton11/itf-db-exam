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
<h1>Success!!</h1>

<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'Localhost', 'it63070224_itf', 'Kaozaa0089', 'it63070224_itf', 3306);
if (!$conn)
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$ID = $_POST['ID'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$sql = "UPDATE db_exam SET height='$height', weight='$weight' WHERE ID='$ID'";

if (mysqli_query($conn, $sql)) {
    
    echo '<div class="text-center"><a role="button" class="btn btn-secondary" href="show.php">Click</a></div>';
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

mysqli_close($conn);
?>
</body>
</html>