<?php
require_once "connection.php";
if (isset($_GET['id']) && is_numeric($_GET['id']))
{
$id = $_GET['id'];

$result = mysqli_query($conn,"DELETE FROM products WHERE productid=$id")
or die(mysqli_error());

header("Location:product table.php");
}
else

{?>
<script>
alert("SORRYYY");
window.location.href='product table.php?Unsuccess';
</script>
<?php
}
?>
