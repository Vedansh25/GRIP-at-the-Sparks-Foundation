<?php
session_start();
include('connect.php');

$var_name=$_SESSION["default"];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// collect value of input field
$name1 = $_POST['transfer_to'];
if (empty($name1)) {
echo "Name is empty";
}
// collect value of input field
$name2 = $_POST['transfer_from'];
if (empty($name2)) {
echo "Name is empty";
}
$amount = $_POST['amount'];
if (empty($amount)) {
echo "Amount is empty";
}
}
$sql3="Select * from customers  Where Name='$name2'";
$query_run = mysqli_query($connection,$sql3);

while($row = mysqli_fetch_assoc($query_run))
{
if($amount>$row["Current_Balance"])
{
header("Location: result.php?var_name=".$var_name);
exit;
}
}
$sql="UPDATE customers SET Current_Balance=Current_Balance -'$amount'  Where Name='$name2'";
$query_run1 = mysqli_query($connection,$sql);
while($row1 = mysqli_fetch_assoc($query_run1))
{
echo "current_balance: " . $row1["Current_Balance"];
}

$sql2="UPDATE customers SET Current_Balance=Current_Balance +'$amount'  Where Name='$name1'";
$query_run2 = mysqli_query($connection,$sql2);
while($row2 = mysqli_fetch_assoc($query_run2))
{
echo "amount: " . $row2["Amount"];
}

$sql4="Insert into transaction(transfer_to,transfer_from,amount)
Values('$name1','$name2','$amount' )";
$query_run5 = mysqli_query($connection,$sql4);


$var_name="1";

header("Location: result.php?var_name=".$var_name);
echo "Transaction Successful";
?>
