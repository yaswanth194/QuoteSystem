<?php
include('QAController.php');
$quote_id=$_GET['quoteid'];
//echo $quote_id;

$_SESSION['controller']=new quoteApprover();

$quote=$_SESSION['controller']->getQuote($quote_id);

echo'<table>';	

echo'<h3>Below are the Quote Details:</h3>';	
foreach($quote as $var)
{	
 echo'<tr><td>Quote ID:</td><td>'.$var['quote_id'].'</td></tr>';
 echo'<tr><td>Sales Assisciate ID:</td><td>'.$var['saoc_id'].'</td></tr>';
 echo'<tr><td>Customer ID:</td><td>'.$var['c_id'].'</td></tr>';
 //echo'<tr><td>Customer Name:</td><td>'.$var[]
 echo'<tr><td>Status:</td><td>'.$var['status'].'</td></tr>';
   
}
echo'</table>';
//echo'<form action="approver3.php"> </form>';
foreach($quote as $var)
{

	//echo $var['quote_id'];
    echo'<a href="../addDiscount.php/?quote='.$var['quote_id'].'">Click to add additional discount</a>';
    echo'<br>';
    echo "convert quote to purchase order";

}

?>