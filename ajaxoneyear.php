<?php
error_reporting(0);
?>
<input class="form-control" type="date" placeholder="End Date" name="end_date" value="<?php echo date('Y-m-d', strtotime($_GET['startdate']. ' + 1 year')); ?>" readonly >
