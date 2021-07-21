<?php
session_start();
include('connect.php');
if($_GET)
{
$x= $_GET["var_name"];
}		 
echo '<script type="text/javascript">
my();
</script>';
?>
<script type="text/javascript">
var simple = '<?php echo $x; ?>';
if(simple=="1")
{
alert("Transaction Successful!");
}
else
{
alert("Invalid Transaction!");
}
</script>