<?php
include("Admin.php");
$field;
$ctrlObj=new Admin1();
$status=$_POST['status'];
if($status == "finalized")
{
	$field="finalized";
	$result=$ctrlObj->getquotesf($field);
}
else if($status == "sanctioned")
{
$field="sanctioned";
$result=$ctrlObj->getquotess($field);
}
else if($status =="ordered")
{
$field="ordered";
$result=$ctrlObj->getquoteso($field);
}

echo"<html>";
echo"<head>";
echo"<style>";
echo"table,tr,th,td
{
border: 1px solid black;
}";
echo "</style>";
echo "</head>";
echo '<table>';
echo '<tr>';
echo '<th>Quote Id</th>';
echo '<th>Date</th>';
echo '<th>Sales Associate_id</th>';
echo '<th>Customer_id</th>';
echo '<th>Notes</th>';
echo '<th>Email</th>';
echo '<th>Commission rate</th>';
echo '<th>Status</th>';
echo '<th>Postatus</th>';
echo '<th>Disc</th>';
echo '<th>Total</th>';


foreach($result as $row)
{
        echo '<tr>';
        echo '<td>'.$row['quote_id'].'</td>';
        echo '<td>'.$row['date'].'</td>';
        echo '<td>'.$row['saoc_id'].'</td>';
	echo '<td>'.$row['c_id'].'</td>';
        echo '<td>'.$row['notes'].'</td>';
        echo '<td>'.$row['email'].'</td>';
        echo '<td>'.$row['comm_rate'].'</td>';
        echo '<td>'.$row['status'].'</td>';
        echo '<td>'.$row['postatus'].'</td>';
        echo '<td>'.$row['disc'].'</td>';
        echo '<td>'.$row['total'].'</td>';


}

?>

