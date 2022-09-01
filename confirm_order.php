<?php
require_once('dbcon.php');
$u=$_GET['u'];
$ono=$_GET['ono'];
$qty=$_GET['qty'];
$bname=$_GET['bname'];
$total=$_GET['total'];

$ss="update dealer_order_request set order_status='confirmed' where order_no='$ono'";
mysql_query($ss);


?>
<script>
alert("Thank you for Order Confirmation");
document.location="payment.php?ono=<?php echo $ono?>&total=<?php echo $total?>";
</script>