<?php
require_once('dbcon.php');
$id=$_GET['id'];

$total=$_GET['total'];

$ss="update branch_order_request set order_status='confirmed' where ono='$id'";
mysql_query($ss);


?>
<script>
alert("Thank you for Order Confirmation");
document.location="payment.php?ono=<?php echo $id?>&total=<?php echo $total?>";
</script>